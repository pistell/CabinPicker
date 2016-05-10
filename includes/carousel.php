<?php

// Cabin carousel

 ?>

 <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <!-- Add another li to here to include another cabin link -->
    <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/cabin1.png" alt="North Woods">
      <div class="carousel-caption">
			     <h4>First Thumbnail label</h4>
							<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
			</div>
    </div>

    <div id="cabin2" class="item">
      <!-- <img src="img/cabin2.png" alt="Maple Harbor"> -->
      <script type="text/javascript">
        $(document).ready(function(){
          $.getJSON('cabins.json', function(data){
            console.log(data);
            var cabin2 = "img/" + data.cabins[1].image;
            console.log("================== Data from JSON image: " + cabin2);
            $("#cabin2").html("<img src='" + cabin2 + " '/>");
          });
          /*
          //From: https://www.youtube.com/watch?v=j-S5MBs4y0Q
          $.ajax({
            url: 'http://cabin.dev/cabins.json',
            dataType: 'json',
            type: 'get',
            cache: false,
            success: function(data){
              $(data.cabins).each(function(index, value){
                $('#cabin2').append('<img src="img/' + value.image + '"/>');
                console.log("HEY:::: " + value.image);
              });
            }
          });
          */
        });
      </script>
    </div>

    <div class="item">
      <img src="img/cabin3.png" alt="Little Pond">
    </div>

  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
