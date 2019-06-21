from typing import List
import json
from flask import Flask, jsonify

from fetchai.ledger.api import LedgerApi
from fetchai.ledger.contract import SmartContract
from fetchai.ledger.crypto import Entity, Address

import time

app = Flask(__name__)

amount = 10000
HOST = '127.0.0.1' 
PORT = 8100
# create our first private key pair
entity1 = Entity()
address1 = Address(entity1)

# create a second private key pair
entity2 = Entity()
address2 = Address(entity2)

CONTRACT_TEXT = f"""
@init
function setup(owner: Address)
  var ttal : UInt64 = {amount}u64;
  var balance_first = State<UInt64>(Address("{address1}"));
  var balance_second = State<UInt64>(Address("{address2}"));

  balance_first.set(ttal);
  balance_second.set(ttal);
endfunction

@action
function transfer(from: Address, to: Address, amount: UInt64)
  var from_account = State<UInt64>(from);
  var to_account = State<UInt64>(to);
  if (from_account.get(0u64) >= amount)
    from_account.set(from_account.get(0u64) - amount);
    to_account.set(to_account.get(0u64) + amount);
  endif
endfunction

@query
function balance(address: Address) : UInt64
    var supply_state = State<UInt64>(address);
    return supply_state.get(0u64);
endfunction

"""

# build the ledger API
api = LedgerApi(HOST, PORT)
# create wealth so that we have the funds to be able to create contracts on the network
api.sync(api.tokens.wealth(entity1, 10000))
# create the smart contract
contract = SmartContract(CONTRACT_TEXT)
# deploy the contract to the network
api.sync(api.contracts.create(entity1, contract, 2000))

@app.route('/rentStop')
def rentStop():
  global address1
  global address2
  global api
  global contract

  api.sync(contract.action(api, 'transfer', 40, [entity1], address1, address2, 200))
  return jsonify(True)

@app.route('/getUsers')
def getUsers():
  return jsonify([ 
    { 
      'address': str(address1), 
      'balance': contract.query(api, 'balance', address=address1)
    },
    {
      'address': str(address2), 
      'balance': contract.query(api, 'balance', address=address2)
    }
  ])

@app.route('/rentStart')
def rentStart():
  return jsonify(True)

if __name__ == '__main__':
  app.run(debug=True)
