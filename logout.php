<?php
require_once 'Class/Sessao.php';
Sessao::iniciar();
Sessao::destruir();
header("Location: login.php");
exit;
?>
