<?php 
class Survey {
	private $data = array();

	public function insertData($career1, $career2, $career3, $career4, $career5, $career6) {
		$this->data['Medical Lab Technician'] = $career1;
		$this->data['Pharmacy Technician'] = $career2;
		$this->data['Medical Biller'] = $career3;
		$this->data['Web Developer'] = $career4;
		$this->data['Electrician'] = $career5;
		$this->data['Process Technician'] = $career6;
	}
}