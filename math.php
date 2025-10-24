<?php

namespace Compute;

class Math
{
    public static function factorial(int $n): int
    {
        if ($n < 0) {
            throw new \InvalidArgumentException('Angka tidak boleh negatif.');
        }

        $result = 1;
        for ($i = 2; $i <= $n; $i++) {
            $result *= $i;
        }
        return $result;
    }

    public static function fibonacci(int $n): int
    {
        if ($n < 0) {
            throw new \InvalidArgumentException('Angka tidak boleh negatif.');
        }
        if ($n <= 1) return $n;

        $a = 0;
        $b = 1;
        for ($i = 2; $i <= $n; $i++) {
            $temp = $a + $b;
            $a = $b;
            $b = $temp;
        }
        return $b;
    }

    public static function percentage(float $part, float $whole, int $precision = 2): float
    {
        if ($whole == 0.0) return 0.0;
        return round(($part / $whole) * 100, $precision);
    }

    public static function average(array $numbers, int $precision = 2): float
    {
        if (empty($numbers)) return 0.0;
        $sum = array_sum($numbers);
        return round($sum / count($numbers), $precision);
    }

    public static function stddev(array $numbers, int $precision = 2): float
    {
        $count = count($numbers);
        if ($count === 0) return 0.0;

        $mean = array_sum($numbers) / $count;
        $variance = array_reduce($numbers, fn($carry, $num) => $carry + pow($num - $mean, 2), 0) / $count;
        return round(sqrt($variance), $precision);
    }
}
