import React from 'react';
import AddClient from '../components/AddClient';
import Navigation from '../components/Navigation';

const AjoutClient = () => {
    return (
        <>
            <Navigation />
            <h2>Formulaire Ajout</h2>
            <AddClient />
        </>
    );
};

export default AjoutClient;