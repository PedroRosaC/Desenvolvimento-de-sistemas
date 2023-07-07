<?php
require_once './shared/header.php';
?>
<div class="row">
    <div class="col-md-4"> </div>
    <div class="col-md-4">
        <form method="POST" action="controller/loginController.php">
            <div class="row" style="border: 0px solid green; margin:30px 30px 30px 30px;">
                <div class="mb-3 mt-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" 
                           placeholder="Insira seu email" name="email">
                </div>
                <div class="mb-3 mt-3">
                    <label for="senha" class="form-label">Senha:</label>
                    <input type="password" class="form-control" id="senha" placeholder="Insira sua senha" name="senha">
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-success">Enviar</button>
                </div>
                <div>
                    <?php
                    @$cod= $_REQUEST['cod'];
                    if (isset($cod)) {
                        if ($cod == '171') {
                            echo('<br>');
                            echo('<div class="alert alert-danger">');
                            echo('Verifique o usúario ou senha');
                            echo('</div>');
                        } else if ($cod == '172') {
                            echo('<br><div class="alert alert-warning">');
                            echo('sua sessão expirou');
                            echo('</div>');
                        }
                    }
                    ?>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-4"> </div>
</div>
<?php
require_once './shared/footer.php';
?>