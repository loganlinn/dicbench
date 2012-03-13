<?php

class BenchmarkCompare {
	protected $b1;
	protected $b2;

	public function __construct(Benchmark $b1, Benchmark $b2) {
		$this->b1 = $b1;
		$this->b2 = $b2;
	}

	public function report() {
		$b1r = $this->b1->report();
		$b2r = $this->b2->report();

		$report = array();
		foreach ($b1r as $k => $v) {
			$report[$k] = array($v, $b2r[$k]);

			if (is_numeric($v)) {
				$report[$k."_diff"] = $v - $b2r[$k];
				$report[$k."_percent"] = $b2r[$k] != 0 ? 100*$v/$b2r[$k] : 'NaN';
			}
		}

		return $report;
	}
}
