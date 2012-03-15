<?php
include dirname(__FILE__).'/../../lib/Benchmark.php';
include dirname(__FILE__).'/../../lib/SymfonyBenchmark.php';
include dirname(__FILE__).'/../../lib/SymfonyDumpedLargeBenchmark.php';

$symfonyDumped = new SymfonyDumpedLargeBenchmark();
$symfonyDumped->run();
echo $symfonyDumped;
