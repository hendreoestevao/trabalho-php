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

     ?>
     <h1>Login: <? print_r($login); ?></h1>
     <h1>Senha: <? print_r($senha); ?></h1>
<?php
    exit;

}

?>
    <h1>Login e senha não informados</h1> 