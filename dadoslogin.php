<?php
session_start();
$login = $_POST["login"] ?? NULL;
$senha = $_POST["senha"] ?? NULL;


if(isset($login) && isset($senha)){
    $_SESSION["usuario"] = array(
        "login" => $login,
        "senha" =>$senha
    );
}

if (isset($_SESSION['usuario'])) {
    $login = $_SESSION['usuario']['login'];
    $senha = $_SESSION['usuario']['senha'];

    echo "Login e senha:";
    echo "<br>";
    print_r($login);
    echo "<br>";
    print_r($senha);
    exit;
}
    echo "Login e senha não informados";
?>