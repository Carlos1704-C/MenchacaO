const path = require('path');

module.exports = 
{
    entry: './src/index.ks',output: {filename:'blunde.js', path: path.resolve(_dirname,'dist'), mode: 'production'}
}

