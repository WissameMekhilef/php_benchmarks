<?php

namespace tests\Benchmark;

use PhpBench\Attributes\Iterations;
use PhpBench\Attributes\RetryThreshold;
use PhpBench\Attributes\Revs;
use PhpBenchmarks\Looping\AlgoArrayMap;
use PhpBenchmarks\Looping\AlgoArrayMapWithUseFunction;
use PhpBenchmarks\Looping\AlgoForEach;

final readonly class AlgoLoopingBench
{

    private const int RANGE = 200;
    private const int REVS = 100;
    private const int ITERATIONS = 10;
    private const int RETRY_THRESHOLD = 2;

    public function __construct(
        private AlgoForEach $algorithmForEach = new AlgoForEach(),
        private AlgoArrayMap $algorithmArrayMap = new AlgoArrayMap(),
        private AlgoArrayMapWithUseFunction $algorithmArrayMapWithUseFunction = new AlgoArrayMapWithUseFunction(),
    )
    {
    }

    #[
        Revs(self::REVS),
        Iterations(self::ITERATIONS),
        RetryThreshold(self::RETRY_THRESHOLD),
    ]
    public function bench1(): void
    {
        $this->algorithmForEach->run(range(1, self::RANGE));
    }

    #[
        Revs(self::REVS),
        Iterations(self::ITERATIONS),
        RetryThreshold(self::RETRY_THRESHOLD),
    ]
    public function bench2(): void
    {
        $this->algorithmArrayMap->run(range(1, self::RANGE));
    }

    #[
        Revs(self::REVS),
        Iterations(self::ITERATIONS),
        RetryThreshold(self::RETRY_THRESHOLD),
    ]
    public function bench3(): void
    {
        $this->algorithmArrayMapWithUseFunction->run(range(1, self::RANGE));
    }
}
