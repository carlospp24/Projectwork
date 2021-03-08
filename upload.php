<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
    <style>
 body
 {
     background-image: url(https://cdn.wallpapersafari.com/42/46/QkodTt.jpg)
 }
 h1{
     color: white;
     text-align: center;
     padding-top:15%;
 }
    .test{
        text-align: center;
        color: #ffffff;
    }
    .test input[type=submit]{
        font-size: 17px;
        background-color:#808080;
        color:#ffffff;
        font-style: bold;
        border-radius:12px;
        padding: 2px 20px;
        transition-duration: 0.4s;
    }

    .test input[type=submit]:hover {
     background-color: #ffffff;
     color: black;
   }


    </style>
</head>
<body>
 <h1>Here you can submit your covid test to see if you can book using our website</h1>

 <div class="test">
<form method="post" enctype="multipart/form-data">
    
    <input type="text" name="title" placeholder="Title"><br><br>
File Upload<input type="File" name="file" ><br><br>
    <input type="submit" name="submit">
</div>
 
</form>
 
</body>
</html>
 
<?php 
$localhost = "localhost"; #localhost
$dbusername = "root"; #username of phpmyadmin
$dbpassword = "";  #password of phpmyadmin
$dbname = "fileup";  #database name
 
#connection string
$conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
 
if (isset($_POST["submit"]))
 {
     #retrieve file title
        $title = $_POST["title"];
     
    #file name with a random number so that similar dont get replaced
     $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
 
    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];
   
     #upload directory path
$uploads_dir = 'C:\Users\light\Desktop';
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
 
    #sql query to insert into database
    $sql = "INSERT into fileup(title,file) VALUES('$title','$pname')";
 
    if(mysqli_query($conn,$sql)){
 
    echo "File Sucessfully uploaded";
    }
    else{
        echo "Error";
    }
}
 
 
?>