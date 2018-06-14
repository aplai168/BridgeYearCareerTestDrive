<?php
	class Pharmacy_Tech {
		public $answers = array(
			'Alexander Luna' => 7,
			'Matt Floyd' => 7,
			'Gerard Hines' => 14,
			'Roman Goodman' => 28,
			'Mattie Burke' => 30,
			'Sheila Doyle' => 10,
			'Bernadette Gray' => 10,
			'Terrance George' => 14
		);

		public function grade($name, $numberOfPills) {
			if ($this->answers[$name] == $numberOfPills) {
				return array($name, $numberOfPills, $this->answers[$name], 1);
			}
			return array($name, $numberOfPills, $this->answers[$name], 0);
		}

		public function gradeAll($patient1, $patient2, $patient3, $patient4, $patient5, $patient6, $patient7, $patient8) {
			$results = array();
			array_push($results, $this->grade('Alexander Luna',$patient1));
			array_push($results, $this->grade('Matt Floyd',$patient2));
			array_push($results, $this->grade('Gerard Hines',$patient3));
			array_push($results, $this->grade('Roman Goodman',$patient4));
			array_push($results, $this->grade('Mattie Burke',$patient5));
			array_push($results, $this->grade('Sheila Doyle',$patient6));
			array_push($results, $this->grade('Bernadette Gray',$patient7));
			array_push($results, $this->grade('Terrance George',$patient8));
			return $results;
		}

	}