<?php

//  FUNCION DE INICIO DE HTMl*********************************

function inicioHTML($link01='reset.css',$link02='stylesheet.css',$titulo){
echo('<!DOCTYPE html>');
echo('<html lang="es">');
echo('<head>');
echo('<meta charset="UTF-8">');
echo('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
echo('<meta http-equiv="X-UA-Compatible" content="ie=edge">');
echo('<link rel="stylesheet" href="' . $link01 . '">');
echo('<link rel="stylesheet" href="' . $link02 . '">');
echo('<title>' . $titulo . '</title>');
echo('</head>');
};


// FUNCION DE EXPERIENCIA**************************************************
function experiencia() {
    include 'datos.php';
    for($i=0; $i < count($experiencia);$i++){
                    
        echo('<article class="todoexp">');
        echo('<ul class="experiencias__experiencia">');
    
                if(isset($experiencia[$i][0])){
                    echo('<li class="experiencias__experiencia__titulo subtitulocentral">');
    
                        echo($experiencia[$i][0]);
    
                    echo('</li>');
                };
    
                    if(isset($experiencia[$i][1])){
    
                    echo('<p class="experiencias__experiencia__texto parrafo">');
                    echo($experiencia[$i][1]);
                
                    echo('</p>');
                    };

                echo('</ul>');
    
                echo('<ul class="proyectos subtitulocentral">');
                // PROYECTOS
                
                 // contador de proyectos
                $contadorProyectos= count($experiencia[$i])-$nombreExplicacion;
                // bucle
echo('('. $contadorProyectos. ')' . ' '. 'Proyectos');
$c=0;
                while($c<$contadorProyectos){
                    echo('<li class="proyectos__uno parrafo">');
                    echo($experiencia[$i][$nombreExplicacion + $c]);
                    echo('</li>');
                    $c++;
                };
                echo('</ul>');
                echo('</article>');
        };
 };

//  FUNCION DE HABILIDADES
function aside(){
include 'datos.php';
for($i=0; $i < count($habilidades);$i++){
$contadorherramientas=count($habilidades[$i]) -$exp;            
                    
                if(isset($habilidades[$i][0])){
                    echo('<h3 class="tituloHab">'); echo($habilidades[$i][0]);  echo('<h3>');
                    echo('<ul>');
                };
$b=0;
                while($b<$contadorherramientas){
                echo('<li>'); 
                echo($habilidades[$i][$exp + $b]); 
                echo('</li>');
                $b++;
                };
            };
                echo('</ul>');
                };
// FUNCION DE APARTADO DE PROYECTOS DEFINIDOS
function proyectos(){
    include 'datos.php';
    for($i=0; $i < count($proyectos); $i++){
 
    echo('<article>');
    // NUMERACION DEL PROYECTO
    echo('<h4>Proyecto' . ' ' . ($i+1).  '</h4>');
    // IMAGEN DE PROYECTO
    echo('<img src="'. $proyectos[$i][0] . '" alt="logo">');
    // BLOQUE DE TEXTO
    echo('<div class="texto">');
    echo('<p>');
echo($proyectos[$i][1]);
    echo('</p>');
    // TITULO ICONOS
    echo('<h4> Tecnologia usada:</h4>');
    // ICONOS
$cc=2;
while($cc<count($proyectos[$i])){
    echo('<h3 class"icono">');
    echo($proyectos[$i][$cc]);
    echo('</h3>');
    $cc++;
};
    echo('</div>');

    echo('</article>');
};};
