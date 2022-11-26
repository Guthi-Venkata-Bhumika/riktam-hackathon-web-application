<?php
 $fullname =$_POST["fullname"];
 $username =$_POST["username"];
 $email =$_POST["email"];
 $password =$_POST["password"];
 //database connection
 $connection = new mysqli("localhost","root","","RegistrationDetails");
 if($connection->connect_error){
    die("Connection Failed : ".$connection->connect_error);
}
else{
    $stmt = $connection->prepare("insert into userdetails(fullname,username,email,password) 
           values(?,?,?,?)");
    $stmt->bind_param("ssss",$fullname,$username,$email,$password);
    $stmt->execute();
    echo "Registration Successfull...";
    $stmt->close();
    $connection->close();
}


?>