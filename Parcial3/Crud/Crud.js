async function TraerDatos(){
    let headersList = {
        "Accept": "*/*",
    }

    let response = await fetch("http://localhost/apellidos/MenchacaO/Parcial3/Crud/Crud.php", {
        method: "GET",
        headers: headersList
    });

    let datos = await response.json();
    
    new gridjs.Grid({
            columns: ["Id_Alumno","Nombre","Apellido","Telefono","Edad"], data: datos
        }).render(document.getElementById("wrapper"));
    }
    TraerDatos();


