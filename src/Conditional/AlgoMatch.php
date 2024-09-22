<?php

declare(strict_types=1);

namespace PhpBenchmarks\Conditional;

final class AlgoMatch
{
    public function run(TestEnum $testEnum): int
    {
        return match ($testEnum) {
            TestEnum::VALUE_ONE => 1,
            TestEnum::VALUE_TWO => 2,
            TestEnum::VALUE_THREE => 3,
            TestEnum::VALUE_FOUR => 4,
        };
    }

}
