<?php
   class Hobbies 
   {
    public $photo = "";
    public $topic  = "";
   }
   require_once('db.php');
   
   $Hobbies=[];   
   if (isset($_GET) && !empty($_GET))
   {
       
   $sql= vsprintf("SELECT * from hobbies where userid in (select id from users where name='%s')",$_GET['user']);
   $result = $mysqli->query($sql);
   
       
   if ($result->num_rows > 0) 
   {
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
        $ar1=new Hobbies;
        $ar1->photo=$row['photo'];
		$ar1->topic=$row['topic'];
						
        array_push($Hobbies,$ar1);
    } 
  
     $mysqli->close();
   }
   }
  else
   {
    echo "0 results";
   }

   header('Content-Type: application/json');
   echo json_encode($Hobbies);
 

  
?>


