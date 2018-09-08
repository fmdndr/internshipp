<?php include_once('header.php');?>
<?php 

if(isset($_POST['search'])){ 
    include_once('dbh-inic.php');
    $zero = $_POST['0'];
    $one  = $_POST['1'];
    $two  = $_POST['2'];
    $three = $_POST['3'];
    $four = $_POST['4'];
    $five = $_POST['5'];
    $six  = $_POST['6'];
    $seven = $_POST['7'];
    $eight = $_POST['8'];
    $nine = $_POST['9'];
    $ten  = $_POSt['10'];
    $eleven = $_POST['11'];
    // I'm setting values if checkboxes checked equal to 1 if checkboxes aren't checked equal to 0
    if($zero == "on") $zero = 1 ; else $zero = 0;
    if($one  == "on") $one  = 1 ; else $one  = 0;
    if($two  == "on") $two  = 1 ; else $two = 0;
    if($three == "on") $three = 1; else $three = 0;
    if($four == "on") $four = 1 ; else $four = 0;
    if($five == "on")  $five = 1 ; else  $five = 0;
    if($six  == "on") $six = 1 ; else $six = 0;
    if($seven == "on") $seven = 1 ; else $seven = 0;
    if($eight == "on") $eight = 1 ; else $eight = 0;
    if($nine == "on") $nine = 1 ; else $nine = 0;
    if($ten == "on") $ten = 1 ; else $ten = 0;
    if($eleven  == "on") $eleven = 1 ; else $eleven = 0 ;
    $search_query = "SELECT * from rental as r left join owners as o  on r.owner_id=o.id
    where r.country='".$_POST['inputCountry']."' and  r.city='".$_POST['inputCity']."' and r.region='".$_POST['inputRegion']."'
    and  r.typeOfbuilding='".$_POST['buildingType']."' and r.surfacem2='".$_POST['placesm2']."' and r.numberOfbedRooms='".$_POST['numberOfbedrooms']."'and
    r.numberOfrestrooms='".$_POST['numberOfbigRestrooms']."' and r.numberOfsmallRestrooms='".$_POST['numberOfsmallRestrooms']."' and
    r.kindOfkitchen = '".$_POST['kindOfkitchen']."' and r.maxStay='".$_POST['maxStay']."' and r.parking='".$zero."'";
        $result = mysqli_query($conn , $search_query);
       // echo $search_query;
         while($row=mysqli_fetch_array($result)) {
          $stringMatch= ["Parking","Pool","Pets","Blankets","Tv","Fridge","Microvawe","Air Condition", "Wash Machine", 
          "Dryer", "Dish Washer" , "Wifi"]; 

?>
  <div class="container">
  <div class="row">
  <div class="col-md-10">
     <div class="card">
     <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="public/images/x.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="public/images/x.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="public/images/x.jpg" alt="Third slide">
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
  
  </div>
  </div>
<?php } } ?>

<?php include_once('footer.php');?>