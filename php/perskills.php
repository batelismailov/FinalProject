<?php
   class Skill 
   {
    public $skillname = "";
    public $skillvalue  = "";
   }
   require_once('db.php');
   
   $perskills=[];   
   if (isset($_GET) && !empty($_GET))
   {
       
   $sql= vsprintf("SELECT * from perskills where userid in (select id from users where name='%s')",$_GET['user']);
   $result = $mysqli->query($sql);
   
       
   if ($result->num_rows > 0) 
   {
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
        $ar1=new Skill;
        $ar1->skillname=$row['skillname'];
		$ar1->skillvalue=$row['skillvalue'];
						
        array_push($perskills,$ar1);
    } 
  
     $mysqli->close();
   }
   }
  else
   {
    echo "0 results";
   }

   header('Content-Type: application/json');
   echo json_encode($perskills);
 

  
?>


