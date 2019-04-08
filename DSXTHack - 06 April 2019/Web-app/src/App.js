import React from 'react';
import { serverResponse, sendOrder, getOrders, acceptOrders } from './request';
import * as am4core from "@amcharts/amcharts4/core";
import * as am4charts from "@amcharts/amcharts4/charts";
import am4themes_animated from "@amcharts/amcharts4/themes/animated";
import am4themes_material from "@amcharts/amcharts4/themes/material";
import Ethreum from './Ethereum'

import { addOffer, getOffer, swapOffer } from './methods'


am4core.useTheme(am4themes_animated);

class App extends React.Component {
    constructor (props) {
		super(props)
		this.state = {
			arrayOrders: null,
            id: null,
            name: 1,
            quantity: null,
            price: null,
            type: 'buy',
            status: ''
		}
		this.onSendOrder = this.onSendOrder.bind(this)
	}

    onSendOrder() {
        if(this.state.quantity !== null && this.state.price !== null){
            let data = serverResponse(sendOrder(this.state.name, this.state.quantity, this.state.price, this.state.type))

            // let re = data[0]
            // console.log(re)

            addOffer(data[0], this.state.type == 'sell', this.state.name+0, this.state.quantity+0, this.state.price).then(res => {
                console.log(res)
            })

            console.log(data, this.state.type == 'sell', this.state.name, this.state.quantity+0, this.state.price+0)


            //

            // if (data[1]) {
            //     swapOffer(data[0], data[1]).then(res => {
            //         console.log(res)
            //     })
            // }

            //

            let resed = true

            let timerId = setInterval(function() {
                getOffer(data[0]).then(res => {
                    if (res > 0 && resed) {
                        // this.setState({ status: serverResponse(acceptOrders(data)), arrayOrders: serverResponse(getOrders()) });
                        serverResponse(acceptOrders(data[0]))
                        document.getElementById('status').innerHTML = 'Success'
                        document.location.reload(true);
                        resed = false
                    }
                })
              }, 2000);

            setTimeout(function() {
                clearInterval(timerId)
              }, 300000)

            // addOffer(2, true, 2, 12, 50).then(res => console.log(res))
        }
	}

    componentWillMount() {
        this.setState({ arrayOrders: serverResponse(getOrders()) });
    }

    componentDidMount() {
        //chart line
        am4core.useTheme(am4themes_material);
        am4core.useTheme(am4themes_animated);

        let chart1 = am4core.create("chartdiv1", am4charts.XYChart);
        chart1.paddingRight = 20;

        chart1.data = generateChartData(this.state.arrayOrders[0]);

        let dateAxis = chart1.xAxes.push(new am4charts.DateAxis());
        dateAxis.baseInterval = {
          "timeUnit": "minute",
          "count": 1
        };
        dateAxis.tooltipDateFormat = "HH:mm:ss, d MMMM";

        let valueAxis1 = chart1.yAxes.push(new am4charts.ValueAxis());
        valueAxis1.tooltip.disabled = true;

        let series1 = chart1.series.push(new am4charts.LineSeries());
        series1.dataFields.dateX = "date";
        series1.dataFields.valueY = "visits";
        series1.tooltipText = "Price: [bold]{valueY}[/]";
        series1.fillOpacity = 0.3;

        chart1.cursor = new am4charts.XYCursor();
        chart1.cursor.lineY.opacity = 0;
        chart1.scrollbarX = new am4charts.XYChartScrollbar();
        chart1.scrollbarX.series.push(series1);

        chart1.events.on("datavalidated", function () {
            dateAxis.zoom({start:0.8, end:1});
        });

        chart1.fill = am4core.color("blue").lighten(0.5);


        function generateChartData(orders) {
            let chartData = [];
            let n = orders.length;
            let firstDate = new Date();
            firstDate.setMinutes(firstDate.getDate() - n);
            let visits;
            for (let i = 0; i < n; i++) {
                let newDate = new Date(firstDate);

                let h = orders[i].time[0] + orders[i].time[1];
                let m = orders[i].time[3] + orders[i].time[4];
                let s = orders[i].time[6] + orders[i].time[7];
                newDate.setMinutes(parseInt(m, 10));
                newDate.setHours(parseInt(h, 10));
                newDate.setSeconds(parseInt(s, 10));

                visits = orders[i].price;
                chartData.push({
                    date: newDate,
                    visits: visits
                });
            }
            return chartData;
        }
    }

    render() {
        return (
            <React.Fragment>
                <Ethreum offerId={ this.state.id } />
                <div className="general">
                    <div className="top">
                        <div className="form-order">
                            <div className="form">
                                <div id="status"></div>
                                <select className="input" type="text" defaultValue="usd" name="name" placeholder="Наименование" onChange={(e)=>{this.setState({ name: e.target.value })}}>
                                    <option value="1">USD</option>
                                    <option value="2">EUR</option>
                                    <option value="3">BTC</option>
                                </select>
                                <input className="input" type="number" name="quantity" placeholder="Quantity" onChange={(e)=>{this.setState({ quantity: e.target.value })}} required />
                                <input className="input" type="number" name="price" placeholder="Price" onChange={(e)=>{this.setState({ price: e.target.value })}} required />
                                <select className="input" type="text" defaultValue="buy" name="type" placeholder="Тип" onChange={(e)=>{this.setState({ type: e.target.value })}}>
                                    <option value="buy">Buy</option>
                                    <option value="sell">Sell</option>
                                </select>
                                <button className="btn" onClick={()=>{this.onSendOrder()}}>Send</button>
                            </div>
                        </div>
                        <div className="chart">
                            <div id="chartdiv1"></div>
                        </div>
                        <div className="order">
                            <table>
                                <thead>
                                    <tr className="legenda">
                                        <td>Price</td>
                                        <td>Quantity</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    {this.state.arrayOrders[1].map(item =>
                                        <tr className="sell" key={item.id}>
                                            <td>{item.price}</td>
                                            <td>{item.quantity}</td>
                                        </tr>
                                    )}
                                    {this.state.arrayOrders[2].map(item =>
                                        <tr className="buy" key={item.id}>
                                            <td>{item.price}</td>
                                            <td>{item.quantity}</td>
                                        </tr>
                                    )}
                                </tbody>
                           </table>
                        </div>
                    </div>
                </div>
            </React.Fragment>
        );
    }
}

export default App;
