<?php
require __DIR__ . '/vendor/autoload.php';
require 'db.php';
require 'functions.php';

if (isset($_POST['submit'])) {
    if ($_POST['action'] == 'add') {
        addData();
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MTC Trail Task 2019 | PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/flatly/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <form action="" method="POST">
        <h1>Add Property</h1>
        <fieldset>
            <div class="form-group w-25">
                <label>County</label>
                <input type="text" name="county" class="form-control" placeholder="Enter county">
            </div>
            <div class="form-group w-25">
                <label>Country</label>
                <input type="text" name="country" class="form-control" placeholder="Enter country">
            </div>
            <div class="form-group w-25">
                <label>Town</label>
                <input type="text" name="town" class="form-control" placeholder="Enter Town">
            </div>
            <div class="form-group w-25">
                <label>Postcode</label>
                <input type="text" name="image_thumbnail" class="form-control" placeholder="Enter Postcode">
            </div>
            <div class="form-group w-50">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" rows="3" placeholder="Enter Description"></textarea>
            </div>
            <div class="form-group w-50">
                <label>Address</label>
                <input type="text" name="address" class="form-control" placeholder="Enter Address">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Image File</label>
                <input type="file" class="form-control-file" name="image_full" id="image_full"
                       aria-describedby="fileHelp">
                <small id="fileHelp" class="form-text text-muted">Image will be converted to thumbnail.</small>
            </div>
            <div class="form-group w-25">
                <label for="num_bedrooms">Select Number of Bedrooms</label>
                <select class="form-control" name="num_bedrooms">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                </select>
            </div>
            <div class="form-group w-25">
                <label for="num_bathrooms">Select Number of Bathrooms</label>
                <select class="form-control" name="num_bathrooms">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                </select>
            </div>
            <div class="form-group w-25">
                <label>price</label>
                <input type="number" name="price" class="form-control" placeholder="Enter price">
            </div>
            <div class="form-group w-25">
                <label for="property_type_id">Property type</label>
                <select class="form-control" name="property_type_id">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                </select>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="type" value="rent" checked="">
                    For Rent
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="type" value="sale">
                    For Sale
                </label>
            </div>
            <input type="hidden" name="action" value="add">
            <br/>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="submit">Add Property</button>
            </div>
        </fieldset>
    </form>
</div>
</body>
</html>

