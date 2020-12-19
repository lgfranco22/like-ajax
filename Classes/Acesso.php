<?php

class Acesso{

    private $pdo;

    //Construtor
    public function __construct($dnmae, $host, $usuario, $senha)
    {
        try {
            $this->pdo = new PDO("mysql:dbname=".$dnmae.";host=".$host, $usuario, $senha);
        } catch (PDOException $e) {
            echo "Erro no banco de dados: ".$e->getMessage();
        }
        catch(Exception $e){
            echo "Erro: ".$e->getMessage();
        }
    }

	public function request($ip, $user_agent, $hora, $data, $cidade, $estado, $pais, $lat, $lon, $isp)
	{
		$sql = $this->pdo->prepare("INSERT INTO visitante (ip, user_agent, hora, data, cidade, estado, pais, latitude, longitude, isp) VALUES (:ip, :ua, :hr, :dt, :city, :state, :country, :lat, :lon, :isp)");
	        $sql->bindValue(":ip", $ip);
        	$sql->bindValue(":ua", $user_agent);
	        $sql->bindValue(":hr", $hora);
        	$sql->bindValue(":dt", $data);
	        $sql->bindValue(":city", $cidade);
	        $sql->bindValue(":state", $estado);
	        $sql->bindValue(":country", $pais);
	        $sql->bindValue(":lat", $lat);
	        $sql->bindValue(":lon", $lon);
	        $sql->bindValue(":isp", $isp);
	        $sql->execute();
	}

}

?>
