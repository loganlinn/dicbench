<?php

include dirname(__FILE__).'/../lib/Benchmark.php';
include dirname(__FILE__).'/../lib/BenchmarkCompare.php';
include dirname(__FILE__).'/../lib/SymfonyBenchmark.php';
include dirname(__FILE__).'/../lib/SymfonyXmlBenchmark.php';
include dirname(__FILE__).'/../lib/SymfonyYamlBenchmark.php';

$symfony = new SymfonyBenchmark();
$symfony->times(5)->run();

$symfonyXml = new SymfonyXmlBenchmark();
$symfonyXml->times(5)->run();

$symfonyYaml = new SymfonyYamlBenchmark();
$symfonyYaml->times(5)->run();

echo "\n== Symfony VS Symfony XML ==\n";
$compare1 = new BenchmarkCompare($symfony, $symfonyXml);
print_r($compare1->report());

echo "\n== Symfony VS Symfony YAML ==\n";
$compare2 = new BenchmarkCompare($symfony, $symfonyYaml);
print_r($compare2->report());
