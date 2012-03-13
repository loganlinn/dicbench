<?php

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\FileLoader;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

class SymfonyXmlBenchmark extends SymfonyBenchmark {
	public function __construct($name=null) {
		parent::__construct($name);

		$this->libs = array_merge(
			$this->libs,
			array(
				'vendor/symfony/DependencyInjection/Alias.php',
				'vendor/symfony/DependencyInjection/SimpleXMLElement.php',
				'vendor/symfony/Config/FileLocatorInterface.php',
				'vendor/symfony/Config/FileLocator.php',
				'vendor/symfony/Config/Loader/LoaderInterface.php',
				'vendor/symfony/Config/Loader/Loader.php',
				'vendor/symfony/Config/Loader/FileLoader.php',
				'vendor/symfony/Config/Resource/ResourceInterface.php',
				'vendor/symfony/Config/Resource/FileResource.php',
				'vendor/symfony/Config/Resource/DirectoryResource.php',
				'vendor/symfony/DependencyInjection/Loader/FileLoader.php',
				'vendor/symfony/DependencyInjection/Loader/XmlFileLoader.php'
			)
		);
	}

	public function trial() {
		$c = new ContainerBuilder();
		$loader = new XmlFileLoader($c, new FileLocator(__DIR__));
		$loader->load('services.xml');

		for ($i = 0; $i < 50; $i ++) {
			$c->get('some_service_'.$i);
		}
	}
}
