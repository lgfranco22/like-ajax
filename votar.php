<?php
require 'Classes/Like.php';

$voto = new Like("db_vuln", "localhost", "root", "root");

$usuario = $_SERVER['REMOTE_ADDR'];
$user_ag = $_SERVER['HTTP_USER_AGENT'];

if(isset($_GET['voto'])){

	$nota = addslashes($_GET['voto']);

	if($nota == "gp"){
                $gp = $voto->getVotosP();
                echo $gp;
        }

        if($nota == "gn"){
                $gn = $voto->getVotosN();
                echo $gn;
        }

	if($nota == "limpar"){
                $voto->delete();
                header("Location: index.php");
        }

	if($voto->vrfy($usuario)){
		echo "votoON";
	//	echo "Usuario ja votou";
	}
	else{
    		if($nota == "true"){
        		$nt = 1;
        		$voto->votar($usuario, $user_ag, $nt);
        		$votosP = $voto->getVotosP();
        		echo $votosP;
    		}
    		if($nota == "false"){
        		$nt = 0;
        		$voto->votar($usuario, $user_ag, $nt);
        		$votosN = $voto->getVotosN();
        		echo $votosN;
    		}
	}
}
