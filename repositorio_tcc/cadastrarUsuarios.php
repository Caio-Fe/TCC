<?php
/**/
    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "repositorio_tccs";
    //$mensagem = "";
    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        $email = $_GET["email"];
        $password= $_GET["password"];
        $perfil_id= $_GET["perfil_id"];
        
        $conn = new mysqli ($servidor, $user, $pass, $banco);
        $sql="INSERT INTO `users`(`email`, `password`, `perfil_id`) VALUES ('$email', '$password', '$perfil_id')";
        $result=$conn->query($sql);
        /*echo $sql;
        if ($result=true){
            $mensagem="Usuario Cadastrado";
        } else {
            $mensagem="Cadastro falhou";
        }*/
    }
//echo $mensagem;
?>
