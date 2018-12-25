function giveFirstNameAccess(_accessRecipient) {

    contract.giveFirstNameAccess.sendTransaction(
        _accessRecipient,
        {gasPrice: web3.toWei(8.1, 'Gwei'), gas: 3000000},
        (error, result) => {
            if(error) {
                return console.log(error);
            }
            console.log("txhash: " + result);
        }
    )

}

class Profile extends React.Component {
    constructor(props) {
        super(props);
        this.state = {DoctorPublicKey: ''};
        this.onDoctorPublicKeyChange = this.onDoctorPublicKeyChange.bind(this);
        this.onSubmit = this.onSubmit.bind(this);
        this.state = { items: [], text: '' };}

    onSubmit(event) {
        giveFirstNameAccess(this.state.DoctorPublicKey);
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
        alert(`This doctor ${this.state.DoctorPublicKey} has access to your medical card`)
    }

    onDoctorPublicKeyChange(event) {
        this.setState({DoctorPublicKey: event.target.value});
        this.setState({ text: event.target.value });
    }

    render() {
        return (
            <div className="containers has-background-dark">
                <div className="column is-8 is-offset-2">
                    <div className="column is-5 has-background-info">
                        <h1 className="title">
                            Profile
                        </h1>
                        <div className="field is-horizontal">
                            <div className="field-label is-normal">
                                <label className="label">First name</label>
                            </div>
                            <div className="field">
                                Михаил
                            </div>
                            <div className="field">
                                <a className="fas-icon">
                                    <i className="fas fa-share-alt"></i>
                                </a>
                            </div>
                        </div>
                        <div className="field is-horizontal">
                            <div className="field-label is-normal">
                                <label className="label">Second name</label>
                            </div>
                            <div className="field">
                                Петров
                            </div>
                            <div className="field">
                                <a className="fas-icon">
                                    <i className="fas fa-share-alt"></i>
                                </a>
                            </div>
                        </div>
                        <div className="field is-horizontal">
                            <div className="field-label is-normal">
                                <label className="label">Middle name</label>
                            </div>
                            <div className="field">
                                1
                            </div>
                            <div className="field">
                                <a className="fas-icon">
                                    <i className="fas fa-share-alt"></i>
                                </a>
                            </div>
                        </div>
                        <div className="field is-horizontal">
                            <div className="field-label is-normal">
                                <label className="label">Date</label>
                            </div>
                            <div className="field">
                                21.21.2021
                            </div>
                            <div className="field">
                                <a className="fas-icon">
                                    <i className="fas fa-share-alt"></i>
                                </a>
                            </div>
                        </div>
                        <div className="field is-horizontal">
                            <div className="field-label is-normal">
                                <label className="label">Nationality</label>
                            </div>
                            <div className="field">
                                Россия
                            </div>
                            <div className="field">
                                <a className="fas-icon">
                                    <i className="fas fa-share-alt"></i>
                                </a>
                            </div>
                        </div>
                        <div className="field is-horizontal">
                            <div className="field-label is-normal">
                                <label className="label">Passport number</label>
                            </div>
                            <div className="field">
                                100
                            </div>
                            <div className="field">
                                <a className="fas-icon">
                                    <i className="fas fa-share-alt"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div className="column is-5 is-offset-6 has-background-info">
                        <h1 className="title">
                            Data access
                        </h1>
                        <div className="field is-horizontal">
                            <i className="fas fa-tooth"></i>
                            <div className="field-label is-normal">
                                <label className="label">Dentist</label>
                            </div>
                            <div className="field">
                                0xF8720Eb6aD4a530cccb696043a0D10831e2ff60e
                                <a href="#">
                                    <i className="far fa-times-circle"></i>
                                </a>
                            </div>
                        </div>
                        <div className="field is-horizontal">
                            <i className="fas fa-user-secret"></i>
                            <div className="field-label is-normal">
                                <label className="label">Surgeon</label>
                            </div>
                            <div className="field">
                                0x3a0D10831e2ff60eF8720Eb6aD4a530cccb69604
                                <a href="#">
                                    <i className="far fa-times-circle"></i>
                                </a>
                            </div>
                        </div>
                        <div className="field is-horizontal">
                            <i className="fas fa-prescription-bottle-alt"></i>
                            <div className="field-label is-normal">
                                <label className="label">Therapist</label>
                            </div>
                            <div className="field">
                                0x52ff60eF8720Eb6aD4a530ca0D10831eccb69604
                                <a href="#">
                                    <i className="far fa-times-circle"></i>
                                </a>
                            </div>
                        </div>
                        <div>
                            <TodoList items={this.state.items} />
                        </div>
                        <form onSubmit={this.onSubmit}>
                            <div className="field">
                                <div className="control has-icons-left has-icons-right">
                                    <input className="input"
                                           type="text"
                                           name="DoctorPublicKey"
                                           placeholder="Doctor public key"
                                           value={this.state.DoctorPublicKey}
                                           onChange={this.onDoctorPublicKeyChange}/>
                                    <span className="icon is-small is-left">
                                        <i className="fas fa-user-md"></i>
                                    </span>
                                </div>
                            </div>
                            <div className="field">
                                <button className="button is-primary is-fullwidth">Share</button>
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
                    <i className="fas fa-tablets"></i>
                    <div className="field-label is-normal">
                        <label className="label">
                            Doctor
                        </label>
                    </div>

                    <div className="field" key={item.id}>
                        {item.text}
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