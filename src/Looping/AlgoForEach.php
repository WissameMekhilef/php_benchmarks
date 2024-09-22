<?php

declare(strict_types=1);

namespace PhpBenchmarks\Looping;

final class AlgoForEach
{

    public function run(array $array): void
    {
        foreach ($array as $key => $value) {
            $array[$key] = $value * 2;
        }
    }
}
