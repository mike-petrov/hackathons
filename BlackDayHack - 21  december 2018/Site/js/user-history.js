function recordHistory(_entityId, _newNote) {

    contract.recordHistory.sendTransaction(_entityId, _newNote,
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
        this.onSubmit = this.onSubmit.bind(this);
    }

    onSubmit(event) {
        recordHistory(4, "Information");
        alert(`Successful`)
    }

    render() {return (
        <div className="containers has-background-dark">
            <div className="column is-8 is-offset-2">
                <div className="column is-5 has-background-danger">
                    <h1 className="title">
                        Patients # 83920657
                    </h1>
                    <div className="field">
                        <div className="field is-horizontal">
                            <div className="field-label is-normal">
                                <label className="label">First name</label>
                            </div>
                            <div className="field">
                                Mike
                            </div>
                        </div>
                        <div className="field is-horizontal">
                            <div className="field-label is-normal">
                                <label className="label">Second name</label>
                            </div>
                            <div className="field">
                                Petrov
                            </div>
                        </div>
                        <div className="field is-horizontal">
                            <div className="field-label is-normal">
                                <label className="label">Middle name</label>
                            </div>
                            <div className="field">
                                Ivanovich
                            </div>
                        </div>
                    </div>
                    <h1 className="title title-center">
                        History
                    </h1>
                    <div className="tile notification is-info">
                        <a className="subtitle" href="#">
                            01.12.2018
                        </a>
                    </div>
                    <div className="tile notification is-info">
                        <a className="subtitle" href="#">
                            01.11.2018
                        </a>
                    </div>
                    <div className="tile notification is-info">
                        <a className="subtitle" href="#">
                            Load more
                        </a>
                    </div>
                </div>
                <div className="column is-5 is-offset-6 has-background-danger">
                    <h1 className="title">
                        Inspection
                    </h1>
                    <form onSubmit={this.onSubmit}>
                        <div className="field">
                            <div className="control has-icons-left has-icons-right">
                                <textarea className="textarea" placeholder="То, что доктор прописал"></textarea>
                            </div>
                        </div>
                        <div className="field">
                            <button className="button is-primary is-fullwidth">Send</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    );
    }
}

ReactDOM.render(
    <Profile />,
    document.getElementById('react')
);