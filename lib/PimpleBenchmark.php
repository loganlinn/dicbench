<?php

class PimpleBenchmark extends Benchmark {
	protected $libs = array(
		'lib/dicbench',
		'vendor/fabpot/Pimple/lib'
	);

	public function trial() {
		/*
		 * Setup
		 */
		$c = new Pimple();

		$c['COOKIE_NAME'] = "pimplecookie";

		$c['logger'] = function($c) {
			return new Logger();
		};

		$c['session'] = $c->share(function($c) {
			$o = new Session();
			$o->setCookieName($c['COOKIE_NAME']);
			$o->setLogger($c['logger']);
			return $o;
		});

		$c['auth'] = $c->share(function($c) {
			$o = new Auth();
			$o->setSession($c['session']);
			return $o;
		});

		$c['request'] = $c->share(function($c) {
			$o = new Request();
			$o->setSession($c['session']);
			$o->setAuth($c['auth']);
			return $o;
		});

		$num_generated_services = 50;
		for ($i = 0; $i < $num_generated_services; $i++) {
			$c['some_service_'.$i] = $c->share(function($c) {
				$o = new SomeService();
				$o->setLogger($c['logger']);
				$o->setAuth($c['auth']);
				return $o;
			});
		}

		/*
		 * Access
		 */
		for ($i = 0; $i < $num_generated_services; $i++) {
			$c['some_service_'.$i];
		}
	}
}
