<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="display: flex; justify-content: center; align-items: center; height: 100vh;">
<?php
//ponemos el include para llamar al archivo clases y crear el nuevo objeto con el constructor posteriormente creado y lo pintamos en el html(puse el style junto tambien)
        include "Clases.php";

        $obj = new Envio("Nachete", "Pedido", "Solicito pedido Urgentemente")
        
 ?>   

    <h1 style="border:3px solid black;"> <?= $obj->ObtenerHTML() ?> </h1>


</body>
</html>