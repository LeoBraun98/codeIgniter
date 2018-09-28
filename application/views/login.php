<!DOCTYPE html>

<div class="container">
    <div class="row"
    <!--Responsivo para smartphone, tablet e PC-->
    <div class="col-xs-1 col-sm-1 col-lg-3"></div>
    <div class="col-xs-10 col-sm-10 col-lg-6">
        <h2>Login</h2>
        <?php echo form_open('login/autenticar'); ?>
        <div class="form-group">
            <input class="form-control" type="text" required="required" name="usuario" id="usuario">
            <label for="usuario">Usuário</label>
        </div>
        <div class="form-group">
            <input class="form-control" type="password" required="required" name="senha" id="senha">
            <label  for="senha">Senha</label>
        </div>

        <input type="submit" name="acao" value="Entrar" class="btn btn-success"/>
        <input type="reset" class="btn btn-secondary"/>
        <?php form_close(); ?>  
    </div>
    <div class="col-xs-1 col-sm-1 col-lg-3"></div>
</div>



