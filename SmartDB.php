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
    private 
            $db_name = "SmartHome";


    public 
            function connect ($name, $user, $pass) {
        $server = $name;
        $db_pass = $pass;
        $db_user = $user;
        mysqli_connect($server, $db_user, $db_pass, $this->db_name);
            
        }
            function disconnect(){
                mysqli_close();
            }
        
            function import($path){
                mysqli_query(file_get_contents($path));
            }
    }
            
            
        
                

