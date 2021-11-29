import React from 'react';
import ReactDOM from 'react-dom';

function Example() {
    return (
        <div className="mx-auto">
            <h2 className="mt-2 text-center text-gray-800 font-bold">Hello world</h2>
        </div>
    );
}

export default Example;

if (document.getElementById('root')) {
    ReactDOM.render(<Example />, document.getElementById('root'));
}
