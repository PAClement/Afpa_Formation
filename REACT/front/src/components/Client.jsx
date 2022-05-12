import React from 'react';
import { Link } from 'react-router-dom';

const Client = ({ client }) => {
    return (
        <div className="card m-3" style={{ width: '18rem' }}>
            <div className="card-body">
                <h5 className="card-title">{client.nom} {client.prenom}</h5>
                <p className="card-text">Société : {client.societe}</p>
                <h6>Ca : {client.ca}</h6>
                <Link to={`/clients/${client.id}`} className="btn btn-primary">Voir</Link>
                <Link to={`/clients/supp/${client.id}`} className="btn btn-danger mx-3">Del</Link>
                <Link to={`/clients/maj/${client.id}`} className="btn btn-info">Edit</Link>
            </div>
        </div>
    );
};

export default Client;