<?php
    if($_GET["name"]) {
        header("Access-Control-Allow-Origin: *");

        $name = $_GET["name"];
        $quantity = $_GET["quantity"];
        $price = $_GET["price"];
        $type = $_GET["type"];
        $id_taker = null;

        //current date
        $date = date("y.m.d");

        //current time
        $time = date("h:i:s");

        //connection
        $connect = mysqli_connect('localhost','uXXXXXXX_dsxt','XXXXX','uXXXXXXX_dsxt');
        mysqli_set_charset($connect, "utf8");

        //insert info
        $query = mysqli_query($connect, "INSERT INTO `orders` (`id`, `date`, `time`, `name`, `quantity`, `price`, `type`, `show`) VALUES (NULL, '$date', '$time', '$name', '$quantity', '$price', '$type', 'false')");

        //get id order
        $query = mysqli_query($connect, "SELECT `id` FROM `orders` ORDER BY `id` DESC");
        $data = mysqli_fetch_array($query);

        if($type === 'buy') {
            $query = mysqli_query($connect, "SELECT `id`, `price` FROM `orders` WHERE `show` = 'true' AND `type` = 'sell' AND `name` = '$name' ORDER BY `price` DESC");
            $data_check = mysqli_fetch_array($query);
            if($price <= $data_check[price]) {
                $id_taker = $data_check['id'];
            }
        }

        if($type === 'sell') {
            $query = mysqli_query($connect, "SELECT `id`, `price` FROM `orders` WHERE `show` = 'true' AND `type` = 'buy' AND `name` = '$name' ORDER BY `price`");
            $data_check = mysqli_fetch_array($query);
            if($price < $data_check[price]) {
                $id_taker = $data_check['id'];
            }
        }

        $id_maker = $data['id'];

        //response
        echo json_encode([$id_maker,$id_taker]);
    }
?>
