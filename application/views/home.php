<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<div class="container">
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
            <h2>Home</h2>
            <p></p>
            <a class="btn btn-success" href="<?php echo base_url() . 'contato'; ?>">Adicionar Contato</a>            
            <p></p>            
            <a class="btn btn-success" href="<?php echo base_url() . 'funcao'; ?>">Adicionar Função</a>
            <p></p>
            <a class="btn btn-success" href="<?php echo base_url() . 'usuario'; ?>">Adicionar Usuario</a>
            <p></p>
            <a class="btn btn-primary" href="<?php echo base_url() . 'login/sair'; ?>">Sair</a>
            
        </div>
        <div class="col-sm">
            
        </div>
    </div>
</div>
