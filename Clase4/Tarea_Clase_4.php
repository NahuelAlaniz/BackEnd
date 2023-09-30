<?php
// Ejercicio 1
$n = 5; // Asigna el valor numérico que desees

if ($n > 0) {
    echo "El número ingresado es un número positivo";
}

// Ejercicio 2
$n = 7; // Asigna el valor numérico que desees

if ($n > 1 && $n < 10) {
    echo "El número ingresado es mayor a 1 y menor a 10";
}

// Ejercicio 3
$n = 12; // Asigna el valor numérico que desees

if ($n >= 10 || $n < 2) {
    echo "El número ingresado es mayor o igual a 10 o menor a 2";
} else {
    echo "El número ingresado no pudo ser validado";
}

// Ejercicio 4
$numero1 = 8; // Asigna el primer valor numérico que desees
$numero2 = 4; // Asigna el segundo valor numérico que desees

if ($numero1 > $numero2) {
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    echo "La suma es: " . $suma . "<br>";
    echo "La resta es: " . $resta;
} elseif ($numero2 > $numero1) {
    $multiplicacion = $numero1 * $numero2;
    $division = $numero2 / $numero1;
    $resto = $numero2 % $numero1;
    echo "La multiplicación es: " . $multiplicacion . "<br>";
    echo "La división entera es: " . $division . "<br>";
    echo "El resto es: " . $resto;
} else {
    echo "Los números ingresados son iguales";
}
?>
