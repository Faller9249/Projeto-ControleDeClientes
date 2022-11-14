<?php
require("../models/banco.php");
if (!isset($_SESSION)) {
    session_start();
}

class editarController
{

    private $editar;
    public $nome;
    public $birth;
    public $cpf;
    public $rg;
    public $phone;
    public $id_login;
    public $id_address;
    public $id_client;

    public function __construct($id)
    {
        $this->editar = new Banco();
        $this->criarFormulario($id);
    }

    private function criarFormulario($id)
    {
        $row = $this->editar->pesquisaClient($id);
        
        $this->nome = $row['nome'];
        $this->birth = $row['birth'];
        $this->cpf = $row['cpf'];
        $this->phone = $row['phone'];
        $this->rg = $row['rg'];
        $this->id_login = $_SESSION['id_login'];
        $this->id_client = $_SESSION["id_client"];
        $this->id_address = $row['id_address'];
    }
    public function editarFormulario($nome,  $birth, $cpf, $phone, $id_address, $rg, $id_login, $id_client)
    {
        if(!isset($id_address) || !isset($id_login)){
            if ($this->editar->updateClient($nome,  $birth, $cpf, $phone, $_SESSION['id_address'], $rg, $_SESSION['id_login'], $id_client) == TRUE) {
                echo "<script>alert('Registro editado com sucesso!');document.location='../views/dashboard.php'</script>";
            } else {
                echo "<script>alert('Erro ao editar!');history.back()'</script>";
            }
        }else{
            if ($this->editar->updateClient($nome,  $birth, $cpf, $phone, $id_address, $rg, $id_login, $id_client) == TRUE) {
                echo "<script>alert('Registro editado com sucesso!');document.location='../views/dashboard.php'</script>";
            } else {
                echo "<script>alert('Erro ao editar!');history.back()'</script>";
            }
        }
        
    }

    // Metodos get
    public function getIdclient()
    {
        return $this->id_client;
    }
    public function getName()
    {
        return $this->nome;
    }
    public function getBirth()
    {
        return $this->birth;
    }
    public function getCpf()
    {
        return $this->cpf;
    }
    public function getPhone()
    {
        return $this->phone;
    }
    public function getAddress()
    {
        return $this->id_address;
    }
    public function getRG()
    {
        return $this->rg;
    }
    public function getLogin($id_login)
    {
        return $this->id_login = $id_login;
    }
}

$id = filter_input(INPUT_GET, 'id');
$editar = new editarController($id);
if (isset($_POST['submit'])) {
    $editar->editarFormulario(
        $_POST['nome'], 
        $_POST['birth'], 
        $_POST['cpf'], 
        $_POST['phone'], 
        $_POST['id_address'], 
        $_POST['rg'], 
        $_POST['id_login'], 
        $_POST['id_client']);
}