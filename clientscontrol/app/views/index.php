<?php
require_once("../models/banco.php");

$mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);

if (isset($_POST["email"]) || isset($_POST["email"])) {
    if (strlen($_POST["email"]) == 0) {
        echo "<script>Alert('Preencha o Email')</script>";
    } else if (strlen($_POST["senha"])  == 0) {
        echo "<script>Alert('Preencha o Senha')</script>";
    } else {

        $email = $_POST["email"];
        $senha = $_POST["senha"];

        print $email;

        $sql_code = "SELECT * FROM users WHERE email = '$email' AND senha = $senha";
        $result = $mysqli->query($sql_code) or die("Falha: " . $mysqli->error);

        $quantidade = $result->num_rows;

        if ($quantidade == 1) {
            $user = $result->fetch_assoc();

            if (!isset($_SESSION)) {
                session_start();
            }
            $_SESSION["id_login"] = $user["id_login"];
            $_SESSION["nome"] = $user["nome"];


            header("Location: dashboard.php");
        } else {
            echo "<script>aler(Falha ao logar! E-mail ou Senha errados)</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<link rel="stylesheet" href="style.css">
<?php include("head.php") ?>

<body>
    <header>
        <nav>
        </nav>
    </header>
    <main class="main">
        <form method="POST" action="">
            <div class="card"
                style=" background-color: #f2f3f4; border: 1px solid #0e1116; border-radius: 8px; margin: 16px; padding: 16px">
                <fieldset class=" group">
                    <div>
                        <h1 id="title">FAZER LOGIN</h1>
                    </div>
                </fieldset>
                <div class="input-box">

                    <input type="email" id="email" name="email" placeholder="E-MAIL" required>
                </div>
                <div class="input-box">
                    <input type="password" id="senha" name="senha" placeholder="SENHA" required>
                </div>
                <div>
                    <button class="btn" type="submit">
                        <i class="fa-solid fa-right-from-bracket" style="font-size: 22px;"></i>Enter
                    </button>
                    <a href="createLogin.php">
                        <h3>Cadastro de login</h3>
                    </a>
                </div>
            </div>
        </form>
    </main>
</body>
<?php include("footer.php"); ?>

</html>