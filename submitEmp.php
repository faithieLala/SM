<?php
$db = mysql_connect ("solomonmaxngcom.globatmysql.com", "solomonmaxng", "Solomon815&") or die ("Database connection failed");
mysql_select_db("solomon_max", $db) or die ("Database Selection Failed");

if(isset($_POST['submit']) && $_REQUEST['page']=='employers'){
	
	$empName = @mysql_real_escape_string($_POST['empName']);
	$compName = @mysql_real_escape_string($_POST['compName']);
    $discipline = @mysql_real_escape_string($_POST['discipline']);
	$compAddress = @mysql_real_escape_string($_POST['compAddress']);
	$website = @mysql_real_escape_string($_POST['website']);
	$compEmail = @mysql_real_escape_string($_POST['compEmail']);
	$telephone = @mysql_real_escape_string($_POST['telephone']);
	$age = @mysql_real_escape_string($_POST['age']);
	$salary = @mysql_real_escape_string($_POST['salary']);
	$description = @mysql_real_escape_string($_POST['description']);
	$positions = @mysql_real_escape_string($_POST['positions']);

	}

	if(isset($_POST['send_message'])){
		$user_type = 'send_message';	
	}
		$sql = "insert into employers (empName, compName, discipline, compAddress, website, compEmail, telephone, age, salary, description, positions) values ('$empName','$compName', '$discipline', '$compAddress','$website','$compEmail','$telephone','$age','$salary', '$description', '$positions')";

	if(mysql_query($sql)){
		//send email
		$headers = "From: $empName <$compEmail>\r\n";
		$subject = "An Employer Just Registered";
		
		$originalmessage .= "Fullname: $compName\r\n";
		$originalmessage .= "Mobile: $telephone\r\n";
		$originalmessage .= "Email: $compEmail\r\n";
		$originalmessage .= "Positions: ".$_POST['positions']."\r\n";
		$originalmessage .= "Job description: $description\r\n";
		$to = "info@solomonmaxng.com";
		@mail($to, $subject, $originalmessage, $headers);

		@header("Location: success.php?type=".$user_type);
	}


echo ('THANKS, YOUR REGISTRATION WENT SUCCESSFULLY');

?>