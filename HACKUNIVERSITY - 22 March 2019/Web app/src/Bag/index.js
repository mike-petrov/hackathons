import React from 'react'
import PropTypes from 'prop-types'

import './style.css'


export default class Bag extends React.Component {

	render() {

		return (
			<div className="bag" id="bag">{this.props.children}</div>
		)
	}

}
