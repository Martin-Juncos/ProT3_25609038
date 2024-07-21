<div class="container mt-5 mb-5 d-flex justify-content-center">
    <div class="card" style="width: 50%;">
        <div class="card-header text-center">
            <h2>Iniciar sesion</h2>
            <!-- Mensaje de Error -->
            <?php if (session()->getFlashdata('msg')) : ?>
                <div class="alert alert-warning">
                    <? session()->getFlashdata('msg') ?>
                </div>
            <?php endif; ?>
        </div>
        <!-- inicio login -->
        <form class="post" action="<?php echo base_url('/enviarlogin') ?>">
            <div class="card-body" media="(max-width:768px)">
                <!-- email -->
                <div class="mb-2">
                    <label for="exampleFormControlInput1" class="form-label">email</label>
                    <input name="email" type="text" class="form-control" id="exampleFormControlInput1" placeholder="email">
                </div>
                <!-- pass -->
                <div class="mb-2">
                    <label for="exampleFormControlInput1" class="form-label">pass</label>
                    <input name="pass" type="password" class="form-control" id="exampleFormControlInput2" placeholder="pass">
                </div>
                <div>
                    <input type="submit" value="ingresar" class="btn btn-success">
                    <a href="<?php echo base_url('/login') ?>" class="btn btn-danger">cancelar</a>
                    <br><span>Aun no se registro? <a href="<?php echo base_url('/registro') ?>">Registrarse aqui</a></span>
                </div>
            </div>
        </form>
        <!-- fin login -->
    </div>
</div>