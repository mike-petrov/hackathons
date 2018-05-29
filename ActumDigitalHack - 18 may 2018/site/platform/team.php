<?php include 'header.php'; ?>

<div class="container">
    <div class="container_flex">
       <form action="/platform/team.php" class="form_team" method="post">
        <?php
            $team = $_SESSION['team'];
            $connect = mysqli_connect('localhost','u388850115_mike','Misha159','u388850115_base');
            $query = mysqli_query($connect, "SELECT `name`,`surname` FROM `users_members` WHERE `team` = '$team' AND `marked` = '0'");
            $id = 0;
            while($data = mysqli_fetch_array($query)) :
                $id = $id + 1;
        ?>
        <div class="block">
            <div class="block_title"><?php echo $data[name].' '.$data[surname]; ?></div>
            <div class="block_content">
                <table>
                    <tr>
                        <th>Программист:</th>
                        <th>
                            <select name="programmer_<?php echo $id; ?>" class="input_callback">
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th>Дизайнер:</th>
                        <th>
                            <select name="designer_<?php echo $id; ?>" class="input_callback">
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th>Менеджер:</th>
                        <th>
                            <select name="manager_<?php echo $id; ?>" class="input_callback">
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th>Спикер:</th>
                        <th>
                            <select name="speaker_<?php echo $id; ?>" class="input_callback">
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                            </select>
                        </th>
                    </tr>
                    <tr>
                        <th>Участвовал:</th>
                        <th>
                            <input name="take_part_<?php echo $id; ?>" type="checkbox" />
                        </th>
                    </tr>
                </table>
            </div>
        </div>
        <?php endwhile; ?>
            <button name="marked">Оценить</button>
        </form>
        <?php 
            if(isset($_POST["marked"])){
                $team = $_SESSION['team'];
                $connect = mysqli_connect('localhost','u388850115_mike','Misha159','u388850115_base');
                $query = mysqli_query($connect, "SELECT `name`,`surname`,`mail` FROM `users_members` WHERE `team` = '$team' AND `marked` = '0'");
                $id = 0; $result = 0;
                while($data = mysqli_fetch_array($query)) {
                    $id = $id + 1;
                    $sum = $_POST["programmer_".$id]+$_POST["designer_".$id]+$_POST["manager_".$id]+$_POST["speaker_".$id];
                    $take_part = $_POST["take_part_".$id];
                    if(($sum != 10)&&($take_part)) {
                        echo "Вы должны использовать все 10 баллов на участника";
                        $result = 1;
                    } 
                }
                if($result == 0) {
                    $connect = mysqli_connect('localhost','u388850115_mike','Misha159','u388850115_base');
                    $query = mysqli_query($connect, "SELECT `name`,`surname`,`mail` FROM `users_members` WHERE `team` = '$team' AND `marked` = '0'");
                    $id = 0;
                    while($data = mysqli_fetch_array($query)) {
                        $id = $id+1;
                        $take_part = $_POST["take_part_".$id];
                        if($take_part) {
                            $post_programmer_last = $_POST["programmer_".$id];
                            $post_designer_last = $_POST["designer_".$id];
                            $post_manager_last = $_POST["manager_".$id];
                            $post_speaker_last = $_POST["speaker_".$id];
                            $connect_2 = mysqli_connect('localhost','u388850115_mike','Misha159','u388850115_base');
                            $query_2 = mysqli_query($connect_2, "UPDATE `users_members` SET  `programmer_last` = $post_programmer_last,`designer_last` = $post_designer_last,`manager_last` = $post_manager_last,`speaker_last` = $post_speaker_last,`marked` = '1'  WHERE `mail` = $data[mail]");
                            
                            $connect_2 = mysqli_connect('localhost','u388850115_mike','Misha159','u388850115_base');
                            $query_2 = mysqli_query($connect_2, "SELECT `programmer`,`designer`,`manager`,`speaker`,`total` FROM `users_members` WHERE `mail` = $data[mail]");
                            $data_2 = mysqli_fetch_assoc($query_2);
                            
                            $post_programmer = $post_programmer_last + $data_2[programmer];
                            $post_designer = $post_designer_last + $data_2[designer];
                            $post_manager = $post_manager_last + $data_2[manager];
                            $post_speaker = $post_speaker_last + $data_2[speaker];
                            $post_total = 10 + $data_2[total];
                            
                            $connect_2 = mysqli_connect('localhost','u388850115_mike','Misha159','u388850115_base');
                            $query_2 = mysqli_query($connect_2, "UPDATE `users_members` SET  `programmer` = '$post_programmer',`designer` = '$post_designer',`manager` = '$post_manager',`speaker` = '$post_speaker',`total` = '$post_total'  WHERE `mail` = $data[mail]");
                        } else {
                            $connect_1 = mysqli_connect('localhost','u388850115_mike','Misha159','u388850115_base');
                            $query_1 = mysqli_query($connect_1, "UPDATE `users_members` SET `marked` = '1'  WHERE `mail` = $data[mail]");
                        }
                    }
                 }
                 header("Location: /platform/team.php");
             }
        ?>
    </div>
</div>

   
<?php include 'footer.php'; ?>