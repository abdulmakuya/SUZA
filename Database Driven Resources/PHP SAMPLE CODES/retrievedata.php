<?php
//request a connection to the database using connect file
include('connect.php');

//select items from the table
$stmt="SELECT * FROM registered_companies"; 

//execute the sql query and check the results
$result=mysql_query($stmt);

if (mysql_num_rows($result) > 0)
{
//using a loop to fetch content from the table one by one
 while ($row = mysql_fetch_assoc($result))
    {
		echo $row['companyname']."#"; 
    }
}
else {
	echo "0";
}

?>
