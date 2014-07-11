<?php include("SmartDB.php");

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SmartAPI
 *
 * @author Олег
 */
class SmartAPI extends SmartDB {
            
    public
        function Get_Api (){
    $result = mysql_query("SELECT * FROM api_list");
    while($row = mysql_fetch_array($result)){
        echo $row;
    }
        
        }
    
}
