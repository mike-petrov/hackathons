<?php include 'header.php'; ?>


<div class="container">
    <div class="container_flex container_flex_rating">
        <div class="block">
            <div class="block_title">Фильтр</div>
            <form action="/platform/rating.php" method="post">
                <div class="block_content block_content_filter">
                   <ul>
                       <li><button name="total" class="filter_box">Общий</button></li>
                       <li><button name="programmer" class="filter_box">Программист</button></li>
                       <li><button name="designer" class="filter_box">Дизайнер</button></li>
                       <li><button name="manager" class="filter_box">Менеджер</button></li>
                       <li><button name="speaker" class="filter_box">Спикер</button></li>

                   </ul>
                </div>
            </form>
        </div>
        <div class="block">
            <div class="block_title block_title_rating">Рейтинг участников</div>
            <div class="block_content">
                <?php
                    if(isset($_POST["programmer"])){
                        $connect = mysqli_connect('localhost','u388850115_mike','Misha159','u388850115_base');
                        $query = mysqli_query($connect, "SELECT `name`, `surname`, `programmer`, `designer`, `manager`, `speaker`, `total` FROM `users_members` ORDER BY `programmer` DESC;");
                        $color1 = '#edf0f7';
                        $color2 = '#fff';
                        $color3 = '#fff';
                        $color4 = '#fff';
                        $color5 = '#fff';
                    }
                    elseif(isset($_POST["designer"])){
                        $connect = mysqli_connect('localhost','u388850115_mike','Misha159','u388850115_base');
                        $query = mysqli_query($connect, "SELECT `name`, `surname`, `programmer`, `designer`, `manager`, `speaker`, `total` FROM `users_members` ORDER BY `designer` DESC;");
                        $color1 = '#fff';
                        $color2 = '#edf0f7';
                        $color3 = '#fff';
                        $color4 = '#fff';
                        $color5 = '#fff';
                    }
                    elseif(isset($_POST["manager"])){
                        $connect = mysqli_connect('localhost','u388850115_mike','Misha159','u388850115_base');
                        $query = mysqli_query($connect, "SELECT `name`, `surname`, `programmer`, `designer`, `manager`, `speaker`, `total` FROM `users_members` ORDER BY `manager` DESC;");
                        $color1 = '#fff';
                        $color2 = '#fff';
                        $color3 = '#edf0f7';
                        $color4 = '#fff';
                        $color5 = '#fff';
                    }
                    elseif(isset($_POST["speaker"])){
                        $connect = mysqli_connect('localhost','u388850115_mike','Misha159','u388850115_base');
                        $query = mysqli_query($connect, "SELECT `name`, `surname`, `programmer`, `designer`, `manager`, `speaker`, `total` FROM `users_members` ORDER BY `speaker` DESC;");
                        $color1 = '#fff';
                        $color2 = '#fff';
                        $color3 = '#fff';
                        $color4 = '#edf0f7';
                        $color5 = '#fff';
                    }
                    elseif(isset($_POST["total"])){
                        $connect = mysqli_connect('localhost','u388850115_mike','Misha159','u388850115_base');
                        $query = mysqli_query($connect, "SELECT `name`, `surname`, `programmer`, `designer`, `manager`, `speaker`, `total` FROM `users_members` ORDER BY `total` DESC;");
                        $color1 = '#fff';
                        $color2 = '#fff';
                        $color3 = '#fff';
                        $color4 = '#fff';
                        $color5 = '#edf0f7';
                    }
                    else {
                        $connect = mysqli_connect('localhost','u388850115_mike','Misha159','u388850115_base');
                        $query = mysqli_query($connect, "SELECT `name`, `surname`, `programmer`, `designer`, `manager`, `speaker`, `total` FROM `users_members` ORDER BY `total` DESC;");
                        $color1 = '#fff';
                        $color2 = '#fff';
                        $color3 = '#fff';
                        $color4 = '#fff';
                        $color5 = '#edf0f7';
                    }
                ?>
                <table>
                    <tr>
                        <th>Имя</th>
                        <th>Фамилия</th>
                        <th style="background: <?php echo $color1; ?>">Программист</th>
                        <th style="background: <?php echo $color2; ?>">Дизайнер</th>
                        <th style="background: <?php echo $color3; ?>">Менеджер</th>
                        <th style="background: <?php echo $color4; ?>">Спикер</th>
                        <th style="background: <?php echo $color5; ?>">Общий</th>
                    </tr>
                    <?php while($data = mysqli_fetch_array($query)) : ?>
                        <tr>
                            <th><?php echo $data[name]; ?></th>
                            <th><?php echo $data[surname]; ?></th>
                            <th style="background: <?php echo $color1; ?>"><?php echo $data[programmer]; ?></th>
                            <th style="background: <?php echo $color2; ?>"><?php echo $data[designer]; ?></th>
                            <th style="background: <?php echo $color3; ?>"><?php echo $data[manager]; ?></th>
                            <th style="background: <?php echo $color4; ?>"><?php echo $data[speaker]; ?></th>
                            <th style="background: <?php echo $color5; ?>"><?php echo $data[total]; ?></th>
                        </tr>
                    <?php endwhile; ?>
                </table>
            </div>
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>