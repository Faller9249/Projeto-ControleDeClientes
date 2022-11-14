<?php

require_once("banco.php");

class CadastroAddress extends Banco{
private $street;
private $district;
private $city;
private $states;
private $country;
private $number_house;
private $id_client;
private $id_login;

//metodo set
public function setLogin($string)
{
$this->id_login = $string;
}
public function setStreet($string)
{
$this->street = $string;
}
public function setDistrict($string)
{
$this->district = $string;
}
public function setCity($string)
{
$this->city = $string;
}
public function setStates($string)
{
$this->states = $string;
}
public function setCountry($string)
{
$this->country = $string;
}
public function setNumberHouse($string)
{
$this->number_house = $string;
}
public function setIdClient($string)
{
$this->id_client = $string;
}
public function setIdLogin($string)
{
$this->id_client = $string;
}

//metodo get
public function getStreet()
{
return $this->street;
}
public function getDistrict()
{
return $this->district;
}
public function getCity()
{
return $this->city;
}
public function getStates()
{
return $this->states;
}
public function getCountry()
{
return $this->country;
}
public function getNumberHouse()
{
return $this->number_house;
}
public function getIdClient()
{
return $this->id_client;
}
public function getIdLogin()
{
return $this->id_login;
}

public function incluirAdresses()
{//$street, $district, $city, $states, $country, $number_house, $id_login, $id_client
return $this->setClientAdresses(
$this->getStreet(),
$this->getDistrict(),
$this->getCity(),
$this->getStates(),
$this->getCountry(),
$this->getNumberHouse(),
$this->getIdLogin(),
$this->getIdClient()
);
}
}