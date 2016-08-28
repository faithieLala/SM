<?php
$db = mysql_connect ("solomonmaxngcom.globatmysql.com", "solomonmaxng", "Solomon815&");
if(!$db)
{ die ('Database connection failed:'.mysql_error());
}
mysql_select_db("solomon_max", $db);

$sql = "insert into worker_details (email, password1, fname, address,mobile,sex,dob,town,lga,state,country, key_skills,uploadedfile,exp_year, func_area, pri_name, pri_grad, pri_qual, sec_name, sec_grad, sec_qual, uni_name, uni_degree, uni_grad, uni_qual, ms_univ, ms_degree, ms_completion, pg_univ, pg_degree, pg_completion, type) values ('$_POST['$email', '$password', '$fname', '$address','$mobile','$sex','$dob','$town','$lga','$state','$country','$key_skills','uploadedfile','$exp_year', '$func_area', '$pri_name', '$pri_grad', '$pri_qual', '$sec_name', '$sec_grad', '$sec_qual', '$uni_name', '$uni_degree', '$uni_grad', '$uni_qual', '$ms_univ', '$ms_degree', '$ms_completion', '$pg_univ', '$pg_degree', '$pg_completion', '$type'])";
if(!mysql_query($sql, $db)){
die('Error:'.mysql_error());
}
echo "Record Added";
mysql_close($sql)	
?>