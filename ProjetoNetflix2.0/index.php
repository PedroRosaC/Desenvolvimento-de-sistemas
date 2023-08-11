<!DOCTYPE>
<html>
    <head>
        <title>Netflix</title>
        <link rel="icon" type="image/x-icon" href="img/favicon.ico">
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="js/jquery-3.7.0.min.js" type="text/javascript"></script>
        <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
        <style>
            .col-md-12{
                border: 1px solid black;
            }
            

            p{
                <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
                <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
                <script src="js/jquery-3.7.0.min.js" type="text/javascript"></script>
                <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
                <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
                text-align: justify;
            }
            body{
               height:100%; 
               justify-content: center; 
               margin:0;
               overflow: hidden;
               background-image: url('img/netflix.jpg'); 
               overflow-x: hidden;
            }
            a .b .c{
                margin-right:0px;
            }
            itens{
                width: 450px;
                display: flex;
                margin: 60px 70px;
                flex-direction: column;
            }
            
            form{
                margin-top: 5%;
                width: 60vh;
                margin-left: 10%;
            }
            .b{
                text-decoration: none;
                color: #666666;
                margin-right: 50px;
            }
            .c{
                font-size:13px;
            }
            .btn-danger{
                border-color: red;
                background-color: red;
                border-radius: 4px;
            }
        </style>
    </head>
    
<body>
    <header class="row">
        <a href="index.php"><img src="img/Netflix-Logo.png" style="width: 10%; margin-left: 10%;margin-top: 10px;" alt=""/></a>
    </header>
<div class="row">
    
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <form  method="post" action="controller/loginController.php">
            <div class="row" style="border-radius:15px;color: #666666; background-color:rgba(0,0,0,0.8); padding: 20px">
                <div class="itens">
                <h2 style="color:white;">Entrar</h2>
                <div class="mb-3 mt-3">
                    <input type="text" class="form-control" id="email" placeholder="E-mail ou número de telefone" name="email" style="border:none; background-color: #333333;">
                </div>
                <div class="mb-3 mt-3">
                    <input type="password" class="form-control" id="senha" placeholder="Senha" name="senha" style='border:none; background-color: #333333;'>
                </div>
                <div class="d-grid">
                    <input  type="submit" value="Entrar" class="btn btn-danger" >
                </div>
                <div class="d-grid">
                    <?php
                    //capturavam a variável query string "cod"
                    @$cod = $_REQUEST['cod'];
                    if (isset($cod)){
                        if ($cod == '171') {
                            echo ('<br><div class="alert alert-warning" style="background-color:#ff9900;border-color: #ff9900;">');
                            echo ('Insira uma conta válida.');
                            echo ('</div>');
                        }
                    }
                    ?>
                </div>
                <div class="row">
                    <div class="col-md">
                            <input type="checkbox" id="checkbox"  name="checkbox"/>
                            <label for="checkbox" class="c">Lembre-se de mim</label>
                    </div>
                    <div class="col-md">
                            <a href="#" class="b c">Precisa de ajuda?</a>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <p>Novo por aqui?<a href="#" class="b">Assine agora</a>
                <p class="c">Este site é protegido pelo google reCAPCHA para garantir que você não é um robô.<a href="#">Saiba mais.</a></p>
            </div>
           </div>
        </form>
    <div class="col-md-4"></div>
</div>

<?php
require_once './shared/footer.php';

?>