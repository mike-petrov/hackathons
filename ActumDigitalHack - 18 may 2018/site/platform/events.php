<?php include 'header.php'; ?>



<div class="container">
    <div class="container_flex container_flex_rating">
        
        <div class="block">
            <div class="block_title block_title_rating">Рейтинг мероприятий</div>
            <div class="block_content">
                <?php
                    $connect = mysqli_connect('localhost','u388850115_mike','Misha159','u388850115_base');
                    $query = mysqli_query($connect, "SELECT `name`,`star_atm`,`star_org`,`star_prize`,`star_food`,`star_total`,`count_vote` FROM `hackatons` ORDER BY `count_vote` DESC;");
                ?>
                <table>
                    <tr>
                        <th>Название</th>
                        <th>Атмосфера</th>
                        <th>Организация</th>
                        <th>Призы</th>
                        <th>Питание</th>
                        <th>Общее впечатление</th>
                        <th style="background: #edf0f7;">Количество проголосовавших</th>
                    </tr>
                    <?php while($data = mysqli_fetch_array($query)) : ?>
                        <tr>
                            <th><?php echo $data[name]; ?></th>
                            <th><?php echo $data[star_atm]; ?></th>
                            <th><?php echo $data[star_org]; ?></th>
                            <th><?php echo $data[star_prize]; ?></th>
                            <th><?php echo $data[star_food]; ?></th>
                            <th><?php echo $data[star_total]; ?></th>
                            <th style="background: #edf0f7;"><?php echo $data[count_vote]; ?></th>
                        </tr>
                    <?php endwhile; ?>
                </table>
            </div>
        </div>
        <div class="block">
            <div class="block_title">Оценить последний хакатон</div>
            <div class="block_content">
                    <form action="/platform/events.php" method="post">
                        <table>
                            <tr>
                                <th>Атмосфера:</th><th>
                                    <select name="star_atm" class="input_callback" placeholder="100">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </th>
                            </tr>
                            <tr>
                                <th>Организация:</th><th>
                                    <select name="star_org" class="input_callback" placeholder="100">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </th>
                            </tr>
                            <tr>
                                <th>Призы:</th><th>
                                    <select name="star_prize" class="input_callback" placeholder="100">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </th>
                            </tr>
                            <tr>
                                <th>Питание:</th><th>
                                    <select name="star_food" class="input_callback" placeholder="100">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </th>
                            </tr>
                            <tr>
                                <th>Общее впечатление:</th><th>
                                    <select name="star_total" class="input_callback" placeholder="100">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </th>
                            </tr>
                        </table>
                        <button name="stars" class="btn_banner">Отправить</button>
                        <?php 
                            if(isset($_POST["stars"])){
                                $star_atm = $_POST["star_atm"];
                                $star_org = $_POST["star_org"];
                                $star_prize = $_POST["star_prize"];
                                $star_food = $_POST["star_food"];
                                $star_total = $_POST["star_total"];

                                $connect = mysqli_connect('localhost','u388850115_mike','Misha159','u388850115_base');
                                $query = mysqli_query($connect, "SELECT `star_atm`,`star_org`,`star_prize`,`star_food`,`star_total`,`count_vote` FROM `hackatons` WHERE `name` = 'Hackatons #1'");
                                $data = mysqli_fetch_assoc($query);
                                if (!$data[count_vote] == '0') {
                                    $star_atm = ($data[star_atm]*$data[count_vote]+$star_atm)/($data[count_vote]+1);
                                    $star_org = ($data[star_org]*$data[count_vote]+$star_org)/($data[count_vote]+1);
                                    $star_prize = ($data[star_prize]*$data[count_vote]+$star_prize)/($data[count_vote]+1);
                                    $star_food = ($data[star_food]*$data[count_vote]+$star_food)/($data[count_vote]+1);
                                    $star_total = ($data[star_total]*$data[count_vote]+$star_total)/($data[count_vote]+1);
                                }
                                $count_vote = $data[count_vote]+1;
                                $connect = mysqli_connect('localhost','u388850115_mike','Misha159','u388850115_base');
                                $query = mysqli_query($connect, "UPDATE `hackatons` SET  `star_atm` = $star_atm, `star_org` = $star_org, `star_prize` = $star_prize, `star_food` = $star_food, `star_total` = $star_total, `count_vote` = $count_vote  WHERE `name` = 'Hackatons #1';");
                                header("Location: /platform/events.php");
                            }
                        ?>
                 </form>
            </div>
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>