import React from "react";
import { BrowserRouter as Router, Route, Routes } from "react-router-dom";
import Home from "./pages/Home";
import PageClient from "./pages/PageClient";
import AddClient from "./pages/AjoutClient";
import SuppClient from "./components/SuppClient";
import MajClient from "./components/MajClient";

function App() {
  return (
    <Router>
      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/clients/:id" name="PageClient" element={<PageClient />} />

        <Route path="/clients/supp/:id" element={<SuppClient />} />
        <Route path="/clients/maj/:id" element={<MajClient />} />

        <Route path="/add" element={<AddClient />} />
        <Route path="*" element={<Home />} />
      </Routes>
    </Router>
  );
}

export default App;
