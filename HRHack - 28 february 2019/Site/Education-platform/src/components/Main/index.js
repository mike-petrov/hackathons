import React, {Component} from 'react'

import Ladder from '../Ladder'
import {ladders} from '../dataLadders'
import {network} from '../sets'

import './style.css'

class Main extends Component {
	// componentDidMount() {
	// 	if (typeof(window.web3) == 'undefined') {
	// 		return console.log('Metamask is not installed')
	// 	}

	// 	let contract = window.web3.eth.contract(network.abi).at(network.contract_address)
	// 	console.log(contract)

	// 	function newEmployee(_name, _phone, _email) {       
	// 		contract.newEmployee.sendTransaction(
	// 			_name, _phone, _email,
	// 			{gasPrice: window.web3.toWei(8.1, 'Gwei'), gas: 3000000},
	// 			(error, result) => {
	// 				if (error) {
	// 					return console.log(error);
	// 				}
	// 				 console.log("txhash: " + result);
	// 			}
	// 		)
	// 	}

	// 	newEmployee('Алексей', '+7 (981) 163-55-78', 'polozhev@mail.ru')
	// }

	render() {
		const elements = ladders.map(ladder => 
			<Ladder key={ ladder.id } ladder={ ladder } />
		)

		return (
			<div id="main">
				{ elements }
			</div>
		)
	}
}

export default Main