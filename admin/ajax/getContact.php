<?php 
require_once '../includes/db.php'; // The mysql database connection script

$query="select id,name,email,phone,message from contact order by id desc";
$mysqli->query("SET NAMES 'utf8'");
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

$arr = array();
if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$arr[] = $row;	
	}
}

# JSON-encode the response
echo $json_response = json_encode($arr);
?>