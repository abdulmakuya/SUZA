<?php
//request a connection to the database using connect file
require_once('connect.php');

$company_name = $_REQUEST['company_name'];

//checks for empty fields
if (!$company_name)
  { 
 echo "1";
 exit();
  }

//retrieve data from the database
$sql = mysql_query("SELECT * FROM registered_companies where companyname='$company_name'");

while($row=mysql_fetch_array($sql))

{
		$field1=$row['companyname']; 
		$field2= $row['companyphone']; 
		$field3= $row['companyemail']; 
		$field4= $row['city']; 
		$field5= $row['category']; 
		
	   echo "$field1#$field2#$field3#$field4#$field5";
	   
}	


?>
