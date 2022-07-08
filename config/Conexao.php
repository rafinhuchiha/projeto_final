<?php
class Conexao{

    static $con = null;
    public static function getConnection(){
        $ip = "sql203.epizy.com";
        $port = "3306";
        $user = "epiz_32124287";
        $pass = "iaXh4bZglo3";
        $db = "epiz_32124287_projeto_final";

    if(!self::$con){
        self::$con = new mysqli($ip, $user, $pass, $db, $port);
        self::$con->set_charset("utf8mb4");

        if(self::$con->connect_error){
            echo self::$con->connect_error;
            die();
        }
    }
    return self::$con;
}
}
?>
