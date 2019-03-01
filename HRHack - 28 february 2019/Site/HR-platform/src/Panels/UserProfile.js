import React from 'react';

import Chart from 'chart.js'

import { arrayCards } from './ArrayCards';
import { getHistory, newEmployee } from './Functions';
import { cards } from './DataCards'
import { dic } from './DictSteps'


class UserProfile extends React.Component {
	state = {
		cards: cards,
		steps: []
	}

	componentWillMount() {
		getHistory().then((e) => this.setState({ steps: e }));
	}

	componentDidMount() {
		const user = 1
		let steps = Array.from(new Set(this.state.cards.map(card => {return card.step}))).sort()
		let steps_me = {}
		let steps_other = {}
		let steps_unique = {}

		steps.map(step => {
			for (let i in this.state.cards) {
				let id = this.state.cards[i].step
				if (step === id) {
					if (this.state.cards[i].user === user) {
						if (steps_me[step]) {
							steps_me[step] ++
						} else {
							steps_me[step] = 1
						}
					} else {
						if (steps_other[step]) {
							steps_other[step] ++
						} else {
							steps_other[step] = 1
						}

						if (id in steps_unique) {
							steps_unique[id].add(this.state.cards[i].user)
						} else {
							steps_unique[id] = new Set([this.state.cards[i].user])
						}
					}
				}
			}
		})

		let x_me = []
		let x_other = []

		steps.map(step => {
			if (step in steps_me) {
				x_me.push(steps_me[step])
			} else {
				x_me.push(0)
			}
		})

		steps.map(step => {
			if (step in steps_other) {
				x_other.push(steps_other[step])
			} else {
				x_other.push(0)
			}
		})

		let i = 0
		steps.map(step => {
			x_other[i] /= Array.from(steps_unique[step]).length
			i ++
		})

		// График 1

		let ctx = document.getElementById('chart1').getContext('2d')

		new Chart(ctx, {
			type: 'line',
			data: {
				labels: steps,
				datasets: [{
					label: 'Попытки пользователя по степам',
					data: x_me,
					backgroundColor: 'rgba(255, 99, 132, 0.2)',
					borderColor: 'rgb(255, 99, 132)',
					borderWidth: 1
				}, {
					label: 'Среднее количество попыток других пользователей по степам',
					data: x_other,
					backgroundColor: 'rgba(255, 159, 64, 0.2)',
					borderColor: 'rgb(255, 159, 64)',
					borderWidth: 1
				}]
			},

			options: {
				title: {
					display: true,
					text: 'Попыток на одно решение',
					fontSize: 40
				}
			},
		})

		// График 2

		ctx = document.getElementById('chart2').getContext('2d')

		new Chart(ctx,{
			type: 'doughnut',
			data: {
				labels: ['Экономика', 'Программирование', 'Хакатоны'],
				datasets: [{
					data: [0.4, 0.35, 0.25],
					backgroundColor: [
						'rgba(255, 99, 132, 0.2)',
						'rgba(255, 159, 64, 0.2)',
						'rgba(255, 205, 86, 0.2)',
						'rgba(75, 192, 192, 0.2)',
						'rgba(54, 162, 235, 0.2)',
						'rgba(153, 102, 255, 0.2)',
						'rgba(201, 203, 207, 0.2)'
					],
					borderColor: [
						'rgb(255, 99, 132)',
						'rgb(255, 159, 64)',
						'rgb(255, 205, 86)',
						'rgb(75, 192, 192)',
						'rgb(54, 162, 235)',
						'rgb(153, 102, 255)',
						'rgb(201, 203, 207)'
					],
					borderWidth: 1
				}]
			},
			options: {
				title: {
					display: true,
					text: 'Пройдено материала по областям знаний',
					fontSize: 40
				}
			}
		})

		// График 3

		ctx = document.getElementById('chart3').getContext('2d')

		new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ['Октябрь', 'Ноябрь', 'Декабрь', 'Январь', 'Февраль'],
				datasets: [{
					data: [54, 56, 48, 72, 108],
					label: 'минуты',
					backgroundColor: [
						'rgba(255, 99, 132, 0.2)',
						'rgba(255, 159, 64, 0.2)',
						'rgba(255, 205, 86, 0.2)',
						'rgba(75, 192, 192, 0.2)',
						'rgba(54, 162, 235, 0.2)',
						'rgba(153, 102, 255, 0.2)',
						'rgba(201, 203, 207, 0.2)'
					],
					borderColor: [
						'rgb(255, 99, 132)',
						'rgb(255, 159, 64)',
						'rgb(255, 205, 86)',
						'rgb(75, 192, 192)',
						'rgb(54, 162, 235)',
						'rgb(153, 102, 255)',
						'rgb(201, 203, 207)'
					],
					borderWidth: 1
				}]
			},
			options: {
				title: {
					display: true,
					text: 'Время на прохождение степов в месяц',
					fontSize: 40
				},
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true
						}
					}]
				}
			}
		})

		// График 4

		ctx = document.getElementById('chart4').getContext('2d')

		new Chart(ctx, {
			type: 'polarArea',
			data: {
				labels: ['Вязание', 'Биология', 'Машинное обучение', 'Экология', 'Геология'],
				datasets: [{
					data: [54, 56, 48, 72, 108],
					label: 'минуты',
					backgroundColor: [
						'rgba(255, 99, 132, 0.2)',
						'rgba(255, 159, 64, 0.2)',
						'rgba(255, 205, 86, 0.2)',
						'rgba(75, 192, 192, 0.2)',
						'rgba(54, 162, 235, 0.2)',
						'rgba(153, 102, 255, 0.2)',
						'rgba(201, 203, 207, 0.2)'
					],
					borderColor: [
						'rgb(255, 99, 132)',
						'rgb(255, 159, 64)',
						'rgb(255, 205, 86)',
						'rgb(75, 192, 192)',
						'rgb(54, 162, 235)',
						'rgb(153, 102, 255)',
						'rgb(201, 203, 207)'
					],
					borderWidth: 1
				}]
			},
			options: {
				title: {
					display: true,
					text: 'Уникальные показатели в областях',
					fontSize: 40
				},
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true
						}
					}]
				}
			}
		})
    }

	render() {
		return (
			<div id="UserProfile">
				<div className="title">Tensegrity</div>
				<div className="container">
					<div className="sidebar">
						<button onClick={() => { this.props.onUpdatePanel('CardList')}} className="btn">Назад</button>
						<div className="content-profile">
							<img src={arrayCards[this.props.idUser].image} className="card-image"/>
							<div className="card-info">
								<div className="card-name">{arrayCards[this.props.idUser].name + ' ' + arrayCards[this.props.idUser].surname}</div>
								<div className="card-phone">{arrayCards[this.props.idUser].phone}</div>
								<div className="card-mail">{arrayCards[this.props.idUser].mail}</div>
							</div>
							<button className="btn">Связаться</button>
						</div>
					</div>
					<div className="content">
						<br /><hr /><br />
						<canvas id="chart4" height="210" style={ {maxWidth: '90%'} }></canvas>
						<br /><hr /><br />
						<canvas id="chart2" height="210" style={ {maxWidth: '90%' } }></canvas>
						<br /><hr /><br />
						<canvas id="chart3" height="210" style={ {maxWidth: '90%'} }></canvas>
						<br /><hr /><br />
						<canvas id="chart1" height="210" style={ {maxWidth: '90%'} }></canvas>
						<br /><hr /><br />
						<div className="steps-list-profile">
							{this.state.steps.map(step =>
							<div className="step" key={ Math.random() }>
								<h1>
									{ dic[step[0]] }
								</h1>
								Время: { step[2] }
							</div>)}
						</div>
					</div>
				</div>
			</div>
		);
	}
}


export default UserProfile;
