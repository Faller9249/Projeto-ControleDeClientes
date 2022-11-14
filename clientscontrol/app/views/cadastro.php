<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>

<body>
    <?php include("menu.php");
    include("protect.php")

    ?>
    <main class="main">
        <form method="POST" action="../controllers/ControllerCadastrar.php" id="form" name="form" ;>
            <div class="card-login">
                <h1>Cadastro de Cliente</h1>
                <div class="form-group">
                    <div class="input-box">
                        <input type="text" id="nome" name="nome" placeholder="Nome de Cliente" required autofocus>
                    </div>

                    <div class="input-box">
                        <input type="date" id="birth" placeholder="Data de nascimeto" name="birth" required>
                    </div>

                    <div class="input-box">
                        <input type="text" id="cpf" name="cpf" placeholder="CPF" required>

                    </div>

                    <div class="input-box">
                        <input type="number" id="rg" name="rg" placeholder="RG" required>

                    </div>

                    <div class="input-box">
                        <input type="tel" id="phone" name="phone" placeholder="Telefone" required>

                    </div>
                </div>
                <div>
                    <button class="btn" type="submit" class="" id="cadastrar">
                        CADASTRAR
                    </button>
                </div>
            </div>
        </form>
    </main>


    <?php include("footer.php"); ?>
</body>

</html>