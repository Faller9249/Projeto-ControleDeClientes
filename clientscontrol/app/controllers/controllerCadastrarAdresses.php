<?php
include_once("../models/cadastroAdresses.php");
if (!isset($_SESSION)) {
    session_start();
}

class cadastroAdressdController
{
    private $cadastroAdress;

    public function __construct()
    {
        var_dump($_SESSION['id_login']);
        $this->cadastroAdress = new CadastroAddress();
        $this->incluirAdresses();
    }

    private function incluirAdresses()
    {
        $this->cadastroAdress->setStreet($_POST['street']);
        $this->cadastroAdress->setDistrict($_POST['district']);
        $this->cadastroAdress->setCity($_POST['city']);
        $this->cadastroAdress->setStates($_POST['states']);
        $this->cadastroAdress->setCountry($_POST['country']);        
        $this->cadastroAdress->setNumberHouse($_POST['number_house']);
        $this->cadastroAdress->setIdLogin($_SESSION['id_login']);
        $this->cadastroAdress->setIdClient($_SESSION['id_client']);

        $result = $this->cadastroAdress->incluirAdresses();
        
        if ($result >= 1) {
            echo "<script>alert('Registro incluído com sucesso!');document.location='../views/dashboard.php'</script>";
        } else {
            echo "<a>alert('Erro ao gravar registro!, verifique se o Clinte não está duplicado');history.back()</a>";
        }
    }
}
new cadastroAdressdController();