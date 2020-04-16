<?php 
if(isset($_POST['submit'])){
$name = $_POST['fullname'];
$subject = 'forssa';
$emailfrom = $_POST['email'];
$message = $_POST['message'];

$mailto = "ismailhmidani@yahoo.com"
$headers = "From:".$emailfrom;
$txt = "you have received an email from ".$name.".\n\n".$message;

mail($mailto,$subject,$txt,$headers);
header("location: index.html");


}




?>


