<html>

<head>
<style>
#users {
	margin: auto;
	margin-top:1%;
}
#users td {
	padding:8px;
	
}
</style>

<link rel="stylesheet" href="css/normalize.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		
</head>


<body>

<?php
$start="12:17";
//initiate connection
require_once('db.php');

//sql query
$sql="SELECT * from users";

$result=$mysqli->query($sql);

if($result->num_rows>0)
{
	echo "<table border=\"1\" id=\"users\">";
	echo "<tr><td>First name</td><td>Last name</td><td>Email</td><td>Delete</td><td>Edit</td></tr>";
	while($row=$result->fetch_assoc())
	{
		echo "<tr>	<td><a href=\"../#".$row['name']."\"> ".$row['firstname']."</a></td>	<td>".$row['lastname']."</td>		<td>".$row['email']."</td>		<td><a href=\"/delete.php?user=".$row['name']." \"><button>Delete</button></a></td>		<td><a href=\"/Edit.php?user=".$row['name']." \"><button>Edit</button></a></td>	</tr>";
	}
	echo "</table>";
	
}
else
{
	echo "users not found!";
}
$done="12:31";
?>

</body>
<html>