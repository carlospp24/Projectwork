<?php include 'db.php' ;
$name= $_POST['name'];
$email= $_POST['email'];
$country= $_POST['country'];
$question_or_feedback= $_POST['question_or_feedback'];
$sql="insert into contactinformation (name, email, country, question_or_feedback)
values('$name', '$email', '$country', '$question_or_feedback')";
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