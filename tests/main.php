<?php

include dirname(__FILE__).'/../lib/Benchmark.php';
include dirname(__FILE__).'/../lib/BenchmarkCompare.php';
include dirname(__FILE__).'/../lib/PimpleBenchmark.php';
include dirname(__FILE__).'/../lib/SymfonyBenchmark.php';


echo "\n== Symfony ==\n";
$symfony = new SymfonyBenchmark();
$symfony->run();
$x = $symfony->report();
print_r($x);

echo "\n== Pimple ==\n";
$pimple = new PimpleBenchmark();
$pimple->run();
$x = $pimple->report();
print_r($x);

echo "\n== Comparison ==\n";
$compare = new BenchmarkCompare($pimple, $symfony);
$x = $compare->report();
print_r($x);
