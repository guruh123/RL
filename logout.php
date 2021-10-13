<?php
session_start();
 
$_SESSION = array();
 
session_destroy();
 
header("location: login.php");
exit;
if($num == 0) { 
    if(($password == $cpassword) && $exists==false) { 

        $hash = password_hash($password,  
                            PASSWORD_DEFAULT); 
            
        // Password Hashing is used here.  
        $sql = "INSERT INTO `users` ( `username`,  
            `password`, `date`) VALUES ('$username',  
            '$hash', current_timestamp())"; 

        $result = mysqli_query($conn, $sql); 

        if ($result) { 
            $showAlert = true;  
        } 
    }  
    else {  
        $showError = "Passwords do not match";  
    }       
}// end if  

if($num>0)  
{ 
  $exists="Username not available";  
}  
//end if 
?>