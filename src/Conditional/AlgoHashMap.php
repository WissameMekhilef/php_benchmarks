<?php

declare(strict_types=1);

namespace PhpBenchmarks\Conditional;

final class AlgoHashMap
{
    public function run(TestEnum $testEnum): int
    {
        $map = [
            TestEnum::VALUE_ONE->value => 1,
            TestEnum::VALUE_TWO->value => 2,
            TestEnum::VALUE_THREE->value => 3,
            TestEnum::VALUE_FOUR->value => 4,
        ];

        return $map[$testEnum->value] ?? 0;
    }

}
