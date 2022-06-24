<?php

function Acomodate($edad){
    if ($edad<5) {
        echo "El estudiante con  $edad años tendrá sus juguetes en la parte inferior de la bodega.<br>";}

    elseif ($edad>5 && $edad<7) {
        echo "El estudiante con  $edad años tendrá sus juguetes en la parte media de la bodega.<br> ";}

    elseif ($edad>7 ){ 
        echo "El estudiante con  $edad años tendrá sus juguetes en la parte superior de la bodega.<br>";}
    
}
echo "bienvenidos al jardin, acomoden sus cosas en la bodega <br>";
Acomodate(18);
Acomodate(6);
Acomodate(10);

