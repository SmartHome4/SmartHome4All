<?php     include_once '../SmartDB.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/** Description
 *  @author 'Oleg Fominsky'
 */

$path = "Instal_Tables.sql";

$sql = new SmartDB();
$sql->connect('localhost', 'root', '');
$sql->import($path);
