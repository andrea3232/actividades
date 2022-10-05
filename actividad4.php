<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 4</title>
    
</head>
<body>
    <h1 id="paco">soy una simple página!!! =( =( =(</h1>
    <button id="btnrojo" style="background-color:red;"onmouseover="rojo()">red</button>
    <button id="btnamarillo" style="background-color:yellow;"onmouseover="amarillo()">yellow</button>
    <button id="btnverde" style="background-color:green;"onmouseover="verde()">green</button>

    <script>
        function rojo(){
            //alert("outch soy rojo");
            document.getElementById("paco").style.backgroundColor ="red";
        }
        function amarillo(){
            //alert("outch soy amarillo");
            document.getElementById("paco").style.backgroundColor ="yellow";
        }
        function verde(){
            //alert("outch soy verde");
            document.getElementById("paco").style.backgroundColor ="green";
        }
    </script>

</body>
</html>