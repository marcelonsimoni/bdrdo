<?php

@ header("Content-Type: text/html; utf-8",true);


	if(!class_exists('classCadastro')){ 
	
	    include("classConnection.php");

		class classCadastro extends Connection { 
	
			#construtor
	
			public function __construct(){
	
			}
				
			public function CadastraNovo($N, $D, $P){
				
				$N = $this->anti_sql_injection_web($N);
				$D = $this->anti_sql_injection_web($D);
				$P = (int)$P;
							
				return $this->query("INSERT INTO tarefas (titulo, descricao, prioridade, data_hora, alterado_em) VALUES('".utf8_decode($N)."','".utf8_decode($D)."','".$P."',NOW(),'')");
				
				return parent::getInsertId()?true:false;
				
			}
			
			public function AlteraCadastro($N, $D, $P, $C){
				
				$N = $this->anti_sql_injection_web($N);
				$D = $this->anti_sql_injection_web($D);
				$P = (int)$P;
				$C = (int)$C;
							
				return $this->query("UPDATE tarefas SET titulo		= '".utf8_decode($N)."',
										    			descricao	= '".utf8_decode($D)."', 
														prioridade	= '".utf8_encode($P)."', 
														alterado_em	= NOW()
									WHERE cod = '".$C."'");
				
				return parent::getAffecteds()?true:false;
				
			}			
			
			public function ExcluirTarefa($C){
			
				$C = (int)$C;
				
				$this->query("DELETE FROM tarefas WHERE cod = '".$C."'");
				
				return parent::getAffecteds()?true:false;
				
			}
		}
	}
?>