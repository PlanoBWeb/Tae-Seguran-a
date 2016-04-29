<?php

    include_once "configs/config.php";
    include_once "url.php";

    $smarty->assign("pagina", $pagina);
    $smarty->assign("URL", URL);
    $smarty->assign("breadcrumb", "Serviços terceirizados");
    $smarty->display("servicos-terceirizados.html");

?>