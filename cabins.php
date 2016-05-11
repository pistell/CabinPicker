<?php
/*
* Our Cabins Page
*/
require_once('includes/header.php');
require_once('includes/nav.php');

?>

<div class="container">

    <h1>Cabins</h1>

    <?php foreach (get_cabin_data()->cabins as $cabin): // loop through cabins in json file ?>

    <div class="row">
        <div class="col-sm-4">
            <img class="img-responsive" src="img/<?php echo $cabin->image; ?>" alt="<?php echo $cabin->name; ?>">
        </div>
        <div class="col-sm-8">
            <h2><?php echo $cabin->name; ?></h2>
            <h4>Price: $<?php echo $cabin->price; ?>/Night</h4>
            <p>
                <?php echo $cabin->description; ?>
            </p>
            <a class="btn btn-primary" href="reservations.php?cabin=<?php echo $cabin->id; ?>">Make A Reservation</a>
        </div>
    </div>

    <?php endforeach; ?>

</div>

<?php require_once('includes/footer.php'); ?>
