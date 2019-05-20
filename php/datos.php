<?php
// variables
// header

require_once('app/models/Contacto.php');

$fran = new Contacto('Fran','Jimenez','fjimenenezjob@gmail.com','608709017','http://www.linkedin.com','kjdfjsnf');
$fran->twitter = 'https://twitter.com/?lang=es';

// $nombre= 'Fran';
// $apellido='Jiménez';
// // Cambio de logo segun iniciales de nombre y apellidos
// $logo= substr($nombre,0,1) . substr($apellido,0,1);
// $subtitulo='Desarrollador/Diseñador';
// $contacto=[
//     'mail'=> 'fjimenezjob@gmail.com',
//     'movil'=> '608709017',
//     'linkedin'=> '...',
//     'twitter'=> '@franloloco'
// ];
// **************************************
// section resumen
$resumen="Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem,
consectetur, voluptatibus tenetur
magni molestiae voluptatum mollitia animi autem libero voluptates porro distinctio accusamus
deleniti beatae sunt vel omnis! Veritatis, recusandae.
Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta excepturi id exercitationem ex, neque
aperiam accusantium numquam, sapiente, officiis placeat delectus? Ad similique dolor iusto hic porro
deleniti molestias perspiciatis.
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias, quae modi! Mollitia beatae enim
temporibus dolores commodi eius ullam quisquam natus magnam id quidem rem ducimus, ratione iste
distinctio quibusdam!
Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus repudiandae iste
distinctio, magni at porro odio? Provident natus dolorem nulla ducimus eaque alias similique,
quisquam aliquid, quae quaerat eos velit? Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem,
consectetur, voluptatibus tenetur
magni molestiae voluptatum mollitia animi autem libero voluptates porro distinctio accusamus
deleniti beatae sunt vel omnis! Veritatis, recusandae.
Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta excepturi id exercitationem ex, neque
aperiam accusantium numquam, sapiente, officiis placeat delectus? Ad similique dolor iusto hic porro
deleniti molestias perspiciatis.
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias, quae modi! Mollitia beatae enim
temporibus dolores commodi eius ullam quisquam natus magnam id quidem rem ducimus, ratione iste
distinctio quibusdam!
Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus repudiandae iste
distinctio, magni at porro odio? Provident natus dolorem nulla ducimus eaque alias similique,
quisquam aliquid, quae quaerat eos velit?";
// seccion de experiencia de la pagina web********************************************

$experiencia =[
// array [0]
[
'PHP desarrollador',// [0] [0]
'AQUI VA UN PARRAFO CON LA EXPLICACION DE LO QUE HICISTE EN EL TRABAJO', //  [0] [1]
'desde hace 15 años en el mundo del php',// [0][2]....
'aplicacion web para un centro comercial',
'internet para mediana empresa'],
// array 2
[
'Trabajador de un frankfurt de camarero',
'AQUI VA UN PARRAFO CON LA EXPLICACION DE LO QUE HICISTE EN EL TRABAJO',
'Pintor de casas',
'Paleta',

    ],
// array 3
[
'Conductor de rallys',
'AQUI VA UN PARRAFO CON LA EXPLICACION DE LO QUE HICISTE EN EL TRABAJO',
'Conductor de toros',
'Pintor'
]
];

// array de aside HABILIDADES
$habilidades=[
['Backend',
'SQL',
'PHP',
'PYTHON'
],
[
'Frontend',
'HTML',
'CSS',
'JavaScript'  
]
];

// var de proyectos
$nombreExplicacion=2;
// var de habilidades
$exp=1;

// ARRAY DE PROYECTOS
$proyectos=[
    [
     'img/logos/logo01.JPG',
     'RESUMEN DEL PROYECTO',
     'HTML',
     'PHP',
     'CSS',
     'JS',
     'PHP'   
    ],
    [
        'img/logos/logo02.JPG',
        'RESUMEN DEL PROYECTO',
        'HTML',
        'PHP',
        'CSS',
        'JS',
        'PHP' 
    ],
    [
        'img/logos/logo03.JPG',
        'RESUMEN DEL PROYECTO',
        'HTML',
        'PHP',
        'CSS',
        'JS',
        'PHP' 
    ]
    
];