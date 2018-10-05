<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <!--<meta charset="UTF-8">-->

        <title>Meu Projeto Framework</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="<?php // echo base_url('imagens/faviconComFundo.png');     ?>">
        <!--Bootstrap-->
        <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/bootstrap-grid.min.css') ?>" rel="stylesheet"> 
        <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet"> 

        <!--Datatables-->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.3.1/jszip-2.5.0/dt-1.10.18/af-2.3.0/b-1.5.2/b-flash-1.5.2/b-html5-1.5.2/b-print-1.5.2/r-2.2.2/datatables.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>


    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">


            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="dropdown-item" href="<?php echo base_url() . 'home'; ?>">HOME</a>
                    </li>
                          <li class="nav-item">
                            <a class="dropdown-item" href="<?php echo base_url() . 'funcao'; ?>">FUNÇÃO</a>
                          </li>
                          <li class="nav-item">
                            <a class="dropdown-item" href="<?php echo base_url() . 'usuario'; ?>">USUARIO</a>
                          </li>
                          <li class="nav-item">
                            <a class="dropdown-item" href="<?php echo base_url() . 'contato'; ?>">CONTATO</a>
                          </li> 

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ATALHOS
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?php echo base_url() . 'funcao'; ?>">Função</a>
                            <a class="dropdown-item" href="<?php echo base_url() . 'usuario'; ?>">Usuario</a>
                            <a class="dropdown-item" href="<?php echo base_url() . 'contato'; ?>">Contato</a>
                            
                        </div>
                    </li>
                </ul>
            </div>
            
            <?php 
            if ($this->session->userdata('estou_logado')) { 
            echo $this->session->userdata('logado')->nomeusuario;?>
            &nbsp; <a class="btn btn-primary mb-2" href="<?php echo base_url() . 'login/sair'; ?>">Sair</a>
                <?php } ?>                   
                  
        </nav>


        <div class="row">
            <div class="col-xs-8 col-sm-8 col-lg-8"></div>
            <div class="col-xs-2 col-sm-2 col-lg-2">
                
            </div>
            <div class="col-xs-2 col-sm-2 col-lg-2"></div>
        </div>

