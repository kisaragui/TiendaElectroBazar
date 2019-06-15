<?php

session_start();

include './CRUDController.php';

$opcion = $_REQUEST["opcion"];

switch ($opcion) {
    case 1:
        unset($_SESSION["lista"]);
        $obj = new MetodosCRUD();
        $lista= $obj->ListaProductos();
        $_SESSION["lista"] = $lista;
        header("Location: ../views/Catalogo.php");
        break;
    
    case 2:
        break;
    
    default:
        break;
}
?>