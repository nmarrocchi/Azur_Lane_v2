<?php

        try{
            $BDD = new PDO("mysql:host=127.0.0.1;dbname=azur_lane","root","root");
        }
    
        catch(PDOException $e){
            echo $e->getMessage();
        }


    function Set_RarityColor($RarityColor) {


        switch ($RarityColor) 
        {
            case 'Common':
                echo 'grey';
                break;
            
                case 'Elite':
                    echo 'blue';
                    break;

                    case 'Rare':
                        echo 'purple';
                        break;
                        
                        case 'Super Rare':
                            echo 'yellow';
                            break;

                            case 'Ultra Rare':
                                echo 'red';
                                break;
        }
    }

?>