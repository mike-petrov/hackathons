export const network = {
    contract_address: '0x941f27992be93d683a71caad4f62404e8bd62e23',
    abi: [
        {
            "constant": false,
            "inputs": [
            {
                "name": "_newName",
                "type": "string"
            },
            {
                "name": "_newPhone",
                "type": "string"
            },
            {
                "name": "_newEmail",
                "type": "string"
            }
            ],
            "name": "changeEmployee",
            "outputs": [],
            "payable": false,
            "stateMutability": "nonpayable",
            "type": "function"
        },
        {
            "constant": false,
            "inputs": [
            {
                "name": "_name",
                "type": "string"
            },
            {
                "name": "_phone",
                "type": "string"
            },
            {
                "name": "_email",
                "type": "string"
            }
            ],
            "name": "newEmployee",
            "outputs": [],
            "payable": false,
            "stateMutability": "nonpayable",
            "type": "function"
        },
        {
            "constant": false,
            "inputs": [
            {
                "name": "_id",
                "type": "uint256"
            },
            {
                "name": "_duration",
                "type": "uint256"
            }
            ],
            "name": "passStep",
            "outputs": [],
            "payable": false,
            "stateMutability": "nonpayable",
            "type": "function"
        },
        {
            "constant": true,
            "inputs": [
            {
                "name": "",
                "type": "uint256"
            }
            ],
            "name": "employees",
            "outputs": [
            {
                "name": "name",
                "type": "string"
            },
            {
                "name": "phone",
                "type": "string"
            },
            {
                "name": "email",
                "type": "string"
            }
            ],
            "payable": false,
            "stateMutability": "view",
            "type": "function"
        },
        {
            "constant": true,
            "inputs": [
            {
                "name": "_id",
                "type": "uint256"
            }
            ],
            "name": "getEmployee",
            "outputs": [
            {
                "name": "_name",
                "type": "string"
            },
            {
                "name": "_phone",
                "type": "string"
            },
            {
                "name": "_email",
                "type": "string"
            }
            ],
            "payable": false,
            "stateMutability": "view",
            "type": "function"
        },
        {
            "constant": true,
            "inputs": [
            {
                "name": "_employeeId",
                "type": "uint256"
            },
            {
                "name": "_stepId",
                "type": "uint256"
            }
            ],
            "name": "getEmployeeStep",
            "outputs": [
            {
                "name": "_id",
                "type": "uint256"
            },
            {
                "name": "_date",
                "type": "uint256"
            },
            {
                "name": "_duration",
                "type": "uint256"
            },
            {
                "name": "_solver",
                "type": "uint256"
            }
            ],
            "payable": false,
            "stateMutability": "view",
            "type": "function"
        },
        {
            "constant": true,
            "inputs": [],
            "name": "getNumberOfEmployees",
            "outputs": [
            {
                "name": "",
                "type": "uint256"
            }
            ],
            "payable": false,
            "stateMutability": "view",
            "type": "function"
        },
        {
            "constant": true,
            "inputs": [
            {
                "name": "_employeeId",
                "type": "uint256"
            }
            ],
            "name": "getNumberOfSteps",
            "outputs": [
            {
                "name": "",
                "type": "uint256"
            }
            ],
            "payable": false,
            "stateMutability": "view",
            "type": "function"
        }
    ]
}