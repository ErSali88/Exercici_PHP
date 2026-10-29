<?php

// Funciones preestablecidas de php:
    // isset() --> permite saber si una variable existe
    // unset() --> liberar espacio en memoria de una variable
    // 

$var = "10";

unset($var);
if (isset($var)) {
    echo "La variable $var existe";
}else {
    echo "La variable no existe";
}


// gettype() --> nos retorna el tipo de variable que pasamos por parametro
// settype() --> asignamos un tipo de dato a la variable que pasamos por parametro
// empty() --> nos mira si una variable está vaciía, no existe o su valor es 0
// is_integer(var), is_double(var), is_string(var), is_bool(var), is_array(var), is_object(var)            //
                                                                                                           //
                                                                                                           //
/////////////////////////////////////////////////////////////////////////////////////////////////////////////


// Ex1: for para la tabla de multiplicar del 5

echo "<h2>Ejercicio 1: Tabla de multiplicar del 5</h2>";

$num = 5;

if(isset($num)){
    for($i = 1; $i <= 10; $i++){
        echo "$num x $i = " . $num*$i;
        echo "<br>";
    }else{
        echo "La variable num no existe";
    }
}

// Ex2: mostrar los numeros pares del 1 al 1000


echo "<br>";
echo "Pares de 1 al 100";
echo "<br>";

for($I = 0; $i <= 10; i++){
    if($i % 2 == 0){
        echo "El numero $i es par";
        echo  "<br>";
    }
}

// Ex3: dibuja una tabla html donde salgan las tablas de multiplicar del 1 al 10



?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicios PHP - For</title>
</head>
<body>

<?php
echo $tabla;
?>

</body>
</html>