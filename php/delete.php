<?php
//initiate conection
require_once('db.php');
//get user info (user=?)
if (isset($_GET["user"]) && !empty($_GET["user"])){
	//*missing* please add missing tables
	//delete user from all tables
	$sql=vsprintf("DELETE  FROM users WHERE name='%s'",$_GET['user']);
	var_dump($sql);
	if($mysqli->query($sql) === TRUE)
	{
		echo "Record deleted successfully";
	}
	else
	{
		echo "ERROR : occured";
		
	}
}

?>	