<?php
//Creamos una clase con sus atributos en privado para que nadie pueda acceder creamos el constructor y una funcion con el mensaje
    class Envio{
        private $Nombre;
        private $Asunto;
        private $Mensaje;

       function __construct($Nombre, $Asunto, $Mensaje){
            $this->Nombre = $Nombre;
            $this->Asunto = $Asunto;
            $this->Mensaje = $Mensaje;
        }

        function ObtenerHTML(){
           return $msj = "Muchas gracias " . $this->Nombre . " por el mensaje.." . $this->Mensaje . " con el asunto " . $this->Asunto . ". Su mensaje nos sera de gran ayuda.";

        }
    }
?>