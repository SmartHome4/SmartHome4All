<?php     include_once '../SmartDB.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/** Description
 *  @author 'Oleg Fominsky'
 */

// install core tables
$path = "residents.sql";
        $server = 'localhost';
        $db_pass = '';
        $db_user = 'root';
        $link = mysqli_connect($server, $db_user, $db_pass);
        mysqli_query($link, "CREATE DATABASE IF NOT EXISTS SmartHome CHARACTER SET utf8 COLLATE utf8_general_ci");
        mysqli_query($link, "SET NAMES 'utf8'"); 
        mysqli_query($link, "SET CHARACTER SET 'utf8'"); 
        mysqli_query($link, "SET SESSION collation_connection = 'utf8_general_ci'");