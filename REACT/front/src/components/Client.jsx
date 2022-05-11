import React from 'react';

const Client = ({ client }) => {
    return (
        <div className="card m-3" style={{ width: '18rem' }}>
            <div className="card-body">
                <h5 className="card-title">{client.nom} {client.prenom}</h5>
                <p className="card-text">Société : {client.societe}</p>
                <h6>Ca : {client.ca}</h6>
                <a href="#" className="btn btn-primary">Voir le client</a>
            </div>
        </div>
    );
};

export default Client;