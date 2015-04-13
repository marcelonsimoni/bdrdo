<?php
#echo "<pre>";
#print_r($_SERVER);
#echo "</pre>";    


	$OP = (isset($_POST['OP']))?(int)$_POST['OP']:1;
	$C  = (isset($_POST['C']))?(int)$_POST['C']:'';

	switch($OP)
	{
        case 1:
		    include('../telas/cadastro.php');
		    break;		
		case 2:
		    include('../telas/listar.php');
			break;
		case 3:
		    include('../telas/editar.php');
			break;
		case 4:
		    include('telas/excluir.php');
			break;
		default:
		    include('telas/cadstro.php');
			break;	
	}

?>