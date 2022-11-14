<?php
if (!isset($_SESSION)) {
    session_start();
}
require_once("conexao.php");

class Banco
{
    protected $mysqli;

    public function __construct()
    {
        $this->conexao();
    }
    private function conexao()
    {
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);
        // $this->mysqli = new PDO("mysql:host=localhost;dbname=meuBancoDeDados", BD_USUARIO, BD_SENHA);
    }

    public function pesquisaLogin($email, $senha)
    {
        $result = $this->mysqli->query("SELECT * FROM users WHERE email = '$email' AND senha = '$senha'");
        return $result->fetch_array(MYSQLI_ASSOC);
    }

    public function setClient($nome, $birth, $cpf, $phone, $rg, $id_login)
    {
        $stmt = $this->mysqli->prepare("INSERT INTO clients ( id_login, nome, cpf, rg, phone,  birth) VALUES (?,?,?,?,?,?)");
        $stmt->bind_param("ssssss", $id_login, $nome, $cpf, $rg, $phone, $birth);
        if ($stmt->execute() === TRUE) {
            $result = $this->mysqli->query("SELECT * FROM clients WHERE id_login = $id_login ORDER BY id_login DESC LIMIT 1");
            return $result->fetch_array(MYSQLI_ASSOC);
            // return 1;
        } else {
            return false;
        }
    }

    public function getByClient()
    {
        $result = $this->mysqli->query("SELECT * FROM `clients` ORDER BY id_client DESC LIMIT 1");
        return $result->fetch_array(MYSQLI_ASSOC);
    }
    
    public function getClient($id_login)
    {
        // $result = $this->mysqli->query("SELECT * FROM `clients` ORDER BY id_client DESC");
        
        $result = $this->mysqli->query("SELECT * FROM clients WHERE id_login = $id_login ORDER BY id_client DESC");
        
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;
    }
    
    public function setClientAdresses($street, $district, $city, $states, $country,  $number_house, $id_login, $id_client)
    {
        
        $stmt = $this->mysqli->prepare("INSERT INTO adresses( id_login, street, district, city, states, country, number_house, id_client) VALUES  (?,?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssisi",$id_login,  $street, $district, $city, $states, $country,  $number_house, $id_client);
        if ($stmt->execute() === TRUE) {
            $result = $this->mysqli->query("SELECT * FROM adresses a INNER join clients c on c.id_client = a.id_client WHERE c.id_client = $id_client;");
            $result->fetch_array(MYSQLI_ASSOC);       
            return true;
        } else {
            return false;
        }
    }

    public function deleteClient($id)
    {
        // $stmt = $this->mysqli->query("DELETE FROM `livros` WHERE id_client = $id");
        if ($this->mysqli->query("DELETE FROM clients WHERE id_client = $id") == TRUE)
            return true;
        else
            return false;
    }

    public function pesquisaClient($id)
    {
        $result = $this->mysqli->query("SELECT * FROM clients WHERE id_client = '$id' LIMIT 1");
        return $result->fetch_array(MYSQLI_ASSOC);
    }

    public function pesquisaAdresses($id)
    {
        $result = $this->mysqli->query("SELECT * FROM adresses WHERE id_client = '$id' LIMIT 1");
        return $result->fetch_array(MYSQLI_ASSOC);
    }

    public function updateClient($nome, $birth, $cpf, $phone, $id_address, $rg, $id_login, $id_client)
    {
        $stmt = $this->mysqli->prepare("UPDATE clients SET id_address = ?, id_login = ? , nome= ?, cpf = ? , rg= ?, phone= ?, birth= ? WHERE id_client = ?");
        $stmt->bind_param("sssssisi", $id_address, $id_login, $nome, $cpf, $rg, $phone, $birth, $id_client);
        if ($stmt->execute() or die($stmt->execute()) === TRUE) {
            return true;
        } else {
            return false;
        }
    }
    
    public function updateClientAdress($street, $district, $number_house, $city, $country,  $states, $id_login, $id_client)
    {
        $stmt = $this->mysqli->prepare("UPDATE adresses SET street = ?, district = ? ,number_house = ? , city = ? , country= ?, states = ? , id_login= ?  WHERE id_client = ?");
        $stmt->bind_param("sssssisi", $street, $district, $number_house, $city, $country,  $states, $id_login, $id_client);
        if ($stmt->execute() === TRUE) {
            return 1;
        } else {
            return 0;
        }
    }
}