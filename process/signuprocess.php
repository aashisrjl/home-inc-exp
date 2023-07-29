<?php
include('../db/connect.php');

if($_SERVER['REQUEST_METHOD']=='POST'){
if(isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['passwordC']))
{
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $pass2 = $_POST['passwordC'];

    if($email!=""){
        if($name != ""){
            if($password == $pass2){
                if(strlen($password)>=8){
                    $enc= md5($password);

                    $query= "INSERT INTO users (email,fullname,password) VALUES('$email','$name','$enc')";

                        if(mysqli_query($conn,$query))
                        {
                            $msg="Login Success";
                           
                        }
                        
                }else{
                    $errmsg= "password must be 8 char";
                }
            }else{
                $errmsg= "password and confiramtion password must be same";
            }

        }else{
            $errmsg= "name can't be empty";
        }

    }else{
        $errmsg="email cannot be empty!";
    }
}else{
    $errmsg ="All fields are required";
}
}else{
    $errmsg= "request method does not support";
}
if($msg !="")
{
    header('Location:../forms/login.php?msg='.$msg);
    
}else{

header('Location:../forms/signup.php?err='.$errmsg);
} 
 ?>