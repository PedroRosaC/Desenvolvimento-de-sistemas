<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Projeto</title>
    </head>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    
    <body>
        <div class="bg"><!-- fundo do login -->
            <h2>Entrar</h2>
            <form method="POST" action="control/login.php">
                <label for="email">Email: </label>
                <input type="email" class="input-style" name="email" id="email" placeholder="Insira seu email">
                <br><br>
                <label for="name">Nome: </label>
                <input type="name" class="input-style" name="nome" id="nome" placeholder="Insira seu nome completo">
                <br><br>
                <input type="submit" class="submit-style" name="submit" value="Entrar">
                <br><br>
                <?php
                @$cod = $_REQUEST['cod'];
                if(isset($cod)){
                    if($cod = '171'){
                        echo '<div class="aviso">';
                        echo 'algo errado';
                        echo '</div>';
                    }

                }
                ?>
            </form>
            
        </div>
        
        
        <?php
        // put your code here
        ?>
    </body>
</html>
