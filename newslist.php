

 
<?php include "connection.php";
 session_start();

if(isset($_POST['submit'])){
    $mails=mysqli_real_escape_string($conn,trim($_POST['email']));
 $dates=date("y-m-d-h:i:s:a");
  /* EMAIL VERIFICATION*/ 
  $sqla="SELECT * FROM `email_list`" ;
  $resulta= mysqli_query($conn,$sqla);
while($rowa=mysqli_fetch_array($resulta)){
$datasa=array();
$datasa=$rowa;
}

if (in_array($mails,$datasa) || in_array($mails,$datasa))
{session_destroy();
 if(include "register.php"){
    echo "<div class='errorbox'><div class='errors' > error :&nbsp<a href='register.php'>$useresemail </a>&nbsp exists and has an account</div></div>";

 }

}
else if (in_array($mails,$datasa) || in_array($useresemail,$datasa))
{echo "<div class='errorbox'><div class='errors'> error :&nbsp<a href='about.php'> $mails </a>&nbsp exists and has an account</div><div>";
     header("location:about.php");
}

    
    else{

   
        $sqlb="SELECT * FROM `email_list` ORDER BY `email`.`id` DESC";
        $resulltb=mysqli_query($conn,$sqlb);
        
 
         $sql="INSERT INTO `email_list` (`id`,`email`) VALUES ('','$mails');";
              $result=mysqli_query($conn,$sql);
              if($result){
        
                header("location:index.php");
 
              }
        
             
 
    }




}
