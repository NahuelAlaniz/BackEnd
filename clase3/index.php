<?php
// 1) Imprimir por pantalla: "Hola mundo"
echo "Hola mundo<br>";

// 2) Cargar en una variable (asignar) la cadena de caracteres "Hola mundo" y luego imprimir por pantalla.
$mensaje = "Hola mundo";
echo $mensaje . "<br>";

// 3) Crear dos variables enteras y mostrar por pantalla:
$numero1 = 10;
$numero2 = 5;

// La suma
$suma = $numero1 + $numero2;
echo "La suma es: " . $suma . "<br>";

// La resta
$resta = $numero1 - $numero2;
echo "La resta es: " . $resta . "<br>";

// La multiplicación
$multiplicacion = $numero1 * $numero2;
echo "La multiplicación es: " . $multiplicacion . "<br>";

// La división entera
$division_entera = $numero1 / $numero2;
echo "La división entera es: " . (int)$division_entera . "<br>";

// El resto de la división entera
$resto = $numero1 % $numero2;
echo "El resto de la división entera es: " . $resto . "<br>";

// 4) Realizar la transformación de grados Celsius a Fahrenheit para el valor 20°C y luego imprimir por pantalla.
$celsius = 20;
$fahrenheit = ($celsius * 9/5) + 32;
echo "20 grados Celsius son equivalentes a " . $fahrenheit . " grados Fahrenheit.<br>";

// 5) Calcular e imprimir el perímetro y el área de un rectángulo con base de 18cm y altura 12cm.
$base_rectangulo = 18;
$altura_rectangulo = 12;
$perimetro_rectangulo = 2 * ($base_rectangulo + $altura_rectangulo);
$area_rectangulo = $base_rectangulo * $altura_rectangulo;
echo "Para el rectángulo con base de 18cm y altura 12cm:<br>";
echo "El perímetro es: " . $perimetro_rectangulo . " cm<br>";
echo "El área es: " . $area_rectangulo . " cm^2<br>";

// 6) Calcular e imprimir el perímetro y el área de un círculo dado que su radio es de 30cm.
$radio_circulo = 30;
$pi = 3.14159265359;
$perimetro_circulo = 2 * $pi * $radio_circulo;
$area_circulo = $pi * $radio_circulo * $radio_circulo;
echo "Para el círculo con radio de 30cm:<br>";
echo "El perímetro es: " . $perimetro_circulo . " cm<br>";
echo "El área es: " . $area_circulo . " cm^2<br>";
?>












