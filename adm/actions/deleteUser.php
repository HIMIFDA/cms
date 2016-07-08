<?php
include '../../config/connection.php';

$id = mysqli_real_escape_string($connect, $_GET['id']);

$qDeleteUsers = "DELETE FROM users WHERE id = '$id'";
$queryDeleteUsers = mysqli_query($connect, $qDeleteUsers)or die(mysqli_error($connect));
//if success
if($queryDeleteUsers){
 	header('location: ../index.php?component=management-user&&message=delete-success');
}	

?>