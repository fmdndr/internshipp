<?php include('header.php');  session_start();?>
 <div class="container">
 <?php 
    if (isset($_POST['search'])) {
      include_once('includes/dbh-inic.php');
     $myrental="SELECT * FROM rental as r where r.owner_id ='".$_SESSION['ownerID']."'";
     $result_query=mysqli_query($conn, $myrental);
     while ($row=mysqli_fetch_array($result_query)) {
$stringMatch= ["Parking","Pool","Pets","Blankets","Tv","Fridge","Microvawe","Air Condition", "Wash Machine", 
              "Dryer", "Dish Washer" , "Wifi"]; 
    ?>
  <div class="row">
  <div class="col-md-6">
   <h2>Your Rentals <?php echo $row['id']?> </h2>
     <div class="card">
       <div class="card-body">
         <p>Country : <?php echo $row['country']?></p>
         <p>City : <?php echo $row['city']?></p>
         <p>Region : <?php echo $row['region']?></p>
         <p>Building : <?php echo $row['typeOfbuilding']?></p>
         <p>Floor : <?php echo $row['typeOffloor']?></p>
         <p>Surface M2 : <?php echo $row['surfacem2']?></p>
         <p>Bed Rooms : <?php echo $row['numberOfbedRooms']?></p>
         <p>Big Restrooms : <?php echo $row['numberOfrestrooms']?></p>
         <p>Small Restrooms : <?php echo $row['numberOfsmallRestrooms']?></p>
         <p>Kitchen Type : <?php echo $row['kindOfkitchen'] ?> </p>
         <p>Max people Can stay: <?php echo $row['maxStay']?></p>
         <p><?php if($row['parking']=="1") echo $stringMatch[0];else echo ""; ?></p>
         <p><?php if($row['poool']== "1") echo $stringMatch[1]; else echo "";?></p>
         <p><?php if($row['pets']== "1") echo $stringMatch[2];else echo""; ?></p>
         <p><?php if($row['blankets']== "1") echo $stringMatch[3]; else echo "";?></p>
         <p><?php if( $row['tv']== "1") echo $stringMatch[4]; else echo ""; ?></p>
         <p><?php if($row['fridge']== "1")  echo $stringMatch[5]; else echo ""; ?></p>
         <p><?php if($row['microvawe']=="1") echo $stringMatch[6];else echo ""; ?></p>
         <p><?php if($row['aircondition']=="1") echo $stringMatch[7];else echo "";?></p>
         <p><?php if( $row['washmachine']=="1") echo $stringMatch[8];else echo ""; ?></p>
         <p><?php if($row['dryer']=="1") echo $stringMatch[9];else echo ""; ?></p>
         <p><?php if( $row['dishwasher']=="1") echo $stringMatch[10]; echo ""; ?></p>
         <p><?php if($row['wifi']=="1") echo $stringMatch[11]; echo ""; ?></p>
       </div>
     </div>
   </div>
   <div class="col-md-6">
   <h2>Your rental Pictures</h2>
   <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="../public/images/x.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../public/images/x.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../public/images/x.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
   </div>
  </div>
  <?php } } ?>
 </div>







<?php include('footer.php'); ?>