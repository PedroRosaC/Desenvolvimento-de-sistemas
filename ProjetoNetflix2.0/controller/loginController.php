<?php
require_once "../model/ConexaoMysql.php";

if ($_POST) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $lembrar = $_POST['lembrar'];

    $result = $conexao->query("SELECT * FROM usuario where email = '$email' and senha = '$senha'");

    if($result->num_rows < 1){
    
        header('location:../index.php?cod=171');
        
    }

    else{

        session_start();
        $_SESSION['login'] = $email;
        if(isset($lembrar)){
            if($lembrar == 1){
                setcookie('email', $email, time() + (86400 * 30), "/");
            }
        }
        
        
        header('location:../home.php');


    }

} 

else {
    header('location:../index.php');
}


?>
