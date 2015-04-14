<?php
    $O = (isset($_POST['O']))?(int)$_POST['O']:'1';
    include('../classes/classConsultas.php');
    $CONSULTA = new classConsultas;
	
    $LISTAR = $CONSULTA->ListarTarefas(NULL,$O);
    $TOT = 1;
    while($sql = $LISTAR->fetch_object()):
?>
<div class="linha-tarefa">
	<div class="total-tarefa" align="center"><?php echo $TOT++; ?></div>
    <div class="titulo-tarefa"><?php echo utf8_encode($sql->titulo); ?></div>
    <div class="prioridade-tarefa" align="center"><?php echo utf8_encode($sql->tipo); ?></div>
    <div class="editar-tarefa" onclick="enviarPag('3','<?php echo $sql->cod; ?>',''); return false;" ><img src="images/editar.png" class="imagem-botao" /></div>
    <div class="excluir-tarefa" onclick="enviarPag('4','<?php echo $sql->cod; ?>','<?php echo utf8_encode($sql->titulo); ?>'); return false;" ><img src="images/excluir.png" class="imagem-botao" /></div>
</div>
<?php
    endwhile;
?>