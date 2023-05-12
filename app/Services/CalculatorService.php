<?php

/** Arquivo responsável pela lógica, todos os cálculos, validações e formatações são encontrados aqui 
 * 
 * author Cristiano Junior
*/

namespace App\Services;

class CalculatorService
{
    /**
     * Método responsável por fazer o cálculo da quantidade de tintas
     * @return array
     */
    public function calculate(array $data): array
    {
        $totalWallArea = 0;
        $totalDoorArea = 0;
        $totalWindowArea = 0;

        foreach ($data as $wall) {
            $width = $wall['width'];
            $height = $wall['height'];
            $area = $this->calculateWallArea($width, $height);

            if (!$this->validateWallArea($area)) {
                return [
                    "status" => false,
                    "message" => "A área da parede deve estar entre 1 e 50 metros quadrados!"
                ];
            }

            $totalWallArea += $area;

            if (isset($wall['doors'])) {
                $doorCount = $wall['doors'];
                $totalDoorArea += $this->calculateTotalDoorArea($doorCount);

                if (isset($wall['height']) && isset($wall['doors'])) {
                    $doorHeight = 1.9;
                    $wallHeight = $height;

                    if (!$this->validateDoorHeight($doorHeight, $wallHeight)) {
                        return [
                            "status" => false,
                            "message" => "A altura da parede com porta deve ser no mínimo 30 centímetros maior que a altura da porta."
                        ];
                    }
                }
            }

            if (isset($wall['windows'])) {
                $windowCount = $wall['windows'];
                $totalWindowArea += $this->calculateTotalWindowArea($windowCount);
            }
        }

        $litersNeeded = $this->calculatePaintLitersNeeded($totalWallArea, $totalDoorArea, $totalWindowArea);
        $cansNeeded = $this->calculatePaintCansNeeded($litersNeeded);

        return [
            "totalArea" => $totalWallArea,
            "totalCans" => $cansNeeded
        ];
    }

    /** Calcula a área da parede */
    private function calculateWallArea(float|int $width, float|int $height): int|float
    {
        return $width * $height;
    }

    /** Valida a área da parede, trava de 1 a 50 metros */
    private function validateWallArea(float|int $area): bool
    {
        return $area >= 1 && $area <= 50;
    }

    /** Valida a altura da porta, trava 30 centímetros menor que a altura da porta */
    private function validateDoorHeight(float|int $doorHeight, float|int $wallHeight): bool
    {
        return $wallHeight - $doorHeight >= 0.3;
    }

    /** Calcula a área total das portas */
    private function calculateTotalDoorArea(float|int $doorCount): int|float
    {
        return $doorCount * (0.8 * 1.9);
    }

    /** Calcula a área total das janelas */
    private function calculateTotalWindowArea(float|int $windowCount): int|float
    {
        return $windowCount * (2 * 1.2);
    }

    /** Calcula total de tinta necessária */
    private function calculatePaintLitersNeeded(float|int $totalWallArea, float|int $totalDoorArea, float|int $totalWindowArea): int|float
    {
        $usableWallArea = $totalWallArea - $totalDoorArea - $totalWindowArea;
        return $usableWallArea / 5;
    }

    /** Calcula total de latas de tintas necessárias de todos os tamanhos */
    private function calculatePaintCansNeeded(float|int $litersNeeded): mixed
    {
        $cans = [
            '18 L' => 0,
            '3.6 L' => 0,
            '2.5 L' => 0,
            '0.5 L' => 0
        ];

        foreach ($cans as $size => $count) {
            $aux = explode(" L", $size);
            $aux = floatval($aux[0]);
            while ($litersNeeded >= floatval($aux)) {
                $litersNeeded -= $aux;
                $cans[$size]++;
            }

            // Caso o valor da tinta necessária seja menor que 0.5, é acrescentado mais uma lata de 0.5
            if ($litersNeeded > 0 && $litersNeeded < 0.5) {
                $cans['0.5 L']++;
                break;
            }
        }

        return $cans;
    }
}
