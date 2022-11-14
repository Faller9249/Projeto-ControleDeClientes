<?php
require_once("banco.php");

class Cadastro extends Banco
{

    private $nome;
    private $id_login;
    private $birth;
    private $cpf;
    private $rg;
    private $phone;
    private $password;
    private $email;

    //Metodos Set
    public function setLogin($string)
    {
        $this->id_login = $string;
    }
    public function setEmail($string)
    {
        $this->email = $string;
    }
    public function setPassword($string)
    {
        $this->password = $string;
    }
    public function setNome($string)
    {
        $this->nome = $string;
    }
    public function setBirth($string)
    {
        $this->birth = $string;
    }
    public function setCpf($string)
    {
        $this->cpf = $string;
    }
    public function setPhone($string)
    {
        $this->phone = $string;
    }
    public function setRg($string)
    {
        $this->rg = $string;
    }
    public function setIdClient($string)
    {
        $this->id_client = $string;
    }    

    //Metodos Get
    public function getNome(){
        return $this->nome;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getPassword()
    {
        return $this->password;
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
    public function getRg()
    {
        return $this->rg;
    }
    public function getLogin()
    {
        return $this->id_login;
    }

    public function incluir()
    {
        return $this->setClient(
            $this->getNome(),
            $this->getBirth(),
            $this->getCpf(),
            $this->getPhone(),
            $this->getRg(),
            $this->getLogin()
        );
    }
    
}