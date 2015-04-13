<?php
#echo "<pre>";
#print_r($_SERVER);
#echo "</pre>";    

	
	define("HOST","http://".$_SERVER['HTTP_HOST'].substr($_SERVER['SCRIPT_NAME'],0,strrpos($_SERVER['SCRIPT_NAME'],"/"))."/");
	define('HOST_MENU',HOST."index.php");

	$OP = (isset($_GET['OP']))?(int)$_GET['OP']:1;
/*
	switch($OP)
	{
        case 1:
		    include('telas/cadastro.php');
		    break;		
		case 2:
		    include('telas/listar.php');
			break;
		case 3:
		    include('telas/editar.php');
			break;
		case 4:
		    include('telas/excluir.php');
			break;
		default:
		    include('telas/cadstro.php');
			break;	
	}
*/	
?>