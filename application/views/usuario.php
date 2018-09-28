    <!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<div class="container">
    <div class="row"
    <!--Responsivo para smartphone, tablet e PC-->
    <div class="col-xs-1 col-sm-1 col-lg-3"></div>
    <div class="col-xs-10 col-sm-10 col-lg-6">

    <?php
    // put your code here
    echo $acronico;
    echo "<br>";
//        echo $completo;
    echo "<p>";
    ?>
    <h2>Usuario</h2>
    <?php echo form_open('usuario/inserir'); ?>
    <div class="form-group">
        <label for="nomeusuario">Nome Usuario:</label>
        <input class="form-control" id="nomeusuario" name="nomeusuario" type="text" required/>
    </div>

    <div class="form-group">
        <label for="user">User:</label>
        <input class="form-control" id="user" name="user" type="text" required/>
    </div>
    
    <div class="form-group">
        <label for="senha">Senha:</label>
        <input class="form-control" id="senha" name="senha" type="password" required/>
    </div>
    
    
    <div class="form-group">
        <label for="perfilacesso">Perfil:</label>
        <select class="form-control" aria-label="ngSelected demo" required="requered"
                id="perfilacesso" name="perfilacesso" type="name" required/>
        <option value="ADM">Adiministrativo</option>
        <option value="USER">comum</option>
               
    </select>
    </div>
    

    <input class="btn btn-success" type="submit" value="Salvar"/>
    <input class="btn btn-secondary" type="reset" value="Limpar"/>
    <?php form_close(); ?>
    <p></p>
    <div>
        <table>
            <caption>Usuario</caption>
            <table class="table table-bordered">
                <thead>
                    <tr>

                        <th scope="col">Nome Usuario</th>
                        <th scope="col">User</th>                        
                        <th scope="col">Perfil</th>                        
                        <th scope="col">Função</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($usuario == false): ?>
                        <tr><td>Nenhum contato encontrado</td></tr>
                    <?php else: ?>
                        <?php foreach ($usuario as $row): ?>
                            <tr>
                                <td><?php echo $row->nomeusuario; ?></td>
                                <td><?php echo $row->user; ?></td>
                                <td><?php echo $row->perfilacesso; ?></td>
                                <td>
                                    <a class="btn btn-success"href="<?php
                                    echo base_url() .
                                    'usuario/editar/' . $row->idusuario;
                                    ?>">Editar</a>
                                    |
                                    <a class="btn btn-danger"href="<?php
                                    echo base_url() .
                                    'usuario/excluir/' . $row->idusuario;
                                    ?>">Excluir</a>
                                </td>
                            </tr>                  
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
    </div>

    <a class="btn btn-primary" href="<?php echo base_url() . 'home'; ?>">Voltar</a>  
</div>
