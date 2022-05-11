import React from "react";
import { BrowserRouter as Router, Route, Routes } from "react-router-dom";
import Home from "./pages/Home";
import Test from "./pages/Test";
import PageClient from "./pages/PageClient";

function App() {
  return (
    <Router>
      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/test" element={<Test />} />
        <Route path="/clients/:id" name="PageClient" element={<PageClient />} />
        <Route path="*" element={<Home />} />
      </Routes>
    </Router>
  );
}

export default App;
