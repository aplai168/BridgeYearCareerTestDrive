<?php
	class Medical_Lab {
		public $answers = array(
				'Kiara Moore' => array('light_yellow','clear','no','Neg','Neg','0.2','Neg','6','Neg','1.010','Neg','Neg','500'),
				'Rafel Sanchez' => array('light_yellow','clear','yes','Neg','Neg','0.2','Neg','5','Neg','1.010','Neg','Neg','1000'),
				'James Seidel' => array('amber','clear','yes','Neg','Neg','0.2','Neg','6','Neg','1.030','Neg','Neg','500'),
				'Roxie Wadley' => array('colorless','clear','no','Neg','Neg','0.2','Neg','5','Neg','1.030','Neg','Neg','Trace'),
				'Mindy Cerdero' => array('dark_yellow','turbid','no','Neg','Neg','0.2','Neg','5','Neg','1.000','Neg','Neg','Neg')
			);

		public function grade($arrayIndex, $color, $appearance, $mucus, $leukocytes, $nitrite, $urobilinogen, $protein, $ph, $blood, $specific_gravity, $ketone, $bilirubin, $glucose) {
			$physical_score = 0;
			if ($this->answers[$arrayIndex][0] == $color) {
				$physical_score += 1;
			}
			if ($this->answers[$arrayIndex][1] == $appearance) {
				$physical_score += 1;
			}
			if ($this->answers[$arrayIndex][2] == $mucus) {
				$physical_score += 1;
			}

			$physical_score = round($physical_score / 3 * 100);

			$chemical_score = 0;
			if ($this->answers[$arrayIndex][3] == $leukocytes) {
				$chemical_score += 1;
			}
			if ($this->answers[$arrayIndex][4] == $nitrite) {
				$chemical_score += 1;
			}
			if ($this->answers[$arrayIndex][5] == $urobilinogen) {
				$chemical_score += 1;
			}
			if ($this->answers[$arrayIndex][6] == $protein) {
				$chemical_score += 1;
			}
			if ($this->answers[$arrayIndex][7] == $ph) {
				$chemical_score += 1;
			}
			if ($this->answers[$arrayIndex][8] == $blood) {
				$chemical_score += 1;
			}
			if ($this->answers[$arrayIndex][9] == $specific_gravity) {
				$chemical_score += 1;
			}
			if ($this->answers[$arrayIndex][10] == $ketone) {
				$chemical_score += 1;
			}
			if ($this->answers[$arrayIndex][11] == $bilirubin) {
				$chemical_score += 1;
			}
			if ($this->answers[$arrayIndex][12] == $glucose) {
				$chemical_score += 1;
			}

			$chemical_score = round($chemical_score / 10 * 100);
			return array($arrayIndex, $physical_score, $chemical_score);
		}
	}