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
    <h2>Funcao</h2>
    <?php echo form_open('funcao/inserir'); ?>
    <div class="form-group">
        <label for="nomefuncao">Nome função:</label>
        <input class="form-control" id="nomefuncao" name="nomefuncao" type="text" required/>
    </div>

    <input class="btn btn-success" type="submit" value="Salvar"/>
    <input class="btn btn-secondary" type="reset" value="Limpar"/>
<?php form_close(); ?>


    <div>
        <table>
            <caption>Função</caption>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Nome Função</th>
                        <th scope="col">Funções</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($funcao == false): ?>
                        <tr><td>Nenhum função encontrado</td></tr>
                    <?php else: ?>
                        <?php foreach ($funcao as $row): ?>
                            <tr>
                                <td><?php echo $row->nomefuncao; ?></td>
                                <td>
                                    <a class="btn btn-success"href="<?php
                                    echo base_url() .
                                    'funcao/editar/' . $row->idfuncao;
                                    ?>">Editar</a>
                                    |
                                    <a class="btn btn-danger"href="<?php
                                    echo base_url() .
                                    'funcao/excluir/' . $row->idfuncao;
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
         <div class="col-xs-1 col-sm-1 col-lg-3"></div>
</div>