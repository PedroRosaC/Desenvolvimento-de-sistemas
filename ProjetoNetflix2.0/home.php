<?php

use LDAP\Result;

require_once './shared/header.php';
require_once './model/perfilModel.php';
?>

<style>
    img{
        width: 100px;
        height: 100px;
    }
</style>
<body>
    <div class="row" style="margin-top: 10%;">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h2>Quem está assistindo?</h2>

        </div>
        <div class="col-md-4"></div>

    </div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 row">

            <?php

            if ($_POST) {

                $nome = $_POST['nome'];
                $tipo = $_POST['tipo'];
                
                foreach ($perfil as $perfis) {
                    if ($tipo == 1) {
                        echo '<a href="filmes.php?cod=2"> <img rel="./img/infantil.jpg"></a>';
                    }

                    echo '<img href="./img/pedro.jpg">';
                }
            }
            ?>
            puta <img rel="img/Netflix-Logo.png" width="100px" height="100px"> 
        </div>
        <div class="col-md-3"></div>
    </div>
    <?php
    require_once './shared/footer.php';
