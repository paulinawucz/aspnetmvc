<?php

session_start();

if (!isset($_SESSION['remember']))
{
    header('Location: index.php');
    exit();
}


?>

<!DOCTYPE HTML>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width-device-width, initial-scale-1.0" />
    <title>ASP.NET MVC</title>
    <meta name="description" content="Everything you want to know about ASP.NET MVC is here... Welcome and enjoy.">
    <meta name="keywords" content="ASP.NET MVC, .NET, MVC, Model-View-Controller, framework, Microsoft" >
    <meta http-equiv="X-UA-Compatibile" content="IE=edge,chrome=1" >
    <link rel="stylesheet" href="style.css" />
    <link href="https://fonts.googleapis.com/css?family=Anton|Lato" rel="stylesheet"/>
</head>


<body>

    <?php

    echo "<p> Welcome ".$_SESSION['user'].'! [<a href="wyloguj.php">Log out</a>]</p>';
    echo "<p> E-mail: ".$_SESSION['email']."!";
    echo "<p> Number of premium days: ".$_SESSION['dnipremium']."!";

    ?>


</body >
</html >