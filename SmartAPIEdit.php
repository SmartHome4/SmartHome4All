<?php       include 'SmartAPI.php';       include 'conf.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SmartAPIEdit
 *
 * @author Олег
 */
class SmartAPIEdit extends SmartAPI {
    function insert($name, $numargs, $code){
        mysql_query("INSERT INTO API ('func_name', 'numargs', 'code') VALUES (".$name.", ".$numargs.", ".$code.")");
    }
}
