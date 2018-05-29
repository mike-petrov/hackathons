<?php include 'header.php'; ?>


<div class="container">
    <div class="container_flex">
        <div class="block">
            <div class="block_title">Профиль</div>
            <div class="block_content">
               <table>
                    <tr>
                        <th>Имя:</th><th><?php echo $_SESSION['name']; ?></th>
                    </tr>
                    <tr>
                        <th>Фамилия:</th><th><?php echo $_SESSION['surname']; ?></th>
                    </tr>
                    <tr>
                        <th>Баллы:</th><th><?php echo $_SESSION['total']; ?></th>
                    </tr>
                    <tr>
                        <th>Статус:</th><th><?php echo $_SESSION['role']; ?></th>
                    </tr>
                </table>
            </div>
        </div>
        <div class="block">
            <div class="block_title">Команда</div>
            <div class="block_content">
                <?php
                    $team = $_SESSION['team'];
                    if($team != '') :
                        $connect = mysqli_connect('localhost','u388850115_mike','Misha159','u388850115_base');
                        $query = mysqli_query($connect, "SELECT `name`,`surname` FROM `users_members` WHERE `team` = '$team'");
                ?>
                <div class="block_title block_title_team"><?php echo $team; ?></div>
                <table>
                    <?php while($data = mysqli_fetch_array($query)) : 
                        if(($data[name] != $_SESSION['name'])&&($data[surname] != $_SESSION['surname'])) :
                    ?>
                        <tr>
                            <th><?php echo $data[name]; ?></th>
                            <th><?php echo $data[surname]; ?></th>
                        </tr>
                    <?php 
                        endif;
                        endwhile; 
                        else :
                            echo "Вы не состоите в команде";
                        endif; 
                    ?>
                </table>
                <a href="/platform/team.php"><button class="btn_banner">Оценить участников</button></a>
            </div>
        </div>
        <div class="block">
            <div class="block_title">Статистика</div>
            <div class="block_content">
                <table>
                    <tr>
                        <th>Программист</th>
                        <th>Дизайнер</th>
                        <th>Менеджер</th>
                        <th>Спикер</th>
                        <th style="background: #edf0f7">Общий</th>
                    </tr>
                    <tr>
                        <th><?php echo $_SESSION['programmer'];?></th>
                        <th><?php echo $_SESSION['designer']; ?></th>
                        <th><?php echo $_SESSION['manager']; ?></th>
                        <th><?php echo $_SESSION['speaker']; ?></th>
                        <th style="background: #edf0f7"><?php echo $_SESSION['total']; ?></th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>