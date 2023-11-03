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
       overflow-x: hidden;
    }
    .a .b .c{
        margin-right:10px;
    }
    .itens{
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
        margin-right: 10px;
        background-color: gray;
        border-color: #333333;
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
            <form  method="post" action="controller/criarPerfilController.php"> 
                <div style="border-radius:15px; color:white; background-color:rgba(0,0,0,0.8); padding: 20px; "> 
                    <h2>Criar Perfil</h2>
                    <div class="mb-3 mt-3" >
                        <h3>Nome do Perfil:</h3>
                        <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome do perfil"  style="border:none; color:#ffffff; background-color: #333333;">
                    </div>
                    <div class="mb-3 mt-3">
                        <input type="checkbox" name="kids_ou_nao" id="kids_ou_nao" class="c"><label for="kids_ou_nao" >Perfil infantil</label>
                    </div>
                    <div class="mb-3 mt-3">
                        
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