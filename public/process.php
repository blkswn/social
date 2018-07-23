<?php
require_once '../../core/init.php';

//$errors         = array();      // array to hold validation errors
//$data           = array();      // array to pass back data

// validate the variables ======================================================
    // if any of these variables don't exist, add an error to our $errors array
    $sql = "SELECT * FROM uploads";
    $results = $db->query($sql);
    $errors = array();

    //if form submitted
    if(isset($_POST['submit'])){
      $description = sanitize($_POST['description']);
      $salon = sanitize($_POST['salon']);
      $stylist = sanitize($_POST['stylist']);
      $length = sanitize($_POST['length']);
      //check if blank
      if($_POST['salon'] == ''){
        $errors[] .='You Must Enter salon!';
      }
      //check if blank
      if($_POST['stylist'] == ''){
        $errors[] .='You Must Enter stylist!';
      }
      //check if blank
      if($_POST['length'] == ''){
        $errors[] .='You Must Enter length!';
      }


      //check if blank
      /*f($_POST['salon'] == ''){
        $errors[] .='Name of salon required';
      }
      if($_POST['stylist'] == ''){
        $errors[] .='Name of stylist required';
      }
      if($_POST['length'] == ''){
        $errors[] .='length of style required';
      }*/
    //if (empty($_POST['salon']))
        //$errors['salon'] = 'Name is required.';

    //if (empty($_POST['stylist']))
        //$errors['stylist'] = 'Email is required.';

    //if (empty($_POST['length']))
      //  $errors['length'] = 'Superhero alias is required.';
      //display errors

        //Add  to db
        $sql = "INSERT INTO uploads (description,salon,stylist,length) VALUES ('$description','$salon','$stylist','$length')";
        $db->query($sql);
        header('Location: upload.html');

// return a response ===========================================================

    // if there are any errors in our errors array, return a success boolean of false
  //  if ( ! empty($errors)) {

        // if there are items in our errors array, return those errors
      //  $data['success'] = false;
      //  $data['errors']  = $errors;
//    } else {

        // if there are no errors process our form, then return a message

        // DO ALL YOUR FORM PROCESSING HERE
        // THIS CAN BE WHATEVER YOU WANT TO DO (LOGIN, SAVE, UPDATE, WHATEVER)

        // show a message of success and provide a true success variable
    //    $data['success'] = true;
//$data['message'] = 'Success!';


    // return all our data to an AJAX call

  }
    ?>
