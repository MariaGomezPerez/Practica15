<!DOCTYPE html>
<html>
<head>
<title>Practica 15</title>   
    <meta charset="utf-8"/>
    <SCRIPT>
    function mensaje(){
        alert("Hola mundo JavaScript"); //para mandar a llara el javascript
        enviar();
    }
        function enviar(){
            var _nombre=document.getElementById("nom").value;// servidor de lado del cliente para enviar de lado alservidor.
            var _edad=document.getElementById("ed").value;
            if(_nombre=="")
                {
                    alert("Te falata el nombre");
                    return;
                }
            if(_edad=="")
                {
                    alert("Te falata el edad");
                    return;
                }
            document.getElementById("miForm").submit();
        }
    </SCRIPT>
</head>
    <body>
        <form method="post" action="validacion.php" id="miForm">
           <p>
               NOMBRE:
               <input type="text" name="nombre" id="nom"/>
            <br/>
            EDAD:
            <input type="text" name="edad" id="ed"/>
            <br/>
          
            <input type="button" value="ENVIAR" onclick="mensaje()"/>
            <!--para mandar a llamar el mensaje escrito en alert en onclick para que se visualize -->
           </p>
            
        </form>
    </body>
</html>
