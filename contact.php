<?php
if(isset($_REQUEST['submit'])){

$ville = $_REQUEST['ville'];
$name = $_REQUEST['name'];
$numero = $_REQUEST['numero'];
$message = $_REQUEST['message'];



$connection = mysqli_connect("localhost","root","","cuisine"); 

$insert_query = "INSERT INTO cuisine SET ville='$ville' ,name='$name',numero='$numero',message='$message', date=NOW()";
$query = mysqli_query($connection , $insert_query);
}
header("location: index.html");

?>
