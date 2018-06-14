<?php
	class Medical_Billing {
		public $answer = array(
				'Kristine Maxwell' => '73000',
				'Glen Holt' => '28292',
				'Willardia Gardner' => '00851',
				'Roxanne Todd' => '44140',
				'Ira Erickson' => '27524',
				'Caroline Welch' => '',
				'Miguel Smith' => '45389',
				'Patricia Carpenter' => '46083',
			);
		
		public function grade($person, $answer) {
			if ($this->answer[$person] == $answer) {
				return array(1,$person,$this->answer[$person], $answer);
			}
			return array(0,$person,$this->answer[$person], $answer);
		}
	}