<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<script scr="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>


<!--Datatable-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/jszip-2.5.0/dt-1.10.18/af-2.3.0/b-1.5.2/b-flash-1.5.2/b-html5-1.5.2/b-print-1.5.2/r-2.2.2/datatables.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-growl/1.0.0/jquery.bootstrap-growl.js"></script>
 

<!--<div class="row">
            <div class="col-xs-8 col-sm-8 col-lg-8"></div>
            <div class="col-xs-2 col-sm-2 col-lg-2">
                <?php if ($this->session->userdata('estou_logado')) { ?>
                    <a class="btn btn-primary mb-2" href="<?php echo base_url() . 'login/sair'; ?>">Sair</a>
                <?php } ?>
            </div>
            <div class="col-xs-2 col-sm-2 col-lg-2"></div>
        </div>-->
        
<!--Msg Sistema-->

<?php if ($this->session->flashdata('sucesso')) { ?>
    <script>
        $.bootstrapGrowl("Cadastro realizado com sucesso!", {
            ele: 'body', // which element to append to
            type: 'success', // (null, 'info', 'error', 'success')
            offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
            align: 'right', // ('left', 'right', or 'center')
            width: 250, // (integer, or 'auto')
            delay: 4000,
            allow_dismiss: true,
            stackup_spacing: 10 // spacing between consecutively stacked growls.
          });
    </script>
<?php } ?>


<?php
if ($this->session->flashdata('sucesso')) {
    ?>
    <script>
        $.bootstrapGrowl("Cadastrado realizado com sucesso!", {
            ele: 'body', // which element to append to
            type: 'success', // (null, 'info', 'error', 'success')
            offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
            align: 'center', // ('left', 'right', or 'center')
            width: 'auto', // (integer, or 'auto')
            delay: 3000,
            allow_dismiss: true,
            stackup_spacing: 10 // spacing between consecutively stacked growls.
        });</script>
<?php } else if ($this->session->flashdata('falha')) {
    ?>
    <script type="text/javascript">
        $.bootstrapGrowl("Erro ao cadastrar!", {
            ele: 'body', // which element to append to
            type: 'error', // (null, 'info', 'error', 'success')
            offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
            align: 'right', // ('left', 'right', or 'center')
            width: 250, // (integer, or 'auto')
            delay: 3000,
            allow_dismiss: true,
            stackup_spacing: 10 // spacing between consecutively stacked growls.
        });
    </script>

<?php } else if ($this->session->flashdata('sucessoA')) {
    ?>
    <script type="text/javascript">
        $.bootstrapGrowl("Cadastrado atualizado com sucesso!", {
            ele: 'body', // which element to append to
            type: 'success', // (null, 'info', 'error', 'success')
            offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
            align: 'right', // ('left', 'right', or 'center')
            width: 250, // (integer, or 'auto')
            delay: 3000,
            allow_dismiss: true,
            stackup_spacing: 10 // spacing between consecutively stacked growls.
        });
    </script>

<?php } else if ($this->session->flashdata('falhaA')) {
    ?>
    <script type="text/javascript">
        $.bootstrapGrowl("Erro ao atualizar!", {
            ele: 'body', // which element to append to
            type: 'danger', // (null, 'info', 'error', 'success')
            offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
            align: 'right', // ('left', 'right', or 'center')
            width: 250, // (integer, or 'auto')
            delay: 3000,
            allow_dismiss: true,
            stackup_spacing: 10 // spacing between consecutively stacked growls.
        });
    </script>

<?php } else if ($this->session->flashdata('excluirS')) {
    ?>
    <script type="text/javascript">
        $.bootstrapGrowl("Registro excluído com sucesso!", {
            ele: 'body', // which element to append to
            type: 'success', // (null, 'info', 'error', 'success')
            offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
            align: 'right', // ('left', 'right', or 'center')
            width: 250, // (integer, or 'auto')
            delay: 3000,
            allow_dismiss: true,
            stackup_spacing: 10 // spacing between consecutively stacked growls.
        });
    </script>

<?php } else if ($this->session->flashdata('excluirF')) {
    ?>
    <script type="text/javascript">
        $.bootstrapGrowl("Falha ao excluir registro!", {
            ele: 'body', // which element to append to
            type: 'danger', // (null, 'info', 'error', 'success')
            offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
            align: 'right', // ('left', 'right', or 'center')
            width: 250, // (integer, or 'auto')
            delay: 3000,
            allow_dismiss: true,
            stackup_spacing: 10 // spacing between consecutively stacked growls.
        });
    </script>

<?php } ?>
    
</body>
</html>
