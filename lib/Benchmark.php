<?php

abstract class Benchmark {
	protected $name       = null;
	protected $time       = array();
	protected $memory     = array();
	protected $libs       = array();
	protected $has_run    = false;
	protected $trial_size = 1;
	protected $memory_start = 0;
	protected $memory_end   = 0;

	abstract public function trial();

	public function __construct($name=null) {
		$this->name = $name === null ? get_class($this) : $name;
	}

	protected function setup() {
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

	protected function teardown() {

	}

	public function trial_start() {
		$this->memory_start = memory_get_usage();
	}

	public function trial_end() {
		$this->memory_end = memory_get_usage();
	}

	public function run ($trial_size=1) {
		if (!$this->has_run) {
			$this->setup();
		}

		$this->time       = array();
		$this->memory     = array();
		$this->trial_size = $trial_size;

		for ($i = 0; $i < $this->trial_size; $i++) {
			//$m0 = memory_get_usage(true);
			$t0 = microtime(true);

			$this->trial();

			$t1 = microtime(true);
			//$m1 = memory_get_usage(true);

			$this->time[]   = array($t0, $t1);
			$this->memory[] = array($this->memory_start, $this->memory_end);
		}

		$this->teardown();

		$this->has_run = true;
	}

	public function has_run() {
		return $this->has_run;
	}

	public function report($run_new=true) {
		if ($run_new || !$this->has_run) {
			$this->run(is_numeric($run_new) ? $run_new : 1);
		}

		return array (
			'name'       => $this->name,
			'trial_size' => $this->trial_size,
			'avg_time'   => $this->average_tuples($this->time),
			'avg_memory' => $this->average_tuples($this->memory)
		);
	}

	public function __toString() {
		return join("\n", array(
			'#######################################',
			sprintf("# Report: %s ", get_class($this)),
			sprintf("#         trials: %d", $this->trial_size),
			'#######################################',
			str_replace('Array', '', print_r($this->report(false), true))
		));
	}

	// math helper
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
