<?php
$con = mysqli_connect('localhost' ,'root');

if($con){
    echo "Connection successful";
}else{
    echo "No connection";
}

mysqli_select_db($con , 'website_lannding');


$user = $_POST['user'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$comment = $_POST['comment'];

$query = "insert into userinfodata(user,email,contact,comment) values('$user' , '$email' ,'$contact' , '$comment')";

mysqli_query($con , $query);

header('location:index.php')



?>
