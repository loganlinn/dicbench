<?php

include dirname(__FILE__).'/../lib/Benchmark.php';
include dirname(__FILE__).'/../lib/SymfonyBenchmark.php';

echo "\n== Symfony ==\n";
$symfony = new SymfonyBenchmark();
$symfony->run();
$x = $symfony->report();
print_r($x);
