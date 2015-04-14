<?php
    include('config/config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0 user-scalable=no"/>
<meta name="apple-mobile-web-app-capable" content="yes" /> 
<meta name="mobile-web-app-capable" content="yes">
<title>Exercicio 4</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="css/flat/zebra_dialog.css" />	
    <script language="javascript" src="js/jquery-2.1.3.min.js"></script>
    <script language="javascript" src="js/zebra_dialog.src.js"></script>
    <script language="javascript" src="js/core.js"></script>
</head>
<body id="body_home">
    <div id="estrutura_maior">
        <div id="estrutura_site">
        
        	<div id="texto-topo">
            <strong>Exercício número 4</strong><br />Desenvolva uma API Rest para um sistema gerenciador de tarefas
(inclusão/alteração/exclusão).<br />As tarefas consistem em título e descrição, ordenadas por
prioridade.
            </div>
            <div id="estrutura-menu">
                <a href="#" onclick="enviarPag('1','',''); return false;" class="link_menu"><div id="menu-novo" class="menu-ativo class-sombra class-campo-arredondado">Novo</div></a>
                <a href="#" onclick="enviarPag('2','',''); return false;" class="link_menu"><div id="menu-listar" class="menu class-sombra class-campo-arredondado">Listar</div></a>
                <a href="#" onclick="Sobre(); return false;" class="link_menu"><div id="menu-listar" class="menu class-sombra class-campo-arredondado">Sobre</div></a>
            </div>
            <div id="corpo-site"> 
            </div>
            
        </div>    
    </div>
    <script language="javascript">
	 $('#corpo-site').load('config/load.php',{OP:1});
	 </script>

	<br style="clear:both" /><br /><br /><br />

</body>
</html>