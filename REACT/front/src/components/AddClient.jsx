import React, { useState, useId } from "react";
import axios from "axios";
import Client from "./Client";

const AddClient = () => {
    const [prenom, setPrenom] = useState('');
    const [nom, setNom] = useState('');
    const [societe, setSociete] = useState('');
    const [ca, setCa] = useState('');
    const [ajout, setAjout] = useState(false);
    const [client, setClient] = useState('');

    const id = useId();

    const modifPrenom = (e) => {
        setPrenom(e.target.value);
    }
    const modifNom = (e) => {
        setNom(e.target.value);
    }
    const modifSociete = (e) => {
        setSociete(e.target.value);
    }
    const modifCa = (e) => {
        setCa(e.target.value);
    }

    const ajoutContact = (e) => {
        e.preventDefault();

        axios.post("http://localhost:4000/clients", {
            id,
            prenom,
            nom,
            societe,
            ca,
        }).then((res) => {
            setAjout(true);
            setClient(res.data);
            setPrenom("");
            setNom("");
            setSociete("");
            setCa("");
        }).catch(err => {
            console.log(err);
        });
    };
    const form =
        <form>
            <div className="row">
                <div className="col-6">
                    <div className="form-group">
                        <label htmlFor="prenom">Prénom</label>
                        <input type="text" className="form-control" id="prenom" onChange={modifPrenom} required />
                    </div>
                </div>
                <div className="col-6">
                    <div className="form-group">
                        <label htmlFor="nom">Nom</label>
                        <input type="text" className="form-control" id="nom" onChange={modifNom} required />
                    </div>
                </div>
            </div>

            <div className="form-group my-3">
                <label htmlFor="societe">Société</label>
                <input type="text" className="form-control" id="societe" onChange={modifSociete} required />
            </div>

            <div className="form-group">
                <label htmlFor="ca">CA</label>
                <input type="number" className="form-control" id="ca" onChange={modifCa} required />
            </div>

            <div className="row mt-3">
                <div className="col">
                    <input type="submit" className="btn btn-primary" value="Ajouter Client" onClick={ajoutContact} />
                </div>
                <div className="col">
                    <input type="reset" className="btn btn-danger" value="Réinitialiser" />
                </div>
            </div>
        </form>;


    return (
        <div className="container">
            <div className="row">
                <div className="col-md-6 offset-md-3">
                    {!ajout ? form :
                        <div>
                            <Client key={client.id} client={client} />
                            <br />
                            <input type="submit" className="btn btn-primary m-3" value="Ajouter" onClick={ajoutContact} />
                        </div>
                    }
                </div>
            </div>
        </div>
    );
}

export default AddClient;