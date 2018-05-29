pragma solidity ^ 0.4.18;

contract brak {

    address own =0x0B361c9Fd431fCaBE0A4D9d9F32E7680136C56d7;
    address addOne =0xE27623a11d5B67e2C4d54326eA5FB00f0eA20398;
    address addTwo =0x3d7992cFbBeeFaEdde4cFc44A68a93Dd0630709F;
    uint k; uint p1 = 0; uint p2 = 0; uint p3 = 0;
    uint c1;
    uint c2;


    mapping(address => uint) balances;
    event Send(address from, address to, uint value);
    function send(address receiver, uint amount) public
    payable
 {
        if (balances[msg.sender] < amount) return;
        balances[msg.sender] -= amount;
        if (msg.sender == addOne)
            p1 += amount;
        if (msg.sender == addTwo)
            p2 += amount;
        if ((msg.sender != addTwo) && (msg.sender != addOne))
            p3 += amount;
	balances[receiver]+=amount;
        emit Send(msg.sender, receiver, amount);
    }
    function razvodAuto() public
    payable
    {
        c1 = p1 / (p1 + p2);
        c2 = p2 / (p1 + p2);
        require(msg.value >= 10000000000000000);
        addOne.transfer((msg.value - p3) * c1 + p3 / 2);
        addTwo.transfer((msg.value - p3) * c2 + p3 / 2);
        selfdestruct(own);
    }

    function mortal() public { own = msg.sender; }


    function razvod50na50() public
    payable
    {
        require(msg.value >= 10000000000000000);
        addOne.transfer(msg.value / 2);
        addTwo.transfer(msg.value / 2);
        selfdestruct(own);
    }
    function setValue(uint newValue) public {
        k = newValue;
    }
    function getValue() public constant returns(uint) {
        return k;
    }
    function razvodKoef() public
    payable
    {
        require(msg.value >= 10000000000000000);
        addOne.transfer(msg.value * k / 100);
        addTwo.transfer(msg.value * (100 - k) / 100);
        selfdestruct(own);
    }
}


contract death1 {
    address own =0x0B361c9Fd431fCaBE0A4D9d9F32E7680136C56d7;
    address addOne =0xE27623a11d5B67e2C4d54326eA5FB00f0eA20398;
    address addTwo =0x3d7992cFbBeeFaEdde4cFc44A68a93Dd0630709F;

    function death_money() public 
	payable
{
        addTwo.transfer(msg.value);
        selfdestruct(own);
        selfdestruct(addOne);
    }
}
contract death2 {
    address own =0x0B361c9Fd431fCaBE0A4D9d9F32E7680136C56d7;
    address addOne =0xE27623a11d5B67e2C4d54326eA5FB00f0eA20398;
    address addTwo =0x3d7992cFbBeeFaEdde4cFc44A68a93Dd0630709F;

    function death_money() public 
	payable
{
        addOne.transfer(msg.value);
        selfdestruct(own);
        selfdestruct(addTwo);
    }
}
contract death_with_third_faces2 {
    address own = 0x0B361c9Fd431fCaBE0A4D9d9F32E7680136C56d7;
    address addOne = 0xE27623a11d5B67e2C4d54326eA5FB00f0eA20398;
    address addTwo = 0x3d7992cFbBeeFaEdde4cFc44A68a93Dd0630709F;
    address addThird = 0x95fa3cbf9d1e54226be8cb3373f2bde5ba04a853;

    function death_money() public
    payable
    {
        addOne.transfer(msg.value);
        selfdestruct(own);
        selfdestruct(addTwo);
    }
}
contract death_with_third_faces1 {
    address own = 0x0B361c9Fd431fCaBE0A4D9d9F32E7680136C56d7;
    address addOne = 0xE27623a11d5B67e2C4d54326eA5FB00f0eA20398;
    address addTwo = 0x3d7992cFbBeeFaEdde4cFc44A68a93Dd0630709F;
    address addThird = 0x95fa3cbf9d1e54226be8cb3373f2bde5ba04a853;

    function death_money() public
    payable
    {
        addTwo.transfer(msg.value);
        selfdestruct(own);
        selfdestruct(addOne);
    }
}
contract money_box {
    address own = 0x0B361c9Fd431fCaBE0A4D9d9F32E7680136C56d7;
    address addOne = 0xE27623a11d5B67e2C4d54326eA5FB00f0eA20398;
    address addTwo = 0x3d7992cFbBeeFaEdde4cFc44A68a93Dd0630709F;
    address Goal = 0x98ac5f4664f9f836d9c3CFdeba2B56b66d33f4CA;

    mapping(address => uint) balances;
    event Box(address from, address to, uint value);
    function moneybox(address receiver, uint amount) public
    payable
    {
        if (balances[msg.sender] < amount) return
        else emit Box(msg.sender, receiver, amount);
    }
}