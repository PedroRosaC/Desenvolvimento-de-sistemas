<?php
require_once './shared/header.php';
?>

<body>
     <div class="row" style="margin-top: 10%;">
       <div class="col-md-4"></div>
        <div class="col-md-4">
             <h2>Quem está assistindo?</h2>
                
        </div>
        <div class="col-md-4"></div>
        
    </div>
    <div class="row" >
        <div class="col-md-3"></div>
        <div class="col-md-6 row">
<?php
$perfis = array(
    array('nome'=>'Pedro', 'img'=>'img/perfil/pedro.jpg','cod'=>'1'),
    array('nome'=>'Criança', 'img'=>'img/perfil/infantil.PNG','cod'=>'2'),
    array('nome'=>'Pai do Pedro', 'img'=>'img/perfil/paidopedro.jpg','cod'=>'3'),
    );
    foreach ($perfis as $perfil) {
                    echo '
                    <div class="col-md-4" >
                        <a href="./filmes.php?cod='.$perfil["cod"].'" style="width:100%;height:100%;display: flex; flex-direction: column; align-items: center; justify-content: center; text-decoration:none; color: white;">
                            <img class="imgs" style="height:100%; width: 100%;"src="'.$perfil["img"].'"/>
                            <h3>'.$perfil["nome"].'</h3>
                        </a>
                    </div>
                    ';
                }
            ?>
        </div>
        <div class="col-md-3"></div>
    </div>
<?php
require_once './shared/footer.php';

