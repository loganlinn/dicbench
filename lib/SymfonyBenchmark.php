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
		$this->trial_start();
		/*
		 * Setup
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

		/*
		 * Access
		 */
		for ($i = 0; $i < $num_generated_services; $i ++) {
			$c->get('some_service_'.$i);
		}

		$this->trial_end();
	}
}
