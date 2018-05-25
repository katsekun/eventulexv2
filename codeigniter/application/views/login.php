<div class="container">
    <div class="row">

        <div class="offset-md-4 col-md-4 text-center new-user">
            <?php
            echo form_open('tenis/usuario');
            ?>
            <div class="form-group">
                <label for="">Usuario</label>
                <input type="text" name="usuario" value="<?php echo set_value('usuario'); ?>" class="form-control text-center" placeholder="Introduce tu usuario">
            </div>
            <div class="form-group">
                <label for="">Contraseña</label>
                <input type="password" name="contraseña" value="<?php echo set_value('contraseña'); ?>" class="form-control text-center" placeholder="Introduce una contraseña">
            </div>
            <button type="submit" class="btn btn-primary">Iniciar sesion</button>
            <?php
            echo form_close();
            ?>
        </div>


    </div>
</div>