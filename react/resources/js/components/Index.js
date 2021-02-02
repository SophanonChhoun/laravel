import React from 'react';
import ReactDOM from 'react-dom';
import Header from "./Header";
import Footer from "./Footer";
import Home from "./Home";

function Index() {
    return (
        <div className="container">
            <Header />
            <Home />
            <Footer />
        </div>
    );
}

export default Index;

if (document.getElementById('index')) {
    ReactDOM.render(<Index />, document.getElementById('index'));
}
