<?php

        $server = 'localhost';
        $db_pass = '';
        $db_user = 'root';
        $link = mysqli_connect($server, $db_user, $db_pass, "SmartHome");
        mysqli_query($link, "SET NAMES 'utf8'"); 
        mysqli_query($link, "SET CHARACTER SET 'utf8'"); 
        mysqli_query($link, "SET SESSION collation_connection = 'utf8_general_ci'"); 
