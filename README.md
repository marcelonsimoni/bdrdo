# BDR
Prova de Conhecimento

# Início
Primeiramente você deve descompactar os arquivos para dentro do seu servidor, na pasta public_html, html ou a referente do seu ambiente web.

# Instalação
Antes de rodar o sistema, deve-se criar um banco de dados de dados para a execução do projeto e depois incluir duas tabelas que estão no arquivo bd.sql, dentro do diretório /bd, na raiz do projeto.

CREATE TABLE IF NOT EXISTS prioridade (
cod int(11) NOT NULL AUTO_INCREMENT,
tipo varchar(50) NOT NULL,
ordem int(11) NOT NULL,
PRIMARY KEY (cod)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

CREATE TABLE IF NOT EXISTS tarefas (
cod int(11) NOT NULL AUTO_INCREMENT,
titulo varchar(200) NOT NULL,
descricao longtext NOT NULL,
data_hora timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
prioridade int(11) NOT NULL,
alterado_em timestamp NULL DEFAULT NULL,
PRIMARY KEY (cod)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

INSERT INTO prioridade (cod, tipo, ordem) VALUES
(1, 'Baixa', 1),
(2, 'Média', 2),
(3, 'Alta', 3),
(4, 'Urgente', 4);

Após criado o banco de dados e as duas tabelas, deve-se alterar as informações de conexão com o banco de dados.

Essas informações estão no arquivo "classConnection.php", dentro do diretório /classes.

As variáveis para alteração são:
        private $host		= '127.0.0.1'; // ip do servidor
        private $user		= ''; // login de acesso
        private $password	= ''; // senha de acesso
        private $banco		= ''; // nome do banco de dados

# Testando a aplicação
Se você apenas descompactou a aplicação para a raiz do servidor, você deverá informar o IP seguido de /prova/exercicio4, conforme o exemplo abaixo:

http://127.0.0.1/bdrdo-master/exercicio4
