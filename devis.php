<?php
if(isset($_REQUEST['submit'])){


$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$numero = $_REQUEST['numero'];
$sujet = $_REQUEST['sujet'];
$date1 = $_REQUEST['date1'];
$presentation = $_REQUEST['presentation'];



$connection = mysqli_connect("localhost","root","","cuisine"); 

$insert_query = "INSERT INTO devis SET email='$email' ,name='$name',numero='$numero',sujet='$sujet',date1='$date1',presentation='$presentation', date=NOW()";
$query = mysqli_query($connection , $insert_query);
}
header("location: index.html");

?>
