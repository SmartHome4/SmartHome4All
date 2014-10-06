<?php

        $server = 'localhost';
        $db_pass = '';
        $db_user = 'root';
        mysql_connect($server, $db_user, $db_pass);
        mysql_select_db("SmartHome");
        mysql_query("SET NAMES 'utf8'"); 
        mysql_query("SET CHARACTER SET 'utf8'"); 
        mysql_query("SET SESSION collation_connection = 'utf8_general_ci'"); 
