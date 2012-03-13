<?php

abstract class Benchmark {
	public static $loop = 100;

	protected $name       = null;
	protected $time       = array();
	protected $memory     = array();
	protected $libs       = array();
	private   $num_trials = 1;

	abstract public function trial();

	public function __construct($name=null) {
		$this->name = $name === null ? get_class($this) : $name;
	}

	protected function prepare() {
		// include vendor files
		foreach ($this->libs as $lib) {
			$path = dirname(__FILE__).'/../'.$lib;

			if ('php' == strtolower(end(explode('.', $lib)))) {
				include_once($path);
			} else {

				$items = scandir($path);

				if ($items === false) {
					continue;
				}

				foreach ($items as $item) {
					$ext = strtolower(end(explode('.', $item)));
					if ($ext == 'php') {
						include_once($path.'/'.$item);
					}
				}
			}
		}
	}

	public function run () {
		$this->prepare();

		for ($i = 0; $i < $this->num_trials; $i++) {
			$m0 = memory_get_usage();
			$t0 = microtime(true);

			$this->trial();

			$t1 = microtime(true);
			$m1 = memory_get_usage();

			$this->time[]   = array($t0, $t1);
			$this->memory[] = array($m0, $m1);
		}
	}

	public function report() {
		return array (
			'name'       => $this->name,
			'trials'     => $this->num_trials,
			'avg_time'   => $this->average_tuples($this->time),
			'avg_memory' => $this->average_tuples($this->memory)
		);
	}

	public function times($n) {
		$this->num_trials = ($n > 0) ? $n : 1;
		return $this;
	}

	private function average_tuples($tuples) {
		if (count($tuples) == 0) {
			return 0;
		}

		$values = array();

		foreach ($tuples as $tuple) {
			$values[] = $tuple[1] - $tuple[0];
		}

		return array_sum($values)/count($values);
	}
}
