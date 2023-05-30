<?php
/**
 * Este script realiza operaciones de suma y resta entre dos números.
 *
 * @version 2.0
 * @category Operaciones Matemáticas
 * @author Armando Vicente Hurtado Escolano
 */

/**
 * Función para sumar dos números
 *
 * @param int $num1 El primer número
 * @param int $num2 El segundo número
 * @return int La suma de los dos números
 * @version 1.0
 * @throws InvalidArgumentException Si alguno de los parámetros no es un número
 */
function sumar($num1, $num2) {
    if (!is_numeric($num1) || !is_numeric($num2)) {
        throw new InvalidArgumentException('Ambos parámetros deben ser números');
    }
    return $num1 + $num2;
}

/**
 * Función para restar dos números
 *
 * @param int $num1 El primer número
 * @param int $num2 El segundo número
 * @return int La resta de los dos números
 * @version 1.0
 * @throws InvalidArgumentException Si alguno de los parámetros no es un número
 */
function restar($num1, $num2) {
    if (!is_numeric($num1) || !is_numeric($num2)) {
        throw new InvalidArgumentException('Ambos parámetros deben ser números');
    }
    return $num1 - $num2;
}

// Variables para las operaciones
$num1 = 10;
$num2 = 5;

try {
    // Llamada a la función de suma
    $suma = sumar($num1, $num2);
    echo "Suma: " . $suma . "<br>";

    // Llamada a la función de resta
    $resta = restar($num1, $num2);
    echo "Resta: " . $resta . "<br>";
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage();
}

?>
