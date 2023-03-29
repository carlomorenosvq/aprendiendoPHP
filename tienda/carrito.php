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

    <?php

    if (isset($_GET['cual'])) {


        $_SESSION['carrito'][$_GET['cual']]--;

        foreach ($_SESSION['productos'] as $llaveProductos => $productos) {

            foreach ($productos as $llaveProducto => $producto) {

                if ($_GET['cual'] === $producto) {

                    $_SESSION['precioTotal'] = $_SESSION['productos'][$llaveProductos]['precio'];
                }
            }
        }
    }

    if (isset($_GET['comprar'])) {
        foreach ($_SESSION['carrito'] as $llave1 => $valor1) {
            $_SESSION['carrito'][$llave1] = 0;
        }
    }

    ?>

    <table>
        <?php
        foreach ($_SESSION['carrito'] as $llave => $valor) {

            if ($valor > 0) {
                echo '<tr>';
                echo '<td>';
                echo $llave;
                echo '</td>';
                echo '<td>';
                echo $valor;
                echo '</td>';
                echo '<td>';
                ?>
                <form action="carrito.php" method="get">
                    <input type="hidden" name="cual" value="<?= $llave ?>">
                    <input type="submit" value="Eliminar" /></td>
                </form>
                <?php
                echo '</td>';
                echo '</td>';
            }
        }

        ?>
      <tr>
            <td colspan="3" style="text-align: center;">
                Precio Total: <?php echo $_SESSION['precioTotal'] ?>
            </td>
        </tr>

        <tr>
            <td colspan="3" style="text-align: center;">
                <form action="carrito.php" method="get">
                    <input type="hidden" name="comprar" value="">
                    <input type="submit" value="Comprar" />
                </form>

            </td>
        </tr>

    </table>
    <a href="index.php"> Volver a la tienda</a>
</body>

</html>