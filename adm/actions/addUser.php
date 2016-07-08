<?php
include '../../config/connection.php';

$full_name = mysqli_real_escape_string($connect, $_POST['full_name']);
$username = mysqli_real_escape_string($connect, $_POST['username']);
$email = mysqli_real_escape_string($connect, $_POST['email']);
$password = mysqli_real_escape_string($connect, $_POST['password']);
$passwordEncrypt = md5($password);
$level = mysqli_real_escape_string($connect, $_POST['id_level']);
$status = mysqli_real_escape_string($connect, $_POST['id_status']);
$year = mysqli_real_escape_string($connect, $_POST['year']);
$quote = mysqli_real_escape_string($connect, $_POST['quote']);
$created_at = date('Y-m-d H:i:s');

if (empty($_FILES['avatar'])) {
	$avatar = 'default.jpg';
}




$qAddUsers = "INSERT INTO users(full_name, username, email, password, level, id_status, year, quote, avatar, created_at)values('$full_name', '$username', '$email', '$passwordEncrypt', $level, $status, '$year', '$quote', '$avatar', '$created_at')";
$queryAddUsers = mysqli_query($connect, $qAddUsers)or die(mysqli_error($connect));
//if success
if($queryAddUsers){
 	header('location: ../index.php?component=management-user&&message=add-success');
}	

?>