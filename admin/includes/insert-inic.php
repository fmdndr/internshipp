<?php 
include('dbh-inic.php');
// This is for Inserting Data table of  rental
session_start();
if (isset($_POST['submit'])) {
    $country = $_POST['inputCountry'];
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
    $building = "INSERT INTO rental(owner_id,country, city, region , typeOfbuilding, typeOffloor, surfacem2,numberOfbedRooms,
    numberOfrestrooms, numberOfsmallRestrooms , kindOfkitchen, maxStay, parking,poool, pets,blankets,tv,fridge,microvawe,aircondition,
    washmachine,dryer,dishwasher,wifi) 
     values( '".$_SESSION['ownerID']."',
     '".$_POST['inputCountry']."','".$_POST['inputCity']."','".$_POST['inputRegion']."',
     '".$_POST['buildingType']."','".$_POST['buildingFloor']."','".$_POST['placesm2']."',
     '".$_POST['numberOfbedrooms']."','".$_POST['numberOfbigRestrooms']."','".$_POST['numberOfsmallRestrooms']."',
     '".$_POST['kindOfkitchen']."','".$_POST['maxStay']."','".$zero."',
     '".$one."','".$two."','".$three."','".$four."',
     '".$five."','".$six."','".$seven."',
     '".$eight."','".$nine."','".$ten."',
     '".$eleven."')";
     $result = mysqli_query($conn , $building);
    if($result==false){
     header('location: ../index.php?index=data_insert_error');         
   }else{
       header("location: ../index.php?index=data_inserted");
   }

   } else{
       header("location: ../index.php?index=query-error.$conn->error");
   }


?>