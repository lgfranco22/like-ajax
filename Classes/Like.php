<?php

class Like{

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

    public function vrfy($usuario){

        $sql = $this->pdo->prepare("SELECT id FROM likeP WHERE usuario = :u");
        $sql->bindValue(":u",$usuario);
        $sql->execute();
//      $sql = $sql->fetchAll(PDO::FETCH_ASSOC);
        if($sql->rowCount() > 0){
                return true;
        }
        else{
                return false;
        }

    }

    public function votar($usuario, $user_ag, $nota)
    {
        $sql = $this->pdo->prepare("INSERT INTO likeP (usuario, user_agent, likeP) VALUES (:u, :a, :l)");
        $sql->bindValue(":u",$usuario);
        $sql->bindValue(":a",$user_ag);
        $sql->bindValue(":l",$nota);
        $sql->execute();
    }

        public function getVotosP(){
                $sql = $this->pdo->prepare("SELECT likeP from likeP where likeP = 1");
                $sql->execute();
                $re = $sql->rowCount();
                return $re;
        }
        public function getVotosN(){
        $sql = $this->pdo->prepare("SELECT likeP from likeP where likeP = 0");
        $sql->execute();
        $re = $sql->rowCount();
        return $re;
    }
        public function delete(){
                $sql = $this->pdo->prepare("delete from likeP");
                $sql->execute();
        }
}
