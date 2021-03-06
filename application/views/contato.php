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
    <h2>Contato</h2>
    <?php echo form_open('contato/inserir'); ?>
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input class="form-control" id="nome" name="nome" type="text" required/>
    </div>

    <div class="form-group">
        <label for="email">E-mail:</label>
        <input class="form-control" id="name" name="email" type="email" required/>
    </div>

    <div class="form-group">
        <label for="idfuncao">Função:</label>
        <select class="form-control" aria-label="ngSelected demo" required="requered"
                id="idfuncao" name="idfuncao" type="name" required/>
        <option>Selecionar Função... </option>
        <?php foreach ($funcao as $funcao): ?>
            <option value="<?php echo $funcao->idfuncao; ?>"><?php echo $funcao->nomefuncao; ?></option>
        <?php endforeach; ?>        
    </select>
    </div>
    


    <input class="btn btn-success" type="submit" value="Salvar"/>
    <input class="btn btn-secondary" type="reset" value="Limpar"/>
    <?php form_close(); ?>
    <p></p>
    <div>
        <table>
            <caption>Contatos</caption>
            <table class="table table-bordered">
                <thead>
                    <tr>

                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Funções</th>
                        <th scope="col">Função</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($contatos == false): ?>
                        <tr><td>Nenhum contato encontrado</td></tr>
                    <?php else: ?>
                        <?php foreach ($contatos as $row): ?>
                            <tr>
                                <td><?php echo $row->nome; ?></td>
                                <td><?php echo $row->email; ?></td>
                                <td><?php echo $row->nomefuncao; ?></td>
                                <td>
                                    <a class="btn btn-success"href="<?php
                                    echo base_url() .
                                    'contato/editar/' . $row->id;
                                    ?>">Editar</a>
                                    |
                                    <a class="btn btn-danger"href="<?php
                                    echo base_url() .
                                    'contato/excluir/' . $row->id;
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
