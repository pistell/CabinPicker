<? php ?>

<div id="myCarousel" class="carousel slide">

    <ol class="carousel-indicators"></ol>

    <!-- Carousel items -->
    <div class="carousel-inner"></div>

    <!-- Carousel nav -->
    <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>

<script type="text/javascript">
    //Front page carousel AJAX
    //Using $.ajax instead of $.getJSON for better error handling
    $.ajax({
        url: window.location.href + 'cabins.json',
        dataType: 'json',
        type: 'get',
        cache: false,
        success: function (data) {
            $(data.cabins).each(function (index, value) {
                //Set var for the cabin image
                var cabinImage = '<img src="img/' + value.image + '"/>';
                //Set var for the cabin name
                var cabinName = '<div class="carousel-caption"><h4>' + value.name + '</h4>';
                //Set var for the cabin descriptions
                var cabinDesc = value.description;
                //Set var for truncated cabin description
                var shortCabinDesc = $.trim(cabinDesc).substring(0, 100).split(" ").slice(0, -1).join(" ") + "...";
                //Set first item class to active or else the carousel won't load
                $('#myCarousel').find('.item').first().addClass('active');
                //Load the carousel item indicator buttons
                $(".carousel-indicators").append($('<li data-target="#myCarousel" data-slide-to="' + index + '"</li>'));
                //Load the cabin images, names and descriptions
                $(".carousel-inner").append($('<div class="item">' + cabinImage + cabinName + shortCabinDesc + '</div>'));
            });
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert("Status: " + textStatus);
            alert("Error: " + errorThrown);
        }
    });
    //Automatically start the carousel on page load
    $(document).ready(function () {
        $('#myCarousel').carousel({
            interval: 3500
        })
    });
</script>
