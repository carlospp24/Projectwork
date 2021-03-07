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
$sql="insert into informationmexico (Hotel, name, lname, email,number,country,passport,start,end,adults,children)
values('$hotel', '$name', '$lname', '$email','$number', '$country', '$passport', '$start', '$end', '$adults', '$children')";
$error = NULL;

if (empty($hotel)||empty($name)||empty($lname)||empty($email)||empty($number)||empty($country)||empty($passport)||empty($start)||empty($end)||empty($adults)){
    $sql="DELETE FROM information WHERE information IS NULL OR information = ''";
}


if (empty($hotel)||empty($name)||empty($lname)||empty($email)||empty($number)||empty($country)||empty($passport)||empty($start)||empty($end)||empty($adults)){
    include 'reservenowmexico.php';
    
}






if($conn->query($sql) === TRUE) {
    include 'thankyou.php';
    
}
else
{
    echo "ERROR: " .$sql. "<br>" . $conn->error;
}



















$conn->close();

?>