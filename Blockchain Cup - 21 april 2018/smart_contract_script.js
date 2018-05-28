pragma solidity ^0.4.18; 

contract mortal { 
address own=0x99B4F7e75E13c46cc864a702833c193b5057b42c; 
address addOne = 0x4a8a94946753F6fa68F9FdB83359eBd399fDC4D1; 
address addTwo = 0xf9b3C58191f4D5ACF03D90550834DfeadC729a14; 
uint k; uint p1=0; uint p2 = 0; uint p3=0;
uint c1;
uint c2;


mapping (address => uint) balances;
 event Send(address from, address to, uint value);
  function send(address receiver, uint amount) private {
        if (balances[msg.sender] < amount) return;
        balances[msg.sender] -= amount;
        if(msg.sender == addOne)
        p1 += amount;
        if(msg.sender == addTwo)
        p2 += amount;
        balances[receiver] += amount;
        if((msg.sender!=addTwo)&&(msg.sender!=addOne))
        p3+=amount;
       emit Send(msg.sender, receiver, amount);
    }
function razvodAuto() public 
payable 
{ c1=p1/(p1+p2);
c2=p2/(p1+p2);
require(msg.value>=10000000000000000); 
addOne.transfer((msg.value - p3)*c1 + p3/2); 
addTwo.transfer((msg.value - p3)*c2 + p3/2); 
selfdestruct(own); 
} 
 
function mortal() public { own = msg.sender; } 


function razvod50na50() public 
payable 
{ 
require(msg.value>=10000000000000000); 
addOne.transfer(msg.value/2); 
addTwo.transfer(msg.value/2); 
selfdestruct(own); } 
function setValue( uint newValue ) public { 
k = newValue; 
} 
function getValue() public constant returns( uint ) { 
return k; 
} 
function razvodKoef() public 
payable 
{ 
require(msg.value>=10000000000000000); 
addOne.transfer(msg.value*k/100); 
addTwo.transfer(msg.value*(100-k)/100); 
selfdestruct(own); } 
} 


contract brak is mortal { 
string greeting; 


}