<?php


	if(isset($_POST['C']) && !empty($_POST['C']))
	{
		include('../classes/classCadastro.php');
		$CADASTRA = new classCadastro;
		$RET = $CADASTRA->ExcluirTarefa($_POST['C']);
		
		echo ($RET == true)?"Tarefa excluída com sucesso":"Erro ao excluir a terefa, por favor tente novamente";

	}
	else
	{
		echo '2';
	}

?>