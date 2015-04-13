<?php

@ header("Content-Type: text/html; utf-8",true);

if (!class_exists('Connection')) 
{
    class Connection extends mysqli 
	{
		
        private $host		= '127.0.0.1';
        private $user		= 'root';
        private $password	= ''; 
        private $banco		= 'exercicio4';

        # MOSTRA ERROS NA TELA
        public $mostraErros		= TRUE;
        # CÓDIGOS DE ERRO DE CONEXAO
        private $codErroConn	= NULL;
        private $msgErroConn	= '';
        # CONTROLE 
        private $ins_id			= NULL;
        private $affected_r		= NULL;

        public function __construct() 
		{
            # ERROS NA TELA
            $this->errorRep();
		} 

		protected function anti_sql_injection_web($string) 
		{
			$string = get_magic_quotes_gpc() ? stripslashes($string) : $string;
			$string = function_exists("mysqli_real_escape_string") ? $string : $string;
			return $string = addslashes($string);

		} 
	
		# TRATAMENTO DE ERROS NA CONEXÃO
		public function tratarErrosConn() 
		{

            if ($this->codErroConn) {
                if ($this->codErroConn == 2005) {	$this->msgErroConn = "Servidor Desconhecido"; }
                else {	$this->msgErroConn = "Erro: ".$this->codErroConn." => ".$this->msgErroConn;	}
                # PARA SISTEMA COM ERRO
                die($this->msgErroConn);
			} 

		} 
		
		# CONECTAR (com tratamento de erros)
		function Conectar() 
		{
			
            if ($this->mostraErros) { ini_set('display_errors',0); }
            # CONECTA E GUARDA ERRO SE HOUVER
            if (!parent::__construct($this->host,$this->user, $this->password, $this->banco)) {	$this->codErroConn = mysqli_connect_errno(); } // conexao
            if ($this->mostraErros) { ini_set('display_errors',1); }

		} 
				
		# EXECUTAR QUERY
        function query($query) 
		{

			$this->Conectar();
            $result = parent::query($query);

            # TRATAMENTO DE ERROS		
            if ($this->error) {
                try {   
                    throw new Exception("MySQL error {$this->error} <br> Query: [$query]", $this->errno);   
                } catch(Exception $e ) {
                    $xError= "Error No: ".$e->getCode(). " - ". $e->getMessage() . "<br >";
                    $xError.= nl2br($e->getTraceAsString());
                    die($xError);
                }
            }

            # INSERT_ID
            $this->ins_id = $this->insert_id;
            # AFFECTED_ROWS
            $this->affected_r = $this->affected_rows;
            # FECHA CONEXÃO			
            $this->close();
            # RETORNA RESULTADO
            return $result;
		} 
		
        # PEGAR INSERT_ID
        public function getInsertId() 
		{
            return $this->ins_id;
        } 
		
        # PEGAR AFFECTED_ROWS
        public function getAffecteds() 
		{
            return $this->affected_r;
        } 

		
	} 
} 
?>