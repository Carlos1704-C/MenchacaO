function EsconderElemento()
{
    document.getElementById('hiddeninfo').style.display = "none";
}

function MostrarElemento()
{
    document.getElementById('hiddeninfo').style.display = "block";
}

/* Boton crear PDF */
/* Boton prioritario para la pagina*/

document.addEventListener("DOMContentLoaded",()=> {

    const $Boton = document.getElementById('btnGuardar');
    $Boton.addEventListener("click", ()=> {
        
        const $ElementoAConvertir = document.getElementById("MainDiv");
        html2pdf()
        .set({
            margin: 1,
            image: {
            type: 'jpeg',
            quality: 0.98
            },
            html2canvas: {
            scale: 3,
            letterRendering: true,
            },
            jsPDF: {
                unit: "in",
                format: "a2",
                orientation: "portrait"
            }
        })
        .from($ElementoAConvertir)
        .save()
        .catch(err => console.log(err));
    });
});


/* Ocultar las celdas de la columna TotalCell, excepto la ultima, y agregandole estilos*/
var CeldasTotal = document.getElementsByClassName("Total");
for(var i=0;i< CeldasTotal.length-1;i++){
    CeldasTotal[i].innerHTML= "";
}

CeldasTotal[CeldasTotal.length-1].classList.add("Ultima-Celda");

/* Confirmar nueva nota, como forma de excepcion */

const Link = document.getElementById("LinkNuevaNota");

Link.addEventListener("click",function(event){
const mensaje = "Esta seguro que desea hacer esta accion? SE BORRARAN TODOS LOS DATOS DE LA TABLA";
const confirm = confirm(mensaje);

if(!confirm)
{
    event.preventDefault();
}
})

/* Imprimir version 2.0 */
const printBtn = document.getElementById("BtnGuardar");

  printBtn.addEventListener("click", () => {
    const event = new KeyboardEvent("keydown", {
      ctrlKey: true,
      keyCode: 80 // Código de tecla para la tecla "P"
    });

    document.dispatchEvent(event);
});


/*Agregar cliente y fecha a la tabla*/
function agregarFila() {
    // Obtener los valores del input
    var valor1 = document.getElementById("NombreCliente").value;
    var valor2 = document.getElementById("fechaNota").value;
    
    // Crear una nueva fila en la tabla
    var fila = document.createElement("tr");
    var celda1 = document.createElement("td");
    var celda2 = document.createElement("td");
    celda1.textContent = valor1;
    celda2.textContent = valor2;
    fila.appendChild(celda1);
    fila.appendChild(celda2);
    
    // Agregar la nueva fila a la tabla
    var tabla = document.getElementById("ClientYFechaTable").getElementsByTagName("tbody")[0];
    tabla.appendChild(fila);

    document.getElementById("NombreCliente").value = "";
    document.getElementById("fechaNota").value = "";


    // Deshabilitar el botón
    document.getElementById("AddInfo").disabled = true;
  }
  

