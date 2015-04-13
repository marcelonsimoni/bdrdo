<?php

 class MyUserClass
 {
 public function getUserList()
 {
 $dbconn = new DatabaseConnection('localhost','user','password');
 $results = $dbconn->query('select name from user');

 sort($results);

 return $results;
 }
 }

?>

<?php

    class MyUserClass
    {
		
		private $host		= 'localhost';
		private $user		= 'user';
		private $password	= 'password'; 
		private $banco		= 'banco';
				
        public function getUserList()
        {
            $dbconn = new DatabaseConnection($this->host,$this->user,$this->password, $this->banco);
            $results = $dbconn->query('select name from user');

            sort($results);

            return $results;
        }
    }

?>