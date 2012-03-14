<?php

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Dumper\PhpDumper;


class SymfonyDumpedBenchmark extends Benchmark {
	protected $libs = array(
		'lib/dicbench',
		'vendor/symfony/DependencyInjection/ContainerInterface.php',
		'vendor/symfony/DependencyInjection/TaggedContainerInterface.php',
		'vendor/symfony/DependencyInjection/Parameter.php',
		'vendor/symfony/DependencyInjection/ParameterBag/ParameterBagInterface.php',
		'vendor/symfony/DependencyInjection/ParameterBag/ParameterBag.php',
		'vendor/symfony/DependencyInjection/Container.php',
		'vendor/symfony/DependencyInjection/ContainerBuilder.php',
		'vendor/symfony/DependencyInjection/Definition.php',
		'vendor/symfony/DependencyInjection/Exception/ExceptionInterface.php',
		'vendor/symfony/DependencyInjection/Exception/RuntimeException.php',
		'vendor/symfony/DependencyInjection/Exception',
		'vendor/symfony/DependencyInjection/Reference.php',

		'vendor/symfony/DependencyInjection/Variable.php',
		'vendor/symfony/DependencyInjection/Dumper/DumperInterface.php',
		'vendor/symfony/DependencyInjection/Dumper/Dumper.php',
		'vendor/symfony/DependencyInjection/Dumper/PhpDumper.php',
	);

	protected $dumped_class;
	protected $file_name;

	protected function setup() {
		parent::setup();

		/*
		 * Setup & dump
		 */
		$c = new ContainerBuilder();

		$c->setParameter('COOKIE_NAME', 'symfonycookie');

		$c->register('logger', 'Logger')
			->setScope(ContainerInterface::SCOPE_PROTOTYPE);

		$c->register('session', 'Session')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setCookieName', array('%COOKIE_NAME%'));

		$c->register('auth', 'Auth')
			->addMethodCall('setSession', array(new Reference('session')));

		$c->register('request', 'Request')
			->addMethodCall('setSession', array(new Reference('session')))
			->addMethodCall('setAuth', array(new Reference('auth')));

		$num_generated_services = 50;
		for ($i = 0; $i < $num_generated_services; $i ++) {
			$c->register('some_service_'.$i, 'SomeService')
				->addMethodCall('setLogger', array(new Reference('logger')))
				->addMethodCall('setAuth', array(new Reference('auth')));
		}

		$dumper = new PhpDumper($c);

		$this->dumped_class = 'DumpedServiceContainer';
		$this->file_name = dirname(__FILE__) . '/' . $this->dumped_class . '.php';

		$fh = fopen($this->file_name, 'w+');
		fwrite($fh, $dumper->dump(array('class' => $this->dumped_class)));
		fclose($fh);

		include $this->file_name;
	}

	protected function teardown() {
		// delete the dumped file
		//@unlink($this->file_name);
	}

	public function trial() {
		$c = new $this->dumped_class();

		/*
		 * Access
		 */
		for ($i = 0; $i < $num_generated_services; $i++) {
			$c->get('some_service_'.$i);
		}
	}

}
