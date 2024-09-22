<?php

declare(strict_types=1);

namespace PhpBenchmarks\Looping;

use function array_map;

final class AlgoArrayMapWithUseFunction
{

    public function run(array $array): void
    {
        array_map(
            static fn ($value): int|float => $value * 2,
            $array
        );
    }
}
