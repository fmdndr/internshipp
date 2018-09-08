<?php include('header.php'); 
 session_start();
?>
<?php
  
    if(isset($_SESSION['ownerID'])){;
   
      
    ?>
    <div class="container">
        <form action="includes/profile-update.php" method="POST">
        <div class="row justify-content-center">
         <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                     <div class="form-group">
                     <label for="updateUsername">Username</label>   
                     <input type="text" class="form-control" name="updateUsername" id="updateUsername" value="<?php echo $_SESSION['inputUsername']?>">
                     <label for="updateSurname">Surname</label>
                     <input type="text" class="form-control" name="updateSurname" id="updateSurname"  value="<?php echo $_SESSION['inputSurname'];?>">
                     <label for="updataPassword">Password</label>
                     <input type="password" class="form-control" name="updatePassword" id="updatePassword" value="<?php echo $_SESSION['inputPassword']?>">
                     <label for="updateEmail">Email</label>
                     <input type="email" class="form-control" name="updateEmail"  id="updateEmail" value="<?php echo $_SESSION['inputEmail'];?>">
                     <label for="updatePhone">Phone</label>
                     <input type="text" class="form-control" name="updatePhone"  id="updatePhone" value="<?php echo $_SESSION['inputPhone'];?>">
                     <label for="updateSecondphone">Second Phone</label>
                     <input type="text" class="form-control" name="updateSecondphone"  id="updateSecondphone" value="<?php echo $_SESSION['inputSecondphone'];?>">
                     <p  onclick="visibility();">Do you Want to Update Your Profile click here?</p>
                     <button type="submit" id="updateB" name="updateProfile"class="btn btn-outline-danger btn-block">Update</button>
                     </div>
                </div>
              </div>
            </div>
        </div>
     <?php }   ?>
    </form>
    </div>

<script>
var f = document.getElementById('updateUsername').readOnly = true;
var equal = document.getElementById('updateSurname').readOnly = true;
var m = document.getElementById('updateEmail').readOnly = true;
var x =document.getElementById('updatePhone').readOnly  = true;
var plus = document.getElementById('updateSecondphone').readOnly = true; 
var d = document.getElementById('updatePassword').readOnly = true; 
function visibility(){
  if(f==true && equal==true  && m==true && x==true && plus==true){
      f=document.getElementById('updateUsername').readOnly = false;
      equal=document.getElementById('updateSurname').readOnly = false;
      m=document.getElementById('updateEmail').readOnly = false;
      x=document.getElementById('updatePhone').readOnly = false;
      plus=document.getElementById('updateSecondphone').readOnly = false;
      d = document.getElementById('updatePassword').readOnly = false; 
      
 }  
}

</script>


<?php include('footer.php'); ?>

