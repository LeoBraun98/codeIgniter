<!DOCTYPE html>

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
            <h2>Editar Contato</h2>
            <?php echo form_open('contato/atualizar'); ?>
            <input type="hidden" name="id" id="id" value="<?php echo $contatoEditar[0]->id; ?>">

            <div class="form-group">
                <label for="nome">Nome</label>
                <input class="form-control" id="nome" name="nome" type="text" value="<?php echo $contatoEditar[0]->nome; ?>" required/>
            </div>

            <div class="form-group">
                <label for="email">e-mail</label>
                <input class="form-control" id="email" name="email" name="email" type="email" value="<?php echo $contatoEditar[0]->email; ?>" required/>
            </div>

            <div class="form-group">
                <label for="idfuncao">Função:</label>
                <select class="form-control" aria-label="ngSelected demo" required="requered"
                        id="idfuncao" name="idfuncao" type="name" required/>
                <option>Selecionar Função... </option>
                <?php foreach ($funcao as $funcao): ?>
                    <option value="<?php echo $funcao->idfuncao; ?>"
                    <?php if ($funcao->idfuncao === $contatoEditar[0]->idfuncao) echo "selected" ?>
                            ><?php echo $funcao->nomefuncao; ?></option>
                        <?php endforeach; ?>        
                </select>
            </div>
            <input class="btn btn-success"  type="submit" value="Salvar"/>
            <?php form_close(); ?>
            <p></p>
            <a class="btn btn-primary" href="<?php echo base_url() . 'contato'; ?>">Cancelar</a>

        </div>
        <div class="col-sm">
        </div>
    </div>
</div>