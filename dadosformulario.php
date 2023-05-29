<?php
session_start();
$nome = $_POST["nome"];
$email = $_POST["email"];
$idade = $_POST["idade"];
$hobbie = $_POST["hobbie"];


$_SESSION["nome"] = $nome;
$_SESSION["email"] = $email ;
$_SESSION["idade"] = $idade;
$_SESSION["hobbie"] = $hobbie ;

if($idade < 18){
    $_SESSION["idade"] = '';
    ?>
    <h1>Idade menor que 18 anos</h1>

    <?php
};

if(strlen($nome) < 6){
    $_SESSION["nome"] = '';
    ?>
    <h1> nome menor que 6 caracteres</h1>
    <?php
};
?>
<h1>Nome: <?php echo $_SESSION["nome"]?></h1>
<h1>Email: <?php echo $_SESSION["email"] ?></h1>
<h1>Idade: <?php echo $_SESSION["idade"] ?></h1>
<h1>Hobbie: <?php echo $_SESSION["hobbie"]?></h1>