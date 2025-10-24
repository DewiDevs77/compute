<?php

namespace Compute;

class Math
{
    public static function factorial(int $n): int
    {
        return $n <= 1 ? 1 : $n * self::factorial($n - 1);
    }

    public static function fibonacci(int $n): int
    {
        return $n <= 1 ? $n : self::fibonacci($n - 1) + self::fibonacci($n - 2);
    }

    public static function percentage(float $part, float $whole, int $precision = 2): float
    {
        if ($whole == 0) return 0;
        return round(($part / $whole) * 100, $precision);
    }
}
