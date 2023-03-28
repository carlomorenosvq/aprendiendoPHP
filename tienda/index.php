<?php

session_start();
if (!isset($_SESSION['productos'])) {
    $_SESSION['productos'] = [
        [
            "imagen" => 'images/raton.png',
            "nombre" => 'Raton To Flama',
            "descripcion" => 'Está de locos primo',
            "precio" => 3000
        ],
        [
            "imagen" => 'images/alfombrilla.png',
            "nombre" => 'Alfombrilla To Flama',
            "descripcion" => 'Está de locos bro',
            "precio" => 200
        ],
        [
            "imagen" => 'images/portatil.png',
            "nombre" => 'Portatil To Flama',
            "descripcion" => 'Está de locos hermano',
            "precio" => 30000
        ],
        [
            "imagen" => 'images/teclado.png',
            "nombre" => 'Teclado To Flama',
            "descripcion" => 'Está de locos mi pana',
            "precio" => 300
        ],
        [
            "imagen" => 'images/torre.png',
            "nombre" => 'Torre To Flama',
            "descripcion" => 'Está de locos asecas',
            "precio" => 3400
        ],
    ];
    $_SESSION['carrito'] = [];
}




?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <table border="1">
        <?php

        foreach ($_SESSION['productos'] as $key => $productos) {
            echo '<tr>';
            foreach ($productos as $llave => $producto) {
                echo '<td>';
                if ($llave === "imagen") {
                    echo '<img src="' . $producto . '"width="50px"   ">';
                } else {
                    echo $producto;
                }
                echo '</td>';
            }


        ?>
            <td>
                <form action="" method="get">
                    <input type="hidden" name="nombreProducto" value="">
                    <input type="hidden" name="precioProducto" value="">
                    <input type="hidden" value="Comprar">

                </form>
            </td>
            <?php
            echo '</tr>';
        }


        ?>
    </table>







</body>

</html>