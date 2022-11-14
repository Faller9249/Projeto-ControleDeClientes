<!DOCTYPE HTML>
<html>
<?php include_once("head.php"); ?>

<body>
    <?php 
    include("menu.php");
    include('protect.php');  
    if (!isset($_SESSION)) {
        session_start();
    }
    ?>
    <?php require("../controllers/controllerEditarClientAdress.php");?>
    <main class="main">
        <div class="main">
            <?php echo"<a class='btnAdresses' href='editar.php?id=" . $_SESSION['id_client'] . "'>
                            Voltar
                        </a>"; ?>
            <a class="btnAdresses" id="botao1">Add campo</a>
            <a class="btnAdresses" id="botao2">Delete campo</a>
        </div>

        <form class="form-card" method="POST" action="../controllers/controllerEditarClientAdress.php" id="form"
            name="form">
            <div id="campo" class="form-group">
                <h1>Editar de Endereço</h1>
                <div class="form-group">
                    <div class="input-box">
                        <input type="text" id="street" name="street" value="<?php echo $editarAdresses->getStreet(); ?>"
                            placeholder="Rua" required autofocus>
                    </div>

                    <div class="input-box">
                        <input type="number" id="number_house" value="<?php echo $editarAdresses->getNumberHouse(); ?>"
                            name="number_house" placeholder="N°" required>

                    </div>

                    <div class="input-box">
                        <input type="text" id="district" name="district"
                            value="<?php echo $editarAdresses->getDistrict(); ?>" placeholder="Bairro" required>
                    </div>

                    <div class="input-box">
                        <input type="text" id="city" name="city" value="<?php echo $editarAdresses->getCity(); ?>"
                            placeholder="Cidade" required>

                    </div>

                    <div class="input-box">
                        <input type="text" id="states" name="states" value="<?php echo $editarAdresses->getStates(); ?>"
                            placeholder="Estado" required>

                    </div>

                    <div class="input-box">
                        <input type="text" id="country" name="country"
                            value="<?php echo $editarAdresses->getCountry(); ?>" placeholder="País" required>

                    </div>
                </div>
            </div>
            <div id="proxp"></div>
            <div id="proxp"></div>
            <div>
                <input type="hidden" id="id_client" name="id_client"
                    value="<?php echo $editarAdresses->getIdclient();?>">
                <button class="btn" type="submit" id="editar">Cadastrar</button>
            </div>
        </form>
    </main>


    <?php include("footer.php"); ?>
</body>

</html>