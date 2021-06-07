<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="jss/jquery-1.8.2.min.js"></script>
    <script src="jss/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>SignUp Page</title>
    <script>
        $(document).ready(function() {
            $("#signupemail").blur(function() {
                var uid = $(this).val();
                var regExp = /^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$/;
                if (regExp.test(uid) == false) {
                    alert("Invalid email ID");
                }
            });
            $("#pwd").blur(function() {
                var pwd = $(this).val();
                var n = pwd.length;
                if (n < 6) {
                    alert("Password must be atleast 6 characters");
                    $("#errpwd").html("Passwords too weak").css("color", "red");
                } else {
                    $("#errpwd").html("Strong Password").css("color", "green");
                }
            });
            $("#username").blur(function() {
                var name = $(this).val();
                var x = name.length;
                if (x <= 2) {
                    alert("Too short for a Name");
                }
            });
        });

    </script>
    <style>
    </style>
</head>

<body style="background-color: #EAF2F8;">
    <form action="signup-process.php" method="post" enctype="multipart/form-data" id="frmSignup">


        <div class="container ">
            <div class="row mt-5 mb-5 me-auto">
                <div class="col-md-5 form-group" style="position: absolute; left:56%; transform: translatex(-50%);">
                    <label>
                        <h4>Sign Up</h4>
                    </label>
                </div>
            </div>
            <div class="row mt-2 me-auto d-flex justify-content-around">
                <div class="col-md-4 form-group ">
                    <input type="text" class="form-control" name="username" value="" placeholder="Full Name" id="username" required>
                    <span id="errname"></span>
                </div>
            </div>
            <div class="row me-auto mt-4 d-flex justify-content-around">
                <div class="col-md-4 form-group ">
                    <input type="email" class="form-control" name="signupemail" value="" required placeholder="Email Id" id="signupemail">
                    <span id="errUid"></span>
                </div>
            </div>
            <div class="row mt-4 me-auto d-flex justify-content-around">
                <div class="col-md-4 form-group ">
                    <input type="Password" class="form-control" name="pwd" required placeholder="Password (atleast 6 characters)" id="pwd">
                    <span id="errpwd"></span>
                </div>
            </div>

            <div class="row mt-4 d-flex justify-content-around">
                <div class="col-md-4 form-group">
                    <input type="submit" class="btn btn-primary btn-outline-success form-control" value="CREATE ACCOUNT" name="registration" id="signup" style="color:white;">
                    <form class="d-flex">
                        <label class="form-text float-end" type="button">Have a Account? <a href="">Sign In</a></label>
                    </form>
                </div>
            </div>
        </div>
    </form>
</body>

</html>
