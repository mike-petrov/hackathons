import React, {Component} from 'react'

import Header from './Header'
import Body from './Body'
import Footer from './Footer'

import 'bulma/css/bulma.css'

class App extends Component {
	render() {
		return (
			<div style={ {minHeight: '100vh', backgroundColor: '#f2f0f1'} }>
				<Header />
				<Body />
				<Footer />
			</div>
		)
	}
}

export default App