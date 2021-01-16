<?php

    require("function.php");
    $Charnb=0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="Img/Icon.png" />
    <link rel="stylesheet" type="text/css" href="style/style.css" />
    <link rel="stylesheet" type="text/css" href="style/menu.css" />
    <title>Azur Lane Wiki - Ships</title>
</head>
<body>

    <?php include('menu.php')?>

    <div class="Content">

        <?php 
            $Ships = $BDD->query("SELECT * FROM ship");

            while($Ships_List = $Ships->fetch())
            {
            ?>

                <div class="Ships">
                    
                    <table class="Ships_Infos_Table">

                        <tr>
                            <td class="Ships_Name">
                                <p><?php echo $Ships_List["shipname"]?></p>
                            </td>
                        </tr>

                        <tr>
                            <td class="Ships_Icon" style="background: <?php Set_RarityColor($Ships_List["ship_rarity"])?>;">
                                <img class="Ships_Type" src="Img/Type/<?php echo $Ships_List["ship_type"]?>.png" alt="Type">
                                <img class="Ships_Img" src="Img/Ships/<?php echo $Ships_List["shipname"]?>.png" alt="Ship">
                            </td>
                        </tr>

                    </table>

                </div>
            
            

            <?php
            $Charnb ++;
            }
        ?>
    </div>

    <?php echo $Charnb ?>
</body>
</html>

<?php
/*
                    <div class="Ships_Infos" style="background-color: red;">
                        <p><a href="Ship.php?shipname=<?php echo $_POST['shipname']=$Ships_List["shipname"]?>"><?php echo $Ships_List["shipname"]?></p>
                        <img class="Ships_Type" src="Img/Type/<?php echo $Ships_List["ship_type"]?>.png" alt="Type">
                        <img class="Ships_Img" src="Img/Ships/<?php echo $Ships_List["shipname"]?>.png" alt="Ship"></a>
                    </div>


                    <table class=Ships_Infos_Table>
                        <tr class="Ship_Name">
                            <td>
                                <p><a href="Ship.php?shipname=<?php echo $_POST['shipname']=$Ships_List["shipname"]?>"><?php echo $Ships_List["shipname"]?></p>
                            </td>
                        </tr>
                        <tr class="Ship_Img" style="background-color: grey;">
                            <td>
                            <img class="Ships_Type" src="Img/Type/<?php echo $Ships_List["ship_type"]?>.png" alt="Type">
                            <img class="Ships_Img" src="Img/Ships/<?php echo $Ships_List["shipname"]?>.png" alt="Ship"></a>
                            </td>
                        </tr>
                    </table>

*/
?>