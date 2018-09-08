<?php 
 session_start();

 if(isset($_POST['updateProfile'])){
    include_once('dbh-inic.php');
    $updateUsername = $_POST['updateUsername'];
    $updateSurname  = $_POST['updateSurname'];
    $updatePassword = $_POST['updatePassword'];
    $updateEmail = $_POST['updateEmail'];
    $updatePhone = $_POST['updatePhone'];
    $updateSecondphone = $_POST['updateSecondphone'];
    $users  = "SELECT * FROM owners where id='".$_SESSION['ownerID']."'";
    $users_result  = mysqli_query($conn,$users);
    if($row= mysqli_fetch_assoc($users_result) ){
      
   if($updateUsername== $row['ownerName'] || $updateSurname== $row['ownerSurname'] || 
    $updatePassword==$row['ownerPassword'] || $updateEmail==$row['ownerEmail'] ||
     $updatePhone==$row['ownerPhone'] || $updateSecondphone == $row['ownerSecondphone'] ){
      header("location: ../profile.php?profile=Same_with_default_profile");
      exit();
     }else{
         $updateQuery = "UPDATE owners set ownerName='".$_POST['updateUsername']."',ownerSurname='".$_POST['updateSurname']."',
         ownerPassword='".$_POST['updatePassword']."',ownerEmail='".$_POST['updateEmail']."',ownerPhone='".$_POST['updatePhone']."',
         ownerSecondphone='".$_POST['updateSecondphone']."' where id ='".$_SESSION['ownerID']."' ";
        $updateResult=mysqli_query($conn , $updateQuery);
        if($updateResult == true){
            header("location: ../profile.php?profile=update-success");
            exit();
        }  else {
            header("location: ../profile.php?profile=update-unseccess.$conn->error");
            exit();
        }
      
     }
   }


 }


?>