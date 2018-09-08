<?php 
session_start();
if (isset($_POST['submit'])){
  include 'dbh-inic.php';
  $uname =$_POST['inputUsername'];
  $usurname= $_POST['inputSurname'];
  $upassword =$_POST['inputPassword'];
  $uEmai = $_POST['inputEmail'];
  $uPhone = $_POST['inputPhone'];
  $uSecondphone = $_POST['inputSecondphone'];  
   if(empty($uname) || empty($upassword)){
      header("location: ../login.php?login=error_please_fill_every_section");
   }else{
        $sql = "SELECT * FROM owners where ownerName='$uname' and ownerPassword='$upassword'";
        $result = mysqli_query($conn , $sql);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck < 1){
             header("location: ../login.php?login=there is no one like that name please sign up ");
          exit();
        }else{
            if($row = mysqli_fetch_assoc($result)){
                if($upassword == false) {
                    header("location ../login.php?login=password wrong");
                    exit();
                }elseif($upassword==true){
                    $_SESSION['ownerID']=$row['id'];
                    $_SESSION['inputUsername']=$row['ownerName'];   
                    $_SESSION['inputPassword']=$row['ownerPassword'];
                    $_SESSION['inputSurname']=$row['ownerSurname'];
                    $_SESSION['inputEmail']=$row['ownerEmail'];
                    $_SESSION['inputPhone']=$row['ownerPhone'];
                    $_SESSION['inputSecondphone']=$row['ownerSecondphone'];
                    header("location: ../index.php?login=success");
                    exit();
                }
            }
        }
   }
 }else{
     header("location: ../login.php?login=error");
     exit();
 }





 


?>