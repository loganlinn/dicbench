<?php

include dirname(__FILE__).'/../lib/Benchmark.php';
include dirname(__FILE__).'/../lib/SymfonyBenchmark.php';
include dirname(__FILE__).'/../lib/SymfonyXmlBenchmark.php';

echo "\n== Symfony XML ==\n";
$symfonyXml = new SymfonyXmlBenchmark();
$symfonyXml->run();
$x = $symfonyXml->report();
print_r($x);
