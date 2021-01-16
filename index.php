<?php

    require("function.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="Img/Icon.png" />
    <link rel="stylesheet" type="text/css" href="style/style.css" />
    <link rel="stylesheet" type="text/css" href="style/menu.css" />
    <title>Azur Lane Wiki - Home</title>
</head>
<body>

    <?php 
        include('menu.php');
        $Ships = $BDD->query("SELECT * FROM ship");
    ?>
    
</body>
</html>