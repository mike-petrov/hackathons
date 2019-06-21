import React from 'react';
import {  BrowserRouter, Switch, Route } from 'react-router-dom'

import Map from './Components/Map';
import './style.css';


class App extends React.Component {
    render() {
        return (
			<BrowserRouter>
				<Switch>
					<Route path='/' component={Map}/>
			   </Switch>
	   		</BrowserRouter>
        );
    }
}

export default App;
