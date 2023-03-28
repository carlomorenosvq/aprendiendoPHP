<?php

session_start();


?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <table>

    <?php

 foreach ($_SESSION['carrito'] as $llave => $valor) {

    if ($valor > 0) {
        # code...
        echo '<tr>';


        echo '<td>';
        echo $llave;
        echo '</td>';
    
        echo '<td>';
        echo $valor;
        echo '</td>';
    
        echo '<td>';
        ?>
        <form action="carrito.php" method="get"> </form>
        <input type="hidden" name="cual" value="<?= $llave?>">
        <input type="submit" value="Eliminar" /></td>
        <?php
        echo '</td>';
    
    
        echo '</td>';
    }
   
 }

?>
        
    </table>´
    <a href="index.php"> Volver a la tienda</a>
</body>

</html>