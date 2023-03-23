<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
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
    <?php 
        if ($_GET['img'] == 1) {
            echo '<div class="cajita" style="background-image:url(img/' . $_GET['img'] . '.jpg)"></div>';
        }else{
            echo '<div class="cajita"> </div>';
        }
        if ($_GET['img'] == 2) {
            echo '<div class="cajita" style="background-image:url(img/' . $_GET['img'] . '.jpg)"></div>';
        }else{
            echo '<div class="cajita"> </div>';
        }
        if ($_GET['img'] == 3) {
            echo '<div class="cajita" style="background-image:url(img/' . $_GET['img'] . '.jpg)"></div>';
        }else{
            echo '<div class="cajita"> </div>';
        }
        if ($_GET['img'] == 4) {
            echo '<div class="cajita" style="background-image:url(img/' . $_GET['img'] . '.jpg)"></div>';
        }else{
            echo '<div class="cajita"> </div>';
        }
        if ($_GET['img'] == 5) {
            echo '<div class="cajita" style="background-image:url(img/' . $_GET['img'] . '.jpg)"></div>';
        }else{
            echo '<div class="cajita"> </div>';
        }
        if ($_GET['img'] == 6) {
            echo '<div class="cajita" style="background-image:url(img/' . $_GET['img'] . '.jpg)"></div>';
        }else{
            echo '<div class="cajita"> </div>';
        }
        if ($_GET['img'] == 7) {
            echo '<div class="cajita" style="background-image:url(img/' . $_GET['img'] . '.jpg)"></div>';
        }else{
            echo '<div class="cajita"> </div>';
        }
        if ($_GET['img'] == 8) {
            echo '<div class="cajita" style="background-image:url(img/' . $_GET['img'] . '.jpg)"></div>';
        }else{
            echo '<div class="cajita"> </div>';
        }
        if ($_GET['img'] == 9) {
            echo '<div class="cajita" style="background-image:url(img/' . $_GET['img'] . '.jpg)"></div>';
        }else{
            echo '<div class="cajita"> </div>';
        }
    ?>
</div>




</body>

</html>