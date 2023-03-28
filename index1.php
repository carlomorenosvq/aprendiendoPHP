<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> -->

<!-- <body> -->
<!-- <form action="index2.php" method="get">
        <h1>Introduce tu nombre</h1><input type="text" name="nombre" id="nombre">
        <input type="submit" value="Enviar">
        <h1>Introduce tu edad</h1><input type="text" name="edad" id="edad">
        <input type="submit" value="Enviar">
    </form> -->
<!-- <a href="index2.php?nombre=Carlos">Enviame esta</a> -->
<!-- </body> -->



<!-- <form action="index2.php" method="get">

        <h1>Tu pareja ha aumentado sus gastos de vestuario</h1>
        Verdadero<input type="radio" name="p1" value="Verdadero">
        Falso<input type="radio" name="p1" value="Falso">

        <h1>Frecuentemente se olvida de donde ha estado</h1>
        Verdadero<input type="radio" name="p2" value="Verdadero">
        Falso<input type="radio" name="p2" value="Falso">




        <input type="submit" value="Enviar">
    </form> -->






<!-- // Realiza un pograma que pida un día de la semana y te devuelva el número del día



//Realiza un pograma que nos diga si hay una probabilidad de que nuestra pareja nos sea infiel.
El programa irá haciendo preguntas que el usuario responderá como verdadero o falso.
Cada pregunta verdadera suma 3 puntos, las falsas no suman. Podemos hacerlo con radio button
.
1.  -->

<!-- 
Realiza un pograma que nos diga el horoscopo a partir del día y mes de nacimiento -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<!-- <style>
    body {
        background-color: gray;
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .contenedor {
        width: 500px;
        padding: 10px;
        border: 5px solid white;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .cajita {
        margin: 10px 0px;
        width: 140px;
        height: 140px;

        background-color: black;
        cursor: pointer;
        margin: 10px 0;
    }
</style>
<body>

    <div class="contenedor">
        <a href="index2.php?img=1"><div class="cajita"> </div></a>
        <a href="index2.php?img=2"><div class="cajita"> </div></a>
        <a href="index2.php?img=3"><div class="cajita"> </div></a>
        <a href="index2.php?img=4"><div class="cajita"> </div></a>
        <a href="index2.php?img=5"><div class="cajita"> </div></a>
        <a href="index2.php?img=6"><div class="cajita"> </div></a>
        <a href="index2.php?img=7"><div class="cajita"> </div></a>
        <a href="index2.php?img=8"><div class="cajita"> </div></a>
        <a href="index2.php?img=9"><div class="cajita"> </div></a>
        
    </div> -->


<!-- Programa de control de acceso a una caja fuerte. La combinacion será un numero de 4 cifras, y el programa nos pedirá la combinacion para abrirla -->

<?php
// if (isset($_GET['intentos'])) {
//     $_GET['intentos']--;
//     $intentos = $_GET['intentos'];
// } else {
//     $intentos = 4;
// }

// if ($intentos == 0) {
//     echo "<p>Te has quedado sin intentos. Se cierra la caja fuerte";
// } else if ($_GET['contra'] == 1234){
//     echo "<p>Oleeeeeeeee vaya maquinon</p>";
// }




 ?>
<!-- //     <p>Introduce la clave</p>

//     <form action="index1.php" method="get">
//         <input type="text" name="contra" id="">
//         <input type="hidden" name="intentos" value="<?= $intentos ?>">
//         <input type="submit" value="Probar">
//     </form> -->
<?php  ?>

<?php

    $array = [];
    $array[0]=0;
    $array[1]=1;
    $array[2]=2;
    $array[3]=3;

    $array2 = [0,1,2,3,4];

    $array3 = new SplFixedArray(10);
    $array[] = 4; //Añadir el 4 
//  Formas de Definir un array

    $array = ["Rosa" =>25, "Jesus" =>25, "Pepe" =>25];

    foreach ($array as $elemento => $valorKey) {
        echo "<p>$valorKey</p>";
    }
    for ($i=0; $i < count($array); $i++) { 

        echo '<p>' .$i. '</p>';
    }





?>






</body>

</html>