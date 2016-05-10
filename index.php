<?php
   /*
    * Our Home Page
    */
   require_once('includes/header.php');
   require_once('includes/nav.php');
   ?>
<div class="container">
   <h1>Home</h1>
</div>
<div class="container-fluid">
   <div class="row">
      <div class="col-md-8">
          <!-- Include the cabin carousel -->
          <?php require_once('includes/carousel.php'); ?>
      </div>
      <div class="col-md-4">
         <table class="table table-hover">
            <thead>
               <tr>
                  <th>
                     #
                  </th>
                  <th>
                     Product
                  </th>
                  <th>
                     Payment Taken
                  </th>
                  <th>
                     Status
                  </th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>
                     1
                  </td>
                  <td>
                     TB - Monthly
                  </td>
                  <td>
                     01/04/2012
                  </td>
                  <td>
                     Default
                  </td>
               </tr>
               <tr class="active">
                  <td>
                     1
                  </td>
                  <td>
                     TB - Monthly
                  </td>
                  <td>
                     01/04/2012
                  </td>
                  <td>
                     Approved
                  </td>
               </tr>
               <tr class="success">
                  <td>
                     2
                  </td>
                  <td>
                     TB - Monthly
                  </td>
                  <td>
                     02/04/2012
                  </td>
                  <td>
                     Declined
                  </td>
               </tr>
               <tr class="warning">
                  <td>
                     3
                  </td>
                  <td>
                     TB - Monthly
                  </td>
                  <td>
                     03/04/2012
                  </td>
                  <td>
                     Pending
                  </td>
               </tr>
               <tr class="danger">
                  <td>
                     4
                  </td>
                  <td>
                     TB - Monthly
                  </td>
                  <td>
                     04/04/2012
                  </td>
                  <td>
                     Call in to confirm
                  </td>
               </tr>
            </tbody>
         </table>
      </div>
   </div>
   <div class="row">
      <div class="col-md-4">
         <h3>
            h3. Lorem ipsum dolor sit amet.
         </h3>
      </div>
      <div class="col-md-4">
         <h3>
            h3. Lorem ipsum dolor sit amet.
         </h3>
         <div class="row">
            <div class="col-md-4">
               <div class="thumbnail">
                  <img alt="Bootstrap Thumbnail First" src="http://lorempixel.com/output/people-q-c-600-200-1.jpg" />
                  <div class="caption">
                     <h3>
                        Thumbnail label
                     </h3>
                     <p>
                        Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                     </p>
                     <p>
                        <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="thumbnail">
                  <img alt="Bootstrap Thumbnail Second" src="http://lorempixel.com/output/city-q-c-600-200-1.jpg" />
                  <div class="caption">
                     <h3>
                        Thumbnail label
                     </h3>
                     <p>
                        Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                     </p>
                     <p>
                        <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="thumbnail">
                  <img alt="Bootstrap Thumbnail Third" src="http://lorempixel.com/output/sports-q-c-600-200-1.jpg" />
                  <div class="caption">
                     <h3>
                        Thumbnail label
                     </h3>
                     <p>
                        Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                     </p>
                     <p>
                        <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-4">
         <h3>
            h3. Lorem ipsum dolor sit amet.
         </h3>
      </div>
   </div>
</div>
<?php require_once('includes/footer.php'); ?>
