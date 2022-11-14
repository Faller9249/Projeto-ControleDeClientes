<!DOCTYPE HTML>
<html>
<?php include_once("head.php") ?>

<body>
    <?php 
    include("menu.php");
    include('protect.php');  
    ?>
    <?php require("../controllers/controllerEditarClient.php");?>
    <main class="main">
        <div>
            <?php echo "<a class='btnAdresses' href='editarAdresses.php?id=" . $_SESSION["id_client"]. "'>Editar Endereços</a>";?>

        </div>

        <form class=" form-card" method="POST" action="../controllers/controllerEditarClient.php" id="form" name="form">
            <div class="card">
                <div class="input-box">
                    <input type="text" id="nome" name="nome" value="<?php echo $editar->getName(); ?>"
                        placeholder="Nome de Cliente" required autofocus>
                </div>

                <div class="input-box">
                    <input type="date" id="birth" placeholder="Data de nascimeto"
                        value="<?php echo $editar->getBirth(); ?>" name="birth" required>
                </div>

                <div class="input-box">
                    <input type="text" id="cpf" name="cpf" value="<?php echo $editar->getCpf(); ?>" placeholder="CPF"
                        required>
                </div>

                <div class="input-box">
                    <input type="number" id="rg" name="rg" value="<?php echo $editar->getRG(); ?>" placeholder=" RG"
                        required>
                </div>

                <div class="input-box">
                    <input type="tel" id="phone" name="phone" value="<?php echo $editar->getPhone(); ?>" placeholder="
                        Telefone" required>
                </div>
            </div>
            <div class="form-cadastro">
                <input type="hidden" id="id_client" name="id_client" value="<?php echo $editar->getIdclient();?>">
                <button type="submit" class="btn" id="editar" name="submit" value="Submit">Editar</button>
            </div>

        </form>
    </main>


    <?php include("footer.php"); ?>
</body>

</html>