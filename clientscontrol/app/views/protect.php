<?php

if (!isset($_SESSION)) {
    session_start();
};

// echo $_SESSION["id_login"];


if(!isset($_SESSION["id_login"]))
{
    die("<script>aler(Você não tem acesso a está pagina)</script> <br> <p><a href='../views/index.php'></a></p>");
}

?>