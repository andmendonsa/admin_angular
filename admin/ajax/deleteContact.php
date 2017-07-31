<?php 
require_once '../includes/db.php'; // The mysql database connection script

if(isset($_GET['contactID'])){
	$contactID = $_GET['contactID'];

	$query="delete from contact where id='$contactID'";
	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

	$result = $mysqli->affected_rows;

	echo $json_response = json_encode($result);
}
?>