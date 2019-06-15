<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Detalle del Producto</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="../views/css/TiendaEB.css" type="text/css">
    </head>
    <body>
        <?php
        header('Content-Type: text/html; charset=UTF-8');
        include "../controllers/CRUDController.php";
        
        $id = $_REQUEST["id"];
        $obj = new MetodosCRUD();
        $productos = $obj->ListaProductosPorID($id);
        
        foreach ($productos as $producto ){
            $nombre = $producto[1];
            $precio = $producto[2];
            $descripcion = $producto[5];
            $imagen = $producto[6];
        }

        ?>
        
        <form class="form-inline">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 centrar">
                     <?php echo "<img class='imagen ' src='../views/img/".$producto[6]."'>"; ?>
                    </div> 
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-12 detalle">
                             <?php echo $nombre; ?>
                            </div>
                            <div class="col-sm-12 detalle">
                              <?php echo $descripcion;?>
                            </div>
                            <div class="col-sm-12 detalle">
                                <?php echo "$".$precio; ?>
                            </div>
                            <div class="col-sm-12 detalle">
                                <div class="form-group inline">
                                    <label for="cantidad" class="col-sm-3col-form-label">Ingresar Cantidad:</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" min="1" max="100" value="1" id="cantidad"> 
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-sm-12 centrar">
                    <button class='btn  btn-primary' type='button' onclick=''>Agregar al Carrito</button>
                    <button class='btn  btn-danger' type='button' data-dismiss="modal">Cerrar</button>
                </div>
            </div>   
        </form>
    </body>
</html>
