/* document.getElementById("MiBotonAjax").addEventListener("click", PedirHeader);
 */
        /* function PedirHeader()
        {
            var solicitud = new XMLHttpRequest();
            solicitud.onreadystatechange = function()
            {
            
            if(solicitud.readyState == 4 && solicitud.status == 200)
            {
                document.getElementById("MyDiv").innerHTML = solicitud.responseText;        
            }
        } */

       /*  solicitud.open("GET", "01,_CargarArchivo.txt",true);
        solicitud.send();
        }

        function IniciarHeader()
        {
            document.getElementById("MyDiv").innerHTML = "<h2>Este es un header nivel 2<h2>";
        }
 */
        $("#MiBotonAjax").click(function (){
            $("#mensaje").load('./Hola.html')
        });

        $("#Regresar").click(function(){
            $("#Mensaje").load('./Layout.html')
        }
        );
    