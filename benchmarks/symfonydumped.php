<?php
include dirname(__FILE__).'/../lib/Benchmark.php';
include dirname(__FILE__).'/../lib/SymfonyBenchmark.php';
include dirname(__FILE__).'/../lib/SymfonyDumpedBenchmark.php';

$symfonyDumped = new SymfonyDumpedBenchmark();
$symfonyDumped->run();
echo $symfonyDumped;
