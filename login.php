<!doctype html>

<?php

?>


<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">-->

    <!-- Optional theme -->
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">-->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="../css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="../css/style.css" rel="stylesheet"
    <!-- JQuery CDN -->
    <!--<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>-->

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>-->


    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../js/mdb.min.js"></script>

    <link rel="stylesheet" href="css/login.css">
</head>
<body>

<div align="center" style="padding-top: 10px">
    <div style="width:400px; border: solid 1px #e0e0e0;" align="left" class="card">
        <div style="background-color: #33b5e5; color: floralwhite; padding:6px; font-family: Arial; font-size: large"
             align="center">
            <p class="h4 mb-4"><b>Sign In</b></p></div>
        <div style="margin:30px">
            <form method="post" action="login-proc.php">
                <label>Username:</label>
                <input type="text" name="username" class="form-control mb-4" placeholder="E-mail" required>
                <label>Password:</label>
                <input type="password" name="password" class="form-control mb-4" placeholder="Password" required>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                            <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
                        </div>
                    <div>
                        <input type="submit" class="btn btn-info btn-rounded" value="Sign In">
                        <p style="font-size: small">Not an Employee?
                            <a href="">Register</a>
                        </p>
                        <div>
                            <!-- Forgot password -->
                            <a href="">Forgot password?</a>
                        </div>
                        <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
                        <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
                        <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
                        <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

                    </div>
                </div>
            </form>

        </div>
    </div>

</div>
</body>
</html>
