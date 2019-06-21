import React from 'react';
import { Link } from 'react-router-dom'


import { data } from './data'

import '../style.css';


class Map extends React.Component {
	constructor (props) {
		super(props)
		this.state = {
			balance: 100,
			panel: 'find',
			time: null,
			scooterCurrent: 0,
            center: [30.3165, 59.9392],
			coordinates: { lat: null, long: null },
			scooters: [[30.339220, 59.913066]]
		}
		this.onChangePanel = this.onChangePanel.bind(this);
		this.onGeolocation = this.onGeolocation.bind(this);
		this.onUpdateScooter = this.onUpdateScooter.bind(this);
	}

    componentDidMount() {
		localStorage.setItem('scooters', JSON.stringify(this.state.scooters));

		var mapboxgl = require('mapbox-gl/dist/mapbox-gl.js');
        mapboxgl.accessToken = 'pk.eyJ1IjoibWlrZS1wZXRyb3YiLCJhIjoiY2p4MW1idnI2MGFnczQ5cWZtcHExYXVucSJ9.R5eaAB5PePMxt7dM9PEFqg';
        var map = new mapboxgl.Map({
            container: 'mapbox',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: this.state.center,
			zoom: 12
        });

		document.getElementById('btn-now').addEventListener('click', function() {
			setTimeout(function() {
				let coordinates = JSON.parse(localStorage.getItem('coordinates'));
				map.flyTo({
					center: coordinates,
					zoom: 15
				});

				new mapboxgl.Marker({color:'#e20074'})
				.setLngLat(coordinates)
				.addTo(map);

			}, 1000);
		});

        map.on('load', function () {

			var layers = map.getStyle().layers;
			var firstSymbolId;
			for (var i = 0; i < layers.length; i++) {
			    if (layers[i].type === 'symbol') {
			        firstSymbolId = layers[i].id;
			        break;
			    }
			}

			map.addLayer({
				'id': 'areas-fill',
				'type': 'fill',
				'source': {
					'type': 'geojson',
					'data': data
				},
				'layout': {},
				'paint': {
					'fill-color': '#e20074',
					'fill-opacity': 0.5
				}
			}, firstSymbolId);

			map.on('click', 'areas-fill', function (e) {
				new mapboxgl.Popup()
				.setLngLat(e.lngLat)
				.setHTML(e.features[0].properties.name)
				.addTo(map);
			});

			let scooters = JSON.parse(localStorage.getItem('scooters'));
			for(let i = 0; i < scooters.length; i++) {
				let scooters = JSON.parse(localStorage.getItem('scooters'));
				let coordinates = scooters[i];
				let point = 'scooter#'+i;
				let img = 'https://i.ibb.co/Q9Bq7x8/scooter.png'

				map.loadImage(img, function(error, image) {
					if (error)
						throw error;
					map.addImage(point, image);
					map.addLayer({
						"id": point,
						"type": "symbol",
						"source": {
							"type": "geojson",
							"data": {
								"type": "FeatureCollection",
								"features": [
									{
										"type": "Feature",
										"geometry": {
											"type": "Point",
											"coordinates": coordinates
										}
									}
								]
							}
						},
						"layout": {
							"icon-image": point,
							"icon-size": 0.06
						}
					});
				});

				map.on('click', point, function (e) {
					let scooters = JSON.parse(localStorage.getItem('scooters'));
					let coordinates = scooters[i];
					let description = 'Scooter_' + i;

					map.flyTo({
						center: coordinates,
						zoom: 15
					});

					new mapboxgl.Popup()
					.setLngLat(coordinates)
					.setHTML(description)
					.addTo(map);
				});

				map.on('mouseenter', point, function () {
					map.getCanvas().style.cursor = 'pointer';
				});

				map.on('mouseleave', point, function () {
					map.getCanvas().style.cursor = '';
				});
			}
		});
    }

	onChangePanel(_panel) {
		this.setState({ panel: _panel });
		if(_panel === 'book') {
			this.setState({ time: '5:00' });
			let _time = 300;
			let timer1 = setInterval(() => {
				if(this.state.panel === 'book') {
					_time = _time - 1;
					let _sec = _time;
					let _min = Math.floor(_sec / 60);
					_sec %= 60;
					this.setState({ time: _min + ':' + _sec });
				} else {
					clearInterval(timer1)
				};
			}, 1000);
		}
		if(_panel === 'start') {
			this.setState({ time: '0:00' });
			let _time_start = 0;
			let timer2 = setInterval(() => {
				if(this.state.panel === 'start') {
					_time_start = _time_start + 1;
					let _sec = _time_start;
					let _min = Math.floor(_sec / 60);
					_sec %= 60;
					this.setState({ time: _min + ':' + _sec });
				} else {
					clearInterval(timer2)
				};
			}, 1000);
		}
	}

	onGeolocation() {
		window.navigator.geolocation.getCurrentPosition((position) => {
			let _lat = position.coords.latitude;
			let _long = position.coords.longitude;
			let coordinates = [_long,_lat];
			localStorage.setItem('coordinates', JSON.stringify(coordinates));
			this.setState({ coordinates: { lat: _lat, long: _long } });
		});
	}

