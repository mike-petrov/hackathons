<?php
$command=$_POST['command'];
$connect = mysqli_connect('localhost','u388850115_mike','Misha159','u388850115_base');
switch($command) {
	case "download":
        
        $mail_1 = 1;
        $post_programmer_last_1 = $_POST['programmer_1'];
        $post_designer_last_1 = $_POST['designer_1'];
        $post_manager_last_1 = $_POST['manager_1'];
	    $post_speaker_last_1 = $_POST['speaker_1'];
	    $post_take_part_1 = $_POST['take_part_1'];
        
        $mail_2 = 2;
        $post_programmer_last_2 = $_POST['programmer_2'];
        $post_designer_last_2 = $_POST['designer_2'];
        $post_manager_last_2 = $_POST['manager_2'];
	    $post_speaker_last_2 = $_POST['speaker_2'];
	    $post_take_part_2 = $_POST['take_part_2'];
        
        $mail_3 = 3;
        $post_programmer_last_3 = $_POST['programmer_3'];
        $post_designer_last_3 = $_POST['designer_3'];
        $post_manager_last_3 = $_POST['manager_3'];
	    $post_speaker_last_3 = $_POST['speaker_3'];
	    $post_take_part_3 = $_POST['take_part_3'];
        
        $mail_4 = 4;
        $post_programmer_last_4 = $_POST['programmer_4'];
        $post_designer_last_4 = $_POST['designer_4'];
        $post_manager_last_4 = $_POST['manager_4'];
	    $post_speaker_last_4 = $_POST['speaker_4'];
	    $post_take_part_4 = $_POST['take_part_4'];
        
        if($post_take_part_1 == "Да") {
            $query = mysqli_query($connect, "UPDATE `users_members` SET  `programmer_last` = $post_programmer_last_1,`designer_last` = $post_designer_last_1,`manager_last` = $post_manager_last_1,`speaker_last` = $post_speaker_last_1,`marked` = '1'  WHERE `mail` = $mail_1");
        
            $query_2 = mysqli_query($connect, "SELECT `programmer`,`designer`,`manager`,`speaker`,`total` FROM `users_members` WHERE `mail` = $mail_1");
            $data_2 = mysqli_fetch_assoc($query_2);

            $post_programmer = $post_programmer_last_1 + $data_2[programmer];
            $post_designer = $post_designer_last_1 + $data_2[designer];
            $post_manager = $post_manager_last_1 + $data_2[manager];
            $post_speaker = $post_speaker_last_1 + $data_2[speaker];
            $post_total = 10 + $data_2[total];
            
            $query_2 = mysqli_query($connect, "UPDATE `users_members` SET  `programmer` = '$post_programmer',`designer` = '$post_designer',`manager` = '$post_manager',`speaker` = '$post_speaker',`total` = '$post_total'  WHERE `mail` = $mail_1");
        } else {
            $query_2 = mysqli_query($connect, "UPDATE `users_members` SET `marked` = '1'  WHERE `mail` = $mail_1");
        }
        
        if($post_take_part_2 == "Да") {
            $query = mysqli_query($connect, "UPDATE `users_members` SET  `programmer_last` = $post_programmer_last_2,`designer_last` = $post_designer_last_2,`manager_last` = $post_manager_last_2,`speaker_last` = $post_speaker_last_2,`marked` = '1'  WHERE `mail` = $mail_2");
        
            $query_2 = mysqli_query($connect, "SELECT `programmer`,`designer`,`manager`,`speaker`,`total` FROM `users_members` WHERE `mail` = $mail_2");
            $data_2 = mysqli_fetch_assoc($query_2);

            $post_programmer = $post_programmer_last_2 + $data_2[programmer];
            $post_designer = $post_designer_last_2 + $data_2[designer];
            $post_manager = $post_manager_last_2 + $data_2[manager];
            $post_speaker = $post_speaker_last_2 + $data_2[speaker];
            $post_total = 10 + $data_2[total];
            
            $query_2 = mysqli_query($connect, "UPDATE `users_members` SET  `programmer` = '$post_programmer',`designer` = '$post_designer',`manager` = '$post_manager',`speaker` = '$post_speaker',`total` = '$post_total'  WHERE `mail` = $mail_2");
        } else {
            $query_2 = mysqli_query($connect, "UPDATE `users_members` SET `marked` = '1'  WHERE `mail` = $mail_2");
        }
        
        if($post_take_part_3 == "Да") {
            $query = mysqli_query($connect, "UPDATE `users_members` SET  `programmer_last` = $post_programmer_last_3,`designer_last` = $post_designer_last_3,`manager_last` = $post_manager_last_3,`speaker_last` = $post_speaker_last_3,`marked` = '1'  WHERE `mail` = $mail_3");
        
            $query_2 = mysqli_query($connect, "SELECT `programmer`,`designer`,`manager`,`speaker`,`total` FROM `users_members` WHERE `mail` = $mail_3");
            $data_2 = mysqli_fetch_assoc($query_2);

            $post_programmer = $post_programmer_last_3 + $data_2[programmer];
            $post_designer = $post_designer_last_3 + $data_2[designer];
            $post_manager = $post_manager_last_3 + $data_2[manager];
            $post_speaker = $post_speaker_last_3 + $data_2[speaker];
            $post_total = 10 + $data_2[total];
            
            $query_2 = mysqli_query($connect, "UPDATE `users_members` SET  `programmer` = '$post_programmer',`designer` = '$post_designer',`manager` = '$post_manager',`speaker` = '$post_speaker',`total` = '$post_total'  WHERE `mail` = $mail_3");
        } else {
            $query_2 = mysqli_query($connect, "UPDATE `users_members` SET `marked` = '1'  WHERE `mail` = $mail_3");
        }
        
        if($post_take_part_4 == "Да") {
            $query = mysqli_query($connect, "UPDATE `users_members` SET  `programmer_last` = $post_programmer_last_4,`designer_last` = $post_designer_last_4,`manager_last` = $post_manager_last_4,`speaker_last` = $post_speaker_last_4,`marked` = '1'  WHERE `mail` = $mail_4");
        
            $query_2 = mysqli_query($connect, "SELECT `programmer`,`designer`,`manager`,`speaker`,`total` FROM `users_members` WHERE `mail` = $mail_4");
            $data_2 = mysqli_fetch_assoc($query_2);

            $post_programmer = $post_programmer_last_4 + $data_2[programmer];
            $post_designer = $post_designer_last_4 + $data_2[designer];
            $post_manager = $post_manager_last_4 + $data_2[manager];
            $post_speaker = $post_speaker_last_4 + $data_2[speaker];
            $post_total = 10 + $data_2[total];
            
            $query_2 = mysqli_query($connect, "UPDATE `users_members` SET  `programmer` = '$post_programmer',`designer` = '$post_designer',`manager` = '$post_manager',`speaker` = '$post_speaker',`total` = '$post_total'  WHERE `mail` = $mail_4");
        } else {
            $query_2 = mysqli_query($connect, "UPDATE `users_members` SET `marked` = '1'  WHERE `mail` = $mail_4");
        }
        
        echo "OK";
        
break;
}
?>