import React, { useEffect, useState } from "react";
import axios from "axios";
import { useParams } from 'react-router-dom'

const SeeClient = () => {
    const [client, setClient] = useState('');
    let { id } = useParams();

    useEffect(() => {
        axios.get(`http://localhost:4000/clients/${id}`).then((res) => {

            setClient(res.data);
        }).catch(err => {

            console.log(err);
        });
    }, []);


    return (
        <>
            <div className="container">
                <div className="media">
                    <div className="media-body">
                        <h5 className="mt-0 mb-1">{client.prenom} {client.nom}</h5>
                        <p>
                            Société : {client.societe} <br />
                            CA : {client.ca}
                        </p>
                    </div>
                </div>
            </div>
        </>
    );
}

export default SeeClient;