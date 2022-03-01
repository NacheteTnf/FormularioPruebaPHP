<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div id="contenedorWhite">
        <h1 id="title">Formulario de contacto</h1>
        <p id="description">Escribenos y en breve nos pondremos en contacto contigo</p>
        <form action="GestionarFormulario.php" method="POST">
            <table id="tabla">
                <tr>
                    <td>
                        <label for="nombre">Nombre <span>*</span></label>
                    </td>
                    <td>
                        <input required type="text" name="nombre" placeholder="Escribe tu nombre">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="nombre">Asunto <span>*</span></label>
                    </td>
                    <td>
                        <input required type="text" name="asunto" placeholder="Escribe un asunto">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="mensaje">Mensaje <span>*</span></label>
                    </td>
                    <td>
                        <textarea required name="mensaje" placeholder="Deja aqui tu comentario..." id="descripcion" cols="72" rows="12"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" id="ContenedorBoton">
                        <input type="submit" value="ENVIAR" id="boton" onclick="ValidarFormulario(this.form)">
                    </td> 
                    <td>
                    <p id="obligatorio"><span>*</span> los campos son obligatorios.</p>
                    </td>
                </tr>
               
            </table>
        </form>
    </div>
    <script src="validaciones.js"></script>
</body>
</html>