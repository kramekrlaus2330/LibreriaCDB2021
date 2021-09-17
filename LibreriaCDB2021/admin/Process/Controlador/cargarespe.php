<?php
function valor(){
    $espe=new Espe();
    $filas=$espe->Valor();
   
}

    /* form */
    function cargar(){
        $espe = new Espe();
        $filas = $espe->cargarForms();

        echo "<table>
                <tr>
                    <th>Número de pedido</th>
                    <th>Identificador del cliente</th>
                    <th>Usuario</th>
                    <th>Precio Total</th>
                    <th>Fecha</th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Código de producto</th>
                </tr>";
        if(isset($filas)){
            foreach($filas as $fila){
                echo "<tr>";
                echo "<td>".$fila['id']."</td>";
                echo "<td>".$fila['userid']."</td>";
                echo "<td>".$fila['user']."</td>";
                echo "<td>".$fila['total_price']."</td>";
                echo "<td>".$fila['created']."</td>";
                echo "<td>".$fila['product']."</td>";
                echo "<td>".$fila['qty']."</td>";
                echo "<td>".$fila['productID']."</td>";
                echo "</tr>";

            }

            
            echo "</table>";
        }else{
            echo "<h1>No hay Pedidos existentes</h1>";
        }
    }

    function buscar($created){
        $espe = new Espe();
        $filas = $espe->buscarForms($created);

        echo "<table>
            <tr>
                    <th>Número de pedido</th>
                    <th>Identificador del cliente</th>
                    <th>Usuario</th>
                    <th>Precio Total</th>
                    <th>Fecha</th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Código de producto</th>
                </tr>";
        if(isset($filas)){
        foreach($filas as $fila){
            echo "<tr>";
                echo "<td>".$fila['id']."</td>";
                echo "<td>".$fila['userid']."</td>";
                echo "<td>".$fila['user']."</td>";
                echo "<td>".$fila['total_price']."</td>";
                echo "<td>".$fila['created']."</td>";
                echo "<td>".$fila['product']."</td>";
                echo "<td>".$fila['qty']."</td>";
                echo "<td>".$fila['productID']."</td>";
                echo "</tr>";
        }
            echo "</table>";
        }else{
            echo "<h1>No hay Pedidos existentes</h1>";
        }
    }

    

?>