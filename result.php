<?php include_once('header.php');?>
<?php 

if(isset($_POST['search'])){ 
    include_once('dbh-inic.php');
    session_start();
    $search_query = "SELECT * from rental as r left join owners as o on r.owner_id=o.id
    where r.country='".$_POST['inputCountry']."' and  r.city='".$_POST['inputCity']."' and r.region='".$_POST['inputRegion']."'
    and  r.typeOfbuilding='".$_POST['buildingType']."' and r.surfacem2='".$_POST['placesm2']."' and r.numberOfbedRooms='".$_POST['numberOfbedrooms']."'and
    r.numberOfrestrooms='".$_POST['numberOfbigRestrooms']."' and r.numberOfsmallRestrooms='".$_POST['numberOfsmallRestrooms']."' and
    r.kindOfkitchen = '".$_POST['kindOfkitchen']."' and r.maxStay='".$_POST['maxStay']."' and r.parking='".$_POST['0']."'
    and r.poool='".$_POST['1']."' and r.pets='".$_POST['2']."' and r.blankets='".$_POST['3']."' and r.tv='".$_POST['4']."'and r.fridge='".$_POST['5']."'
    and r.microvawe='".$_POST['6']."' and r.aircondition='".$_POST['7']."' and r.washmachine='".$_POST['8']."'and
    r.dryer='".$_POST['9']."' and r.dishwasher='".$_POST['10']."' and r.wifi='".$_POST['11']."'";
        $result = mysqli_query($conn , $search_query);
       // echo $search_query;
         while($row=mysqli_fetch_array($result)) {
       

?>
  
  <div class="container-fluid">
               <div class="row justify-content-center">
                 <div class="col-md-9">
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
                       <div class="card-body">
                      <h5 class="card-title"><?php echo $row['country']; ?></h5>
                      <p class="card-text"> Wifi : <?php echo $row['wifi']; ?></p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>           
                 </div>
          </div>
        </div>
      
    </div>
<?php 
        }
} 

?>

<?php include_once('footer.php');?>