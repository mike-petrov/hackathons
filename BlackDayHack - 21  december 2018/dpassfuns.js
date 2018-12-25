function createNewEntity(_firstName, _lastName, _middleName, _dateOfBirth, _citizenship, _passport) {
               
    contract.registerNewEntity.sendTransaction(
        _firstName, _lastName, _middleName, _dateOfBirth, _citizenship, _passport,
        {gasPrice: web3.toWei(8.1, 'Gwei'), gas: 3000000},
        (error, result) => {
            if(error) {
                return console.log(error);
            }
            console.log("txhash: " + result);
        }
    )

}

function giveFirstNameAccess(_accessRecipient) {
               
    contract.giveFirstNameAccess.sendTransaction(
        _accessRecipient,
        {gasPrice: web3.toWei(8.1, 'Gwei'), gas: 3000000},
        (error, result) => {
            if(error) {
                return console.log(error);
            }
            console.log("txhash: " + result);
        }
    )

}

function giveLastNameAccess(_accessRecipient) {
               
    contract.giveLastNameAccess.sendTransaction(
        _accessRecipient,
        {gasPrice: web3.toWei(8.1, 'Gwei'), gas: 3000000},
        (error, result) => {
            if(error) {
                return console.log(error);
            }
            console.log("txhash: " + result);
        }
    )

}

function giveMiddleNameAccess(_accessRecipient) {
               
    contract.giveMiddleNameAccess.sendTransaction(
        _accessRecipient,
        {gasPrice: web3.toWei(8.1, 'Gwei'), gas: 3000000},
        (error, result) => {
            if(error) {
                return console.log(error);
            }
            console.log("txhash: " + result);
        }
    )

}

function giveDateOfBirthAccess(_accessRecipient) {
               
    contract.giveDateOfBirthAccess.sendTransaction(
        _accessRecipient,
        {gasPrice: web3.toWei(8.1, 'Gwei'), gas: 3000000},
        (error, result) => {
            if(error) {
                return console.log(error);
            }
            console.log("txhash: " + result);
        }
    )

}

function giveCitizenshipAccess(_accessRecipient) {
               
    contract.giveCitizenshipAccess.sendTransaction(
        _accessRecipient,
        {gasPrice: web3.toWei(8.1, 'Gwei'), gas: 3000000},
        (error, result) => {
            if(error) {
                return console.log(error);
            }
            console.log("txhash: " + result);
        }
    )

}

function givePassportAccess(_accessRecipient) {
               
    contract.givePassportAccess.sendTransaction(
        _accessRecipient,
        {gasPrice: web3.toWei(8.1, 'Gwei'), gas: 3000000},
        (error, result) => {
            if(error) {
                return console.log(error);
            }
            console.log("txhash: " + result);
        }
    )

}

function getFirstName(_entityId) {
    contract.getFirstName.call(_entityId, (error, result) => {
        if(error) {
            return console.log(error);
        }
        return result;
    });
}

function getLastName(_entityId) {
    contract.getLastName.call(_entityId, (error, result) => {
        if(error) {
            return console.log(error);
        }
        return result;
    });
}

function getMiddleName(_entityId) {
    contract.getMiddleName.call(_entityId, (error, result) => {
        if(error) {
            return console.log(error);
        }
        return result;
    });
}

function getDateOdBirthName(_entityId) {
    contract.getDateOfBirth.call(_entityId, (error, result) => {
        if(error) {
            return console.log(error);
        }
        return result;
    });
}

function getCitizenshipName(_entityId) {
    contract.getCitizenship.call(_entityId, (error, result) => {
        if(error) {
            return console.log(error);
        }
        return result;
    });
}

function getPassport(_entityId) {
    contract.getPassport.call(_entityId, (error, result) => {
        if(error) {
            return console.log(error);
        }
        return result;
    });
}

function getOwnerId(_ownerAddress) {
    contract.getOwnerId.call(_ownerAddress, (error, result) => {
        if(error) {
            return console.log(error);
        }
        return result.c[0];
    });
}
