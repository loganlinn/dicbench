<?php
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\ContainerInterface;

class SymfonyBenchmark extends Benchmark {
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
	);

	public function trial() {
		/*
		 * Setup
		 */
		$c = new ContainerBuilder();

		$c->setParameter('COOKIE_NAME', 'symfonycookie');

		$c->register('logger', '\DICBench\DummyClasses\Logger')
			->setScope(ContainerInterface::SCOPE_PROTOTYPE);

		$c->register('session', '\DICBench\DummyClasses\Session')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setCookieName', array('%COOKIE_NAME%'));

		$c->register('auth', '\DICBench\DummyClasses\Auth')
			->addMethodCall('setSession', array(new Reference('session')));

		$c->register('request', '\DICBench\DummyClasses\Request')
			->addMethodCall('setSession', array(new Reference('session')))
			->addMethodCall('setAuth', array(new Reference('auth')));

		for ($i = 0; $i < Benchmark::$loop; $i ++) {
			$c->register('some_service_'.$i, '\DICBench\DummyClasses\SomeService')
				->addMethodCall('setLogger', array(new Reference('logger')))
				->addMethodCall('setAuth', array(new Reference('auth')));
		}

		/*
		 * Access
		 */
		//$c->get('session')->getLogger()->log('LOL');
		//$c->get('logger')->log('test message!');
		//$c->get('logger')->log('test message!');

		for ($i = 0; $i < Benchmark::$loop; $i ++) {
			$c->get('some_service_'.$i);
		}
	}
}
