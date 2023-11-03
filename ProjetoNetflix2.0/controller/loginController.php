
<?php
require_once '../model/usuarioModel.php';


if ($_POST) {
    
    @$lembrar = $_POST['lembrar'];
    $usuario = new usuarioModel($usuario_id);
    $usuario->Autenticar();

} 


else {
    header('location:../index.php');
}
?>
