<?php
/*
 * Our Home Page
 */
require_once('includes/header.php');
require_once('includes/nav.php');

?>

<div id="banner">
  <div class="container">
      <div class="title-wrap">
          <h1>Hearth &amp; Timber Cabin Co.</h1>
          <p>Discover Your Home Away From Home</p>
      </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">

      <!-- built in Bootstrap class hidden-print hides the element in print mode -->
      <div class="col-md-4 hidden-print ">

          <h3 class="bottomHeadlines text-center">Contact</h3>
          <form class="form-horizontal contactForm" action="contact.php" method="post" accept-charset="utf-8">
              <fieldset>

                  <!-- Name-->
                  <div class="form-group">
                      <label class="col-md-4 control-label" for="contact-form-name">Name</label>
                      <div class="col-md-6">
                          <input id="contact-form-name" name="name" type="text" class="form-control input-md">
                      </div>
                  </div>

                  <!-- Email -->
                  <div class="form-group">
                      <label class="col-md-4 control-label" for="contact-form-email">Email</label>
                      <div class="col-md-6">
                          <input id="contact-form-email" name="email" type="text" class="form-control input-md">
                      </div>
                  </div>

                  <!-- Number Of Guests -->
                  <div class="form-group">
                      <label class="col-md-4 control-label" for="numGuests">Guests</label>
                      <div class="col-md-6">
                          <select name="numGuests" id="numGuests" class="form-control select">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="moreThan4">More than 4</option>
                  </select>
                      </div>
                  </div>

                  <!-- Textarea -->
                  <div class="form-group">
                      <label class="col-md-4 control-label">Message</label>
                      <div class="col-md-6">
                          <textarea class="form-control" name="contactFormText" id="contactFormText"></textarea>
                      </div>
                  </div>

                  <!-- Button -->
                  <div class="form-group">
                      <div class="col-md-6 col-md-offset-4">
                          <input type="submit" name="submit" class="btn btn-primary" value="Submit form">
                      </div>
                  </div>

              </fieldset>
          </form>

          <div class="messageSuccess"></div>

      </div>
      <div class="col-md-4">

          <h3 class="bottomHeadlines text-center">Cabins</h3>
          <?php require_once('includes/carousel.php'); ?>

      </div>
      <div class="col-md-4">

          <h3 class="bottomHeadlines text-center">Availability</h3>
          <table class="table table-hover table-striped">
              <thead>
                  <tr>
                      <th> Cabin </th>
                      <th> Price Per Night </th>
                      <th> Vacancy </th>
                      <th> Location </th>
                  </tr>
              </thead>
              <tbody>
                  <?php foreach (get_cabin_data()->cabins as $cabin): // loop through cabins in json file ?>
                  <tr class="active ">
                      <!-- Add hyperlink to each cabin name -->
                      <td>
                          <a href="reservations.php?cabin=<?php echo $cabin->id; ?>">
                              <?php echo $cabin->name; ?>
                          </a>
                      </td>
                      <!-- Get cabin price from JSON -->
                      <td>$
                          <?php echo $cabin->price; ?> </td>
                      <!--If JSON file vacancy key equals "Available" set td class to success, else set to danger-->
                      <td <?php if ($cabin->vacancy === "Available") { echo "class='success'"; } else { echo "class='danger'"; } ?>>
                          <?php echo $cabin->vacancy; ?> </td>
                      <!-- Get cabin location from JSON -->
                      <td>
                          <?php echo $cabin->location; ?> </td>
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
                  <input type="button" class="hoverButton btn btn-primary hidden-print" value="Discover">
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
                  <input type="button" class="hoverButton btn btn-primary hidden-print" value="Discover">
              </div>
          </div>

          <h4 class="eventTitle text-justify">Louis Barthas Photography Exhibit</h4>
          <p class="lead"> A selection of Louis Barthas' large format Silver Prints will be on display in <strong>ARTISAN CO-OP</strong> in Bethel, Maine. Barhas is a Fanny Knapp Allen Professor Emeritus of Art History, and Artist-in-Residence, at the University of Rochester. He is the author of numerous essays and of the critical biography, <em>Aaron Siskind: Pleasures and Terrors (Little, Brown, Boston, 1982)</em>. His photographs have been seen in over <em>80 one-person, and in over 260 group exhibitions</em> since 1957!<small> OPENING RECEPTION <?php echo date("F j, Y", strtotime("+10 days"));?> from 6-9p.m. $12 Fee to general public and as always ARTISAN CO-OP members gain free admission.</small></p>

          <!--END LOCAL EVENTS -->
      </div>
      <!--column -->
      <div class="col-md-4">
          <!-- Vacation Packages -->
          <h3 class="bottomHeadlines text-center">Vacation Packages</h3>
          <div class="events">
              <!-- Get the current date and add 3 days -->
              <h4 class="eventDate text-center"><span>Open April through September</span></h4>
              <div class="showImage">
                  <img class="img-fluid event-img" alt="Hearth and Timber Wine Tour Package" src="img/wine.jpg" />
                  <!-- Opens a new tab, not needed in this assignment -->
                  <input type="button" class="hoverButton btn btn-primary hidden-print" value="Discover">
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
                  <input type="button" class="hoverButton btn btn-primary hidden-print" value="Discover">
              </div>
          </div>

          <h4 class="eventTitle text-justify">Rustic Executive Retreats</h4>
          <p class="lead">Rustic Executive Retreats by The Hearth and Timber Co. <strong>will rejuvenize your company leadership</strong>. Whether your retreat is a <em>half-day, full-day or a multi-day event</em>, Hearth and Timber Executive Retreats can help you make the most of your stay. Hosting a large group? Looking for exclusive use of any of our <a href="/cabins.php">cabins</a>? Let us help plan your <em>executive retreat to maximize productivity and fun</em> in this unique setting straddling the Colorado-Wyoming border. <small>Making good use of the panoramic mountain scenery, Three Forks Ranch offers flexible, functional indoor and outdoor spaces — providing breathtaking venues for corporate gatherings, business events and executive retreats.</small></p>

      </div>
      <!--column -->
      <div class="col-md-4">
          <h3 class="bottomHeadlines text-center">About</h3>
          <p class="lead">
              Hearth and Timber Cabin Co. offers the perfect <em>New England Vacation Cabin Rentals</em> in various regional states. Whether you are looking for a White Mountains Cabin Rental, a rustic cabin rental or a secluded cabin rental, with a spectacular mountain view or view of the White Mountains, Hearth and Timber Cabin Co. offers affordable deluxe cabins to suit your family's needs and vacation budget.<br/>
              <img src="img/family.jpg" alt="Some random stock image of 'family business'" class="center-block" /><br/>
              <strong>We are a family owned company</strong> that started the cabin rental company after many visits to New England. The White Mountains area is a beautiful place and we love to share the area’s natural beauty with all of our guests. Reserve your cabin today and discover the natural beauty of this region with us.<br/>
          </p>

      </div>
  </div>
</div>

<?php require_once( 'includes/footer.php'); ?>
