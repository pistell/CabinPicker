$(document).ready(function () {
    var to = new Date();
    var from = new Date(to.getTime() - 1000 * 60 * 60 * 24 * 14);
    var id;
    // holds cabin json data
    var cabinData = new Object();
    //The number of milliseconds in one day
    var totalTimeInDay = 1000 * 60 * 60 * 24;
    var dateRange;
    var firstDay;
    var lastDay;
    // default total days to 1
    var totalNights = 1;
    // Retrieve cabin info from external file
    $.getJSON('cabins.json', function (data) {
        cabinData = data;
        console.log('JSON file has been loaded!');
        console.log(cabinData);
        setupPage();
    });

    function setupPage() {
        // get url parameter
        id = getParameterByName('cabin');
        // If cabin url parameter does exist, setup with that ID element
        if (id == '') {
            id = 1;
            console.log('Cabin ID not found in URL parameter. Setting cabin to 1');
        } else {
            console.log('Cabin ID', id, 'found in URL');
        }
        $("#cabinSelect option[value='" + id + "']").attr('selected', 'selected');
        $("#cabinPreview").attr("src", "img/" + cabinData.cabins[getArrayKey(id)].image);
        calculateData();
    }
    // our cabins start at 1, but an array starts at 0
    // this allows us to get the array key from the known cabin id
    function getArrayKey(id) {
        return id - 1;
    }
    // calculate our data
    function calculateData() {
        var cabinArrayKey = id - 1;
        var cabinCostPerDay = cabinData.cabins[cabinArrayKey].price;
        $("#numberOfNights").attr("placeholder", totalNights);
        console.log('Total Nights:', totalNights);
        console.log('Cost Per Night:', '$' + cabinCostPerDay);
        //$("#totalCost").attr("placeholder", totalNights * cabinCostPerDay);
        //Using .val() to prepend a dollar symbol to the input field
        $("#totalCost").val("$" + totalNights * cabinCostPerDay);
        console.log('Total Cost:', '$' + totalNights * cabinCostPerDay + '\n\n');
    }
    // Cabin Select
    $('#cabinSelect').on('change', function () {
        id = $(this).val();
        console.log('Cabin ID changed to:', id);
        $("#cabinPreview").attr("src", "img/" + cabinData.cabins[getArrayKey(id)].image);
        console.log('Image changed to', "'img/" + cabinData.cabins[getArrayKey(id)].image + "'");
        calculateData();
    })
    // Date Picker
    $('#datepicker-calendar').DatePicker({
        inline: true,
        date: [from, to],
        calendars: 3,
        mode: 'range',
        //current: new Date(to.getFullYear(), to.getMonth() - 1, 1),
        current: new Date(),
        onChange: function (dates, el) {
            //display date range for user in readonly input
            $('#date-range-field').attr("placeholder",
                dates[0].getDate() + ' ' + dates[0].getMonthName(true) + ', ' +
                dates[0].getFullYear() + ' - ' +
                dates[1].getDate() + ' ' + dates[1].getMonthName(true) + ', ' +
                dates[1].getFullYear());
            //get current date range from datepicker
            dateRange = $("#date-range-field").attr("placeholder");
            //spit range at hyphen and create array
            dateRangeArray = dateRange.split("-");
            //first day, shifts the first element in the array and creates a new date
            firstDay = new Date(dateRangeArray.shift());
            //last day, pops the last element in the array and creates a new date
            lastDay = new Date(dateRangeArray.pop());
            //difference between the 2, divided by one day, rounded up with Math.ceil()
            totalNights = Math.ceil((lastDay - firstDay) / totalTimeInDay + 1);
            // update days and prices again
            calculateData();
        }
    });
    //Contact form AJAX
    //Hacked from: https://jonsuh.com/blog/jquery-ajax-call-to-php-script-with-json-return/
    $(".contactForm").submit(function () {
        var data = {
            "action": "test"
        };
        data = $(this).serialize() + "&" + $.param(data);
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "includes/contact.php",
            data: data,
            success: function (data) {
                var contactName = data["name"];
                var contactEmail = data["email"];
                var contactGuests = data["numGuests"];
                var contactText = data["contactFormText"];
                $(".messageSuccess").html("<pre>Name: " + contactName + "<br />Email: " + contactEmail + "<br />Guests: " + contactGuests + "<br />Message: " + contactText + "</pre>");
                $(".messageSuccess").append("<p><strong>Data successfully posted via AJAX</strong></p>");
            }
        });
        return false;
    });
    //Reservations form submit
    $(".reservationForm").submit(function () {
        var data = {
            "action": "test"
        };
        data = $(this).serialize() + "&" + $.param(data);
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "includes/contact.php",
            data: data,
            success: function (data) {
                var successCabinSelet = $('#cabinSelect :selected').text();
                var successDateRange = $("#date-range-field").attr('placeholder');
                var successNumberOfNights = $("#numberOfNights").attr('placeholder');
                var successTotalCost = $("#totalCost").val();
                $(".messageSuccess").html("<pre>Cabin Selected: " + successCabinSelet + "<br />Dates: " + successDateRange + "<br />Nights: " + successNumberOfNights + "<br />Total Cost: " + successTotalCost);
                $(".messageSuccess").append("<p><strong>Data successfully posted via AJAX</strong></p>");
            }
        });
        return false;
    });
    // Gets url parameters - http://stackoverflow.com/questions/29549309
    function getParameterByName(name) {
        name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
        var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
            results = regex.exec(location.search);
        return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
    }
});
