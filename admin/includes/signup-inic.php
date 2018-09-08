<?php 
     

if(isset($_POST['submit'])){
   include 'dbh-inic.php';
    $username=$_POST['inputUsername'];
    $surname=$_POST['inputSurname'];
    $password=$_POST['inputPassword'];
    $email=$_POST['inputEmail'];
    $phone=$_POST['inputPhone'];
    $secondPhone=$_POST['inputSecondphone'];
    if (!preg_match("/^[a-zA-z]*$/" , $username)) {
        header("location: ../signup.php?signup=invalid");
        exit();

        # code...
    }else{
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            header("location: ../signup.php?signup=invalidEmail");
            exit();
        }else{
            $sql= "SELECT * FROM owners where ownerName='$username'";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck >0){
                header("location: ../signup.php?signup=usertaken");
                exit();

            }else{
                //pasword hashing 
                $hashedPasword = password_hash($password , PASSWORD_DEFAULT);
               // inserting data on here 

                $sql3  = "INSERT INTO  owners(ownerName,ownerSurname,ownerPassword,ownerEmail,ownerPhone,ownerSecondphone)
                VAlUES('$username','$surname','$password','$email','$phone','$secondPhone')";
                $result = mysqli_query($conn, $sql3);
                 if($result== TRUE){
                   header("location: ../signup.php?signup=success");
                 }else{
                   header("location: ../signup.php?signup=error");
                 }
            }
        }
    }

   }

/*  $sql = "INSERT INTO  owners(ownerName, ownerSurname, ownerPassword, ownerEmail, ownerPhone , ownerSeconphone)
    VAlUES ('".$_POST['inputUsername']."','".$_POST['inputSurname']."', '".$_POST['inputPassword']."', '".$_POST['inputEmail']."',
   '".$_POST['inputPhone']."', '".$_POST['inputSecondphone']."')";
   if($conn->query($sql)==TRUE){
 echo "<script type = 'text/javascript'> alert('You are Registered please go Login )') </script>";*/

?>