<?php

@ header("Content-Type: text/html; utf-8",true);


	if(!class_exists('classConsultas')){ 
	
	    include("classConnection.php");

		class classConsultas extends Connection { 
	
			#construtor
	
			public function __construct(){
	
			}
				
			public function ListaPrioridade($I = NULL){
				
				$I = (int)$I;
				
				return $this->query("SELECT cod, tipo, ordem, IF($I = cod,'OK','') selecionado FROM prioridade ORDER BY ordem ASC");
				
			}
			
			public function ListarTarefas($T = NULL, $O = 1){

				$T = (int)$T;
				$O = (int)$O;
				$O = ($O == 1)?'ASC':'DESC';
				
				return $this->query("SELECT t.cod, t.titulo, p.tipo, IF(t.cod = $T,'OK','') selecionado FROM tarefas t INNER JOIN prioridade p ON t.prioridade = p.cod ORDER BY p.ordem $O ");
			}
			
			public function InfoTarefa($C){
			
				$C = (int)$C;
				
				return $this->query("SELECT cod, titulo, prioridade, descricao, DATE_FORMAT(data_hora,'%d/%m/%Y %H:%i') criado_em, DATE_FORMAT(alterado_em,'%d/%m/%Y %H:%i') alterado FROM tarefas WHERE cod = '".$C."'");
				
			}
		}
	}
?>