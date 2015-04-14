<?php
    include('../classes/classConsultas.php');
    $CONSULTA = new classConsultas;
?>
<form id="frm-novo-cadastro" name="frm-novo-cadastro">
<div>Nome</div>
<div><input type="text" name="nome" id="nome" class="campo_input corner-input box-iluminado campo-form" /></div>
<div style="margin-top:7px;">Prioridade</div>
<div>
<select name="prioridade" id="prioridade" class="campo_input corner-input box-iluminado select-form">
<?php
    $LISTA = $CONSULTA->ListaPrioridade(NULL);
    while($sql = $LISTA->fetch_object())
    {
        echo '<option value="'.$sql->cod.'" >'.utf8_encode($sql->tipo).'</option>';
    }
?>    
</select></div>
<div style="margin-top:7px;">Descrição</div>
<div><textarea name="descricao" id="descricao" class="campo_input corner-input box-iluminado textarea-form"></textarea></div>
<div style="margin-top:10px;"><input type="button" onclick="CadastrarNovaTarefa();" name="bt-cadastra-novo" id="bt-cadastra-novo"  value="Cadastrar" class=" botao-form campo_arredondado" /> </div>
</form>