import React, {Component} from 'react'

import LeftMenu from '../LeftMenu'
import Main from '../Main'

import './style.css'

class Body extends Component {
	state = {
		cont: 'economics'
	}

	render() {
		return (
			<div className="container has-background-white" id="body">
				<div className="columns">
					<div className="column is-one-fifth">
						<LeftMenu category={ this.category } programming={ this.programming } management={ this.hacks } />
					</div>

					<div className="column">
						<Main category={ this.state.cont } />
					</div>

					<div className="column is-one-fifth">
					</div>
				</div>
			</div>
		)
	}

	category = x => {
		this.setState({
			cont: x
		})
	}
}

export default Body