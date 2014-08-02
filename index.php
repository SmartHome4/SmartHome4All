<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php   include 'SmartAPI.php';
        $smdb = new SmartAPI();
        $smdb->connect("localhost", "root", "");
        $smdb->Show_Api();
        ?>
        <form action="index.php" method="POST">
            <input type="text" name = "test">
            <button>Тест</button>
        </form>
        <?php
        $test = $_POST['test'];
        if($test!=''){
        $smdb->Execute_Func('test_api',$test);}
        $smdb->disconnect();
        ?>
    </body>
</html>
