import React,{Component} from 'react';
import {
    Route,
    BrowserRouter as Router,
    Link,
} from "react-router-dom";

export default class Header extends Component{
    render() {
        return (
            <Router>
                <div>
                    <Link to='/' >Home</Link>
                    <Link to='/' >About</Link>
                    <Route component={Home} />
                    <Route component={About} />
                </div>
            </Router>
        );
    }
}
