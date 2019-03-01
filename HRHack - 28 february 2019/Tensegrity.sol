pragma solidity ^0.5.4;

contract Tensegrity {
    
    struct Employee {
        string name;
        string phone;
        string email;
    }
    
    Employee[] public employees;
    
    mapping (address => uint) addressToEmployee;
    mapping (uint => address) employeeToAddress;
    
    mapping (address => bool) userExists;
    
    function newEmployee(string memory _name, string memory _phone, string memory _email) public {
        require(userExists[msg.sender] != true);
        uint id = employees.push(Employee(_name, _phone, _email)) - 1;
        employeeToAddress[id] = msg.sender;
        addressToEmployee[msg.sender] =  id;
        userExists[msg.sender] = true;
    }
    
    function changeEmployee(string memory _newName, string memory _newPhone, string memory _newEmail) public {
        uint id = addressToEmployee[msg.sender];
        employees[id].name = _newName;
        employees[id].phone = _newPhone;
        employees[id].email = _newEmail;
    }
    
    function getEmployee(uint _id) public view returns(string memory _name, string memory _phone, string memory _email) {
        _name = employees[_id].name;
        _phone = employees[_id].phone;
        _email = employees[_id].email;
    }
    
    struct Step {
        uint id;
        uint date;
        uint duration;
        uint solver;
    }
    
    mapping (uint => Step[]) employeeToSteps;
    
    function passStep(uint _id, uint _duration) public {
        uint id = addressToEmployee[msg.sender];
        employeeToSteps[id].push(Step(_id, now, _duration, id));
    }
    
    function getNumberOfSteps (uint _employeeId) public view returns(uint) {
        return employeeToSteps[_employeeId].length;
    }
    
    function getEmployeeStep (uint _employeeId, uint _stepId) public view returns(uint _id, uint _date, uint _duration, uint _solver) {
        _id = employeeToSteps[_employeeId][_stepId].id;
        _date = employeeToSteps[_employeeId][_stepId].date;
        _duration = employeeToSteps[_employeeId][_stepId].duration;
        _solver = employeeToSteps[_employeeId][_stepId].solver;
    }
    
}