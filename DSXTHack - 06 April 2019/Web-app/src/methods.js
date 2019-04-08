import { address, abi } from './sets'

// let Web3 = require("web3")
// window.web3 = new Web3(window.web3.currentProvider)
let web3 = window.web3

if (typeof(web3) == 'undefined') {
	console.log("Metamask is not installed")
}


// if (typeof web3 !== 'undefined') {
// 	web3 = new Web3(web3.currentProvider);
// 	window.web3 = new Web3(web3.currentProvider);

// 	// console.log(web3.currentProvider);

// 	if (web3.currentProvider.isMetaMask === true) {
// 		let token = web3.eth.contract(abi).at(address);
// 		let account = web3.eth.accounts[0];

// 		// $('#message').append('<div>' + account + '</div');
// 		// console.log(token);
// 		console.log(account);

// 		// get_balance();
// 	} else {
// 		// $('#message').html('<div>No web3? Please use google chrome and metamask plugin to enter this Dapp!</div>');
// 		console.log('!')
// 	}
// }



let contract = web3.eth.contract(abi).at(address)


export function getTokens(user) {
	return new Promise(function(resolve, reject) {
		contract.getTokens.call(
			user,
			(err, res) => {
				if (err) {
					return console.log(err)
				}
				// console.log(res)
				resolve(res.c[0])
			}
		)
	})
}

export function addOffer(id, way, essence, count, price) {
	return new Promise(function(resolve, reject) {
		contract.addOffer.sendTransaction(
			id, way, essence, count, price,
			{gasPrice: web3.toWei(8.1, 'Gwei'), gas: 3000000},
			(err, res) => {
				if (err) {
					return console.log(err)
				}
				// console.log(res)
				resolve(res)
			}
		)
	})
}

export function getOffer(id) {
	return new Promise(function(resolve, reject) {
		contract.getOffer.call(
			id,
			(err, res) => {
				if (err) {
					return console.log(err)
				}
				// console.log(res)
				resolve(res.c[0])
			}
		)
	})
}

// export function mintTokens(user, count) {
// 	return new Promise(function(resolve, reject) {
// 		contract.mintToken.sendTransaction(
// 			user, count,
// 			{gasPrice: web3.toWei(8.1, 'Gwei'), gas: 3000000},
// 			(err, res) => {
// 				if (err) {
// 					return console.log(err)
// 				}
// 				// console.log(res)
// 				resolve(res)
// 			}
// 		)
// 	})
// }

export function swapOffer(idIn, idOut) {
	return new Promise(function(resolve, reject) {
		contract.swapOffer.sendTransaction(
			idIn, idOut,
			{gasPrice: web3.toWei(8.1, 'Gwei'), gas: 3000000},
			(err, res) => {
				if (err) {
					return console.log(err)
				}
				// console.log(res)
				resolve(res)
			}
		)
	})
}