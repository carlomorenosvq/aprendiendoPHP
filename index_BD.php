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


    // $conexion = mysqli_connect('localhost', 'root', ''); //sitio, usuario, contraseña

    // mysqli_select_db($conexion, 'clase');
    // mysqli_set_charset($conexion, 'utf8');

    // $consulta = mysqli_query($conexion, 'SELECT Dni, Nombre, Apellido, Adad, Genero from alumnos');


    //CONEXION MÁS SEGURA 

    try {
        $conexion = new PDO('mysql:host=localhost;dbname=clase;charset=utf8', 'root', ''); //PDO representa una conexion entre servidor y BBDD
        echo "Se ha establecido la conexión de locos bro";
    } catch (PDOException $e) {
        echo "Sorry bro no se puede hacer eso";
        die('Error: ' . $e->getMessage());

        //Si no consigue conectarse te dice el tipo de error y te da mensaje
    }

    // $consulta = $conexion->query('SELECT Dni, Nombre, Apellido, Edad, Genero from alumnos');
    


    $consulta = $conexion->query('SELECT Dni from alumnos WHERE Dni='.$_GET['Dni'].'');
    if($consulta->rowCount() > 0){
        echo "Este usuario ya existe";
    }else{
        $insercion = 'INSERT INTO alumnos(Dni, Nombre, Apellido, Edad, Genero) VALUES (' .$_GET['Dni'] . ',' .$_GET['Nombre']. $_GET['Apellido'] . ',' .$_GET['Edad']. $_GET['Genero']. ')' ;
        $conexion->exec($insercion);
        
    }
    print_r($consulta);

    ?>

    <table border="1">

        <tr>
            <td>Dni</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Edad</td>
            <td>Genero</td>
            

        </tr>

        <?php

        //FetchObjetc: hazme lo que te voy a decir mientras haya objetos, mientras haya objetos en la tabla
        while ($alumno = $consulta->fetchObject()) {
        ?>
            <tr>
                <td> <?php echo $alumno->Dni ?> </td>
                <td> <?php echo $alumno->Nombre ?> </td>
                <td> <?php echo $alumno->Apellido ?> </td>
                <td> <?php echo $alumno->Edad ?> </td>
                <td> <?php echo $alumno->Genero ?> </td>

            </tr>
        <?php
        }
        ?>




    </table>


</body>

</html>