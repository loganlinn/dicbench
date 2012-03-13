<?php

include dirname(__FILE__).'/../lib/Benchmark.php';
include dirname(__FILE__).'/../lib/BenchmarkCompare.php';
include dirname(__FILE__).'/../lib/SymfonyBenchmark.php';
include dirname(__FILE__).'/../lib/SymfonyXmlBenchmark.php';


$symfony = new SymfonyBenchmark();
$symfony->run();

$symfonyXml = new SymfonyXmlBenchmark();
$symfonyXml->run();

$compare = new BenchmarkCompare($symfony, $symfonyXml);
print_r($compare->report());
