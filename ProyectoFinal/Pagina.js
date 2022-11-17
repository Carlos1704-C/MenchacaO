const config = require('./config');
const rest = new (require('rest-mssql-nodejs'))
({
user: config.user,
password: config.password,
server: config.server,
database: config.database,
});

setTimeout(async () => {
    const resultado = await rest.executeQuery('SELECT * FROM dbPagina');
    console.log(resultado.data);
},1500);