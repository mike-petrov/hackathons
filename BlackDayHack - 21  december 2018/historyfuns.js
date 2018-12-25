function createNewHistory() {
               
    contract.createNewHistory.sendTransaction(
        {gasPrice: web3.toWei(8.1, 'Gwei'), gas: 3000000},
        (error, result) => {
            if(error) {
                return console.log(error);
            }
            console.log("txhash: " + result);
        }
    )

}

function letWrite(_accessRecipient) {
               
    contract.letWrite.sendTransaction(_accessRecipient,
        {gasPrice: web3.toWei(8.1, 'Gwei'), gas: 3000000},
        (error, result) => {
            if(error) {
                return console.log(error);
            }
            console.log("txhash: " + result);
        }
    )

}

function recordHistory(_entityId, _newNote) {
               
    contract.recordHistory.sendTransaction(_entityId, _newNote,
        {gasPrice: web3.toWei(8.1, 'Gwei'), gas: 3000000},
        (error, result) => {
            if(error) {
                return console.log(error);
            }
            console.log("txhash: " + result);
        }
    )

}

function giveAccessToHistory(_accessRecipient) {
               
    contract.recordHistory.sendTransaction(_accessRecipient,
        {gasPrice: web3.toWei(8.1, 'Gwei'), gas: 3000000},
        (error, result) => {
            if(error) {
                return console.log(error);
            }
            console.log("txhash: " + result);
        }
    )

}

function getHistory(_entityId) {

    var history = [];
    var lastResult = "last result";
    var _noteId = 0;

    while(lastResult !== 'undefined') {
        contract.getNote.call(_entityId, _noteId, (error, result) => {
            if(error) {
                return console.log(error);
            }
            history.push(result);
            lastResult = result;
            _noteId++;
        });
    }
    
    return history;

}

function getNote(_entityId, _noteId) {

        contract.getNote.call(_entityId, _noteId, (error, result) => {
            if(error) {
                return console.log(error);
            }
            return result;
        });

}



function getHistory(_entityId) {

    var history = [];
    var lastResult = "last result";

    while(lastResult !== 'undefined') {
        contract.getNote.call(_entityId, _noteId, (error, result) => {
            if(error) {
                return console.log(error);
            }
            history.push(result);
            lastResult = result;
        });
    }
    
    return history;

}
