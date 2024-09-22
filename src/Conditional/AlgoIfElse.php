<?php

declare(strict_types=1);

namespace PhpBenchmarks\Conditional;

final class AlgoIfElse
{

    public function run(TestEnum $testEnum): int
    {
        if ($testEnum === TestEnum::VALUE_ONE) {
            $value = 1;
        } elseif ($testEnum === TestEnum::VALUE_TWO) {
            $value = 2;
        } elseif ($testEnum === TestEnum::VALUE_THREE) {
            $value = 3;
        } elseif ($testEnum === TestEnum::VALUE_FOUR) {
            $value = 4;
        } else {
            $value = 0;
        }

        return $value;
    }

}
