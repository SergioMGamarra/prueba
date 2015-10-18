<?php
/**
 * Created by PhpStorm.
 * User: Sergio
 * Date: 18/10/15
 * Time: 23:49
 */

?>

<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


    <meta charset="UTF-8">
    <meta name="author" content="Sergio Muñoz Gamarra" >
    <meta name="description" content="Práctica PW 2014/2015 | Web de docencia">

    <title>Login - tasks</title>
</head>
<body>

<div class="container">
    <form action="src/functions.php" method="POST">
        <div class="form-group">
            <label for="username">Username</label>
            <input name="username" type="text" placeholder="" class="form-control" id="username" placeholder="Your username" />
        </div>
        <div class="form-group">
            <label for="password">Email</label>
            <input name="password" type="password" placeholder="" class="form-control" id="password" placeholder="Your email address" />
        </div>

        <button class="btn btn-block btn-danger btn-lg">Send Password</button>
        <button class="btn btn-block btn-danger btn-lg">Cancel</button>
    </form>
</div>


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>