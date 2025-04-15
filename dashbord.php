<?php
require_once 'Class/Sessao.php';
Sessao::iniciar();
$usuario = Sessao::get('usuario');

if (!$usuario) {
    header("Location: login.php");
    exit;
}

$email_cookie = $_COOKIE['email'] ?? '';
?>
<!DOCTYPE html>
<html>
<head><title>Área Restrita</title></head>
<body>
    <h2>Bem-vindo, <?= htmlspecialchars($usuario->getNome()) ?>!</h2>
    <?php if ($email_cookie): ?>
        <p>E-mail lembrado: <?= htmlspecialchars($email_cookie) ?></p>
    <?php endif; ?>
    <a href="logout.php">Sair</a>
</body>
</html>
