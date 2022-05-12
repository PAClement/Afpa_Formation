import React, { useEffect, useState } from "react";
import axios from "axios";
import { useParams } from 'react-router-dom';
import { Link } from "react-router-dom";
import Navigation from "./Navigation";

const SuppClient = () => {
    const [succes, setsucces] = useState(false);

    let { id } = useParams();
    useEffect(() => {
        axios.delete(`http://localhost:4000/clients/${id}`).then((res) => {
            console.log(res);
            setsucces(true);
        }).catch(err => {
            console.log(err);
        });
    }, []);

    return (
        <>
            <Navigation />
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2 mt-5">
                        <div className={"alert alert-" + (succes ? "success" : "danger")} role="alert">
                            {succes === true ? `Le client ayant l'id ${id} a été supprimé avec succes.` : "Client introuvable."}<br />
                            <Link to={'/'} className="alert-link">Retour à la liste des clients</Link>
                        </div>
                    </div>
                </div>
            </div>
        </>
    );
}

export default SuppClient;