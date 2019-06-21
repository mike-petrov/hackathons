const pythonUrl = "https://cd081cda.ngrok.io";

/*
@app.route('/rentStop')
def rentStop():
  global balance1
  global balance2
  balance1 -= 20
  balance2 += 20
  return jsonify(True)
 */

export const rentStop = fetch(`${pythonUrl}/rentStop`)
.then(function(response) {
  return response.json();
});

/*
@app.route('/getUsers')
def getUsers():
  return jsonify([ 
    { 
      'address': 'address1', 
      'balance': balance1 
    },
    {
      'address': 'address2', 
      'balance': balance2
    }
  ])
 */
export const getUsers = fetch(`${pythonUrl}/getUsers`)
.then(function(response) {
  return response.json();
});


/**
 * @app.route('/rentStart')
def rentStart():
  return jsonify(True)
 */
export const rentStart = fetch(`${pythonUrl}/rentStart`)
.then(function(response) {
  return response.json();
});

export const addScooter = fetch(`${pythonUrl}/addScooter`)
.then(function(response) {
  return response.json();
});

export const expireScooter = fetch(`${pythonUrl}/expireScooter`)
.then(function(response) {
  return response.json();
});