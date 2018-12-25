function getFirstName(_entityId) {
    contract.getFirstName.call(_entityId, (error, result) => {
        if(error) {
            return console.log(error);
        }
        alert('Successfully\nPatient first name : ' + result);
    });
}

class Profile extends React.Component {
    constructor(props) {
        super(props);
        this.state = {PersonPublicKey: ''};
        this.onPersonPublicKeyChange = this.onPersonPublicKeyChange.bind(this);
        this.onSubmit = this.onSubmit.bind(this);
        this.state = { items: [], text: '' };
    }

    onSubmit(event) {
        getFirstName(4);
        event.preventDefault();
        if (!this.state.text.length) {
            return;
        }
        const newItem = {
            text: this.state.text,
            id: Date.now()
        };
        this.setState(state => ({
            items: state.items.concat(newItem),
            text: ''
        }));
    }

    onPersonPublicKeyChange(event){
        this.setState({PersonPublicKey: event.target.value});
        this.setState({ text: event.target.value });
    }

    render() {return (
            <div className="containers has-background-dark">
                <div className="column is-8 is-offset-2">
                    <div className="column is-5 has-background-danger">
                        <h1 className="title">
                            Patients
                        </h1>
                        <div className="field is-horizontal">
                            <i className="fas fa-user-injured"></i>
                            <div className="field-label is-normal">
                                <label className="label">83920657</label>
                            </div>
                            <div className="field">
                                <a href="/watch/83920657.html">
                                    watch
                                </a>
                                <a href="#">
                                    <i className="far fa-times-circle"></i>
                                </a>
                            </div>
                        </div>
                        <div className="field is-horizontal">
                            <i className="fas fa-user-injured"></i>
                            <div className="field-label is-normal">
                                <label className="label">76382930</label>
                            </div>
                            <div className="field">
                                <a href="/watch/76382930.html">
                                    watch
                                </a>
                                <a href="#">
                                    <i className="far fa-times-circle"></i>
                                </a>
                            </div>
                        </div>
                        <div className="field is-horizontal">
                            <i className="fas fa-user-injured"></i>
                            <div className="field-label is-normal">
                                <label className="label">12088949</label>
                            </div>
                            <div className="field">
                                <a href="/watch/12088949.html">
                                    watch
                                </a>
                                <a href="#">
                                    <i className="far fa-times-circle"></i>
                                </a>
                            </div>
                        </div>
                        <div className="field is-horizontal">
                            <i className="fas fa-user-injured"></i>
                            <div className="field-label is-normal">
                                <label className="label">23409032</label>
                            </div>
                            <div className="field">
                                <a href="/watch/23409032.html">
                                    watch
                                </a>
                                <a href="#">
                                    <i className="far fa-times-circle"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div className="column is-5 is-offset-6 has-background-danger">
                        <h1 className="title">
                            Hospital
                        </h1>
                        <div>
                            <TodoList items={this.state.items} />
                        </div>
                        <form onSubmit={this.onSubmit}>
                            <div className="field">
                                <div className="control has-icons-left has-icons-right">
                                    <input className="input"
                                           type="text"
                                           name="PersonPublicKey"
                                           placeholder="Person id"
                                           value={this.state.PersonPublicKey}
                                           onChange={this.onPersonPublicKeyChange}/>
                                    <span className="icon is-small is-left">
                                        <i className="fas fa-user-injured"></i>
                                    </span>
                                </div>
                            </div>
                            <div className="field">
                                <button className="button is-primary is-fullwidth">Request</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        );
    }
}



class TodoList extends React.Component {
    render() {
        return (
            <div>
                {this.props.items.map(item => (
                <div className="field is-horizontal">
                    <i className="fas fa-user-injured"></i>
                    <div className="field-label is-normal width-50">
                        <label className="label">
                            {item.text}
                        </label>
                    </div>

                    <div className="field" key={item.id}>
                        in waiting
                        <a href="#">
                            <i className="far fa-times-circle"></i>
                        </a>
                    </div>
                </div>
                ))}
            </div>
        );
    }
}

ReactDOM.render(
    <Profile />,
    document.getElementById('react')
);