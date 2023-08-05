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
        .col-md-12{
                border: 1px solid black;
            }
        body{
            color:#cccccc;
            background-image: url("../trabalhoantes/img/netflixteaser.png");
            background-color:#1a1e21;
            height: 100vh;
            margin: 0;
            overflow: hidden;
        }
        .login{
            height: 90%;
            width: 30%;
            border-radius: 5px;
            background:rgba(0,0,0,0.8);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position:absolute;
            top:50%;
            left:50%;
            transform:translate(-50%, -50%);
            padding:4%;
            padding-bottom: 10%;
        }
        a.a{
            color:#ffffff;
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
        
        <header>
            <img src="./img/Netflix-Logo-removebg-preview.png" style="width: 15%; padding: 20px; ">
        </header>
        
 <div class="row">
     
        <div class="col-sm-4">

        </div>

       <div class="col-sm-4">
           <form method="POST" action="controller/homeController.php">
           <div class="login">
               <div class="mb-3 mt-3">
                   <h1>Entrar</h1>
                   <br>
                   <label for="email" class="form-label">Email:</label>
                   <input type="email" class="form-control" id="email" name="email" placeholder="Insira seu email" style="background-color: #484d50; border-color:#484d50;">
               </div>
               <div class="mb-3 mt-3">
                   <label for="senha" class="form-label">Senha:</label>
                   <input type="password" class="form-control" id="senha" name="senha" placeholder="Insira sua senha" style="background-color: #484d50; border-color:#484d50;">
               </div>
               <div>
                   <button  type="submit"class="btn btn-danger form-control">Entrar</button>
               </div>
               <div>
                   <label><input type="checkbox"> Lembre-se de mim?</label>
                   <br><br>
                   <p>Novo por aqui?<a href="#" class="a"><b>Assine agora</b></a>.</p>
                   <br>
                   <p>Esta página é protegida pelo Google reCAPTCHA<br> para garantir que você não é um robô. <a href="#">Saiba mais.</a></p>
               </div>
           </div>
        </form>
       </div>
       <div class="col-sm-4">

       </div>
    
 </div>
</body>
</html>
