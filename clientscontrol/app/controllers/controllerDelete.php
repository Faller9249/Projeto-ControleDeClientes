<?php
require("../models/banco.php");
if (!isset($_SESSION)) {
    session_start();
}
class deleta
{
    private $deleta;

    public function __construct($id)
    {
        $this->deleta = new Banco();
        if ($this->deleta->deleteClient($id) == TRUE) {
            echo "<script>alert('Registro deletadp com sucesso!');document.location='../views/dashboard.php'</script>";
        } else {
            echo "<script>alert('Erro ao deletar registro!');history.back()</script>";
        }
    }
}
new deleta($_GET['id']);