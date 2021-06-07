<?php
session_start();
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="jss/jquery-1.8.2.min.js"></script>
    <script src="jss/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="jss/geolocation.js"></script>
    <title>Index</title>
</head>

<body style="background-color: #EAF2F8;">

    <div class="row mt-3 container">
        <label>
            <font color="black"><i class="fa fa-user" aria-hidden="true"></i> Welcome: <?php echo $_SESSION['active_user']?></font>
        </label>
    </div>
    <div class="container">
       <form action="csvfile.php" method="post" enctype="multipart/form-data">
        <div class="row d-flex justify-content-center">
            <div class="col-md-4 mt-4 form-group ">
                
                <input type="file" class="form-control" name="file" required placeholder="" id="file" value="" accept=".csv">
    
            </div>
            <div class="col-md-1 mt-4 form-group">
                <input type="submit" class="form-control btn btn-outline-primary" id="" value="Submit">
            </div>
        </div>
        </form>
    </div>
</body>
