<?php
if($_GET){
    echo 'entrei';
    $email= $_GET['email'];
    $senha= $_GET['senha'];
    if($email == 'a@a' && $senha== 'sasa'){
        header('location:../home.php');
    }else{
        header("location:../index.php?cod=171");
    }
    
} else {
    header("location:../index.php");
}

?>