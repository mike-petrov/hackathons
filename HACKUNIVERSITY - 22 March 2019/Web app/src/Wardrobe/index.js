import React from 'react'

import './style.css'


export default class Wardrobe extends React.Component {
	render() {
		return (
			<div id="wardrobe">
				<div class="title">Гардероб</div>
				{this.props.children}
			</div>
		)
	}
}
