<?php

echo "<!DOCTYPE html>";
echo  "<html>";
echo   "<meta HTTP-EQUIV='REFRESH' content='5; url=index.html'>";
echo    "<head>";
echo       "<title>Donation Form</title>";
 echo       "<style>";
 echo         "body {";
   echo     "background-image: url('https://il2.picdn.net/shutterstock/videos/1485730/thumb/1.jpg');";
   echo    "background-size: 1580px 900px;";
   echo     "background-repeat: no-repeat;";
   echo     "color:#cccccc;}";
      
 echo   "</style>";
  echo "</head>";
 echo "<body>";
    


if($_SERVER['REQUEST_METHOD'] ==  'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    
}

$con = new mysqli("localhost","root","","form");
if($con){
    //echo "connection successful";
    $sql = "Insert into data(name,email,gender,mobile,password) values('$name','$email','$gender','$mobile','$password')" ;
    $result = mysqli_query($con,$sql);

    if($result){
        echo "Data inserted successfully";
		echo "You will be redirected to login page in next 5 seconds";
    }
    else{
        die(mysqli_error($con));
    }

}
else{
    die("Connection failed: ".mysqli_connect_error());
}

?>