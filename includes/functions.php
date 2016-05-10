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
