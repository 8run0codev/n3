<?php

    session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script type="text/javascript">
            function imprimir() {
                if (window.print) {
                    window.print();
                } else {
                    alert("La función de impresion no esta soportada por su navegador.");
                }
            }
        </script>

        <link rel="stylesheet" type="text/css" href="../css/materialize.css">
    </head>
    <body onload="imprimir();">
     <div class="container">
            <center>

                <br>
                <br>
                <br>
                <h1>n³</h1>
                <p> Mar Mediterráneo # 227 <br> Col. Popotla | Del. Miguel Hidalgo <br> C.P. 11400 | Ciudad de México </p>
                <script type="text/javascript">
                 var d = new Date(); 
                 document.write(d.getDate() + "/" + (d.getMonth() +1) + "/" + d.getFullYear(), ', '+d.getHours(),':'+d.getMinutes(),':'+d.getSeconds());
                  </script>
                <hr>
                <table border="1px" width="100%" class="striped">
                <tr>
                    <td>N°</td>
                    <td>Producto</td>
                    <td>Precio</td>
                    <td>Cantidad</td>
                    <td>Subtotal</td>
                </tr>

                <?php

                $arreglo=$_SESSION['carrito'];
                $total=0;
                for ($i=0; $i < count($arreglo) ; $i++) { 
                   ?>

                   <tr>
                        <td><?php echo $i+1; ?></td>
                        <td><?php echo $arreglo[$i]['Nombre']; ?></td>
                        <td><?php echo $arreglo[$i]['Precio']; ?></td>
                        <td><?php echo $arreglo[$i]['Cantidad']; ?></td>
                        <td><?php echo $arreglo[$i]['Precio']*$arreglo[$i]['Cantidad']; ?></td>

                   </tr>

                   <?php 
                   $total=($arreglo[$i]['Cantidad']*$arreglo[$i]['Precio'])+$total;
                }

                ?>
                </table>
                <p>Total:$ <?php echo $total; ?></p>

                <h4 class="grey-text">Gracias por su compra</h4>
                <br>
                <a><form action="fin.php" > 
                <input type="submit" value="Cerrar" class="waves-effect waves-light btn" onclick="cerrarse()"> 
                </form></a> 

        </center>
     </div>    
    </body>
</html>



