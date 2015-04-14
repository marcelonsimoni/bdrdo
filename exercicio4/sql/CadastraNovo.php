<?php

if(isset($_POST['nome'], $_POST['prioridade'], $_POST['descricao']) && !empty($_POST['nome']) && !empty($_POST['prioridade']) && !empty($_POST['descricao']))
{
	
    include('../classes/classCadastro.php');
    $CADASTRA = new classCadastro;
    echo $CADASTRA->CadastraNovo($_POST['nome'], $_POST['descricao'], $_POST['prioridade']);

}
else

    echo '2';
