<?php
/*
 * Our PHP Functions
 */

function get_cabin_data() {

    // Get JSON file contents
    $cabinDataString = file_get_contents("cabins.json");

    // Convert JSON string to php array
    $cabinDataObj = json_decode($cabinDataString);

    return $cabinDataObj;
}

function get_active_page() {

    // Dynamically set current page title as body class to target pages with CSS
    $basename = basename( $_SERVER['PHP_SELF'], ".php" );

    if ( $basename == 'index') {
        $basename = 'home';
    }

    return $basename;
}
//Meta keywords
function get_meta_keywords(){

  $basename = basename( $_SERVER['PHP_SELF'], ".php" );
  if ($basename == 'cabins') {
      //Add keywords
      $keywords = array('cabin rentals', 'new england cabins', 'vacation', 'log cabins', 'cottages');
      //Separate array by commas and remove brackets
      $clean_keywords = implode(", ", $keywords);
  } elseif ($basename == 'reservations') {
    $keywords = array('reserve cabins', 'log cabin booking', 'book vacation', 'booking', 'calendar');
    $clean_keywords = implode(", ", $keywords);
  } else {
    $keywords = array('home', 'index', 'Hearth and Timber', 'log cabin rentals', 'log cabin company', 'log cabin vacations');
    $clean_keywords = implode(", ", $keywords);
  }

  return $clean_keywords;
}
//Vars inside function cannot be accessed from other files
$keywordsToEcho = get_meta_keywords();

// Meta description
function get_meta_desc(){
  $basename = basename( $_SERVER['PHP_SELF'], ".php" );
  if ($basename == 'cabins') {
      //Add description
      $desc = "Hearth and Timber log cabin rental company offers several log cabins to choose from throughout the New England region";
  } elseif ($basename == 'reservations') {
      $desc = "Reserve your cabin today through the Hearth and Timber Cabin Company's website. Prices vary on season";
  } else {
      $desc = "Welcome to the Hearth and Timber Cabin Company website. Browse through our cabins and vacation packages. Proudly serving the New England region. Family owned and operated since 1985";
  }

  return $desc;
}
//Vars inside function cannot be accessed from other files
$descToEcho = get_meta_desc();
?>
