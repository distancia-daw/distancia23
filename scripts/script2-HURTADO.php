<?php

/**
 * Clase Calculadora.
 *
 * Esta clase contiene métodos para realizar diferentes operaciones matemáticas.
 *
 * @autor Armando Vicente Hurtado Escolano
 * @version 2.0
 * @category Matemáticas
 */
class Calculadora {

    /**
     * Calcula el promedio de un conjunto de números.
     *
     * @param array $numeros Array de números para calcular el promedio.
     * @return float El promedio de los números.
     * @throws InvalidArgumentException Si el parámetro $numeros no es un array o está vacío.
     * @version 1.0
     */
    public function calcularPromedio($numeros) {
        if (!is_array($numeros) || empty($numeros)) {
            throw new InvalidArgumentException("El parámetro \$numeros debe ser un array no vacío.");
        }

        $cantidad = count($numeros);
        $suma = array_sum($numeros);
        return $suma / $cantidad;
    }

    /**
     * Calcula el factorial de un número.
     *
     * @param int $numero Número para calcular su factorial.
     * @return int El factorial del número.
     * @throws InvalidArgumentException Si el parámetro $numero no es un entero positivo.
     * @version 1.0
     */
    public function obtenerFactorial($numero) {
        if (!is_int($numero) || $numero < 0) {
            throw new InvalidArgumentException("El parámetro \$numero debe ser un entero positivo.");
        }

        $factorial = 1;
        for ($i = 1; $i <= $numero; $i++) {
            $factorial *= $i;
        }
        return $factorial;
    }
}

// Crear una instancia de la clase Calculadora
$calculadora = new Calculadora();

// Ejemplo de uso de los métodos de la clase
try {
    $promedio = $calculadora->calcularPromedio([10, 15, 20, 25]);
    echo "El promedio es: " . $promedio . "\n";
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}

try {
    $factorial = $calculadora->obtenerFactorial(5);
    echo "El factorial es: " . $factorial . "\n";
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}

?>
