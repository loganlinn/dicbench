<?php

include dirname(__FILE__).'/../lib/Benchmark.php';
include dirname(__FILE__).'/../lib/PimpleBenchmark.php';

echo "\n== Pimple ==\n";
$pimple = new PimpleBenchmark();
$pimple->run();
$x = $pimple->report();
print_r($x);
