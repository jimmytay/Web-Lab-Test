import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class CandidateById extends Component {
    constructor(props) {
        super(props);
        this.state = {
            candidate: null
        };
    }

    componentDidMount(){
        let url = "/api/candidates/" + this.props.id;

        fetch(url,{
            headers:{
                Accept:'application/json'
            },
            credentials: 'same-origin'
        }).then(response=>{
            if(!response.ok){
                throw Error([response.status, response.statusText].join(' '));
            }
            return response.json();
        }).then(result=>{
            console.log(result.data);
            this.setState({
                candidate:result.data
            });
        }).catch(error=>{
            alert(error)
        });
    }


    render(){
        let candidate = this.state.candidate;
        let content = null;

        if(!candidate) {
            content = (
                <p>Loading data...</p>
            )
        }
        else {
            content = (
                <div className="table-responsive">
                    <h2>Candidates Details</h2>
                    <div>
                        <div>
                            ID : {candidate.id}
                        </div>
                        <div>
                            Name : {candidate.name}
                        </div>
                        <div>
                            Party Name : {candidate.party.name}
                        </div>
                    </div>
                </div>
            )
        }

        return (
            <div>
                { content }
            </div>
        )
    }
}



(() => {
    const element = document.getElementById('contents-candidate')
    if (element) {
      const id = element.dataset.id;
        ReactDOM.render(<CandidateById id={id}/>, element);
    }
})();
