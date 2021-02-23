<?php 
class connection_model {
private $dbname = "TDW" ;
private $host = "127.0.0.1" ;
private $user = "root" ;
private $password = "" ;

public function connexion () {
    $dsn = "mysql:dbname=$this->dbname;host=$this->host;";
    try{
        $c = new PDO($dsn,$this->user,$this->password) ; 
        }
        catch(PDOException $ex) {
            printf("erreur de connexion à la base de donné",$ex->getMessage()) ;
            exit() ;  
        }
        return $c ; 
}
public function deconnexion ($c) {
    $c = null ; 
}

}

?>
