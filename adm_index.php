<?php

include_once "adm_login.php";

$smarty->assign("titulo", utf8_encode(TITULO));
$smarty->assign("nome", $_SESSION['nome']);
$smarty->assign("perfil", $_SESSION['perfil']);
$smarty->display("admin/index.html");

?>