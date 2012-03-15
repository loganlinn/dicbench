<?php

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Dumper\PhpDumper;


class SymfonyDumpedLargeBenchmark extends Benchmark {
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

		$c->register('some_service_0', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_1', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_2', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_3', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_4', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_5', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_6', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_7', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_8', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_9', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_10', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_11', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_12', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_13', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_14', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_15', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_16', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_17', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_18', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_19', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_20', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_21', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_22', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_23', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_24', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_25', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_26', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_27', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_28', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_29', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_30', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_31', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_32', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_33', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_34', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_35', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_36', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_37', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_38', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_39', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_40', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_41', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_42', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_43', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_44', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_45', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_46', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_47', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_48', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_49', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_50', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_51', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_52', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_53', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_54', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_55', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_56', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_57', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_58', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_59', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_60', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_61', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_62', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_63', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_64', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_65', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_66', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_67', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_68', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_69', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_70', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_71', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_72', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_73', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_74', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_75', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_76', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_77', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_78', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_79', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_80', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_81', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_82', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_83', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_84', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_85', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_86', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_87', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_88', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_89', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_90', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_91', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_92', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_93', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_94', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_95', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_96', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_97', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_98', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_99', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_100', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_101', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_102', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_103', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_104', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_105', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_106', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_107', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_108', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_109', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_110', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_111', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_112', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_113', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_114', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_115', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_116', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_117', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_118', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_119', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_120', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_121', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_122', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_123', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_124', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_125', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_126', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_127', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_128', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_129', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_130', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_131', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_132', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_133', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_134', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_135', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_136', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_137', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_138', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_139', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_140', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_141', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_142', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_143', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_144', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_145', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_146', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_147', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_148', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_149', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_150', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_151', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_152', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_153', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_154', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_155', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_156', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_157', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_158', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_159', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_160', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_161', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_162', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_163', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_164', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_165', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_166', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_167', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_168', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_169', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_170', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_171', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_172', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_173', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_174', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_175', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_176', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_177', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_178', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_179', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_180', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_181', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_182', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_183', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_184', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_185', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_186', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_187', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_188', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_189', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_190', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_191', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_192', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_193', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_194', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_195', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_196', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_197', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_198', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_199', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_200', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_201', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_202', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_203', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_204', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_205', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_206', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_207', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_208', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_209', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_210', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_211', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_212', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_213', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_214', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_215', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_216', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_217', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_218', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_219', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_220', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_221', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_222', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_223', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_224', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_225', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_226', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_227', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_228', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_229', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_230', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_231', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_232', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_233', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_234', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_235', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_236', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_237', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_238', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_239', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_240', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_241', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_242', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_243', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_244', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_245', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_246', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_247', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_248', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_249', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_250', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_251', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_252', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_253', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_254', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_255', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_256', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_257', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_258', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_259', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_260', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_261', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_262', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_263', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_264', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_265', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_266', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_267', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_268', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_269', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_270', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_271', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_272', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_273', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_274', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_275', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_276', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_277', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_278', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_279', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_280', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_281', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_282', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_283', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_284', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_285', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_286', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_287', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_288', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_289', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_290', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_291', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_292', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_293', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_294', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_295', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_296', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_297', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_298', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_299', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_300', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_301', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_302', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_303', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_304', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_305', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_306', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_307', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_308', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_309', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_310', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_311', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_312', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_313', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_314', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_315', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_316', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_317', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_318', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_319', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_320', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_321', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_322', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_323', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_324', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_325', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_326', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_327', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_328', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_329', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_330', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_331', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_332', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_333', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_334', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_335', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_336', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_337', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_338', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_339', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_340', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_341', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_342', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_343', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_344', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_345', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_346', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_347', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_348', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_349', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_350', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_351', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_352', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_353', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_354', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_355', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_356', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_357', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_358', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_359', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_360', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_361', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_362', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_363', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_364', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_365', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_366', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_367', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_368', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_369', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_370', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_371', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_372', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_373', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_374', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_375', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_376', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_377', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_378', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_379', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_380', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_381', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_382', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_383', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_384', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_385', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_386', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_387', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_388', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_389', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_390', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_391', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_392', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_393', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_394', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_395', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_396', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_397', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_398', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_399', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_400', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_401', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_402', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_403', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_404', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_405', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_406', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_407', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_408', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_409', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_410', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_411', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_412', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_413', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_414', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_415', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_416', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_417', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_418', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_419', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_420', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_421', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_422', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_423', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_424', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_425', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_426', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_427', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_428', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_429', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_430', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_431', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_432', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_433', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_434', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_435', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_436', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_437', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_438', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_439', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_440', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_441', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_442', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_443', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_444', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_445', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_446', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_447', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_448', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_449', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_450', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_451', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_452', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_453', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_454', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_455', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_456', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_457', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_458', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_459', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_460', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_461', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_462', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_463', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_464', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_465', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_466', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_467', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_468', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_469', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_470', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_471', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_472', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_473', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_474', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_475', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_476', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_477', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_478', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_479', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_480', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_481', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_482', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_483', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_484', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_485', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_486', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_487', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_488', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_489', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_490', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_491', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_492', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_493', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_494', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_495', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_496', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_497', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_498', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_499', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_500', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_501', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_502', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_503', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_504', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_505', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_506', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_507', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_508', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_509', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_510', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_511', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_512', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_513', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_514', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_515', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_516', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_517', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_518', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_519', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_520', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_521', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_522', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_523', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_524', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_525', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_526', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_527', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_528', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_529', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_530', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_531', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_532', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_533', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_534', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_535', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_536', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_537', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_538', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_539', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_540', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_541', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_542', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_543', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_544', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_545', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_546', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_547', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_548', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_549', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_550', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_551', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_552', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_553', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_554', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_555', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_556', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_557', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_558', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_559', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_560', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_561', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_562', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_563', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_564', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_565', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_566', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_567', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_568', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_569', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_570', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_571', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_572', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_573', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_574', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_575', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_576', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_577', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_578', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_579', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_580', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_581', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_582', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_583', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_584', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_585', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_586', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_587', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_588', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_589', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_590', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_591', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_592', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_593', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_594', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_595', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_596', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_597', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_598', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_599', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_600', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_601', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_602', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_603', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_604', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_605', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_606', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_607', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_608', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_609', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_610', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_611', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_612', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_613', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_614', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_615', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_616', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_617', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_618', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_619', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_620', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_621', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_622', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_623', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_624', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_625', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_626', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_627', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_628', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_629', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_630', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_631', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_632', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_633', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_634', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_635', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_636', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_637', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_638', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_639', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_640', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_641', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_642', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_643', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_644', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_645', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_646', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_647', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_648', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_649', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_650', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_651', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_652', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_653', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_654', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_655', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_656', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_657', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_658', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_659', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_660', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_661', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_662', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_663', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_664', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_665', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_666', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_667', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_668', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_669', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_670', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_671', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_672', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_673', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_674', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_675', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_676', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_677', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_678', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_679', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_680', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_681', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_682', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_683', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_684', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_685', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_686', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_687', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_688', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_689', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_690', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_691', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_692', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_693', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_694', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_695', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_696', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_697', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_698', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_699', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_700', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_701', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_702', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_703', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_704', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_705', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_706', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_707', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_708', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_709', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_710', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_711', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_712', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_713', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_714', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_715', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_716', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_717', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_718', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_719', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_720', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_721', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_722', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_723', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_724', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_725', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_726', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_727', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_728', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_729', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_730', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_731', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_732', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_733', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_734', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_735', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_736', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_737', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_738', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_739', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_740', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_741', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_742', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_743', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_744', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_745', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_746', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_747', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_748', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_749', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_750', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_751', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_752', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_753', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_754', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_755', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_756', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_757', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_758', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_759', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_760', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_761', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_762', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_763', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_764', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_765', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_766', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_767', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_768', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_769', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_770', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_771', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_772', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_773', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_774', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_775', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_776', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_777', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_778', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_779', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_780', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_781', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_782', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_783', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_784', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_785', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_786', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_787', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_788', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_789', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_790', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_791', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_792', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_793', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_794', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_795', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_796', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_797', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_798', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_799', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_800', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_801', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_802', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_803', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_804', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_805', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_806', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_807', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_808', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_809', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_810', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_811', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_812', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_813', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_814', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_815', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_816', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_817', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_818', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_819', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_820', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_821', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_822', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_823', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_824', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_825', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_826', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_827', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_828', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_829', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_830', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_831', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_832', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_833', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_834', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_835', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_836', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_837', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_838', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_839', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_840', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_841', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_842', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_843', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_844', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_845', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_846', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_847', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_848', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_849', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_850', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_851', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_852', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_853', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_854', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_855', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_856', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_857', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_858', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_859', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_860', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_861', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_862', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_863', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_864', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_865', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_866', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_867', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_868', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_869', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_870', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_871', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_872', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_873', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_874', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_875', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_876', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_877', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_878', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_879', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_880', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_881', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_882', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_883', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_884', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_885', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_886', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_887', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_888', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_889', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_890', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_891', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_892', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_893', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_894', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_895', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_896', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_897', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_898', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_899', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_900', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_901', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_902', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_903', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_904', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_905', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_906', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_907', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_908', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_909', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_910', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_911', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_912', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_913', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_914', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_915', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_916', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_917', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_918', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_919', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_920', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_921', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_922', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_923', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_924', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_925', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_926', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_927', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_928', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_929', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_930', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_931', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_932', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_933', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_934', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_935', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_936', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_937', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_938', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_939', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_940', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_941', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_942', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_943', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_944', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_945', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_946', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_947', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_948', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_949', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_950', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_951', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_952', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_953', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_954', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_955', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_956', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_957', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_958', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_959', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_960', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_961', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_962', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_963', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_964', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_965', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_966', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_967', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_968', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_969', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_970', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_971', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_972', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_973', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_974', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_975', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_976', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_977', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_978', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_979', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_980', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_981', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_982', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_983', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_984', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_985', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_986', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_987', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_988', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_989', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_990', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_991', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_992', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_993', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_994', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_995', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_996', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_997', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_998', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));
		$c->register('some_service_999', 'SomeService')
			->addMethodCall('setLogger', array(new Reference('logger')))
			->addMethodCall('setAuth', array(new Reference('auth')));

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
		@unlink($this->file_name);
	}

	public function trial() {
		$this->trial_start();
		$c = new $this->dumped_class();

		/*
		 * Access
		 */
		for ($i = 0; $i < 100; $i++) {
			$c->get('some_service_'.$i);
		}
		$this->trial_end();
	}

}
