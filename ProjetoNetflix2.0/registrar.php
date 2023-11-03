<?php
require_once './shared/header.php';
?>
<style>
    .col-md-12{
        border: 1px solid black;
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
        width: 50vh;
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
            
<body>
    
     <div class="row" style="margin-top: 10%;">
       <div class="col-md-4"></div>
        <div class="col-md-4">
            <form  method="post" action="controller/cadastrarController.php">
                <div style="border-radius:15px; color:white; background-color:rgba(0,0,0,0.8); padding: 20px">
                    <h2>Registrar</h2>
                    <div class="mb-3 mt-3" >
                        <h3>E-mail:</h3>
                        <input type="email" name="email" class="form-control" id="email" placeholder="E-mail ou número de telefone"  style="border:none; color:#ffffff; background-color: #333333;">
                    </div>
                    <div class="mb-3 mt-3">
                        <h3>Senha</h3>
                        <input type="password" class="form-control" id="senha" placeholder="insira sua senha" name="senha" style="border:none; color:#ffffff; background-color: #333333;">
                        <br>
                        <input type="submit" class="btn btn-danger" id="button" name="button">
                    </div>
                </div>    
            </form>
        </div>
        <div class="col-md-4"></div>
        
    </div>



<?php
require_once './shared/footer.php';
?>