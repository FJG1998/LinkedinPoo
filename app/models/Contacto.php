<?php

        // clase contacto que es el molde de los futuros objetos
  

Class Contacto{

    // Propiedades de la clase

    public $nombre;
    public $apellido;
    public $subtitulo = Desarrollo;
    public $email = 'no incluido';
    public $movil = 'No incluido';
    public $linkedin = 'no incluido';
    public $twitter = 'no incluido';
    public $resumen = 'no incluido';

    // CONSTUCTOR DE LA CLASE 'Contacto'.

    public function __construct($nombre, $apellido,$email,$movil,$linkedin,$resumen){

        // Propiedad que se le asignan los datos a traves de la propiedad nombre a traves del constructor.

        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->linkedin = $linkedin;
        $this->movil = $movil; 
        $this->resumen = $resumen;
}
    
// Comportamiento de la clase contacto

    public function logo(){

        // Cambiamos los paramteros de las variables por 'this->' que coje la informacion de la clase 'contacto'.
        $letra01 = strtoupper (substr($this->nombre,0,1));
        $letra02 = strtoupper (substr($this->apellido,0,1));

        return ($letra01. $letra02);

    }
}