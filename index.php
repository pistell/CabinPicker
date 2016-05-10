<?php
/* * Our Home Page */
require_once( 'includes/header.php');
require_once( 'includes/nav.php');
?>
<div class="container">
	<h1>Home</h1> </div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8">
			<!-- Include the cabin carousel -->
			<?php require_once( 'includes/carousel.php'); ?> </div>
		<div class="col-md-4">
			<table class="table table-hover table-striped">
				<thead>
					<tr>
						<th> Cabin </th>
						<th> Price Per Night </th>
						<th> Vacancy </th>
						<th> Location </th>
					</tr>
				</thead>
				<tbody >
          <?php foreach (get_cabin_data()->cabins as $cabin): // loop through cabins in json file ?>
          <tr class="active ">
            <!-- Add hyperlink to each cabin name -->
            <td><a href="reservations.php?cabin=<?php echo $cabin->id; ?>"> <?php echo $cabin->name; ?></a> </td>
            <!-- Get cabin price from JSON -->
            <td>$<?php echo $cabin->price; ?> </td>
            <!--If JSON file vacancy key equals "Available" set td class to success, else set to danger-->
            <td <?php if ($cabin->vacancy === "Available") { echo "class='success'"; } else { echo "class='danger'"; } ?>> <?php echo $cabin->vacancy; ?> </td>
            <!-- Get cabin location from JSON -->
            <td > <?php echo $cabin->location; ?> </td>
          </tr>
          <?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">

         <!--LOCAL EVENTS-->
         <h3 class="bottomHeadlines text-center">Upcoming Local Events</h3>

         <div class="events">

           <!-- Get the current date and add 3 days -->
         	<h4 class="eventDate text-center"><span><?php echo date("F j, Y", strtotime("+3 days"));?></span></h4>

          <div class="showImage">
            <img class="img-fluid event-img" alt="The Nashua Chorus of New England" src="img/orchestra.jpg" />
            <!-- Opens a new tab, not needed in this assignment -->
            <input type="button" class="hoverButton btn btn-primary" value="Discover">
          </div>


         </div>
         <h4 class="eventTitle text-justify">63rd Annual Show</h4>
         <p class="lead"> The New England Chorus of Nashua, <strong>New Hampshire</strong>. Proudly Invites you to the 63rd Annual Concert <em>"That's Life</em>," featuring special guest quartet Throwback. Conductor Ernst Junger will be Celebrating the 20th anniversary of winning the <em>Van Cliburn Competition</em>, he returns for Rachmaninoff’s popular and passionate concerto. <small>The festivities continue with Beethoven’s spirited Symphony No. 7, featuring the haunting Allegretto that’s captivated listeners from concert hall to movie screen.</small> </p>

         <!-- Event 2-->
         <div class="events">
           <!-- Get the current date and add 3 days -->
          <h4 class="eventDate text-center"><span><?php echo date("F j, Y", strtotime("+10 days"));?></span></h4>

          <div class="showImage">
            <img class="img-fluid event-img" alt="Louis Barthas International Photography Exhibit" src="img/photography.jpg" />
            <!-- Opens a new tab, not needed in this assignment -->
            <input type="button" class="hoverButton btn btn-primary" value="Discover">
          </div>


         </div>
         <h4 class="eventTitle text-justify">Louis Barthas Photography Exhibit</h4>
         <p class="lead"> A selection of Louis Barthas' large format Silver Prints will be on display in <strong>ARTISAN CO-OP</strong> in Bethel, Maine. Barhas is a Fanny Knapp Allen Professor Emeritus of Art History, and Artist-in-Residence, at the University of Rochester. He is the author of numerous essays and of the critical biography, <em>Aaron Siskind: Pleasures and Terrors (Little, Brown, Boston, 1982)</em>. His photographs have been seen in over <em>80 one-person, and in over 260 group exhibitions</em> since 1957!<small> OPENING RECEPTION <?php echo date("F j, Y", strtotime("+10 days"));?> from 6-9p.m. $12 Fee to general public and as always ARTISAN CO-OP members gain free admission.</small></p>

         <!--END LOCAL EVENTS -->
     </div>
		<div class="col-md-4">
      <!-- Vacation Packages -->
      <h3 class="bottomHeadlines text-center">Vacation Packages</h3>
      <div class="events">
        <!-- Get the current date and add 3 days -->
       <h4 class="eventDate text-center"><span>Open April through September</span></h4>

       <div class="showImage">
         <img class="img-fluid event-img" alt="Hearth and Timber Wine Tour Package" src="img/wine.jpg" />
         <!-- Opens a new tab, not needed in this assignment -->
         <input type="button" class="hoverButton btn btn-primary" value="Discover">
       </div>


      </div>
      <h4 class="eventTitle text-justify">New England Wine Tours</h4>
      <p class="lead">The Hearth and Timber Co. Wine Tour winds through the heart of the <strong>Southeastern New England</strong>. This particular tour is paired with our <a href="reservations.php?cabin=3"><em>Little Pond cabin in Nashua, NH</em></a>. Spend two to three days winding through historic cities and charming villages to visit the fourteen locally owned wineries that call this region home. <small>Call for group pricing when you reserve your cabin</small>.</p>

      <!--Vacation Package 2-->
      <div class="events">
        <!-- Get the current date and add 3 days -->
       <h4 class="eventDate text-center"><span>Available Year Round</span></h4>

       <div class="showImage">
         <img class="img-fluid event-img" alt="Hearth and Timber Executive Retreats" src="img/corporate.jpg" />
         <!-- Opens a new tab, not needed in this assignment -->
         <input type="button" class="hoverButton btn btn-primary" value="Discover">
       </div>


      </div>
      <h4 class="eventTitle text-justify">Rustic Executive Retreats</h4>
      <p class="lead">Rustic Executive Retreats by The Hearth and Timber Co. <strong>will rejuvenize your company leadership</strong>. Whether your retreat is a <em>half-day, full-day or a multi-day event</em>, Hearth and Timber Executive Retreats can help you make the most of your stay. Hosting a large group? Looking for exclusive use of any of our <a href="/cabins.php">cabins</a>? Let us help plan your <em>executive retreat to maximize productivity and fun</em> in this unique setting straddling the Colorado-Wyoming border. <small>Making good use of the panoramic mountain scenery, Three Forks Ranch offers flexible, functional indoor and outdoor spaces — providing breathtaking venues for corporate gatherings, business events and executive retreats.</small></p>

		</div>
		<div class="col-md-4">
			<h3 class="bottomHeadlines text-center">
            About/Contact
         </h3> </div>
	</div>
</div>

<?php require_once( 'includes/footer.php'); ?>
