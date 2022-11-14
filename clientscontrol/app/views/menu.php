<header>
    <nav>
        <div style="color: #d6d4d4;">
            <h3 class="loginMenu">Bem vindo!</h3>
            <h2 class="loginMenu">
                <?php  if(!isset($_SESSION)) {
                session_start();
            };
            echo $_SESSION["nome"]
            ;?>
            </h2>
        </div>
        <ui class="nav-list">
            <div class="btn-menu"><a href="dashboard.php" class="">dashboard</i></a></div>
            <div class="btn-menu"><a href="cadastro.php" class="">Cadastar</a></div>
        </ui>
        <div class="user">
            <a href="logout.php" class="">
                <i class="fa-solid fa-right-from-bracket"></i>
            </a>
        </div>
    </nav>
</header>