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
            <input type="button" class="hoverButton btn btn-primary" onclick="window.open('http://google.com','_blank')" value="Discover">
          </div>


         </div>
         <h4 class="eventTitle text-justify">63rd Annual Show</h4>
         <p class="lead"> Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small> </p>
         <!--END LOCAL EVENTS -->



     </div>
		<div class="col-md-4">
			<h3 class="bottomHeadlines text-center">
            Vacation Packages
         </h3>
			<div class="row">
				<div class="col-md-4">
					<div class="thumbnail"> <img alt="Bootstrap Thumbnail First" src="http://lorempixel.com/g/200/200/" />
						<div class="caption">
							<h3>
                        Thumbnail label
                     </h3>
							<p> Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit. </p>
							<p> <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a> </p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail"> <img alt="Bootstrap Thumbnail Second" src="http://lorempixel.com/g/200/200/" />
						<div class="caption">
							<h3>
                        Thumbnail label
                     </h3>
							<p> Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit. </p>
							<p> <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a> </p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail"> <img alt="Bootstrap Thumbnail Third" src="http://lorempixel.com/g/200/200/" />
						<div class="caption">
							<h3>
                        Thumbnail label
                     </h3>
							<p> Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit. </p>
							<p> <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a> </p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<h3 class="bottomHeadlines text-center">
            About/Contact
         </h3> </div>
	</div>
</div>

<?php require_once( 'includes/footer.php'); ?>
