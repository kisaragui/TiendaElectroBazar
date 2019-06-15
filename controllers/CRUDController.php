<?php

include "../utils/Connection.php";

class MetodosCRUD {

	public function ListaProductos(){
		$connect = new ConnectionDB();
		$con=$connect->getConnection();

		$consult = $con->prepare("select * from productos");
		$consult-> execute();
                
		foreach ($consult as $productos) {
			$producto[] = $productos;
		}
		return $producto;
	}
    
        public function ListaProductosPorID($id){
            	$connect = new ConnectionDB();
		$con=$connect->getConnection();

		$consult = $con->prepare("select * from productos where idProducto=$id");
		$consult-> execute();
                
		foreach ($consult as $productos) {
			$producto[] = $productos;
		}
		return $producto;
        }
}

