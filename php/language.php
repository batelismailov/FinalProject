<?php
   class language 
   {
    public $languageName = "";
    public $languageValue  = "";
   }
   require_once('db.php');
   
   $language=[];   
   if (isset($_GET) && !empty($_GET))
   {
       
   $sql= vsprintf("SELECT * from language where userid in (select id from users where name='%s')",$_GET['user']);
   $result = $mysqli->query($sql);
   
       
   if ($result->num_rows > 0) 
   {
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
        $ar1=new language;
        $ar1->languageName=$row['languageName'];
		$ar1->languageValue=$row['languageValue'];
						
        array_push($language,$ar1);
    } 
  
     $mysqli->close();
   }
   }
  else
   {
    echo "0 results";
   }

   header('Content-Type: application/json');
   echo json_encode($language);
 

  
?>


