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
    case "control_button":{
        $id = $_GET['id'];
        if($id == 'load'){
            $sql = mysql_query("SELECT * FROM elements_events");
            while ($row = mysql_fetch_assoc($sql)) {
            $array[] = $row;   
            }
            echo json_encode($array);
        }
        else{
            
            $sql = mysql_query("SELECT * FROM elements_events WHERE element_id = '".$id."'");
            while( $row= mysql_fetch_assoc($sql)){
                $array[] = $row;
            if($array[0]['enable'] == 1){
                $array[0]['ongoing_class'] = $array[0]['false_class'];
                $array[0]['ongoing_value'] = $array[0]['off_value'];
                $array[0]['enable'] = 0;
               
            }
            else{
                $array[0]['ongoing_class'] = $array[0]['true_class'];
                $array[0]['ongoing_value'] = $array[0]['on_value'];
                $array[0]['enable'] = 1;
            }
            mysql_query("UPDATE elements_events SET ongoing_class = '".$array[0]['ongoing_class']."', ongoing_value = '".$array[0]['ongoing_value']."', enable = '".$array[0]['enable']."' WHERE element_id = '".$id."'");
            }
            echo json_encode($array);
        }
        
    }break;
    default  :{
        echo "Error";
    }
}
