import React from 'react';

import CardList from './Panels/CardList';
import UserProfile from './Panels/UserProfile';

class App extends React.Component {
	constructor (props) {
		super(props);
		this.state = {
			activePanel: 'CardList',
			idUser: '0'
		};
        this.onUpdatePanel = this.onUpdatePanel.bind(this);
	}

    onUpdatePanel(e,idUser) {
        this.setState({ activePanel: e, idUser: idUser });
    }

	render() {
		return (
			<React.Fragment>
				{this.state.activePanel === 'CardList' &&
					<CardList onUpdatePanel={this.onUpdatePanel}/>
				}
				{this.state.activePanel === 'UserProfile' &&
					<UserProfile onUpdatePanel={this.onUpdatePanel} idUser={this.state.idUser}/>
				}
			</React.Fragment>
		);
	}
}

export default App;
