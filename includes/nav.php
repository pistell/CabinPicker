<?php
/*
 * Our Navbar
 */
?>

<nav class="navbar navbar-default">

    <div class="container-fluid">

        <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="/">
                <img src="img/axe-light.png" alt="axe logo" id="nav-logo">
                Hearth &amp; Timber Cabin Co.
            </a>

        </div>

        <div id="navbar" class="navbar-collapse collapse">

            <ul class="nav navbar-nav navbar-right">
                <?php
                /**
                 * Shorthand PHP if statement checking if active page is the link.
                 * If it it, echo out "active" class on li
                 * http://stackoverflow.com/questions/13336200/add-class-active-to-active-page-using-php
                 */
                $active_page = get_active_page();
                ?>
                <li class="<?= ($active_page == 'home') ? 'active':''; ?>"><a href="/">Home</a></li>
                <li class="<?= ($active_page == 'cabins') ? 'active':''; ?>"><a href="cabins.php">Cabins</a></li>
                <li class="<?= ($active_page == 'reservations') ? 'active':''; ?>"><a href="reservations.php">Reservations</a></li>
            </ul>

        </div>

    </div>

</nav>
