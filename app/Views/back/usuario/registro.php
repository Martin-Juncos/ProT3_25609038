<!-- inicio registro -->
<div class="container mt-0 mb-0">
    <div class="card-header text-justify">
        <div class="row d-flex justify-content-center">
            <di class="card col-lg-3" style="width: 50%;">
                <h4>Registrarse</h4>
                <?php $validation = \Config\Services::validation(); ?>
                <form method="post" action="<?php echo base_url('/enviar-form') ?>">
                    <?= csrf_field(); ?>
                    <?= csrf_field(); ?>
                    <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('fail') ?></div>
                    <?php endif ?>
                    <?php if (!empty(session()->getFlashdata('success'))) : ?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('success') ?></div>
                    <?php endif ?>
                    <div class="card-body justify-content-center" media="(max-width: 768px)">
                        <!-- nombre -->
                        <div class="form">
                            <label for="exampleFormControlInput1" class="form-label">nombre</label>
                            <input type="text" name="nombre" class="form-control" id="nombre" placeholder="nombre">
                            <?php if ($validation->getError('nombre')) { ?>
                                <div class="alert alert-danger mt-2">
                                    <?= $error = $validation->getError('nombre'); ?>
                                </div>
                            <?php } ?>
                        </div>
                        <!-- apellido -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">apellido</label>
                            <input type="text" name="apellido" class="form-control" id="apellido" placeholder="apellido">
                            <?php if ($validation->getError('apellido')) { ?>
                                <div class="alert alert-danger mt-2">
                                    <?= $error = $validation->getError('apellido'); ?>
                                </div>
                            <?php } ?>
                        </div>
                        <!-- usuario -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">usuario</label>
                            <input type="text" name="usuario" class="form-control" id="usuario" placeholder="usuario">
                            <?php if ($validation->getError('usuario')) { ?>
                                <div class="alert alert-danger mt-2">
                                    <?= $error = $validation->getError('usuario'); ?>
                                </div>
                            <?php } ?>
                        </div>
                        <!-- email -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">email</label>
                            <input type="text" name="email" class="form-control" id="email" placeholder="email">
                            <?php if ($validation->getError('email')) { ?>
                                <div class="alert alert-danger mt-2">
                                    <?= $error = $validation->getError('email'); ?>
                                </div>
                            <?php } ?>
                        </div>
                        <!-- pass -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">pass</label>
                            <input type="text" name="pass" class="form-control" id="pass" placeholder="pass">
                            <?php if ($validation->getError('pass')) { ?>
                                <div class="alert alert-danger mt-2">
                                    <?= $error = $validation->getError('pass'); ?>
                                </div>
                            <?php } ?>
                        </div>

                        <div>
                            <input type="submit" value="guardar" class="btn btn-success">
                            <input type="reset" value="cancelar" class="btn btn-danger">
                        </div>
                    </div>
                </form>

        </div>
    </div>
</div>
</div>

<!-- fin registro -->