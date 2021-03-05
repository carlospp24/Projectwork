<?php include 'dbdest.php' ;
$hotel= $_POST['hotel'];
$name= $_POST['name'];
$lname= $_POST['lname'];
$email= $_POST['email'];
$number= $_POST['number'];
$country= $_POST['country'];
$passport= $_POST['passport'];
$start= $_POST['start'];
$end= $_POST['end'];
$adults= $_POST['adults'];
$children= $_POST['children'];
$sql="insert into information (Hotel, name, lname, email,number,country,passport,start,end,adults,children)
values('$hotel', '$name', '$lname', '$email','$number', '$country', '$passport', '$start', '$end', '$adults', '$children')";
$error = NULL;


if($conn->query($sql) === TRUE) {
    echo "Thank you for your feedback or question. We'll get back to you as soon as possible.";
    echo "<a href='http://localhost/Project/Projectwork/mainpage.php' class='top'>Home </a>";
}
else
{
    echo "ERROR: " .$sql. "<br>" . $conn->error;
}



















$conn->close();

?>