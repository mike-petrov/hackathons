import React, {Component} from 'react'

import {network} from './sets'


class Ladders extends Component {
	render() {
		const ladder = this.props.ladder

		const elements = ladder.steps.map(step =>
			<button
				key={ ladder.id + '-' + step.id }
				className="button is-size-6 has-text-weight-semibold"
				style={ {
					boxShadow: '0 4px 6px 0 rgba(50,50,93,.11)',
					background: 'linear-gradient(90deg,#2cc7c0,#59d99d)',
					border: 'none',
					color: '#fff'
				} }
				onClick={ this.handleSmartContract }
			>{ step.name }</button>
		)

		return (
			<div className="box is-size-2">
				<h1 className="has-text-weight-semibold">
					{ ladder.name }
				</h1>
				<div>
					{ elements }
				</div>
			</div>
		)
	}

	handleSmartContract = () => {
		// window.addEventListener('load', () => {
			if (typeof(window.web3) == 'undefined') {
				return console.log('Metamask is not installed')
			}

			let contract = window.web3.eth.contract(network.abi).at(network.contract_address)
			console.log(contract)
		// });

		function passStep(_id, _duration) {
			contract.passStep.sendTransaction(
				_id, _duration,
				{gasPrice: window.web3.toWei(8.1, 'Gwei'), gas: 3000000},
				(error, result) => {
					if (error) {
						return console.log(error)
					}
					console.log("txhash: " + result)
				}
			)
		
		}

		passStep(13, 75)
	}
}

export default Ladders