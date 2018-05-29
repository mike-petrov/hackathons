<!DOCTYPE html>
<html>
    <head>
        <title>Scoring platform</title>
        <meta charset='utf-8'>
        <link rel="icon" href="/img/favicon.png" >
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/style.css" >
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Monda" rel="stylesheet">
        <link rel="stylesheet" href="css/font-awesome.min.css">
    </head>
    <body>
        <div class="container container_banner">
                <div class="container_flex flex_banner">
                    <div class="content_banner">
                        
                        <form action="/registration.php" method="post">
                            <div class="title">Scoring platform</div>
                            <select name="role" class="input_callback">
                                <option>Участник</option>
                                <option>Организатор</option>
                            </select>
                            <input class="input_callback" type="text" name="name" placeholder="Имя" required/>
                            <input class="input_callback" type="text" name="surname" placeholder="Фамилия" required/>
                            <input class="input_callback" type="text" name="mail" placeholder="Почта" required/>
                            <input class="input_callback" type="text" name="password" placeholder="Пароль" required/>
                            <button name="submit" class="button btn_banner">Регистрация</button>
                            <?php
                                if(isset($_POST["submit"])){
                                    
                                    $post_role = $_POST["role"];
                                    $post_name = $_POST["name"];
                                    $post_surname = $_POST["surname"];
                                    $post_mail = $_POST["mail"];
                                    $post_password = $_POST["password"];
                                    
                                    $connect = mysqli_connect('localhost','u388850115_mike','Misha159','u388850115_base');
                                    $query = mysqli_query($connect, "INSERT INTO `users_members` (`id`, `name`, `surname`, `mail`, `password`, `programmer`, `programmer_last`, `designer`, `designer_last`, `manager`, `manager_last`, `speaker`, `speaker_last`, `total`, `team`, `marked`, `role`) VALUES ('', $post_name, $post_surname, $post_mail, $post_password, '', '', '', '', '', '', '', '', '', '', '', '$post_role');");
                                    echo "Успешно";
                                }
                            ?>
                        </form>
                            <a href="/"  class="">Вход</a>
                    </div>
            </div>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </body>
</html>