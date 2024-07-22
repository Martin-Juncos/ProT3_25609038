<div class="container mt-5">
    <div class="row justify-content-md-center">
        <div>
            <?php if (session()->getFlashdata('msg')) : ?>
                <div class="alert alert-warning">
                    <?= session()->getFlashdata('msg') ?>
                </div>
            <?php endif; ?>
            <br><br>
            <?php if (session()->perfil_id == 1) : ?>
                <div style="text-align: center;">
                    <img class="center" height="100px" width="100px" src="<?php echo base_url('assets/img/user2.jpg'); ?>">
                    <h1>Iniciaste sesion como Administrador</h1>

                </div>

            <?php elseif (session()->perfil_id == 2) : ?>

                <div style="text-align: center;">
                    <img class="center" height="100px" width="100px" src="<?php echo base_url('assets/img/user1.jpg'); ?>">
                    <h1>Iniciaste sesion como usuario</h1>
                </div>

            <?php endif; ?>
        </div>
    </div>
</div>