import React from 'react';
import PropTypes from 'prop-types';

import './style.css'


export default class Button extends React.Component {
	static propTypes = {
	   children: PropTypes.node
   };

	render() {
		return (
			<div  class={this.props.class}>
				{this.props.children}
			</div>
		)
	}

}
