<?php
require_once 'Class/Autenticador.php';
require_once 'Class/Usuario.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = htmlspecialchars(trim($_POST['nome']));
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    if ($nome && $email && $senha) {
        $usuario = new Usuario($nome, $email, $senha);
        Autenticador::registrar($usuario);
        header("Location: login.php");
        exit;
    } else {
        echo "Dados inválidos!";
    }
}
?>

