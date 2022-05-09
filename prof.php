<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gerenciamento Escolar</title>
    <link rel="stylesheet" 
    href="estilo.css"/>
</head>
<body>
    <div id="pagina">
        <div id="topo">

    <h1>Sistema de Gerenciamento Escolar</h1>
    <h3>Dias e Dias Parados Ltda.</h3>
</div>
<div id="nav">
    <ul>
        <li>
            <a href="index.php">
                Principal
            </a>
        </li>
        
        <li>
            <a href="prof.php">
                Professores
            </a>
        </li>

        <li>
            <a href="login.php">
                Acesso Restrito
            </a>
        </li>
        <li>
            <a href="fale.php">
                Fale Conosco
            </a>
        </li>
    </ul>
</div>
<div id="corpo">

    <h2>Conheça os nossos professores</h2>
    
    <?php
    //repete 5 vezes
    for($i = 1; $i<=15; $i++){
        //exibe a informação entre aspas na tela
        echo "
            <div class='professores'>
                <img src='https://picsum.photos/id/1062/200/300'>
                <h3>Nome do Professor</h3>
                <h5>E-mail do Professor</h5>
                <h5>Site do Professor</h5>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id molestias, omnis optio animi et ducimus quae laboriosam sed aut perspiciatis accusamus fugiat, obcaecati consectetur facilis aperiam! Ex reiciendis cumque dolorum?</p>
            </div>
        ";
}
    ?>
    </div>
    <div id="limpar">
    </div>
    <div id="rodape">
    
    <p>&copy; 2022. Arnaldo Martins Hidalgo Junior</p>
</div>
</div>
</body>
</html>