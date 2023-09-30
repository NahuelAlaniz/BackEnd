<?php
// 1) Mostrar los números del 1 al 9.
echo "1) Mostrar los números del 1 al 9:<br>";
for ($i = 1; $i <= 9; $i++) {
    echo $i . " ";
}
echo "<br><br>";

// 2) Mostrar los números del 9 al 1.
echo "2) Mostrar los números del 9 al 1:<br>";
for ($i = 9; $i >= 1; $i--) {
    echo $i . " ";
}
echo "<br><br>";

// 3) Mostrar los números pares del 1 al 20.
echo "3) Mostrar los números pares del 1 al 20:<br>";
for ($i = 2; $i <= 20; $i += 2) {
    echo $i . " ";
}
echo "<br><br>";

// 4) Mostrar los números impares del 1 al 20.
echo "4) Mostrar los números impares del 1 al 20:<br>";
for ($i = 1; $i <= 20; $i += 2) {
    echo $i . " ";
}
echo "<br><br>";

// 5) Mostrar la suma de los números del 1 al 20.
echo "5) Mostrar la suma de los números del 1 al 20:<br>";
$suma = 0;
for ($i = 1; $i <= 20; $i++) {
    $suma += $i;
}
echo "La suma es: " . $suma . "<br><br>";

// 6) Mostrar la suma de los números pares del 1 al 20.
echo "6) Mostrar la suma de los números pares del 1 al 20:<br>";
$sumaPares = 0;
for ($i = 2; $i <= 20; $i += 2) {
    $sumaPares += $i;
}
echo "La suma de los pares es: " . $sumaPares . "<br>";
?>
