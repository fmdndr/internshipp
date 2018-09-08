<?php include_once('header.php');  ?>
<div class="container">
    <form action="result.php" method="POST">
    <div class="row" align="center">
            <div class="col-md-12">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                      <h1 class="display-4 startRow">Welcome </h1>
                      <p class="lead start" style="margin-top:20px;">Welcome to find for peacfull and more comfortable places .</p>
                    </div>
                  </div>
            </div>
        </div>
        <div class="row location-row" align="center">
            <div class="col-md-12">
                <h2 class="location">Choose The Location </h2>
            </div>
        </div>
<div class="row">
     <div class="col-md-4">
     <div class="form-group">
       <label for="inputCountries">Please Enter a Country</label>
       <input type="text" class="form-control" name="inputCountry" required>
     </div>
     </div>

     <div class="col-md-4">
     <div class="form-group">
       <label for="inputCity">Please Enter a City</label>
       <input type="text" class="form-control" name="inputCity" required>
     </div>
     </div>
     <div class="col-md-4">
     <div class="form-group">
       <label for="inputRegion">Please Enter a Region</label>
       <input type="text" class="form-control" name="inputRegion">
       </div>
     </div>
 </div>
 
   <h2 align="center" class="buildingSpesific">Building Spesification</h2>
            <div class="row ">

                <div class="col-md-4">
                    <div class="form-group">
                        <h2 class="typeOfbuilding">Type Of Building</h2>
                        <label for="buildingType"></label>
                        <input type="text" class="form-control" placeholder="Apartment,flat,dormitory" name="buildingType" >
                    </div>
                </div>

                <div class="col-md-4">

                    <div class="form-group">
                        <h2> Type of Floor</h2>
                        <label for="buildingFloor"></label>
                        <input type="text"  class="form-control" placeholder="lamine,rock etc" name="buildingFloor" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <h2>Buildings m2 Type</h2>
                        <label for="buildingType"></label>
                        <input type="number" class="form-control" name="placesm2">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="numberOfbedrooms">Number of Bedrooms</label>
                        <input type="text" class="form-control" name="numberOfbedrooms">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="numberOfbigRestrooms">Number of Big restrooms</label>
                        <input type="number" class="form-control" name="numberOfbigRestrooms">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="numberOfsmallRestrooms">Number of Small restrooms</label>
                        <input type="number" class="form-control" name="numberOfsmallRestrooms">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="fomr-group">
                        <label for="kindOfkitchen"> Kind Of Kitchen</label>
                        <input type="text" class="form-control" name="kindOfkitchen">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="fomr-group">
                        <label for="maxStay"> Max number of people that can stay at flat</label>
                        <input type="text" class="form-control" name="maxStay">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <h2>parking</h2>
                        <label class="switch">
                        <input type="checkbox" name="0">
                        <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <h2>Pool</h2>
                        <label class="switch">
                        <input type="checkbox" name="1">
                        <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <h2>Pets</h2>
                        <label class="switch">
                        <input type="checkbox" name="2">
                        <span class="slider round"></span>
                        </label>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <h2>Blankets & Towels</h2>
                        <label class="switch">
                        <input type="checkbox" name="3">
                        <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <h2>Tv</h2>
                        <label class="switch">
                        <input type="checkbox" name="4">
                        <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <h2>Fridge</h2>
                        <label class="switch">
                        <input type="checkbox" name="5">
                        <span class="slider round"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <h2>Microwave</h2>
                        <label class="switch">
                        <input type="checkbox" name="6">
                        <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <h2>Air Condition</h2>
                        <label class="switch">
                        <input type="checkbox" name="7">
                        <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <h2>Wash Machine</h2>
                        <label class="switch">
                        <input type="checkbox" name="8">
                        <span class="slider round"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <h2>Dryer</h2>
                        <label class="switch">
                        <input type="checkbox" name="9">
                        <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <h2>Dishwasher</h2>
                 <label class="switch">
                <input type="checkbox" name="10">
                <span class="slider round"></span>
                </label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <h2>Wifi</h2>
                <label class="switch">
                <input type="checkbox" name="11">
                <span class="slider round"></span>
                </label>
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="col-md-12">
              <input type="submit" value="search" name="search" style="margin-left:15px !important;" class="btn btn-outline-primary btn-lg btn-lock search-button">
              </div>
            </div>
 </form>
</div>

<?php include_once('footer.php');?>