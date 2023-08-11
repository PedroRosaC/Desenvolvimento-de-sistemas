<?php
    require_once 'shared/header.php';
?>
<body style="margin-left: 30px;">
    <header style="display: flex; flex-direction: row; width: 100%;">
            <img src="img/Netflix-Logo.png" style="width: 10%;height: 10%; margin-left: 10%;margin-top: 45px;" >
            <a style="text-decoration: none; color: white; margin:50px;" href="./home.php">Perfis</a>
            <a style="text-decoration: none; color: red;margin:50px;" href="./controller/logoutController.php?cod=172">Logout</a>
        </header>
    <div class="filmes">
        
        <div class="row">
            <h3>Assistidos recentemente</h3>
            <?php
               $filmes1 = array("img/filmes/BB.jpg","img/filmes/bakihanma.jpg","img/filmes/black mirror.jpg","img/filmes/bladerunner2049.jpg","img/filmes/cyberpunk.jpg");
               $filmes2 = array("img/filmes_infantis/castelo.jpg","img/filmes_infantis/gato.png","img/filmes_infantis/barbie.jpg","img/filmes_infantis/elementos.jpg","img/filmes_infantis/shrek.jpg");
               $filmes3 = array("img/filmes/bladerunner.jpg","img/filmes/DARK.jpg" ,"img/filmes/bladerunner2049.jpg","img/filmes/vikings.jpg","img/filmes/peakyblinders.jpg" );
               
               $escolhido = array();
               @$cod = $_REQUEST['cod'];
               if (isset($cod)){
                   if($cod == 1){
                       $escolhido = $filmes1;
                   }else if($cod == 2){
                       $escolhido = $filmes2;
                   }else if($cod == 3){
                       $escolhido = $filmes3;
                   } else {
                        // sla
                        header("location:home.php");
                    }
               }
                foreach($escolhido as $imgs){
                      
                        echo '
                            <div class="col-md-2" style="margin: 20px;">
                                <a href="#"><img style="height:100%; width:100%;" src="'.$imgs.'"/></a>
                            </div>
                        ';
                    }
               
            ?>
        </div>
        <div class="row">
            <h3>Continuar assindo</h3>
            <?php
               $filmes1 = array("img/filmes/ippo.jpg","img/filmes/eva.jpg","img/filmes/ragnarok.jpg","img/filmes/castlevania.jpg","img/filmes/cowboy.jpg");
               $filmes2 = array("img/filmes_infantis/hotel.jpg","img/filmes_infantis/wandinha.jpg","img/filmes_infantis/patrulha.jpg","img/filmes_infantis/madagascar.jpg", "img/filmes_infantis/hilda.jpg");
               $filmes3 = array("img/filmes/rambo.jpg" ,"img/filmes/black mirror.jpg" ,"img/filmes/bakihanma.jpg", "img/filmes/castlevania.jpg","img/filmes/ippo.jpg" );
               
               $escolhido = array();
               @$cod = $_REQUEST['cod'];
               if (isset($cod)){
                   if($cod == 1){
                       $escolhido = $filmes1;
                   }else if($cod == 2){
                       $escolhido = $filmes2;
                   }else if($cod == 3){
                       $escolhido = $filmes3;
                   } else {
                        // sla
                        header("location:home.php");
                    }
               }
                foreach($escolhido as $imgs){
                      
                        echo '
                            <div class="col-md-2" style="margin: 20px;">
                                <a href="#"><img style="height:100%; width:100%;" src="'.$imgs.'"/></a>
                            </div>
                        ';
                    }
               
            ?>
        </div>
    </div>
    
    
<?php
require_once 'shared/footer.php';
?>