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
        function Show_Api (){
    $result = mysql_query("SELECT * FROM api_list");
            echo '<table width = 100% align = "center" border = 3 id = "API_table"> <caption>Таблица API функций</caption><tr><th>ID</th> <th>Имя функции</th> <th>Параметры функции</th> <th>Описание</th></tr>';
    while($row = mysql_fetch_array($result)){
            echo '<tr><td>'.$row["id"].'</td> <td>'.$row["name"].'</td> <td>'.$row['params'].'</td><td>'.$row['description'].'</td></tr>';}
            echo '</table>';
    }
        function Execute_Func(){
             $argsnum = func_num_args();
            $args_list = func_get_args();
            $args='';
            for($i=1; $i<$argsnum; $i++){
                $args=$args.$args_list[$i].', ';
           }
            $func_name = func_get_arg('0');
            $sql = mysql_query("SELECT * FROM API WHERE func_name= '".$func_name."'");
            $row = mysql_fetch_array($sql);
            if ($row['numargs'] == $argsnum-1){
                $new_function = create_function($row['params'], ''.$row["function"].'');
                echo $new_function($args);
             
            }
            else {echo 'Ошибка вызова функции API';}
        
}

            }