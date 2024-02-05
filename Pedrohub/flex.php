<?php 
require_once 'shared/header.php';
?>
<body>
    
    <h1 style="color: bisque;">Flex wrap</h1>
    <div style="width: 300px; height: fit-content;  position: absolute;">
        <p>Serve para quebrar uma row ou column quando o espaço da divisão acabar</p>
        <br>
        <p> CodeLines:</p>
        <hr>
        <br>
        <p>.container{</p>
                <p>border: 4px solid white;</p>
                <p style="background-color: black;">max-width: 700px;</p>
                <p>height: 500px;</p>
                <p>margin: 0 auto;</p>
                <p style="background-color: black;">display: flex;</p>
                <p style="background-color: black;">flex-direction: row;</p>
                <p style="background-color: black;">flex-wrap: wrap;</p>
                <p>margin-bottom: 50px;</p>
           <p>}</p>
        <br>
            <p>.item{</p>
                <p>background-color: #ccc;</p>
                    <p> padding: 10px;</p>
                    <p> text-align: center;</p>
                    <p>margin: 10px;</p>
            <p>}</p>
        </div>
    <section class="container">
        <div class="item"> item 1</div>
        <div class="item"> item 2</div>
        <div class="item"> item 3</div>
        <div class="item"> item 4</div>
        <div class="item"> item 5</div>
        <div class="item"> item 6</div>
        <div class="item"> item 7</div>
        <div class="item"> item 8</div>
        <div class="item"> item 9</div>
        <div class="item"> item 10</div>
        <div class="item"> item 11</div>
        <div class="item"> item 12</div>
    </section>
    <h1 style="color: bisque;">ALingn items e justify content</h1>
    <div style="width: 300px; height: fit-content;  position: absolute;">
        <p>A chave Align-items serve para alinhar itens na vertical enquanto justify-content serve para alinhar itens na horizontal</p>
        <br>
        <p> CodeLines:</p>
        <hr>
        <br>
        <p>.container{</p>
                <p>border: 4px solid white;</p>
                <p>max-width: 700px;</p>
                <p>height: 500px;</p>
                <p>margin: 0 auto;</p>
                <p>display: flex;</p>
                <p style="background-color: black;">justify-content: flex-start;</p>
                <p style="background-color: black;">align-items: baseline;</p>
                <p>margin-bottom: 50px;</p>
           <p>}</p>
        <br>
            <p>.item{</p>
                <p>background-color: #ccc;</p>
                    <p> padding: 10px;</p>
                    <p> text-align: center;</p>
                    <p>margin: 10px;</p>
            <p>}</p>
        </div>
    <section class="containerAlternative">
        <div class="itemAlternative" style="font-size: 40px;"> Fonte 40px</div>
        <div class="itemAlternative" style="font-size: 30px;"> Fonte 30px</div>
        <div class="itemAlternative" style="font-size: 20px;"> Fonte 20px</div>
        <div class="itemAlternative" style="font-size: 10px;"> Fonte 10px</div>
      
    </section>

    <h1 style="color: bisque;">Flex grow e flex Basis</h1>
    <div style="width: 300px; height: fit-content;  position: absolute;">
        <p>Flex Basis consiste na base(tamanho máximo) necessária para quebrar (flex-wrap) uma coluna ou linha</p>
        <p>Flex grow consiste na quantidade de itens q a proxima coluna ou linha terá assim q a anterior quebrar</p>
    </div>
    <section class="container1">
        <div class="item1"> item 1</div>
        <div class="item1"> item 2</div>
        <div class="item1"> item 3</div>
        <div class="item1"> item 4hhhhhhhhhhhh</div>
        <div class="item1"> item 5</div>
        <div class="item1"> item 6</div>
        <div class="item1"> item 7</div>
        <div class="item1"> item 8</div>
        <div class="item1"> item 9</div>
        <div class="item1"> item 10</div>
        <div class="item1"> item 11</div>
        <div class="item1"> item 12</div>
    </section>

    <h1 style="color: bisque;">Flex shrink</h1>
    <h3 style="color: white;"><b>***Useless One***</b></h3>
    <section class="container2">
        <div class="item2"> item 1</div>
        <div class="item2"> item 2</div>
        <div class="item2"> item 3</div>
        <div class="item2"> item 4</div>
        <div class="item2"> item 5</div>
        <div class="item2"> item 6</div>
        <div class="item2"> item 7</div>
        <div class="item2"> item 8</div>
        <div class="item2"> item 9</div>
        <div class="item2"> item 10</div>
        <div class="item2"> item 11</div>
        <div class="item2"> item 12</div>
    </section>

    <h1 style="color: bisque;">Order </h1>
    <div style="width: 300px; height: fit-content;  position: absolute;">
        <p>Serve para mudar a ordem dos objetos.</p>
    </div>
    <section class="container3">
        <div class="item3" style="order: 1;"> item 1 "order: 1;"</div>
        <div class="item3" style="order: 4;"> item 2 "order: 4;"</div>
        <div class="item3" style="order: 2;"> item 3 "order: 2;"</div>
        <div class="item3" style="order: 3;"> item 4 "order: 3;"</div>
    </section>
   
    <h1 style="color: bisque;">Align Self </h1>
    <div style="width: 300px; height: fit-content;  position: absolute;">
        <p>Serve para mudar a posicao de um item sem alterar os outros itens na vertical</p>
    </div>
    <section class="container4">
        <div class="item4" style="align-self: center;"> align-self: center;</div>
        <div class="item4" style="align-self: flex-end;"> align-self: flex-end;</div>
        <div class="item4" style="align-self: flex-start;">align-self: flex-start;</div>
        <div class="item4" style="align-self: flex-end;"> align-self: flex-end;</div>
    </section>

    
</body>
</html>