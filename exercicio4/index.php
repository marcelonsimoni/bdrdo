<?php
    include('config/config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Exercicio 4</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="css/default/zebra_dialog.css" />	
    <script language="javascript" src="js/jquery-2.1.3.min.js"></script>
    <script language="javascript" src="js/zebra_dialog.src.js"></script>
    <script language="javascript">
	function Sobre(){
		$.Zebra_Dialog('Projeto desenvolvido para demonstração de conhecimento utilizando<br><ul><li>PHP OPP</li><li>Mysql</li><li>jQuery</li><li>Css com layout responsível</li></ul>', {
			'type':     'information',
			'title':    'Marcelo Nunes Simoni'
		});
	}

	 function CadastrarNovaTarefa(){
		 
		if($('#nome, #prioridade, #descricao').val() != "")
		{ 
		var datastring = $("#frm-novo-cadastro").serialize();
	     $.ajax({
              type: 'POST',
              url: 'sql/CadastraNovo.php',
              data: datastring,
              success: function(data) {
                if(data == 1)
				{					
					new $.Zebra_Dialog('Cadastro realizado com sucesso');
					$("#frm-novo-cadastro").trigger('reset');
				}
				else if(data == 2)
					new $.Zebra_Dialog('Não foi possível cadastrar a tarefa, verifique os campos obrigatórios e tente novamente.');
				else
					new $.Zebra_Dialog('Você deixou campos obrigatórios em branco, por favor, preencha os campos e tente novamente');
                //alert(data);
              }
		 });
		}
		else
			new $.Zebra_Dialog('Preencha os campos obrigatórios antes de prosseguir.');
		
	 }
	 
	 function AlterarTarefa(){

		if($('#nome, #prioridade, #descricao, #ct').val() != "")
		{ 
		var datastring = $("#edita-cadastro").serialize();
	     $.ajax({
              type: 'POST',
              url: 'sql/AlteraTarefa.php',
              data: datastring,
              success: function(data) {
                if(data == 1)
					new $.Zebra_Dialog('Alteração realizada com sucesso');					
				else if(data == 2)
					new $.Zebra_Dialog('Não foi possível alterar a tarefa, verifique os campos obrigatórios e tente novamente.');
				else
					new $.Zebra_Dialog('Você deixou campos obrigatórios em branco, por favor, preencha os campos e tente novamente');
                //alert(data);
              }
		 });
		}
		else
			new $.Zebra_Dialog('Preencha os campos obrigatórios antes de prosseguir.');
		
	 }
	 
	 function enviarPag(i,c,t){
		 if(i == 1)
		 {
			 $("#menu-novo").removeClass("menu").addClass("menu-ativo");
			 $("#menu-listar").removeClass("menu-ativo").addClass("menu");
			
		 }
		 else
		 {
			 $("#menu-listar").removeClass("menu").addClass("menu-ativo");
			 $("#menu-novo").removeClass("menu-ativo").addClass("menu");			 
		 }
		 
		 if(i == 4)
		 {
			
			$.Zebra_Dialog('Confirma a exclusão da tarefa abaixo?<br><br>'+t, {
				'type':     'question',
				'title':    'Custom buttons',
				'buttons':  [
								{caption: 'Sim', callback: function() { $.post('sql/ExcluirTarefa.php',{C:c},function(ret){	new $.Zebra_Dialog(ret); $('#corpo-site').load('config/load.php',{OP:2}); }); }},
								{caption: 'Não', callback: function() { }}

							]
				});		
			
		 }
		 else
		 	$('#corpo-site').load('config/load.php',{OP:i,C:c});

	 }
	 
	 
	</script>
</head>
<body id="body_home">
    <div id="estrutura_maior">
        <div id="estrutura_site">
        
        	<div id="texto-topo">
            <strong>Exercício número 4</strong><br />Desenvolva uma API Rest para um sistema gerenciador de tarefas
(inclusão/alteração/exclusão). As tarefas consistem em título e descrição, ordenadas por
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



</body>
</html>