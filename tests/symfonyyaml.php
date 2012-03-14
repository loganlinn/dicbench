<?php

include dirname(__FILE__).'/../lib/Benchmark.php';
include dirname(__FILE__).'/../lib/SymfonyBenchmark.php';
include dirname(__FILE__).'/../lib/SymfonyYamlBenchmark.php';

$symfonyYaml = new SymfonyYamlBenchmark();
$symfonyYaml->run();
echo $symfonyYaml;
