<?php
/*
 * Our Reservations Page
 */
require_once 'includes/header.php';
require_once 'includes/nav.php';

?>

<div class="container">
    <h1>Reservations</h1>
    <div class="row">
        <div class="col-sm-7">
            <div id="datepicker-calendar"></div>
            <form method="post" class="reservationForm">
                <div class="form-group">
                    <label class="control-label" for="cabinSelect">Choose Cabin</label>
                    <select class="select form-control" id="cabinSelect" name="select">
                    <?php foreach (get_cabin_data()->cabins as $cabin): // loop through cabins in json file ?>
                        <option value="<?php echo $cabin->id; ?>"><?php echo $cabin->name; ?> - $<?php echo $cabin->price; ?>/Night</option>
                    <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label" for="date-range-field">Date Range</label>
                    <input class="form-control" id="date-range-field" name="date-range-field" type="text" readonly/>
                </div>
                <div class="form-group">
                    <label class="control-label" for="numberOfNights">Number of Nights</label>
                    <input class="form-control" id="numberOfNights" name="numberOfNights" type="text" readonly/>
                </div>
                <div class="form-group">
                    <label class="control-label" for="totalCost">Total Cost</label>
                    <input class="form-control" id="totalCost" name="totalCost" type="text" readonly/>
                </div>
                <!-- Optional checkbox menu that was never implemented -->
                <div class="form-group" style="background-color:salmon;padding:5px;display:none;">
                    <label class="control-label">Check all that apply</label>
                    <div class="checkbox">
                        <label class="checkbox"><input name="checkbox" type="checkbox" value="First Choice" id="smoker"/>First Choice</label>
                    </div>
                    <div class="checkbox">
                        <label class="checkbox"><input name="checkbox" type="checkbox" value="Second Choice"/>Second Choice</label>
                    </div>
                    <div class="checkbox">
                        <label class="checkbox"><input name="checkbox" type="checkbox" value="Third Choice"/>Third Choice</label>
                    </div>
                </div>

                <div class="form-group" style="background-color:salmon;padding:5px;">
                    <button class="btn btn-success btn-lg" name="submit" type="submit">Submit</button>
                </div>
            </form>
        </div><!--column-->
        <div class="col-sm-5">
            <img id="cabinPreview" src="img/cabin1.png" class="img-responsive" alt="Cabin 1">
            <div class="messageSuccess"></div>
        </div><!--column-->
    </div><!--row-->
</div><!--container-->

<?php require_once 'includes/footer.php'; ?>
