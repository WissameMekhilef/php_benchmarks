<?php

declare(strict_types=1);

namespace PhpBenchmarks\Benchmark;

use PhpBench\Attributes\Iterations;
use PhpBench\Attributes\RetryThreshold;
use PhpBench\Attributes\Revs;
use PhpBenchmarks\Conditional\AlgoHashMap;
use PhpBenchmarks\Conditional\AlgoIfElse;
use PhpBenchmarks\Conditional\AlgoMatch;
use PhpBenchmarks\Conditional\AlgoSwitchCase;
use PhpBenchmarks\Conditional\AlgoTernary;
use PhpBenchmarks\Conditional\TestEnum;

final readonly class AlgoConditionalBench
{

    private const int REVS = 1000;
    private const int ITERATIONS = 100;
    private const int|float RETRY_THRESHOLD = 0.5;

    private array $enumValues;

    public function __construct(
//        private AlgoHashMap $algoHashMap = new AlgoHashMap(),
        private AlgoIfElse $algoIfElse = new AlgoIfElse(),
        private AlgoMatch $algoMatch = new AlgoMatch(),
        private AlgoSwitchCase $algoSwitchCase = new AlgoSwitchCase(),
        private AlgoTernary $algoTernary = new AlgoTernary(),
    )
    {
        $this->enumValues = TestEnum::cases(); // Get all enum values
    }

    #[
        Revs(self::REVS),
        Iterations(self::ITERATIONS),
        RetryThreshold(self::RETRY_THRESHOLD),
    ]
    public function benchIfElse(): void
    {
        foreach ($this->enumValues as $enumValue) {
            $this->algoIfElse->run($enumValue);
        }
    }

    #[
        Revs(self::REVS),
        Iterations(self::ITERATIONS),
        RetryThreshold(self::RETRY_THRESHOLD),
    ]
    public function benchTernary(): void
    {
        foreach ($this->enumValues as $enumValue) {
            $this->algoTernary->run($enumValue);
        }
    }

    #[
        Revs(self::REVS),
        Iterations(self::ITERATIONS),
        RetryThreshold(self::RETRY_THRESHOLD),
    ]
    public function benchSwitchCase(): void
    {
        foreach ($this->enumValues as $enumValue) {
            $this->algoSwitchCase->run($enumValue);
        }
    }

    #[
        Revs(self::REVS),
        Iterations(self::ITERATIONS),
        RetryThreshold(self::RETRY_THRESHOLD),
    ]
    public function benchMatch(): void
    {
        foreach ($this->enumValues as $enumValue) {
            $this->algoMatch->run($enumValue);
        }
    }

//    #[
//        Revs(self::REVS),
//        Iterations(self::ITERATIONS),
//        RetryThreshold(self::RETRY_THRESHOLD),
//    ]
//    public function benchHashMap(): void
//    {
//        foreach ($this->enumValues as $enumValue) {
//            $this->algoHashMap->run($enumValue);
//        }
//    }

}
