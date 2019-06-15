<?php

class ConnectionDB {
    public function getConnection(){
        $connect = new PDO("mysql:host=localhost;dbname=tiendaEB","root","");
        return $connect;
    }
}

?>