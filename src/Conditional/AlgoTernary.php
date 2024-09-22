<?php

declare(strict_types=1);

namespace PhpBenchmarks\Conditional;

final class AlgoTernary
{
    public function run(TestEnum $testEnum): int
    {
        return $testEnum === TestEnum::VALUE_ONE ? 1 : ($testEnum === TestEnum::VALUE_TWO ? 2 : ($testEnum === TestEnum::VALUE_THREE ? 3 : ($testEnum === TestEnum::VALUE_FOUR ? 4 : 0)));
    }

}
