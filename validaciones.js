function ValidarFormulario(formulario) {
    nombre = formulario.nombre.value;
    if (nombre.length <3) {
        alert ("El nombre tiene que tener al menos 3 caracteres");
        return;
    }
    asunto = formulario.asunto.value;
    if (asunto.length <3) {
        alert ("El asunto tiene que tener al menos 3 caracteres");
        return;
    }
    mensaje = formulario.mensaje.value;
    if (mensaje.length <3) {
        alert ("El mensaje tiene que tener al menos 3 caracteres");
        return;
    }
}