<?php
/*
 * Our Header
 */
require_once('functions.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="<?php print_r($descToEcho); ?>">
    <!-- Quotation marks removed in HTML file due to json_encode printing them -->
    <meta name="keywords" content=<?php echo json_encode($keywordsToEcho); ?>>
    <meta name="author" content="James Pistell">
    <!-- Capitalize the first letter of the $basename var from get_active_page() -->
    <title><?php echo ucfirst(get_active_page($basename)); ?> | Hearth and Timber Co.</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" media="screen" type="text/css" href="css/datepicker.css">
    <link rel="stylesheet" media="screen" type="text/css" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body class="<?php echo get_active_page(); ?>">
