<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SmartDB
 *
 * @author Олег
 */
class SmartDB {
    
    public 
            function connect ($name, $user, $pass) {
        $server = $name;
        $db_pass = $pass;
        $db_user = $user;
        mysql_connect($server, $db_user, $db_pass);
        mysql_select_db("SmartHome");
        }
            function disconnect(){
                mysql_close();
            }
        
            function import($path){
                mysql_query(file_get_contents($path));
            }
    }
            
            
        
                

