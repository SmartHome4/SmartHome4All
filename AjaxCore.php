<?php include 'conf.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/** @author Oleg Fominsky
 *
 */

/**
 * @var $event int
 */
header('Content-Type: application/json; charset=utf8');
$event = filter_input(INPUT_GET, 'event');
switch ($event){
    case "secure_resp":{
        $id = $_GET['id'];
        if($id == 'load'){
            $sql = mysql_query("SELECT * FROM security");
            while ($row = mysql_fetch_assoc($sql)) {
            $array[] = $row;   
            }
            echo json_encode($array);
        }
        else{
            
            $sql = mysql_query("SELECT * FROM security WHERE id = '".$id."'");
            while( $row= mysql_fetch_assoc($sql)){
                $array[] = $row;
            if($array[0]['class'] === 'btn btn-xs btn-success'){
                $array[0]['class'] = 'btn btn-xs btn-warning';
                $array[0]['value'] = $array[0]['value_off'];
               
            }
            else{
                $array[0]['class'] = 'btn btn-xs btn-success';
                $array[0]['value'] = $array[0]['value_on'];
                
            }
            mysql_query("UPDATE security SET class = '".$array[0]['class']."', value = '".$array[0]['value']."' WHERE id = '".$id."'");
            }
            echo json_encode($array);
        }
        
    }break;
    default  :{
        echo "Error";
    }
}
