<?php include 'ta_db.php' ;
$fname= $_POST['fname'];
$lname= $_POST['lname'];
$phone= $_POST['phone'];
$street= $_POST['street'];
$city= $_POST['city'];
$country= $_POST['country'];
$zip= $_POST['zip'];
$gender= $_POST['gender'];
$passp= $_POST['passp'];
$age= $_POST['age'];
$bday= $_POST['bday'];
$dest= $_POST['dest'];
$date= $_POST['date'];
$uname= $_POST['uname'];
$email= $_POST['email'];
$timestamp = date("Y-m-d H:i:s");
$sql="insert into table_1 (fname, lname, phone, street, city, country, zip, gender, passp, age, bday, dest, date, uname, email, timestamp)
values('$fname', '$lname', '$city','$phone', '$street', '$city', '$country', '$zip', '$gender', '$passp', '$age', '$bday', '$dest', '$date', '$uname', '$email', '$timestamp')";
$error = NULL;


if($conn->query($sql) === TRUE) {
    echo "New record added";
    echo "<a href='update.php' class='top'>Home </a>";
}
else
{
    echo "ERROR: " .$sql. "<br>" . $conn->error;
}



















$conn->close();

?>