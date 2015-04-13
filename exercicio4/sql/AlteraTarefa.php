<?php


	if(isset($_POST['nome'], $_POST['prioridade'], $_POST['descricao'], $_POST['ct']) && !empty($_POST['nome']) && !empty($_POST['prioridade']) && !empty($_POST['descricao']) && !empty($_POST['ct']))
	{
		include('../classes/classCadastro.php');
		$CADASTRA = new classCadastro;
		echo $CADASTRA->AlteraCadastro($_POST['nome'], $_POST['descricao'], $_POST['prioridade'], $_POST['ct']);

	}
	else
	{
		echo '2';
	}

?>