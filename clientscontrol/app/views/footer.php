<footer>
    <div class="footer-content">
        <h3>
            Projeto controle de clientes
            <p class="socias">
                Repositorio do projeto <a href="#" target="_blank"><i class="fa-brands fa-github"></i></a>
            </p>
        </h3>
        <div>
            <h3> Contato </h3>
            <span>Eduardo Faller</span>
            <span>eduardofaller@hotmail.com</span>
        </div>

        <ul class="socias">
            <h3> Redes Sociais </h3>
            <p><a href="https://www.instagram.com/faller9249/" target="_blank"><i
                        class="fa-brands fa-instagram"></i></a></p>
            <p><a href="https://github.com/Faller9249" target="_blank"> <i class="fa-brands fa-github"></i></a></p>
            <p><a href="https://www.linkedin.com/in/eduardo-faller-4031b114a/" target="_blank">
                    <i class="fa-brands fa-linkedin"></i>
                </a></p>
        </ul>
    </div>
</footer>
<script>
$(document).ready(function() {
    $("#botao1").click(function() {
        $("#campo:first").clone(true).find("input:text").val("").end().appendTo("#proxp:first");
    });
    $("#botao2").click(function() {
        $("#proxp:first").remove();
    });
});
</script>