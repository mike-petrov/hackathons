<?php
$command=$_POST['command'];
$connect = mysqli_connect('localhost','u388850115_mike','Misha159','u388850115_base');
switch($command) {
	case "upload":
        
	    $post_mail =  1;
        $query = mysqli_query($connect, "SELECT `team` FROM `users_members` WHERE `mail` = '$post_mail'");
        $data = mysqli_fetch_assoc($query);
        
        $post_team = $data[team];
        
		$query = mysqli_query($connect, "SELECT `name`,`surname` FROM `users_members` WHERE `team` = '$post_team' AND `marked` = '0'");
        while ($data = mysqli_fetch_assoc($query)) :
            echo "|$data[name]|$data[surname]";
        endwhile;
        
break;
}
?>