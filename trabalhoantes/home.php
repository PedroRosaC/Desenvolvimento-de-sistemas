<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>Página principal</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="js/jquery-3.7.0.min.js" type="text/javascript"></script>
        <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
        <meta charset="UTF-8">
        
        <style>
        .row{
                margin-top: 10%;
            }
        body{
            color:#cccccc;
            background-color: #000;
            height: 100vh;
            margin: 0;
            }
        .contas{
         
            
            }
        p{  
                <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
                <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
                <script src="js/jquery-3.7.0.min.js" type="text/javascript"></script>
                <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
                <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
                text-align: justify;
        }
       
        </style>
        <title></title>
    
</head>

   
<body class="container">
    <form method="POST" action="perfil.php">
    <div class="row">
       
   <?php
        $result = array(
            array('id'=>1,'nome'=>'Pedro','imagem' => 'img/BakiHanma.png', 'cod' => '1'),
            array('id'=>2,'nome'=>'Cria','imagem' => 'img/CriancaNetflix.png', 'cod' => '2'),
            array('id'=>3,'nome'=>'Paidopedro','imagem' => 'img/TheHomens.png', 'cod' => '3')
        );
     foreach ($result as $data) {
            echo ('<div class="col-md-4">');
            echo ('<a style="display: flex; flex-direction: column; align-items: center; justify-content: center;text-decoration: none;" href="filmes.php?cod='.$data["cod"].'">'
            . '<img style="height: 225px; width: 225px;" src=" '. $data['imagem'].' "/>'
            . '<h4 style="color: white; text-align: center">'.$data['nome'].'</h4>'
            . '</a>');
            echo ('</div>');
        }
   ?>

    </div>
</form>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h2>Quem está assistindo?</h2>
        </div>
        <div class="col-md-4"></div>
    </div>
</body>
</html>



