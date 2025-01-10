<?php 
    
    $serverDB = "localhost";
    $userDB = "root";
    $passDB = "";
    $nameDB = "carsmanagement";

    $sql_connection = mysqli_connect($serverDB, $userDB, $passDB, $nameDB);

    if($sql_connection){
        echo"SQL IS CONNECTED";
    }
    else{
        echo"couldn't connect";
    }

?>