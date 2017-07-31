<?php
session_start();

require_once 'includes/db.php';

$name = $_POST['name'];
$password = md5($_POST['password']);
$message['message'] = '';
$message['class'] = '';

if(empty($name) || empty($password)){
	header("location: login.php?message=preencha&class=error");
} else {
	$query="select * from user where name = '".$name."'";
	$mysqli->query("SET NAMES 'utf8'");
	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

	if($result->num_rows > 0) {
		if($row = $result->fetch_assoc()) {
			if($row['password'] == $password){
				$_SESSION['id'] = $row['id'];
	  			$_SESSION['name'] = $row['name'];
	  			header('location: index.php');	
			} else {
				header("location: login.php?message=invalidos&class=error");	
			}
		}
	} else {
		header("location: login.php?message=invalidos&class=error");	
	}	
} 

