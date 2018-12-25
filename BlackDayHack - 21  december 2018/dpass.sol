pragma solidity ^0.5.0;

contract dpass {
    
    struct Entity {
        
        string firstName;
        string lastName;
        string middleName;
        string dateOfBirth;
        string citizenship;
        string passport;
        
    }
    
    Entity[] entities;
    
    mapping (uint256 => address) entityToOwner;
    mapping (address => uint256) ownerToEntity;
    
    mapping (uint256 => address[]) entityToFirstNameAccessHolders;
    mapping (uint256 => address[]) entityToLastNameAccessHolders;
    mapping (uint256 => address[]) entityToMiddleNameAccessHolders;
    mapping (uint256 => address[]) entityToDateOfBirthAccessHolders;
    mapping (uint256 => address[]) entityToCitizenshipAccessHolders;
    mapping (uint256 => address[]) entityToPassportAccessHolders;
     
    function registerNewEntity(string memory _firstName, string memory _lastName, string memory _middleName, string memory _dateOfBirth, string memory _citizenship, string memory _passport) public {
        
        
        uint256 id = entities.push(Entity(_firstName, _lastName, _middleName, _dateOfBirth, _citizenship, _passport)) - 1;
        entityToOwner[id] = msg.sender;
        ownerToEntity[msg.sender] = id;

        entityToFirstNameAccessHolders[id].push(msg.sender);
        entityToLastNameAccessHolders[id].push(msg.sender);
        entityToMiddleNameAccessHolders[id].push(msg.sender);
        entityToDateOfBirthAccessHolders[id].push(msg.sender);
        entityToCitizenshipAccessHolders[id].push(msg.sender);
        entityToPassportAccessHolders[id].push(msg.sender);
    
    }

        function giveFirstNameAccess(address _accessRecipient) public {
            
            entityToFirstNameAccessHolders[ownerToEntity[msg.sender]].push(_accessRecipient);
            
        }
    
    function giveLastNameAccess(address _accessRecipient) public {
        
        entityToLastNameAccessHolders[ownerToEntity[msg.sender]].push(_accessRecipient); 
        
    }
    
    function giveMiddleNameAccess(address _accessRecipient) public {
        
        entityToMiddleNameAccessHolders[ownerToEntity[msg.sender]].push(_accessRecipient);       
        
    }
    
    function giveDateOfBirthAccess(address _accessRecipient) public {
        
        entityToDateOfBirthAccessHolders[ownerToEntity[msg.sender]].push(_accessRecipient);
        
    }
    
    function giveCitizenshipAccess(address _accessRecipient) public {
        
        entityToCitizenshipAccessHolders[ownerToEntity[msg.sender]].push(_accessRecipient);    
        
    }
    
    function givePassportAccess(address _accessRecipient) public {
        
        entityToPassportAccessHolders[ownerToEntity[msg.sender]].push(_accessRecipient);    
        
    }
    
    function getFirstName(uint256 _id) public view returns(string memory) {
        
        for (uint i = 0; i < entityToFirstNameAccessHolders[_id].length; i++) {
            if (entityToFirstNameAccessHolders[_id][i] == msg.sender) {
                return entities[_id].firstName;
            } else {
                continue;
            }
        }
        
    }
    
    function getLastName(uint256 _id) public view returns(string memory) {
        
        for (uint i = 0; i < entityToLastNameAccessHolders[_id].length; i++) {
            if (entityToLastNameAccessHolders[_id][i] == msg.sender) {
                return entities[_id].lastName;
            } else {
                continue;
            }
        }
        
    }
    
    function getMiddleName(uint256 _id) public view returns(string memory) {
        
        for (uint i = 0; i < entityToMiddleNameAccessHolders[_id].length; i++) {
            if (entityToMiddleNameAccessHolders[_id][i] == msg.sender) {
                return entities[_id].middleName;
            } else {
                continue;
            }
        }
        
    }
    
    function getDateOfBirth(uint256 _id) public view returns(string memory) {
        
        for (uint i = 0; i < entityToDateOfBirthAccessHolders[_id].length; i++) {
            if (entityToDateOfBirthAccessHolders[_id][i] == msg.sender) {
                return entities[_id].dateOfBirth;
            } else {
                continue;
            }
        }
        
    }
    
    function getCitizenship(uint256 _id) public view returns(string memory) {
        
        for (uint i = 0; i < entityToCitizenshipAccessHolders[_id].length; i++) {
            if (entityToCitizenshipAccessHolders[_id][i] == msg.sender) {
                return entities[_id].citizenship;
            } else {
                continue;
            }
        }
        
    }
    
    function getPassport(uint256 _id) public view returns(string memory) {
        
        for (uint i = 0; i < entityToPassportAccessHolders[_id].length; i++) {
            if (entityToPassportAccessHolders[_id][i] == msg.sender) {
                return entities[_id].passport;
            } else {
                continue;
            }
        }
        
    }
    
    function getOwnerId(address _ownerAddress) public view returns(uint256) {
        
        return ownerToEntity[_ownerAddress];
        
    }
    
}
