<?php

include dirname(__FILE__).'/../../lib/Benchmark.php';
include dirname(__FILE__).'/../../lib/PimpleLargeBenchmark.php';

$pimple = new PimpleLargeBenchmark();
$pimple->run();
echo $pimple;
