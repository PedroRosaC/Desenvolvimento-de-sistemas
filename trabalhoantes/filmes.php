<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Netflix</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="css/jquery-3.7.0.min.js" type="text/javascript"></script>
        <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
        <style type="text/css">
            body {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                background-color: black;
            }

            .filmes-container {
            }

            .row {
                margin: 5%
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
    </head>

    <body>
         <header style="display: flex; flex-direction: row;  width:100%;">
             <img src="./img/Netflix-Logo-removebg-preview.png" style="height:50px">
            <a style="text-decoration: none; color: white; margin:25px;" href="./index.php">Perfis</a>
            <a style="text-decoration: none; color: white; margin:25px;" class="btn btn-danger" href="index.php">Logout</a>
        </header>
        <div class="filmes-container">
            <div class="row">
                
                <?php
                     $metade1 = array("./img/BakiHanma.png", "./img/BakiHanma.png", "./img/BakiHanma.png", "./img/BakiHanma.png", "./img/BakiHanma.png");    
                    $metade2 = array("./img/patrulhacanina.PNG", "./img/patrulhacanina.PNG", "./img/patrulhacanina.PNG", "./img/patrulhacanina.PNG","./img/patrulhacanina.PNG");    
                    $metade3 = array("./img/BakiHanma.png", "./img/TheHomens.png", "./img/BakiHanma.png", "./img/TheHomens.png", "./img/BakiHanma.png");    
                            
                    $escolhido = array();                    
                    @$cod = $_REQUEST['cod'];
                    if (isset($cod)) {
                        if ($cod == '1') {
                            $escolhido = $metade1;
                        } else if ($cod == '2') {
                            $escolhido = $metade2;
                        } else if ($cod == '3') {
                            $escolhido = $metade3;
                        } 
                    } else {
                        // sla
                        header("location:home.php");
                    }

                    foreach ($escolhido as $img) {
                        // style="height:20px; width:200px;"
                        echo '
                            <div class="col-2" style="margin: 20px;">
                                <img style="width:100%;" src="'.$img.'"/>
                            </div>
                        ';
                    }
                ?>
            </div>
            <div class="row">
                <?php
                    $metade1 = array("./img/BakiHanma.png", "./img/BakiHanma.png", "./img/BakiHanma.png", "./img/BakiHanma.png", "./img/BakiHanma.png");    
                    $metade2 = array("./img/patrulhacanina.PNG", "./img/patrulhacanina.PNG", "./img/patrulhacanina.PNG", "./img/patrulhacanina.PNG","./img/patrulhacanina.PNG");    
                    $metade3 = array("./img/BakiHanma.png", "./img/TheHomens.png", "./img/BakiHanma.png", "./img/TheHomens.png", "./img/BakiHanma.png");    
                         
                    $escolhido = array();                    
                    @$cod = $_REQUEST['cod'];
                    if (isset($cod)) {
                        if ($cod == '1') {
                            $escolhido = $metade1;
                        } else if ($cod == '2') {
                            $escolhido = $metade2;
                        } else if ($cod == '3') {
                            $escolhido = $metade3;
                        } 
                    } else {
                        // sla
                        header("location:home.php");
                    }

                    foreach ($escolhido as $img) {
                        // style="height:20px; width:200px;"
                        echo '
                            <div class="col-md-2" style="margin: 20px;">
                                <img style="width:100%;" src="'.$img.'"/>
                            </div>
                        ';
                    }
                ?>
            </div>
        </div>
            
    </body>
</html>
