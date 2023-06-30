<?php
require_once './shared/header.php';
?>
<div class="row">
    <div class="col-md-4"></div>

        <div class="col-md-4">
        <form methdiv styleod="GET" action="controller/LoginController.php">
            
                
                    <div class="row" style="border: 2px solid green; margin: 30px 30px 30px 30px; padding: 20px 20px 20px 20px;">
                        <div style=" padding-top: 20px"
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Insira seu email">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="senha" class="form-label">Senha:</label>
                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Insira sua senha">
                        </div>
                        <div class="row">
                            <input type="submit" class="btn btn-outline-success" style="margin: 20px 20px 20px 12px" value="Log in">
                        </div>
                        <div class="d-grid">
                            <?php
                            @$cod = $_REQUEST['cod'];
                            if(isset($cod)){
                                if($cod == '171'){
                                    echo('<div class="alert alert-danger">');
                                    echo('Verifique usuário ou senha.');
                                    echo('</div>');
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
        </form>
        </div>
    <div class="col-md-4"></div>
</div>
<?php
require_once './shared/footer.php';


?>



