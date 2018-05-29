<?php
    session_start();
    if (!$_SESSION["loggedIn"]) {
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Scoring platform</title>
        <meta charset='utf-8'>
        <link rel="icon" href="/img/favicon.png" >
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/style.css" >
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,600" rel="stylesheet">
        <link rel="stylesheet" href="css/font-awesome.min.css">
    </head>
    <body>
       
        <div class="header">
            <div class="header_logo">
                <a href="/"><div class="logo_text">Scoring platform</div></a>
            </div>
            <div class="header_content">
                <ul>
                    <li><a href="profile.php">Профиль</a></li>
                    <li><a href="rating.php">Участники</a></li>
                    <li><a href="events.php">Мероприятия</a></li>
                </ul>
            </div>
            <form action="/platform/header.php" method="post" style="margin-right: 50px;">
                <button name="logout">Выйти</button>
                <?php
                    if(isset($_POST["logout"])){
                        session_start();
                        session_unset();
                        session_destroy();
                        header("Location: http://nvkz-city.esy.es");
                    }
                ?>
            </form>
        </div>