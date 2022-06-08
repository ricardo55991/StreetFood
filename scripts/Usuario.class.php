<?php

class Usuario{
    
    public function login($email, $senha){
        global $pdo;

        $sql = "select * from dbfood.cliente c where c.email = :email and c.senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("email", $email);
        $sql->bindValue("senha", $senha);
        $sql->execute();

        if($sql->rowCount() > 0){
            $dado = $sql->fetch();
            //echo $dado['nome'];

            $_SESSION['idUser'] = $dado['id'];

            return true;
        }
        else
        {
            return false;            
        }
    }

    public function logged($id){
        global $pdo;

        $array = array();

        $sql = "select c.nome from dbfood.cliente c where c.id = :id";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("id", $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetch();
        }
        
        return $array;

    }
}

?>