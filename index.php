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
			<h3>
            h3. Lorem ipsum dolor sit amet.
         </h3> </div>
		<div class="col-md-4">
			<h3>
            Vacation Packages
         </h3>
			<div class="row">
				<div class="col-md-4">
					<div class="thumbnail"> <img alt="Bootstrap Thumbnail First" src="http://lorempixel.com/output/people-q-c-600-200-1.jpg" />
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
					<div class="thumbnail"> <img alt="Bootstrap Thumbnail Second" src="http://lorempixel.com/output/city-q-c-600-200-1.jpg" />
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
					<div class="thumbnail"> <img alt="Bootstrap Thumbnail Third" src="http://lorempixel.com/output/sports-q-c-600-200-1.jpg" />
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
			<h3>
            About/Contact
         </h3> </div>
	</div>
</div>

<?php require_once( 'includes/footer.php'); ?>
