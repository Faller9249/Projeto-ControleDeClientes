<!DOCTYPE HTML>
<html>
<?php include("head.php"); ?>

<body>
    <?php include("menu.php");
    include("protect.php");
    ?>
    <main class="">
        <div class="main">
            <?php echo"<a class='btnAdresses' href='editar.php?id=" . $_SESSION['id_client'] . "'>
                            Voltar
                        </a>"; ?>
            <a class="btnAdresses" id="botao1">Add campo</a>
            <a class="btnAdresses" id="botao2">Delete campo</a>
        </div>
        <form class="form-card" method="POST" action="../controllers/controllerCadastrarAdresses.php" id="form"
            name="form" ;>
            <div id="campo" class="form-group">
                <h1>Cadastro de Endereço</h1>
                <div class="form-group">

                    <div class="input-box">
                        <input type="text" id="street" name="street" placeholder="Rua" required autofocus>
                    </div>

                    <div class="input-box">
                        <input type="number" id="number_house" name="number_house" placeholder="N°" required>

                    </div>

                    <div class="input-box">
                        <input type="text" id="birth" name="district" placeholder="Bairro" required>
                    </div>

                    <div class="input-box">
                        <input type="text" id="city" name="city" placeholder="Cidade" required>

                    </div>

                    <div class="input-box">
                        <input type="text" id="states" name="states" placeholder="Estado" required>

                    </div>

                    <div class="input-box">
                        <input type="text" id="country" name="country" placeholder="País" required>

                    </div>
                </div>
            </div>
            <div id="proxp"></div>
            <div id="proxp"></div>

            <div>
                <button class="btn" type="submit" class="" id="cadastrar">Cadastrar</button>
            </div>
        </form>
    </main>
    <?php include("footer.php"); ?>
</body>

</html>