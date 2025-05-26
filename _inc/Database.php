<?php
    class Database{
        private $host = 'localhost';
        private $db= 'kaviaren';
        private $user = 'root';
        private $pass = '';
        private $charset = 'utf8';
        private $pdo;
        

        public function __construct(){
        $dsn = "mysql:host={$this->host};dbname={$this->db};charset={$this->charset}";
        try{
            $this->pdo = new PDO($dsn, $this->user, $this->pass);
            //PDO: EERMODE_EXCEPTION - chyba sa vyhodi do vynimky 
            //PDO: EERMODE_WARNING - vyhodi velky warning
            //PDO: EERMODE_SILENT - nevypisu chybu
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }
    
        catch(PDOException $e){
            die ("Connection failed: " . $e->getMessage());
        }
    }
        public function __destruct()
        {
            $this->pdo = null;
        }
        public function getConnection(){
            return $this->pdo;
        }
}
?>
