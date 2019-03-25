import React from 'react'

import {appId, appCode} from '../keys'
import './style.css'

import Map from '../Map'
import Tinder from '../Tinder'
import Add from '../Add'
import Button from '../Button'
import Weather from '../Weather'
import Wardrobe from '../Wardrobe'
import Bag from '../Bag'


export default class App extends React.Component {
	constructor (props) {
		super(props);
		this.state = {
			maps: true,
			weather: true,
		}
	}

	render() {
		return (
			<React.Fragment>
				<div class="main_title">Wensy</div>
				<Weather />
				<Tinder onUpdateButton={this.onUpdateButton}/>
				<Add />
				<div onClick={this.handlerWin} id="btn-correct"><Button class="btn btn-center" >Выбрать</Button></div>
				<div onClick={ this.handlerOpen }>
					<Button class="btn btn-wardrobe" ><i class="fas fa-tshirt"></i></Button>
				</div>
				{/*
				<div onClick={ this.handlerOpenBag }>
					<Button class="btn"><i class="fas fa-suitcase-rolling"></i></Button>
				</div>*/}
				{
					!this.state.maps && <Map
						app_id={ appId }
						app_code={ appCode }
						lat={ 59.9392 }
						lng={ 30.3165 }
						zoom={ 11 }
					/>
				}
				<div class="category"></div>
				<Wardrobe>
					<div onClick={ this.handlerClose }>
						<div class="card_content_wardrobe">
							<div class="card_text_wardrobe" >Кофта</div>
		                    <img src="https://i.ibb.co/sHNmPt5/q2.jpg" />
		                </div>
						<div class="card_content_wardrobe">
							<div class="card_text_wardrobe" >Кофта</div>
		                    <img src="https://i.ibb.co/54BSy1v/photo-2019-03-24-06-34-27.jpg" />
		                </div>
						<div class="card_content_wardrobe">
							<div class="card_text_wardrobe" >Куртка</div>
		                    <img src="https://i.ibb.co/JmDkyGs/photo-2019-03-24-06-34-19.jpg" />
		                </div>
						<div class="card_content_wardrobe">
							<div class="card_text_wardrobe" >Штаны</div>
		                    <img src="https://i.ibb.co/k6zWLJt/3.jpg" />
		                </div>
						<div class="card_content_wardrobe">
							<div class="card_text_wardrobe" >Штаны</div>
		                    <img src="https://i.ibb.co/s2c3yJH/2.jpg" />
		                </div>
						<div class="card_content_wardrobe">
							<div class="card_text_wardrobe" >Штаны</div>
		                    <img src="https://i.ibb.co/sJSG5x3/1.jpg" />
		                </div>
						<Button class="btn btn-wardrobe close" >Закрыть</Button>
					</div>
				</Wardrobe>

				{/*<Bag>
					<input type="data" placeholder="Введите дату"/>
					<input type="data" placeholder="Введите дату"/>
					<input type="data" placeholder="Введите дату"/>
					<input type="data" placeholder="Введите дату"/>
					<input type="data" placeholder="Введите дату"/>
				</Bag>*/}
			</React.Fragment>
		)
	}

	handlerWin = () => {
		try {
			if(document.getElementsByClassName('card_block').length === 1) {
				document.getElementsByClassName('card_block')[0].style = 'transform: translate3d(0px, 0px, 0px);'
			} else {
				let num = document.getElementsByClassName('card_block').length
				document.getElementsByClassName('card_block')[num-1].style = 'transform: translate3d(0px, 0px, 0px);'
				for(let i=0; i<num-1; i=i+1) {
					document.getElementById(i).remove()
				}
			}
		} catch {
			document.getElementById('weather').innerHTML = '<img height=200px width=330px src="https://memepedia.ru/wp-content/uploads/2019/03/mem-kot-tom-19.jpg">'
			document.getElementById('weather').style = 'left: 20px;'
		}
	}

	handlerOpen = () => {
		document.getElementById('root').style = 'position: unset;'
		document.getElementById('wardrobe').style = 'display: unset;'
	}

	handlerClose = () => {
		document.getElementById('root').style = 'position: fixed;'
		document.getElementById('wardrobe').style = 'display: none;'
	}

	handlerOpenBag = () => {
		document.getElementById('root').style = 'position: unset;'
		document.getElementById('bag').style = 'display: unset;'
	}

	handlerCloseBag = () => {
		document.getElementById('root').style = 'position: fixed;'
		document.getElementById('bag').style = 'display: none;'
	}
}
