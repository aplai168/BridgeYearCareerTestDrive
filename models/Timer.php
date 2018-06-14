<?php
class Timer {
	public function insert($conn, $name,$numberMinutes) {
		$currentDate = new DateTime();
		$newtime = new DateTime();
		$newtime = $newtime->add(new DateInterval('PT'.$numberMinutes.'M'));

		$currentDate = $currentDate->format('Y-m-d H:i:s');
		$newtime = $newtime->format('Y-m-d H:i:s');
		mysqli_query($conn, "INSERT INTO timer VALUES ('',UUID(),'$name','$currentDate','$newtime')");

	}

	public function get($conn) {
		$getCurrentTimes = mysqli_query($conn, "SELECT * FROM timer WHERE DATEDIFF(NOW(), stop) >= 0 AND DATE(NOW()) <= stop ORDER BY DATEDIFF(NOW(), stop)");
		if (mysqli_num_rows($getCurrentTimes) >= 1) {
			$retArray = array();
			while($row = mysqli_fetch_assoc($getCurrentTimes)) {
				array_push($retArray, $row);
			}
			return $retArray;
		} else {
			return "No times available";
		}
	}

	public function delete($conn, $id) {
		mysqli_query($conn, "DELETE FROM timer WHERE timerid = '$id' ");
	}
}
?>