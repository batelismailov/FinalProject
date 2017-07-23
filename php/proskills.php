<?php
class Skill {
    public $skillname = "";
    public $skillvalue  = "";
}

require_once('db.php');
$data=array();
if (isset($_GET) && !empty($_GET)){
		$query = sprintf("select * from proskills where userid in (select id from users where name='%s');",$_GET['user']);
		$selectResult = $mysqli->query($query);
		if ($selectResult->num_rows) {
				while ($row = $selectResult->fetch_assoc()) {
						$ar=new Skill;
						$ar->skillname=$row['skillname'];
						$ar->skillvalue=$row['skillvalue'];
						
						array_push($data,$ar);
					
					 
					 
					
				}
		}
}

   header('Content-Type: application/json');
   echo json_encode($data);
 

   

?>
