const contract_address = "smart_contract_address";
const abi = smart_contract_abi;

let contract;
window.addEventListener('load', () => {
    if (typeof(window.web3) == 'undefined') {
        return console.log("Metamask is not installed");
    }

    contract = web3.eth.contract(abi).at(contract_address);

});
