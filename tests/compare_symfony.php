<?php

include dirname(__FILE__).'/../lib/Benchmark.php';
include dirname(__FILE__).'/../lib/BenchmarkCompare.php';
include dirname(__FILE__).'/../lib/SymfonyBenchmark.php';
include dirname(__FILE__).'/../lib/SymfonyXmlBenchmark.php';
include dirname(__FILE__).'/../lib/SymfonyYamlBenchmark.php';


$symfony = new SymfonyBenchmark();
$symfony->run();

$symfonyXml = new SymfonyXmlBenchmark();
$symfonyXml->run();

$symfonyYaml = new SymfonyXmlBenchmark();
$symfonyYaml->run();

echo "\n== Symfony VS Symfony XML ==\n";
$compare1 = new BenchmarkCompare($symfony, $symfonyXml);
print_r($compare1->report());

echo "\n== Symfony XML VS Symfony YAML ==\n";
$compare2 = new BenchmarkCompare($symfonyXml, $symfonyYaml);
print_r($compare2->report());
