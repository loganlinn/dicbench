<?php

include dirname(__FILE__).'/../lib/Benchmark.php';
include dirname(__FILE__).'/../lib/SymfonyBenchmark.php';
include dirname(__FILE__).'/../lib/SymfonyYamlBenchmark.php';

echo "\n== Symfony YAML ==\n";
$symfonyYaml = new SymfonyYamlBenchmark();
$symfonyYaml->run();
$x = $symfonyYaml->report();
print_r($x);
