<?php

include dirname(__FILE__).'/../lib/Benchmark.php';
include dirname(__FILE__).'/../lib/SymfonyBenchmark.php';

$symfony = new SymfonyBenchmark();
$symfony->run();
echo $symfony;
