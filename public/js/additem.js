

import React from "react";
import ReactDOM from "react-dom";

var HelloComponent = React.createClass({
    render: function() {
        return (
            <h1>Hello</h1>

        )
    }
})

ReactDOM.render(<HelloComponent />, document.querySelector('.table-responsive'))


    ReactDOM.render(
    <h1>Hello, world!</h1>,
    document.getElementById('aaa')
    );

