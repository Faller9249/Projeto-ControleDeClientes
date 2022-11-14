<?php
require("../models/banco.php");
if (!isset($_SESSION)) {
    session_start();
}

class editarAdressesController
{

    private $editarAdresses;
    public $street;
    public $district;
    public $city;
    public $country;
    public $states;
    public $id_login;
    public $id_address;
    public $id_client;
    public $number_house;

    public function __construct($id)
    {
        $this->editarAdresses = new Banco();
        $this->criarFormularioAdresses($id);
    }

    private function criarFormularioAdresses($id)
    {
        $row = $this->editarAdresses->pesquisaAdresses($_SESSION["id_client"]);

        $this->street = $row['street'];
        $this->district = $row['district'];
        $this->city = $row['city'];
        $this->country = $row['country'];
        $this->states = $row['states'];
        $this->number_house = $row['number_house'];
        $this->id_client = $row['id_client'];
        
    }
    public function editarFormularioAdress($street, $district, $number_house, $city, $country,  $states, $id_login, $id_client)
    {   
        if ($this->editarAdresses->updateClientAdress($street, $district, $number_house, $city, $country,  $states, $id_login, $id_client) == TRUE) {
            echo "<script>alert('Registro editado com sucesso!');document.location='../views/editar.php?id= $id_client'</script>";
        } else {
            echo "<script>alert('Erro ao editar!');history.back()'</script>";
        }        
    }

    // Metodos get
    public function getIdclient()
    {
        return $this->id_client;
    }
    public function getStreet()
    {
        return $this->street;
    }
    public function getDistrict()
    {
        return $this->district;
    }
    public function getNumberHouse()
    {
        return $this->number_house;
    }
    public function getCity()
    {
        return $this->city;
    }
    public function getCountry()
    {
        return $this->country;
    }
    public function getAddress()
    {
        return $this->id_address;
    }
    public function getStates()
    {
        return $this->states;
    }
    public function getLogin($id_login)
    {
        return $this->id_login = $id_login;
    }
}

$id = filter_input(INPUT_GET, 'id');
$editarAdresses = new editarAdressesController($_SESSION["id_client"]);
if (isset($_POST['submit'])) {
    $editarAdresses->editarFormularioAdress(
        $_POST['street'],
        $_POST['district'],
        $_POST['number_house'],
        $_POST['city'],
        $_POST['country'],
        $_POST['states'],
        $_POST['id_login'],
        $_POST['id_client']
    );
}