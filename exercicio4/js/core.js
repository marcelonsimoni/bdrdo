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
	 
	 function ExcluirTarefa(C){
		
		$.Zebra_Dialog('Confirma a exclusão da tarefa atual?', {
			'type':     'question',
			'title':    'Custom buttons',
			'buttons':  [
							{caption: 'Sim', callback: function() { $.post('sql/ExcluirTarefa.php',{C:C},function(ret){	new $.Zebra_Dialog(ret); $('#corpo-site').load('config/load.php',{OP:2}); }); }},
							{caption: 'Não', callback: function() { }}

						]
			});		 
	 }
	 