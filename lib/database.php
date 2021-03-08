<?php 

    $connection = mysqli_connect('localhost','root','','portfolio');

    session_start();

    if(!$connection){
        exit();
    }

?>