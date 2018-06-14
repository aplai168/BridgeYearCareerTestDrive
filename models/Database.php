<?php
class Database {
	public function connect() {
		return mysqli_connect('localhost','bridgeye_usertwo','password','bridgeye_data');
	}
}