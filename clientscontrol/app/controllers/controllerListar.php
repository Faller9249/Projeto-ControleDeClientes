<?php
require("../models/banco.php");
if (!isset($_SESSION)) {
    session_start();
}


class listarController
{
    private $lista;
    public $pageIndex;
    public $pageSise;

    public function __construct()
    {
        $this->lista = new Banco();
        $this->criarTabela();
    }

    private function criarTabela()
    {
        // $row = $this->lista->getClient();
        $row = $this->lista->getClient($_SESSION["id_login"]);
        if(!isset($row)){
            echo "Lista Vazia!";
        }else{
            if($row >=1){
                foreach ($row as $value) {
                    $_SESSION['id_client'] = $value['id_client'];
                    $_SESSION['id_login'] = $value['id_login'];
                    $_SESSION['id_address'] = $value['id_address'];

                 echo "<div class='table-row'>";
                 echo "<div class='table-cell' style='width: 13%;'>";
                 echo "<p>" . $value['nome'] . "</p>";
                 echo "</div>";
                 echo "<div class='table-cell' style='width: 13%;'>";
                 echo "<p>" . $value['birth'] . "</p>";
                 echo "</div>";
                 echo "<div class='table-cell' style='width: 10%;'>";
                 echo "<p>" . $value['cpf'] . "</p>";
                 echo "</div>";
                 echo "<div class='table-cell' style='width: 10%;'>";
                 echo "<p>" . $value['rg'] . "</p>";
                 echo "</div>";
                 echo "<div class='table-cell' style='width: 10%;'>";
                 echo "<p>" . $value['phone'] . "</p>";
                 echo "</div>";
                 echo "<div class='table-cell' style='width: 15%;'>";
                 echo "<p>" . $value['id_address'] = ($value['id_address'] == "0") ? "Adicionar" : "Endereços" . "</p>";
                 echo "</div>";
                 echo "<div class='table-cell' style='width: 15%;'>";
                 echo "<p class='btn-acoes'> 
                             <a class='btn-editar' href='editar.php?id=" . $value['id_client']. "'>
                                 <i class='fa-solid fa-pen'></i>
                             </a>
                         
                             <a class='btn-deletar' class='' href='../controllers/controllerDelete.php?id=" . $value['id_client'] . "'>
                                 <i class='fa-solid fa-trash'></i>
                             </a>
                     </p>";
                 echo "</div>";
                 echo "</div>";
             }
        }
          
        }
       

        // echo "<div class='pagine'>
        //     <button class='btn-pagine' onclick(". $this->page(-1) .")>
        //         <i class='fa-solid fa-arrow-left'></i>
        //     </button>
        //     <h3> $this->pageIndex</h3>
        //     <button class='btn-pagine' onclick(". $this->page(1) .")>
        //         <i class='fa-solid fa-arrow-right'></i>
        //     </button>
        // </div>";
    }

   
}