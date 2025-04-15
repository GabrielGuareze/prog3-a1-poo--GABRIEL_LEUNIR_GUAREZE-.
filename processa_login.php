<?php
require_once 'Class/Autenticador.php';
require_once 'Class/Sessao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $senha = $_POST['senha'];

    $usuario = Autenticador::login($email, $senha);
    if ($usuario) {
        Sessao::iniciar();
        Sessao::set('usuario', $usuario);

        if (!empty($_POST['lembrar'])) {
            setcookie('email', $email, time() + (86400 * 30), "/");
        }

        header("Location: dashboard.php");
        exit;
    } else {
        echo "Credenciais inválidas!";
    }
}
?>