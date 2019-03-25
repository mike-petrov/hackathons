import React from 'react'
import PropTypes from 'prop-types'

import { getWeather } from '../func/methods'
import './style.css'


export default class Weather extends React.Component {

	render() {
		getWeather(this)

		return (
			<div className="weather_block" id="weather"></div>
		)
	}

}
