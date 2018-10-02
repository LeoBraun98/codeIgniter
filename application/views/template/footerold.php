<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>

<!--datatable-->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-growl/1.0.0/jquery.bootstrap-growl.js"></script>


<?php if ($this->session->flashdata('sucesso')) { ?>

    <script>
        $.bootstrapGrowl("Cadastro realizado com sucesso", {
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

</body>
</html>