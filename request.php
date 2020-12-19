<?php

ini_set ('display_errors', 1);
error_reporting (E_ALL);

require 'Classes/Acesso.php';

if(isset($_GET)){

	$ip = $_SERVER['REMOTE_ADDR'];
	$user_agent = $_SERVER['HTTP_USER_AGENT'];
	$hora = date("H:i:s");
	$data = date("d/m/Y");
	$cidade = addslashes($_GET['cidade']);
	$estado = addslashes($_GET['estado']);
	$pais = addslashes($_GET['pais']);
	$lat = addslashes($_GET['latitude']);
	$lon = addslashes($_GET['longitude']);
	$isp = addslashes($_GET['isp']);

	$registro = new Acesso("reg_site", "localhost", "root", "root");

	$registro->request($ip, $user_agent, $hora, $data, $cidade, $estado, $pais, $lat, $lon, $isp);

}
