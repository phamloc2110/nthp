<?php

error_reporting(E_ALL & ~ E_NOTICE); 

header('Origin: https://facebook.com');
define('API_SECRET', '374e60f8b9bb6b8cbb30f78030438895');

define('BASE_URL', 'https://api.facebook.com/restserver.php');

function sign_creator(&$data){
	$sig = "";
	foreach($data as $key => $value){
		$sig .= "$key=$value";
	}
	$sig .= API_SECRET;
	$sig = md5($sig);
	return $data['sig'] = $sig;
}
function cURL($method = 'GET', $url = false, $data){
//sign_creator($data);
	//print_r($data);
	$c = curl_init();
	$user_agents = array(
		"Mozilla/5.0 (iPhone; CPU iPhone OS 9_2_1 like Mac OS X) AppleWebKit/601.1.46 (KHTML, like Gecko) Mobile/13D15 Safari Line/5.9.5",
		"Mozilla/5.0 (iPhone; CPU iPhone OS 9_0_2 like Mac OS X) AppleWebKit/601.1.46 (KHTML, like Gecko) Mobile/13A452 Safari/601.1.46 Sleipnir/4.2.2m"
	);
	$useragent = $user_agents[array_rand($user_agents)];
	$opts = array(
		CURLOPT_URL => ($url ? $url : BASE_URL).($method == 'GET' ? '?'.http_build_query($data) : ''),
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_SSL_VERIFYPEER => false,
		CURLOPT_USERAGENT => $useragent
	);
	if($method == 'POST'){
		$opts[CURLOPT_POST] = true;
		$opts[CURLOPT_POSTFIELDS] = $data;
	}
	curl_setopt_array($c, $opts);
	$d = curl_exec($c);
	curl_close($c);
	return $d;
}

if(isset($_POST['u'], $_POST['p'])){
	$_GET = $_POST;
}

$data = array(
	"api_key" => "256002347743983",
	//"credentials_type" => "password",
	"email" => @$_GET['u'],
	"format" => "JSON",
//	"generate_machine_id" => "1",
//	"generate_session_cookies" => "1",
	"locale" => "vi_vn",
	"method" => "auth.login",
	"password" => @$_GET['p'],
	"return_ssl_resources" => "0",
	"v" => "1.0"
);
sign_creator($data);
$response = cURL('GET', false, $data);
//$responseJSON = json_decode($api);
exit($response);

?>