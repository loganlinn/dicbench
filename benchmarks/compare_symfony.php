<?php

include dirname(__FILE__).'/../lib/Benchmark.php';
include dirname(__FILE__).'/../lib/BenchmarkCompare.php';
include dirname(__FILE__).'/../lib/SymfonyBenchmark.php';
include dirname(__FILE__).'/../lib/SymfonyXmlBenchmark.php';
include dirname(__FILE__).'/../lib/SymfonyYamlBenchmark.php';

$symfonyPhp = new SymfonyBenchmark();
$symfonyXml = new SymfonyXmlBenchmark();
$symfonyYaml = new SymfonyYamlBenchmark();

$compare1 = new BenchmarkCompare($symfonyPhp, $symfonyXml);
echo $compare1;

// cleanup
unset($compare1);
gc_collect_cycles();

$compare2 = new BenchmarkCompare($symfonyPhp, $symfonyYaml);
echo $compare2;
