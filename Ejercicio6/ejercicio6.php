<?php
// Ejercicio 6: Nombre completo
//Cree una clase llamada Saludar, la misma tendrá un constructor que reciba nombre, apellido de una persona.
//Dicha clase debe implementar el método saludoFormal( $horario ) el cual debe responder concatenado al nombre un prefijo dependiendo del horario:
//05hs a 13hs “Buenos días”
//13hs a 21hs “Buenas tardes”
//21hs a 05hs “Buenas noches”
//Ej. para clase instanciada para Ezequiel Perez, y parámetro 9hs: “Buenos días Ezequiel Perez”
//Dicha clase debe implementar también el método saludoInformal( $horario ) el cual debe responder sin el apellido, iniciando con un “hola” por delante y al finalizar concatenar “que tengas un ...” saludo perteneciente al horario .
//Ej. para clase instanciada para Ezequiel Perez, y parámetro 9hs: “¡Hola Ezequiel! Que tengas un buen día”

class Saludar
{
    private $nombre;
    private $apellido;

    public function __construct($nombre, $apellido)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function saludoFormal($horario)
    {
        if ($horario >= 5 && $horario < 13) {
            return 'Buenos días ' . $this->nombre . ' ' . $this->apellido;
        } elseif ($horario >= 13 && $horario < 21) {
            return 'Buenas tardes ' . $this->nombre . ' ' . $this->apellido;
        } else {
            return 'Buenas noches ' . $this->nombre . ' ' . $this->apellido;
        }
    }

    public function saludoInformal($horario)
    {
        if ($horario >= 5 && $horario < 13) {
            return '¡Hola ' . $this->nombre . '! Que tengas un buen día';
        } elseif ($horario >= 13 && $horario < 21) {
            return '¡Hola ' . $this->nombre . '! Que tengas una buena tarde';
        } else {
            return '¡Hola ' . $this->nombre . '! Que tengas una buena noche';
        }
    }
}

$persona = new Saludar('Julian', 'Garcia Suarez');
echo 'Ejecuto el metodo saludoFormal con 21 hs y obtengo: ' . $persona->saludoFormal(21);
echo '<br>';
echo 'Ejecuto el metodo saludoInformal con 13 hs y obtengo: ' . $persona->saludoInformal(13);
echo '<br>';
