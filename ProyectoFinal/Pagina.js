const sql = require('mssql');
//Configuracion de la base de datos
var config = 
{
    user:'Carlos',
    password:'carlos123',
    database: 'dbPagina', //Nombre de la base de datos
    server:'localhost',
    options:
    {
        TrustedConnection: true
    }
};

//Conexion a la base de datos

sql.connect(config,function(err){
    if(err){
        console.log(err);
    }
    //Crear el objeto 
    var request =  new sql.Request();
    // Query consulta a la base de datos
    request.query('SELECT * FROM Registros', function(err,recordSet){
        if(err){
            console.log(err);
        }else{
             console.log(recordSet);
             console.log("Conectado existosamente");
        }
    });
});