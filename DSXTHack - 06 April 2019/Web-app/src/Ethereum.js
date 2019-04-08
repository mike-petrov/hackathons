import React from 'react';

import { getTokens, mintTokens } from './methods'
import { address, abi, owner } from './sets'


export default class Ethereum extends React.Component {
    constructor (props) {
		super(props)
	}
	
    componentDidMount() {
		// let web3 = window.web3

		// if (typeof(web3) == 'undefined') {
		// 	console.log("Metamask is not installed")
		// }

		// let contract = web3.eth.contract(abi).at(address)

		// console.log(web3);
		// console.log(contract);
		
		getTokens(owner).then(res => {
			console.log(res)
		})

		// mintTokens(owner, 10).then(res => {
		// 	console.log(res)
		// })
	}

	render() {
		return (
			<div></div>
		)
	}
}