<?php include 'header.php'; ?>


<div class="container">
    <div class="container_flex">
        <div class="block">
            <div class="block_title">Победители:</div>
            <div class="block_content">
                <form action="/platform/mentor.php" method="post">
                        <table>
                            <tr>
                                <th>1 место:</th>
                                <th>
                                    <select name="first" class="input_callback" placeholder="100">
                                        <?php
                                            $data_team = 'team_prosto';
                                            $connect = mysqli_connect('localhost','u388850115_mike','Misha159','u388850115_base');
                                            $query = mysqli_query($connect, "SELECT `team` FROM `users_members` ORDER BY `team` DESC");
                                            while($data = mysqli_fetch_array($query)) : 
                                            if($data_team != $data[team]) :
                                            $data_team = $data[team];
                                        ?>    
                                            <option><?php echo $data[team]; ?></option>
                                        <?php endif; endwhile; ?>
                                    </select>
                                </th>
                            </tr>
                            <tr>
                                <th>2 место:</th>
                                <th>
                                    <select name="second" class="input_callback" placeholder="100">
                                        <?php
                                            $data_team = 'team_prosto';
                                            $connect = mysqli_connect('localhost','u388850115_mike','Misha159','u388850115_base');
                                            $query = mysqli_query($connect, "SELECT `team` FROM `users_members` ORDER BY `team` DESC");
                                            while($data = mysqli_fetch_array($query)) : 
                                            if($data_team != $data[team]) :
                                            $data_team = $data[team];
                                        ?>    
                                            <option><?php echo $data[team]; ?></option>
                                        <?php endif; endwhile; ?>
                                    </select>
                                </th>
                            </tr>
                            <tr>
                                <th>3 место:</th>
                                <th>
                                    <select name="third" class="input_callback" placeholder="100">
                                        <?php
                                            $data_team = 'team_prosto';
                                            $connect = mysqli_connect('localhost','u388850115_mike','Misha159','u388850115_base');
                                            $query = mysqli_query($connect, "SELECT `team` FROM `users_members` ORDER BY `team` DESC");
                                            while($data = mysqli_fetch_array($query)) : 
                                            if($data_team != $data[team]) :
                                            $data_team = $data[team];
                                        ?>    
                                            <option><?php echo $data[team]; ?></option>
                                        <?php endif; endwhile; ?>
                                    </select>
                                </th>
                            </tr>
                        </table>
                        <button name="stars_team" class="btn_banner">Отправить</button>
                        <?php 
                            if(isset($_POST["stars_team"])){
                                
                                $post_first = $_POST["first"];
                                $post_second = $_POST["second"];
                                $post_third = $_POST["third"];
                                
                                //FIRST
                                $connect = mysqli_connect('localhost','u388850115_mike','Misha159','u388850115_base');
                                $query = mysqli_query($connect, "SELECT `mail`, `programmer`, `programmer_last`, `designer`, `designer_last`, `manager`, `manager_last`, `speaker`, `speaker_last`, `total` FROM `users_members` WHERE `team` = '$post_first'");
                                while($data = mysqli_fetch_array($query)) {
                                    
                                    if($data[programmer_last]+$data[designer_last]+$data[manager_last]+$data[speaker_last] != 0) {
                                        $programmer = $data[programmer]+($data[programmer_last]*9);
                                        $designer = $data[designer]+($data[designer_last]*9);
                                        $manager = $data[manager]+($data[manager_last]*9);
                                        $speaker = $data[speaker]+($data[speaker_last]*9);
                                        $programmer_last = $data[programmer_last]*10;
                                        $designer_last = $data[designer_last]*10;
                                        $manager_last = $data[manager_last]*10;
                                        $speaker_last = $data[speaker_last]*10;
                                        $total = 90 + $data[total];
                                        $connect_2 = mysqli_connect('localhost','u388850115_mike','Misha159','u388850115_base');
                                        $query_2 = mysqli_query($connect_2, "UPDATE `users_members` SET  `programmer` = '$programmer', `programmer_last` = '$programmer_last', `designer` = '$designer', `designer_last` = '$designer_last', `manager` = '$manager', `manager_last` = '$manager_last', `speaker` = '$speaker', `speaker_last` = '$speaker_last', `total` = '$total'  WHERE `team` = '$post_first' AND `mail` = '$data[mail]'");
                                    }
                                }
                                //SECOND
                                $connect = mysqli_connect('localhost','u388850115_mike','Misha159','u388850115_base');
                                $query = mysqli_query($connect, "SELECT `mail`, `programmer`, `programmer_last`, `designer`, `designer_last`, `manager`, `manager_last`, `speaker`, `speaker_last`, `total` FROM `users_members` WHERE `team` = '$post_second'");
                                while($data = mysqli_fetch_array($query)) {
                                    
                                    if($data[programmer_last]+$data[designer_last]+$data[manager_last]+$data[speaker_last] != 0) {
                                        $programmer = $data[programmer]+($data[programmer_last]*7);
                                        $designer = $data[designer]+($data[designer_last]*7);
                                        $manager = $data[manager]+($data[manager_last]*7);
                                        $speaker = $data[speaker]+($data[speaker_last]*7);
                                        $programmer_last = $data[programmer_last]*8;
                                        $designer_last = $data[designer_last]*8;
                                        $manager_last = $data[manager_last]*8;
                                        $speaker_last = $data[speaker_last]*8;
                                        $total = 70 + $data[total];
                                        $connect_2 = mysqli_connect('localhost','u388850115_mike','Misha159','u388850115_base');
                                        $query_2 = mysqli_query($connect_2, "UPDATE `users_members` SET  `programmer` = '$programmer', `programmer_last` = '$programmer_last', `designer` = '$designer', `designer_last` = '$designer_last', `manager` = '$manager', `manager_last` = '$manager_last', `speaker` = '$speaker', `speaker_last` = '$speaker_last', `total` = '$total'  WHERE `team` = '$post_second' AND `mail` = '$data[mail]'");
                                    }
                                }
                                //THIRD
                                $connect = mysqli_connect('localhost','u388850115_mike','Misha159','u388850115_base');
                                $query = mysqli_query($connect, "SELECT `mail`, `programmer`, `programmer_last`, `designer`, `designer_last`, `manager`, `manager_last`, `speaker`, `speaker_last`, `total` FROM `users_members` WHERE `team` = '$post_third'");
                                while($data = mysqli_fetch_array($query)) {
                                    
                                    if($data[programmer_last]+$data[designer_last]+$data[manager_last]+$data[speaker_last] != 0) {
                                        $programmer = $data[programmer]+($data[programmer_last]*5);
                                        $designer = $data[designer]+($data[designer_last]*5);
                                        $manager = $data[manager]+($data[manager_last]*5);
                                        $speaker = $data[speaker]+($data[speaker_last]*5);
                                        $programmer_last = $data[programmer_last]*6;
                                        $designer_last = $data[designer_last]*6;
                                        $manager_last = $data[manager_last]*6;
                                        $speaker_last = $data[speaker_last]*6;
                                        $total = 50 + $data[total];
                                        $connect_2 = mysqli_connect('localhost','u388850115_mike','Misha159','u388850115_base');
                                        $query_2 = mysqli_query($connect_2, "UPDATE `users_members` SET  `programmer` = '$programmer', `programmer_last` = '$programmer_last', `designer` = '$designer', `designer_last` = '$designer_last', `manager` = '$manager', `manager_last` = '$manager_last', `speaker` = '$speaker', `speaker_last` = '$speaker_last', `total` = '$total'  WHERE `team` = '$post_third' AND `mail` = '$data[mail]'");
                                    }
                                }
                            }
                        ?>
                 </form>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>