<?php
//request a connection to the database using connect file
require_once('connect.php');

//receive data from the application using the tags or keys 
$company_name = $_REQUEST['company_name'];
$company_email = $_REQUEST['company_email'];
$company_phone = $_REQUEST['company_phone'];
$company_city = $_REQUEST['company_city'];
$company_category = $_REQUEST['company_category'];


//inserts data into the database
$sql = "INSERT INTO registered_companies (companyname,companyemail,companyphone,city,category)
		VALUES 
		('$company_name','$company_email','$company_phone','$company_city','$company_category')";

//execute the sql query and check the results
$result = mysql_query($sql) or die(mysql_error());

	if($result)
		{
			echo "1";
		}
	else
		{
			echo "0";
		}
?>

