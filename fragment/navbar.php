<header class="px-3 bg-white">
    <div class="container pb-3 pb-md-0">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none pt-2 pb-3">
                <img src="./img/logo2.png" alt="logo" height="60px">
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 ms-0 ms-md-5">
                <li><a href="index.php" class="nav-link px-2 <?php echo $ativo == 'home' ? "text-primary" : "text-dark" ?> fs-5"><i class="bi bi-house"></i> Home</a></li>
                <li><a href="horarios.php" class="nav-link px-2 <?php echo $ativo == 'horarios' ? "text-primary" : "text-dark" ?> fs-5"><i class="bi bi-clock"></i> Horários</a></li>
                <li><a href="linhas.php" class="nav-link px-2 <?php echo $ativo == 'linhas' ? "text-primary" : "text-dark" ?> fs-5"><i class="bi bi-sign-turn-right"></i> Linhas</a>
                </li>
            </ul>
        </div>
    </div>
</header>