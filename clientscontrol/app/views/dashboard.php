<?php require_once("../controllers/controllerListar.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">

<?php include("head.php");
include('protect.php');
?>
<style>
</style>

<body>
    <?php include("menu.php");
?><div class="table-box">
        <div class="table-row table-head">
            <div class="table-cell" style="width: 15%;">
                <p>Nome</p>
            </div>
            <div class="table-cell" style="width: 15%;">
                <p>Data</p>
            </div>
            <div class="table-cell" style="width: 10%;">
                <p>CPF </p>
            </div>
            <div class="table-cell" style="width: 10%;">
                <p>RG </p>
            </div>
            <div class="table-cell" tyle="width: 10%;">
                <p>Contato </p>
            </div>
            <div class="table-cell" tyle="width: 20%;">
                <p>Endereços </p>
            </div>
            <div class="table-cell" tyle="width: 10%;">
                <p>Ações </p>
            </div>
        </div><?php new listarController();
?>
    </div><?php include("footer.php");
?></body>

</html>