<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    if (!isset($_COOKIE['usuariosLogin'])) {
        $array = ["Jesus" => 1234, "Andrea" => "Gaga", "Gabri" => 4321];
        setcookie('usuariosLogin', implode("-", $array), time() + 7 * 24 * 60 * 60);
    } else if (isset($_GET['usu'])) {
        $bandera = false;
        echo $_COOKIE['usuariosLogin'];
        echo "<br>";
        echo "<br>";
        print_r(explode("-", $_COOKIE['usuariosLogin']));
        foreach (explode("-", $_COOKIE['usuariosLogin']) as $llave => $valor) {
            if ($valor === $_GET['contra']) {
                $bandera = true;
            }
        }
        if ($bandera == false) {
            echo "Error prueba otra vez";
        } else {
            echo "Bien hecho";
            sleep(2);
            header("Location:index2.php");
        }
    }

    ?>
</body>

</html>