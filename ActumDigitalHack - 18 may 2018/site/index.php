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
        <div class="container container_banner">
                <div class="container_flex flex_banner">
                    <div class="content_banner">
                        
                        <form action="/" method="post">
                            <div class="title">Scoring platform</div>
                            <input name="mail" class="input_callback" type="text" placeholder="Почта" required/>
                            <input name="password" class="input_callback" type="text" placeholder="Пароль" required/>
                            <button name="submit" class="button btn_banner">Вход</button>
                            <?php
                                if(isset($_POST["submit"])){
                                    
                                    $post_mail = $_POST["mail"];
                                    $post_password = $_POST["password"];
                                    
                                    $connect = mysqli_connect('localhost','u388850115_mike','Misha159','u388850115_base');
                                    $query = mysqli_query($connect, "SELECT `password` FROM `users_members` WHERE `mail` = '$post_mail'");
                                    $data = mysqli_fetch_assoc($query);
                                    if($post_password === $data[password]){
                                        echo "Успешно";
                                        session_start();
                                        $_SESSION['loggedIn'] = true;
                                        $connect = mysqli_connect('localhost','u388850115_mike','Misha159','u388850115_base');
                                        $query = mysqli_query($connect, "SELECT `name`,`surname`,`programmer`,`designer`,`manager`,`speaker`,`total`,`team`,`role` FROM `users_members` WHERE `mail` = '$post_mail'");
                                        $data = mysqli_fetch_assoc($query);
                                        $_SESSION['name'] = $data[name];
                                        $_SESSION['surname'] = $data[surname];
                                        $_SESSION['programmer'] = $data[programmer];
                                        $_SESSION['designer'] = $data[designer];
                                        $_SESSION['manager'] = $data[manager];
                                        $_SESSION['speaker'] = $data[speaker];
                                        $_SESSION['total'] = $data[total];
                                        $_SESSION['team'] = $data[team];
                                        $_SESSION['mail'] = $post_mail;
                                        $_SESSION['role'] = $data[role];
                                        header("Location: platform/profile.php");
                                    } else {
                                        echo "Ошибка входа";
                                    }
                                }
                            ?>
                        </form>
                        <a href="/registration.php" class="">Регистрация</a>
                    </div>
            </div>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </body>
</html>