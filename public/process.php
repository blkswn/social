<?php


//$errors         = array();      // array to hold validation errors
//$data           = array();      // array to pass back data

// validate the variables ======================================================
    // if any of these variables don't exist, add an error to our $errors array


    //if form submitted





        //Add  to db



include "db.php";

          $description =$_POST['description'];
          $salon =$_POST['salon'];
          $stylist=$_POST['stylist'];
          $imagePath=$_POST['imagePath'];

          //check if blank

      $sql = "INSERT INTO `uploads` (`description`,`salon`,`stylist`,`length`,`imagepath`) VALUES ('$description','$salon','$stylist','50','$imagePath')";

      if ($con->query($sql) === TRUE) {
      echo "Record added successfully";
      } else {
          echo "Error: " . $sql . "
              " . $con->error;
      }




?>
