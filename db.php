<?php include "connection.php";
 session_start();

if(isset($_POST['register'])){
    $emailofusers=mysqli_real_escape_string($conn,trim($_POST['email']));
    $nameofusers=mysqli_real_escape_string($conn,trim($_POST['username']));
    $phone=mysqli_real_escape_string($conn,trim($_POST['phone']));
    $gender=mysqli_real_escape_string($conn,trim($_POST['gender']));
    $hall=mysqli_real_escape_string($conn,trim($_POST['hall']));
    $level=mysqli_real_escape_string($conn,trim($_POST['level']));
    $message=mysqli_real_escape_string($conn,trim($_POST['message']));
    $date=mysqli_real_escape_string($conn,trim($_POST['date']));
    // $passwords=mysqli_real_escape_string($conn,trim($_POST['password']));
    $_SESSION['user']=$nameofusers;
    $_SESSION['email']=$emailofusers;
    $UPN=uniqid(''.true);
 

 $dates=date("y-m-d-h:i:s:a");
 
  /* EMAIL VERIFICATION*/ 
   $sqlcheckn = "SELECT * FROM users WHERE `name` = '$nameofusers'";
  $sqlchecke = "SELECT * FROM users WHERE `email` = '$emailofusers'";

   $resultcheckname= mysqli_query($conn,$sqlcheckn);
  $resultcheckemail= mysqli_query($conn,$sqlchecke);
  if (mysqli_num_rows($resultcheckname)> 0) {
        session_destroy();
        if(include "register.php"){
           echo "<div class='errorbox'><div class='errors' ><i class='fa fa-info-circle'></i> &nbsp error :&nbsp<a href='register.php'>The user $nameofusers </a>&nbsp exists and has an account</div></div>";
       
        }
     } 
     else if (mysqli_num_rows($resultcheckemail)> 0) {
        session_destroy();
 if(include "register.php"){
    echo "<div class='errorbox'><div class='errors' ><i class='fa fa-info-circle'></i> &nbsp error :&nbsp<a href='register.php'>The email $emailofusers </a>&nbsp exists and has an account</div></div>";

 }
     } 
    else{
   

        // $UPHASH=password_hash($passwords,PASSWORD_DEFAULT);
        /* In order to verify hashed password when loging in
        ----$checkhashed=password_verify($UPMAIN,$UPHASH);---
        */
        //  $UU=mysqli_real_escape_string($conn,$UPHASH);
        if(session_destroy())
        {         session_start();
            $_SESSION['user']=$nameofusers;

        }
        else{
            false;
        }
        $mix =md5(time().$nameofusers);
        
        $sqlb="SELECT * FROM `users` ORDER BY `users`.`id` DESC";
        $resulltb=mysqli_query($conn,$sqlb);
        
 
         $sql="INSERT INTO `users`(`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `phone`, `gender`, `hall`, `level`, `message`) 
           VALUES 
           ('','$nameofusers','$emailofusers','$date','unset','$mix','$dates','$dates','$phone','$gender','$hall','$level','$message');";
              $result=mysqli_query($conn,$sql);
              if($result){
        
                if(header("location:index.php?uid=$UPN")){
                    exti();

                }

 
              }
        
             
        // <insettion/>

    }




}

else{
    if(isset($_POST['submits']))
{   
    // sign in sessions

$asa=mysqli_real_escape_string($conn,trim($_POST['users']));
$bab=mysqli_real_escape_string($conn,trim($_POST['pwds']));




$msql="SELECT * FROM `users` WHERE `name` LIKE '$asa'";
$mresult=mysqli_query($conn,$msql);
if(mysqli_num_rows($mresult) > 0)
while($mrow=mysqli_fetch_array($mresult)){
$datas=array();
$datas=$mrow;
$uss=$mrow['name'];
$pass=$mrow['password'];
$mixer=$mrow['remember_token'];

$checkhashed=password_verify($bab,$pass);

if ($checkhashed !=1){
    echo "<h1 class='errors'><a  href='signin.php'>$asa </a>&nbsp has a wrong username or password</h1>";
    include "signin.php";
}

else{
  unset( $_SESSION['user']);
  unset( $_SESSION['email']);
    header ("location:index.php?uid=$mixer");
    $_SESSION['userin']=$asa;
    $_SESSION['passin']=$bab;}
}
else{
    echo "<h1  class='errors'>This user does not exist</h1>&nbsp"; include "signin.php";
}
// sign in sessions
}
else{
    header("location:register.php");
}
} 