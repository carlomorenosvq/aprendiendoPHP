<?php
    if (isset($_GET['color'])) {
        $color = $_GET['color'];
       
    } else {
        
        $color = "#FFFFFF";
       
    }

    setcookie("fondo", $color, time() + 7 * 24 * 60 * 60);
    $_COOKIE["fondo"] = $color;
    echo "<style>body {background-color:" . $_COOKIE["fondo"] ." ;}</style>";
    echo $_COOKIE["fondo"];
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
    <form action="index3.php" method="GET">
    <?php echo $_COOKIE["fondo"];  ?>
        <h1> Elige un color para el fondo:</h1> <br></br>
        <?php echo $_COOKIE["fondo"];  ?>
        <input type="color" name="color" value="<?php echo $_COOKIE["fondo"];  ?>"> <br></br>
        <input type="submit" value="Cambiar">
    </form>


  

</body>

</html>