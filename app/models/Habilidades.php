<?php

// Clase para el aside de habulidades y herramientas

    class Habilidades{

        // Propiedes de la clase
        public $tituloHabilidad;
        public $habilidad01;
        public $habilidad02;
        public $habilidad03;
        public $habilidad04;
        public $habilidad05;
        public $habilidad06;

        // Constructor de la class Habilidades

        public function __construct(tituloHabilidad,habilidad01,habilidad02,habilidad03){

            $this->tituloHabilidad= $tituloHabilidad;
            $this->habilidad01 = $habilidad01;
            $this->habilidad02 = $habilidad02;
            $this->habilidad03 = $habilidad03;
 
        }

    }

