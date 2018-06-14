<?php
include 'LilyFramework.php';
$app = new Lily;
Session::start();
date_default_timezone_set('America/Chicago');

$app->route('index', function($data = []) use ($app) {
	$app->renderTemplate('header', $data = array('title'=>'CareerTestDrives.com - Career Simulations for All'));
	$app->renderTemplate('index');
});

$app->route('survey', function ($data = []) use ($app){
	$params = $data;
	$surveyid = NULL;
	if (isset($params[0]) && ($params[0] != 'submit')) {
		$surveyid = $params[0];
	}
	
	$app->renderTemplate('header', $data = array('title'=>'Take the Career Test Drive Survey - Career Test Drives.com'));
	if (isset($params[0]) && ($params[0] == 'submit')){
		$app->renderTemplate('survey_submit');
	} else {
		$app->renderTemplate('survey', $data = array('survey_id' => $surveyid));
	}
	$app->renderTemplate('footer');
});


$app->route('simulation', function($data = []) use ($app){
	switch ($data[0]) {
		case 'Pharmacy_Technician':
			$app->renderTemplate('header', $data = array('title'=>'Pharmacy Technician - CareerTestDrives.com'));
			$app->renderTemplate('main_panel/pt');
			break;
		case 'Medical_Lab_Technician':
			$app->renderTemplate('header', $data = array('title'=>'Medical Lab Technician - CareerTestDrives.com'));
			$app->renderTemplate('main_panel/mlt');
			break;
		case 'Medical_Biller':
			$app->renderTemplate('header', $data = array('title'=>'Medical Billing and Coding - CareerTestDrives.com'));
			$app->renderTemplate('main_panel/mbc2');
			break;
		case 'Web_Developer':
			$app->renderTemplate('header', $data = array('title'=>'Web Developer - CareerTestDrives.com'));
			$app->renderTemplate('main_panel/web');
			break;
		case 'Advanced_Web_Developer':
			$app->renderTemplate('header', $data = array('title'=>'Web Developer (Advanced) - CareerTestDrives.com'));
			$app->renderTemplate('main_panel/web2');
			break;
		default:
			$app->renderTemplate('header', $data = array('title'=>'Select a Career Test Drive - CareerTestDrives.com'));
			$app->renderTemplate('main_panel/select');
			break;
	}
	$app->renderTemplate('footer');
});

