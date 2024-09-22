<?php

declare(strict_types=1);

namespace PhpBenchmarks\Conditional;

final class AlgoSwitchCase
{

        public function run(TestEnum $testEnum): int
        {
            switch ($testEnum) {
                case TestEnum::VALUE_ONE:
                    return 1;
                case TestEnum::VALUE_TWO:
                    return 2;
                case TestEnum::VALUE_THREE:
                    return 3;
                case TestEnum::VALUE_FOUR:
                    return 4;
            }
            return 0;
        }

}