	onUpdateScooter(_panel) {
		let _panel_current = Number(this.state.scooterCurrent);
		if(_panel === 'previous') {
			_panel_current = _panel_current - 1;
		} else if(_panel === 'next') {
			_panel_current = _panel_current + 1;
		}
		this.setState({ scooterCurrent: _panel_current });
	}

    render() {
        return (
			<div className="map">
				<div className="panel panel-left">
					<div onClick={()=>{this.onChangePanel('profile')}}>
						<i className="fas fa-user"></i>
					</div>
					<div onClick={()=>{this.onChangePanel('find')}}>
						<i className="fas fa-search"></i>
					</div>
					<div onClick={()=>{this.onGeolocation()}} id="btn-now">
						<i className="fas fa-location-arrow"></i>
					</div>
				</div>
				<div className="panel panel-right">
					<div>
						{ this.state.balance } <i className="fas fa-dice-d6"></i>
					</div>
				</div>
				<div id="mapbox"></div>
				<div id="package">
					{this.state.panel === 'find' &&
						<React.Fragment>
							{this.state.scooterCurrent === 0 ?
								<div className="disabled">
									<i className="fas fas-lg-left fa-angle-left"></i>
								</div> :
								<div onClick={()=>{this.onUpdateScooter('previous')}}>
									<i className="fas fas-lg-left fa-angle-left"></i>
								</div>
							}
							{this.state.scooterCurrent === 0 &&
								<React.Fragment>
									<div>
										<img src="./img/scooter.png" />
									</div>
									<div className="scooter-info">
										<div id="scooter-number">
											<i className="fas fa-hashtag"></i> 225403
										</div>
										<div id="scooter-name">
											Xiaomi
										</div>
										<div id="scooter-energy">
											<i className="fas fa-bolt"></i> 100 %
										</div>
									</div>
									<div id="scooter-play" onClick={()=>{this.onChangePanel('book')}}>
										BOOK
									</div>
								</React.Fragment>
							}
							{this.state.scooterCurrent === 1 &&
								<React.Fragment>
									<div>
										<img src="./img/area.png" />
									</div>
									<div className="scooter-info">
										<div id="scooter-number">
											<i className="fas fa-hashtag"></i> 1
										</div>
										<div id="scooter-name">
											Area
										</div>
										<div id="scooter-energy">
											~ 2 min
										</div>
									</div>
									<div id="scooter-play" onClick={()=>{this.onChangePanel('book')}}>
										BOOK
									</div>
								</React.Fragment>
							}
							{this.state.scooterCurrent === 2 &&
								<React.Fragment>
									<div>
										<img src="./img/area.png" />
									</div>
									<div className="scooter-info">
										<div id="scooter-number">
											<i className="fas fa-hashtag"></i> 2
										</div>
										<div id="scooter-name">
											Area
										</div>
										<div id="scooter-energy">
											~ 5 min
										</div>
									</div>
									<div id="scooter-play" onClick={()=>{this.onChangePanel('book')}}>
										BOOK
									</div>
								</React.Fragment>
							}
							{this.state.scooterCurrent === 3 &&
								<React.Fragment>
									<div>
										<img src="./img/area.png" />
									</div>
									<div className="scooter-info">
										<div id="scooter-number">
											<i className="fas fa-hashtag"></i> 3
										</div>
										<div id="scooter-name">
											Area
										</div>
										<div id="scooter-energy">
											~ 10 min
										</div>
									</div>
									<div id="scooter-play" onClick={()=>{this.onChangePanel('book')}}>
										BOOK
									</div>
								</React.Fragment>
							}
							{this.state.scooterCurrent === 3 ?
								<div className="disabled">
									<i className="fas fas-lg-right fa-angle-right"></i>
								</div> :
								<div onClick={()=>{this.onUpdateScooter('next')}}>
									<i className="fas fas-lg-right fa-angle-right"></i>
								</div>
							}
						</React.Fragment>
					}
					{this.state.panel === 'profile' &&
						<React.Fragment>
							<div className="scooter-block">
								<div className="scooter-profile">
									Mike Petrov
								</div>
								<div className="scooter-profile">
									Trip: 5
								</div>
								<div className="scooter-profile">
									4.2 / 5 <i className="fas fa-star"></i>
								</div>
							</div>
						</React.Fragment>
					}
					{this.state.panel === 'book' &&
						<React.Fragment>
							<div className="scooter-block">
								<div id="scooter-time">
									{ this.state.time }
								</div>
								<div>
									<input id="scooter-input" placeholder="Finish point (discount)"/>
								</div>
								<div id="scooter-play" onClick={()=>{this.onChangePanel('start')}}>
									START
								</div>
							</div>
						</React.Fragment>
					}
					{this.state.panel === 'start' &&
						<React.Fragment>
							<div className="scooter-block">
								<div id="scooter-time">
									{ this.state.time }
								</div>
								<div id="scooter-play" onClick={()=>{this.onChangePanel('finish')}}>
									Finish
								</div>
							</div>
						</React.Fragment>
					}
					{this.state.panel === 'finish' &&
						<React.Fragment>
							<div className="scooter-block">
								<div id="scooter-time">
									{ this.state.time }
								</div>
								<div id="scooter-play" onClick={()=>{this.onChangePanel('find')}}>
									Ok
								</div>
							</div>
						</React.Fragment>
					}
				</div>
             </div>
        );
    }
}

export default Map;
