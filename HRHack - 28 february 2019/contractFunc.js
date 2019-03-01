function newEmployee(_name, _phone, _email) {

    contract.newEmployee.sendTransaction(
        _name, _phone, _email, {
            gasPrice: web3.toWei(8.1, 'Gwei'),
            gas: 3000000
        },
        (error, result) => {
            if (error) {
                return console.log(error);
            }
            console.log("txhash: " + result);
        }
    )

}

function changeEmployee(_newName, _newPhone, _newEmail) {

    contract.changeEmployee.sendTransaction(
        _newName, _newPhone, _newEmail, {
            gasPrice: web3.toWei(8.1, 'Gwei'),
            gas: 3000000
        },
        (error, result) => {
            if (error) {
                return console.log(error);
            }
            console.log("txhash: " + result);
        }
    )

}

function getEmployee(_id) {

    contract.getEmployee.call(_id, (error, result) => {
        if (error) {
            return console.log(error);
        }
        return result; // - array of 3 strings
    });

}

function passStep(_id, _duration) {

    contract.passStep.sendTransaction(
        _id, _duration, {
            gasPrice: web3.toWei(8.1, 'Gwei'),
            gas: 3000000
        },
        (error, result) => {
            if (error) {
                return console.log(error);
            }
            console.log("txhash: " + result);
        }
    )

}

function getNumberOfEmployees() {
    return new Promise(function(resolve, reject) {
        contract.getNumberOfEmployees.call((error, result) => {
            if (error) {
                return console.log(error);
            }
            resolve(result.c[0]);
        });

    });

}

function getNumberOfSteps(_employeeId) {
    return new Promise(function(resolve, reject) {
        let la = contract.getNumberOfSteps.call(_employeeId, (error, result) => {
            if (error) {
                return console.log('la', error);
            }
            resolve(result.c[0]);
        });

    });

}

function getEmployeeStep(_employeeId, _stepId) {
    return new Promise(function(resolve, reject) {
        contract.getEmployeeStep.call(_employeeId, _stepId, (error, result) => {
            if (error) {
                return console.log(error);
            }
            resolve([result[0].c[0], result[1].c[0], result[2].c[0], result[3].c[0]]);
        });
    });

}

function getHistory() {
    return new Promise(function(resolve, reject) {
        var history = [];
        getNumberOfEmployees().then(numOfEmployees => {
            for (i = 0; i < numOfEmployees; i++) {
                const bla = i;
                getNumberOfSteps(i).then(numOfSteps => {
                    for (j = 0; j < numOfSteps; j++) {
                        getEmployeeStep(bla, j).then(step => {
                            history.push(step);
                            resolve(history); // array of all the steps
                        })

                    }
                })

            }

        })
    });
}

// function obertkaGetEmployee() {
//     getEmployee().then(x => console.log(x))
// }

// function obertkaGetNumberOfEmployees() {
//     getNumberOfEmployees().then(x => console.log(x))
// }

// function obertkaGetNumberOfSteps() {
//     getNumberOfSteps().then(x => console.log(x))
// }

// function obertkaGetEmployeeStep() {
//     getEmployeeStep().then(x => console.log(x))
// }

// function obertkaGetHistory() {
//     getHistory().then(x => console.log(x))
// }
