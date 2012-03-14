<?php

include dirname(__FILE__).'/../lib/Benchmark.php';
include dirname(__FILE__).'/../lib/SymfonyBenchmark.php';
include dirname(__FILE__).'/../lib/SymfonyXmlBenchmark.php';

$symfonyXml = new SymfonyXmlBenchmark();
$symfonyXml->run();
echo $symfonyXml;
