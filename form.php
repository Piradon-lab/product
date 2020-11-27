<!DOCTYPE html>
<?php
?>
<html>

<head>
    <title>ITF lab</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body style="background-color:#6ac5fe;">
    <h2 style='text-align:center; color:white;'>Add form</h2>
    <div class="container">
        <form class="form-horizontal" action="insert.php" method="post" id="CommentForm">
            <div class="form-group form-group-sm">
                <label class="col-sm-2 control-label" for="Product">
                    <h3 style='color:white;'>Product:</h3>
                </label>
                <div class="col-sm-10">
                    <br><input type="text" class="form-control" name="Product" id="Product" placeholder="Enter Product">
                </div>
            </div>
            <div class="form-group form-group-lg">
                <label class="col-sm-2 control-label" for="Price">
                    <h3 style='color:white;'>Price:</h3>
                </label>
                <div class="col-sm-10">
                    <br><input type="text" class="form-control" name="Price" id="Price" placeholder="Enter Price">
                </div>
            </div>
            <div class="form-group form-group-sm">
                <label class="col-sm-2 control-label" for="Amount">
                    <h3 style='color:white;'>Amount:</h3>
                </label>
                <div class="col-sm-10">
                    <br><input type="text" class="form-control" name="Amount" id="Amount" placeholder="Enter Amount">
                </div>
            </div>
            <center><button type="submit" class="btn btn-success">Submit</button> <a href="index.php" class="btn btn-danger">Cancel</a></center>
        </form>
    </div>
</body>

</html>
