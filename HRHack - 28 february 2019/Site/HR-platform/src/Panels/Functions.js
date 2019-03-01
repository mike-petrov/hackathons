import {
    network
} from './Sets';

let contract = window.web3.eth.contract(network.abi).at(network.contract_address);

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
        contract.getNumberOfSteps.call(_employeeId, (error, result) => {
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

export function getHistory() {
    return new Promise(function(resolve, reject) {
        var history = [];
        getNumberOfEmployees().then(numOfEmployees => {
            for (let i = 0; i < numOfEmployees; i++) {
                const bla = i;
                getNumberOfSteps(i).then(numOfSteps => {
                    for (let j = 0; j < numOfSteps; j++) {
                        getEmployeeStep(bla, j).then(step => {
                            history.push(step);
                            resolve(history);
                        })

                    }
                })
            }
        })
    });
}
