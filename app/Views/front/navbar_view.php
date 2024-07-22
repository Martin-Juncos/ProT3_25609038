<?php
$session = session();
$nombre = $session->get('nombre');
$perfil = $session->get('perfil_id');
?>

<!-- navegacion -->
<nav class="seccion-oscura navbar navbar-expand-lg bg-body-black">
    <div class="container">
        <a class="navbar-brand" href="<?php echo base_url('principal') ?>">
            <!-- logo de la empresa -->
            <!-- <img src="<?php echo base_url('assets/img/logo.png') ?>" alt="logo" width="75" height="30" class="img-fluid"> -->
            <img src="assets/img/logo.png" alt="logo" width="75" height="30" class="img-fluid">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- administrador -->
        <?php if (session()->perfil_id == 1) : ?>
            <div class="btn btn-light active btnUser btn-sm">
                <a href="">Administrador: <?php echo session('nombre'); ?> </a>
            </div>


            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="principal">Pincipal</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href=<?php echo base_url('/login'); ?>>Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('/logout'); ?>" tabindex="-1" aria-disabled="true"> Cerrar Sesion</a>
                    </li>
                </ul>
                <!-- cliente -->
            <?php elseif (session()->perfil_id == 2) : ?>
                <div class="btn btn-light active btnUser btn-sm">
                    <a href="">Cliente: <?php echo session('nombre'); ?></a>
                </div>
                <!-- Navbar para cliente -->
                <a class="navbar-brand" href=""></a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="quienes_somos">Quienes somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="acerca_de">Acerca de</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('/logout'); ?>">Cerrar sesion</a>
                        </li>
                    </ul>
                </div>
                <!-- todos -->
            <?php else : ?>
                <!-- Navbar para todos -->
                <a class="navbar-brand" href=""></a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="quienes_somos">Quienes somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="acerca_de">Acerca de</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="registro">Registrarse</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login">Login</a>
                        </li>
                    </ul>
                </div>
            <?php endif ?>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Ingrese el texto..." aria-label="Search">
                <button class="btn btn-dark" type="submit">Buscar</button>
            </form>
            </div>
</nav>
<!-- fin navegacion -->