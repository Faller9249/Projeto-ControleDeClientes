<?php
include_once("../models/cadastroClient.php");
if (!isset($_SESSION)) {
    session_start();
}
class cadastroController
{
    public $cadastro;

    public function __construct()
    {
        $this->cadastro = new Cadastro();
        $this->incluir();
    }

    private function incluir()
    {
        
        $this->cadastro->setNome($_POST['nome']);
        $this->cadastro->setBirth(date('Y-m-d', strtotime($_POST['birth'])));
        $this->cadastro->setCpf($_POST['cpf']);
        $this->cadastro->setPhone($_POST['phone']);
        $this->cadastro->setRg($_POST['rg']);
        $this->cadastro->setLogin($_SESSION["id_login"]);
        $result = $this->cadastro->incluir();

        if ($result >= 1) {
            $_SESSION["id_login"] = $_SESSION["id_login"];
            $_SESSION["id_client"] = $result["id_client"];
            $idClient = $_SESSION["id_client"];
            echo "<script>alert('Registro incluído com sucesso!');document.location='../views/cadastroAdresses.php?id= $idClient'</script>";
        } else {
            echo "<a>alert('Erro ao gravar registro!, verifique se o Clinte não está duplicado');history.back()</a>";
        }
    }
}
new cadastroController();