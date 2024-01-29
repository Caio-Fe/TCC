<?php

include 'validador_acesso.php';

if(isset($_GET['id'])) {
    include_once 'dbcon.php';
    $id = $_GET['id'];
    $sqlVerifica = "SELECT * FROM projects WHERE id = '$id'";
    $resultVerifica = mysqli_query($con, $sqlVerifica);
    if(mysqli_num_rows($resultVerifica) <= 0) {
        header('Location: resultadoBusca.php?deletar=erro');
    } else {
        $sql = "DELETE FROM projects WHERE id = '$id'";
        $result = mysqli_query($con, $sql);
        if($result) {
            header('Location: resultadoBusca.php?deletar=ok');
        } else {
            header('Location: resultadoBusca.php?deletar=erro2');
        }
    }
}