$app->route('results', function($data = []) use ($app){
	if (!isset($_POST['sim'])) {
		$app->redirectTo('/index');
	}	
	switch ($data[0]) {
		case 'Pharmacy_Technician':
			$pharmacy_technician = $app->model('Pharmacy_Tech');
			$results = $pharmacy_technician->gradeAll($_POST['patientOnePillCount'], $_POST['patientTwoPillCount'], $_POST['patientThreePillCount'], $_POST['patientFourPillCount'], $_POST['patientFivePillCount'], $_POST['patientSixPillCount'], $_POST['patientSevenPillCount'], $_POST['patientEightPillCount']);
			
			$app->renderTemplate('header', $data = array('title' => 'Results - Pharmacy Technician - CareerTestDrives.com'));
			$app->renderTemplate('results/pt', $data = array('results' => $results));
			$app->renderTemplate('results/back_to_main');
			break;
		
		case 'Medical_Lab_Technician':
			$medical_lab = $app->model('Medical_Lab');
			$results = array();
			array_push($results, $medical_lab->grade('Kiara Moore', $_POST['first_sample_color'],$_POST['first_sample_appearance'],$_POST['first_sample_mucus'],$_POST['first_sample_leukocytes'],$_POST['first_sample_nitrite'],$_POST['first_sample_urobilinogen'],$_POST['first_sample_protein'],$_POST['first_sample_ph'],$_POST['first_sample_blood'],$_POST['first_sample_specific_gravity'],$_POST['first_sample_ketone'],$_POST['first_sample_bilirubin'],$_POST['first_sample_glucose']));
			array_push($results, $medical_lab->grade('Rafel Sanchez', $_POST['second_sample_color'],$_POST['second_sample_appearance'],$_POST['second_sample_mucus'],$_POST['second_sample_leukocytes'],$_POST['second_sample_nitrite'],$_POST['second_sample_urobilinogen'],$_POST['second_sample_protein'],$_POST['second_sample_ph'],$_POST['second_sample_blood'],$_POST['second_sample_specific_gravity'],$_POST['second_sample_ketone'],$_POST['second_sample_bilirubin'],$_POST['second_sample_glucose']));
			array_push($results, $medical_lab->grade('James Seidel', $_POST['third_sample_color'],$_POST['third_sample_appearance'],$_POST['third_sample_mucus'],$_POST['third_sample_leukocytes'],$_POST['third_sample_nitrite'],$_POST['third_sample_urobilinogen'],$_POST['third_sample_protein'],$_POST['third_sample_ph'],$_POST['third_sample_blood'],$_POST['third_sample_specific_gravity'],$_POST['third_sample_ketone'],$_POST['third_sample_bilirubin'],$_POST['third_sample_glucose']));
			array_push($results, $medical_lab->grade('Roxie Wadley', $_POST['fourth_sample_color'],$_POST['fourth_sample_appearance'],$_POST['fourth_sample_mucus'],$_POST['fourth_sample_leukocytes'],$_POST['fourth_sample_nitrite'],$_POST['fourth_sample_urobilinogen'],$_POST['fourth_sample_protein'],$_POST['fourth_sample_ph'],$_POST['fourth_sample_blood'],$_POST['fourth_sample_specific_gravity'],$_POST['fourth_sample_ketone'],$_POST['fourth_sample_bilirubin'],$_POST['fourth_sample_glucose']));
			array_push($results, $medical_lab->grade('Mindy Cerdero', $_POST['fifth_sample_color'],$_POST['fifth_sample_appearance'],$_POST['fifth_sample_mucus'],$_POST['fifth_sample_leukocytes'],$_POST['fifth_sample_nitrite'],$_POST['fifth_sample_urobilinogen'],$_POST['fifth_sample_protein'],$_POST['fifth_sample_ph'],$_POST['fifth_sample_blood'],$_POST['fifth_sample_specific_gravity'],$_POST['fifth_sample_ketone'],$_POST['fifth_sample_bilirubin'],$_POST['fifth_sample_glucose']));
			
			$app->renderTemplate('header', $data = array('title'=>'Results - Pharmacy Technician - CareerTestDrives.com'));
			$app->renderTemplate('results/mlt', $data = array('results' => $results));
			$app->renderTemplate('results/back_to_main');
			$app->renderTemplate('footer');
			break;

		case 'Medical_Biller':
			$results = array();
			$medical_billing = $app->model('Medical_Billing');

			array_push($results, $medical_billing->grade('Kristine Maxwell',$_POST['patientOneCode']));
			array_push($results, $medical_billing->grade('Willardia Gardner',$_POST['patientTwoCode']));
			array_push($results, $medical_billing->grade('Glen Holt',$_POST['patientThreeCode']));
			array_push($results, $medical_billing->grade('Roxanne Todd',$_POST['patientFourCode']));
			array_push($results, $medical_billing->grade('Ira Erickson',$_POST['patientFiveCode']));
			array_push($results, $medical_billing->grade('Caroline Welch',$_POST['patientSixCode']));
			array_push($results, $medical_billing->grade('Miguel Smith',$_POST['patientSevenCode']));
			array_push($results, $medical_billing->grade('Patricia Carpenter',$_POST['patientEightCode']));

			$app->renderTemplate('header', $data = array('title'=>'Results - Medical Billing and Coding - CareerTestDrives.com'));
			$app->renderTemplate('results/mbc', $data = array('results'=>$results));
			$app->renderTemplate('results/back_to_main');
			$app->renderTemplate('footer');
			break;

		case 'Web_Developer':
			$app->renderTemplate('header', $data = array('title'=>'Results - Web Development - CareerTestDrives.com'));
			$app->renderTemplate('results/web');
			$app->renderTemplate('results/back_to_main');
			$app->renderTemplate('footer');
			break;
		default:
			$app->redirectTo('/index');
			break;
	}
	$app->renderTemplate('footer');
});

$app->route('admin', function($data = []) use ($app){
	$timer = $app->model('Timer');
	$conn = $app->model('Database');
	
	if (isset($_POST['timer'])) {
		$timer->insert($conn->connect(),$_POST['reason'],$_POST['minutes']);
	}
	if (isset($_POST['deleteTimer'])) {
		$timer->delete($conn->connect(),$_POST['timerid']);
	}
	$times = $timer->get($conn->connect());

	$app->renderTemplate('header', $data = array('title' => 'Admin Panel - Career Test Drives'));
	$app->renderTemplate('admin/set-timer');
	$app->renderTemplate('admin/get-timer', $data = array('times' => $times));
	$app->renderTemplate('footer');
});

$app->route('timer', function($data = []) use ($app) {
	$timer = $app->model('Timer');
	$conn = $app->model('Database');
	$times = $timer->get($conn->connect());
	$app->renderTemplate('header', $data = array('title' => 'Times - Career Test Drives'));
	$app->renderTemplate('timer', $data = array('times' => $times));
	$app->renderTemplate('footer');
});

$app->route('404', function($data = []) use ($app){
	$app->renderHTML('<h1>404 - Error: Page Not Found.</h1>');
});

$app->start();