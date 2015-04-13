<?php
    include('../classes/classConsultas.php');
	$CONSULTA = new classConsultas;
	$INFO = $CONSULTA->InfoTarefa($C);
	
	if($taf = $INFO->fetch_object())
	{
?>
<form id="edita-cadastro" name="edita-cadastro">
<div> Criado em: <u><em><?php echo $taf->criado_em; ?></em></u></div>
<?php if(!empty($taf->alterado)): ?>
<div style="margin-top:5px"> Última alteração: <u><em><?php echo $taf->alterado; ?></em></u></div>
<?php endif; ?>
<div style="margin-top:5px;">Nome</div>
<div><input type="text" name="nome" id="nome" value="<?php echo utf8_encode($taf->titulo); ?>" class="campo_input corner-input box-iluminado campo-form" /></div>
<div style="margin-top:7px;">Prioridade</div>
<div>
<select name="prioridade" id="prioridade" class="campo_input corner-input box-iluminado select-form">
<?php
    $LISTA = $CONSULTA->ListaPrioridade($taf->prioridade);
	while($sql = $LISTA->fetch_object())
	{
		echo '<option value="'.$sql->cod.'" >'.utf8_encode($sql->tipo).'</option>';
	}
?>    
</select></div>
<div style="margin-top:7px;">Descrição</div>
<div><textarea name="descricao" id="descricao" class="campo_input corner-input box-iluminado textarea-form"><?php echo utf8_encode($taf->descricao); ?></textarea></div>
<div style="margin-top:10px;"><input type="button" onclick="AlterarTarefa();" name="bt-altera-tarefa" id="bt-altera-tarefa"  value="Alterar" class=" botao-form" /> </div>
<input type="hidden" name="ct" id="ct" value="<?php echo $taf->cod; ?>" />
</form>
<?php
	}
?>