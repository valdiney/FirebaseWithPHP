<?php 
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

require __DIR__.'/vendor/autoload.php';

const DEFAULT_URL = 'https://iotssa-28bc8.firebaseio.com/';
const DEFAULT_TOKEN = 'AIzaSyB19kLxLsgrUtfFK48J74H1y982XCw0wm8';


$firebase = new \Firebase\FirebaseLib(DEFAULT_URL);

$data = [
	"umidade" => 10,
	"temperatura" => 19,
	"local" => "Quarto"
];

//$firebase->push("number", $data);

if (isset($_GET["parametro"])) {

	//$firebase->set("sensor/temperatura", $_GET["parametro"]);

	$get = $firebase->get("led/status");

	

	echo intval($get);

} else {
	echo "Error";
}

