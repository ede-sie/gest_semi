<?php 
/*require __DIR__ .  ''./controladores/TaskController.php"; */
require __DIR__ . '/resources/controladores/TaskController.php';
/*require __DIR__ . './controladores/TasksController.php'; */

$id = $_GET['id']; 
deleteTask($id); 
 
//header("Location: index.php"); 
exit; 
?> 