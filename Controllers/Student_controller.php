<?php
require_once '../models/db_connect.php';
	$name = $error_name = $category = $error_category = $price = $error_price = $quantity = $error_quantity = $desc = $error_desc = $image = $error_image = "" ;

	$has_error = false ;

function addStudent($n , $p , $q , $d , $did){
    $query = "INSERT INTO students VALUES (0,'$n','$p','$q','$d','$did') ;" ;
    execute($query);
    header("Location: ../views/allstudents.php");
}
function getAllStudents(){
    $query = "select * from students";
    return get($query);
}
if (isset($_POST['addstudent']))
{

      addStudent($_POST['name'], $_POST['dob'] , $_POST['credit'] , $_POST['cgpa'] ,$_POST['dept']);

}


 ?>