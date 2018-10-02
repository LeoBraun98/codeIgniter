<!DOCTYPE html>

<div class="container">
    <div class="row"
    <!--Responsivo para smartphone, tablet e PC-->
    <div class="col-xs-1 col-sm-1 col-lg-3"></div>
    <div class="col-xs-10 col-sm-10 col-lg-6">
        
    <div class="row">
        <div class="col-sm">
        </div>
        <div class="col-sm">
            <?php
            // put your code here
            echo $acronico;
            echo "<br>";
//        echo $completo;
            echo "<p>";
            ?>
            <h2>Editar Usuario</h2>

            <?php echo form_open('usuario/atualizar'); ?>
            <div class="form-group">
                <label for="nomeusuario">Nome Usuario:</label>
                <input class="form-control" value="<?php echo $usuarioEditar[0]->idusuario; ?>" id="isusuario" name="idusuario" type="hidden" required/>
                <input class="form-control" value="<?php echo $usuarioEditar[0]->nomeusuario; ?>" id="nomeusuario" name="nomeusuario" type="text" required/>
            </div>

            <div class="form-group">
                <label for="user">User:</label>
                <input class="form-control" value="<?php echo $usuarioEditar[0]->user; ?>" id="user" name="user" type="text" required/>
            </div>

            <div class="form-group">
                <label for="senha">Senha:</label>
                <input class="form-control"  id="senha" name="senha" requered placeholder="Minimo 8 caracteres" minlength="8" type="password" required/>
            </div>


            <div class="form-group">
                <label for="perfilacesso">Perfil:</label>
                <select class="form-control" aria-label="ngSelected demo" required="requered"
                        id="perfilacesso" name="perfilacesso" type="name" required/>
                <option value="ADM">Adiministrativo</option>
                <option value="USER">comum</option>



                <input class="btn btn-success"  type="submit" value="Salvar"/>
                <?php form_close(); ?>
                <p></p>
                <a class="btn btn-primary" href="<?php echo base_url() . 'usuario'; ?>">Cancelar</a>

            </div>
            <div class="col-sm">
            </div>
        </div>
    </div>
</div>
 <div class="col-xs-1 col-sm-1 col-lg-3"></div>
</div>
    