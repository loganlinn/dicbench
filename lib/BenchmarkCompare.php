<?php

class BenchmarkCompare {
	protected $trial_size = 10;
	protected $b1;
	protected $b2;

	public function __construct(Benchmark $b1, Benchmark $b2) {
		$this->b1 = $b1;
		$this->b2 = $b2;
	}

	public function trial_size($n=null) {
		if ($trial_size === null) {
			return $this->trial_size;
		}

		$this->trial_size = $n;
	}

	public function report() {
		$b1r = $this->b1->report($this->trial_size);
		$b2r = $this->b2->report($this->trial_size);

		$report = array();
		foreach ($b1r as $k => $v) {
			$report[$k] = array($v, $b2r[$k]);

			if (is_numeric($v)) {
				$report[$k."_diff"] = $v - $b2r[$k];
				$report[$k."_percent"] = $b2r[$k] != 0 ?
					(100 * $v / $b2r[$k]) - 100 :
					'NaN';
			}
		}

		return $report;
	}

	public function __toString() {
		return join("\n", array(
			'#######################################',
			sprintf("# Report: %s vs %s", get_class($this->b1), get_class($this->b2)),
			sprintf("#         trials: %d", $this->trial_size),
			'#######################################',
			str_replace('Array', '', print_r($this->report(), true))
		));
	}
}
