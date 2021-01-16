<?php

        try{
            $BDD = new PDO("mysql:host=127.0.0.1;dbname=azur_lane","root","root");
        }
    
        catch(PDOException $e){
            echo $e->getMessage();
        }


    function Set_RarityColor($RarityColor) {

        echo $RarityColor;
    }

?>