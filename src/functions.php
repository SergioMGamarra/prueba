<?php
/**
 * Created by PhpStorm.
 * User: Sergio
 * Date: 18/10/15
 * Time: 23:49
 */

    $username = $_POST['username'];
    $password = $_POST['password'];
    // Establishing Connection with Server by passing server_name, user_id and password as a parameter
    $connection = mysql_connect("localhost", "root", "root");
    // To protect MySQL injection for Security purpose
    $username = stripslashes($username);
    $password = stripslashes($password);
    $username = mysql_real_escape_string($username);
    $password = mysql_real_escape_string($password);
    // Selecting Database
    $db = mysql_select_db("tareas", $connection);
    // SQL query to fetch information of registerd users and finds user match.
    $query = mysql_query("select * from users where pass='$password' AND nombre='$username'", $connection);
    $rows = mysql_num_rows($query);
    echo "Filas: ".$rows;
    if ($rows == 1) {
        $_SESSION['login_user']=$username; // Initializing Session
        echo "<script language='javascript'>window.location='../prueba.php'</script>";
    } else {
        $error = "Username or Password is invalid";
        echo "Error". $error;
    }
    mysql_close($connection); // Closing Connection


