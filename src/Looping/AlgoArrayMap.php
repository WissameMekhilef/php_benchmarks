<?php

declare(strict_types=1);

namespace PhpBenchmarks\Looping;

final class AlgoArrayMap
{

    public function run(array $array): void
    {
        array_map(
            static function ($value): int|float {
                return $value * 2;
            },
            $array
        );
    }
}
