<?php

include dirname(__FILE__).'/../lib/Benchmark.php';
include dirname(__FILE__).'/../lib/PimpleBenchmark.php';

$pimple = new PimpleBenchmark();
$pimple->run();
echo $pimple;
