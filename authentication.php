<?php
header('Content-type: application/json');
$encoded_json = file_get_contents('php://input');
$type = $_GET['type'];
$base_url = "https://api.bitreserve.org/v0/me";
$encoded_json = json_decode($encoded_json);
switch ($type) {
	case 'login' :
		$username = $encoded_json -> username;
		$password = $encoded_json -> password;
		if ($username != NULL && $password != NULL) {

			$ch = curl_init();

			$headers = array('X-Bitreserve-OTP:<OTP-Token>', 'Content-Type: application/json');
			$fields = array("description" => "hello to Bitreserve");
			// Set the url, number of POST vars, POST data
			curl_setopt($ch, CURLOPT_URL, $base_url . "/tokens");

			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

			curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
			curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);

			// Avoids problem with https certificate
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);

			// Execute post
			$result = curl_exec($ch);
			// Close connection
			curl_close($ch);
			echo json_encode($result);

		} else {
			$arrayName = array('Error' => "Please Send email/username and Password");
			echo json_encode($arrayName);
		}

		break;
	case 'balance' :
		$ch = curl_init();

		$headers = array('Authorization:Bearer ' . $encoded_json -> tocken);
		// Set the url, number of POST vars, POST data
		curl_setopt($ch, CURLOPT_URL, $base_url . "/cards");

		// curl_setopt($ch, CURLOPT_GET, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		// Avoids problem with https certificate
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);

		// Execute post
		$result = curl_exec($ch);
		// Close connection
		curl_close($ch);
		echo $result;

		break;

	case 'profile' :
		$ch = curl_init();

		$headers = array('Authorization:Bearer ' . $encoded_json -> tocken);
		// Set the url, number of POST vars, POST data
		curl_setopt($ch, CURLOPT_URL, $base_url);

		// curl_setopt($ch, CURLOPT_GET, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		// Avoids problem with https certificate
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);

		// Execute post
		$result = curl_exec($ch);
		// Close connection
		curl_close($ch);
		echo $result;

		break;

	default :
		break;
}
?>