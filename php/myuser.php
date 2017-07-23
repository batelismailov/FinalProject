<?php
require_once('db.php');
$data=[];
if (isset($_GET) && !empty($_GET)){
		$query = sprintf("select * from users where name = '%s'",$_GET['user']);
		$selectResult = $mysqli->query($query);
		
		if ($selectResult->num_rows) {
				while ($row = $selectResult->fetch_assoc()) {
					
					 $data = [
										 "basicInfo" => [
										 "firstName" => $row['firstname'],
										 "lastName"	=> $row['lastname'],
										 "title"	=> $row['title']
									   ],
							"name" => $row['name'],
							"email" => $row['email'],
							"phone" => $row['phone'],
							"area" => $row['area'],
							"about" => $row['about']
						   ];
					
				}
		}
}

   header('Content-Type: application/json');
   echo json_encode($data);
 

   

?>