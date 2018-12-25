pragma solidity ^0.5.0;

contract healthhistory is dpass {
    
    mapping (uint256 => string[]) entityToHistory;
    mapping (uint256 => address[]) entityToHistoryAccessHolders;
    mapping (uint256 => address[]) entityToHistoryWriters;

    function createNewHistory() public {
        
        entityToHistoryAccessHolders[ownerToEntity[msg.sender]].push(msg.sender);
        entityToHistoryWriters[ownerToEntity[msg.sender]].push(msg.sender);
        
    }
    
    function letWrite(address _accessRecipient) public {
        
        entityToHistoryWriters[ownerToEntity[msg.sender]].push(_accessRecipient);
        
    }
    
    function recordHistory(uint256 _entityId, string memory _newNote) public {
        
        for (uint i = 0; i < entityToHistoryWriters[_entityId].length; i++) {
            if (entityToHistoryWriters[_entityId][i] == msg.sender) {
                entityToHistory[_entityId].push(_newNote);
                break;
            } else {
                continue;
            }
        }
        
        
    }
    
    function giveAccessToHistory(address _accessRecipient) public {
        
        entityToHistoryAccessHolders[ownerToEntity[msg.sender]].push(_accessRecipient);
        
    }
    
    function getNote(uint256 _entityId, uint256 _noteId) public view returns(string memory) {
        
        for (uint i = 0; i < entityToHistoryAccessHolders[_entityId].length; i++) {
            if (entityToHistoryAccessHolders[_entityId][i] == msg.sender) {
                return entityToHistory[_entityId][_noteId];
            } else {
                continue;
            }
        }
        
    }
    
}
