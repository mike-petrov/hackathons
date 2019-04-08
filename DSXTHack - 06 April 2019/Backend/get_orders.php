<?php
    if($_GET["request"]) {
        header("Access-Control-Allow-Origin: *");

        //connection
        $connect = mysqli_connect('localhost','uXXXXXXX_dsxt','XXXXX','uXXXXXXX_dsxt');
        mysqli_set_charset($connect, "utf8");

        //inizialize array
        $json_orders_line = array ();
        $json_orders_buy = array ();
        $json_orders_sell = array ();

        //get orders line
        $query = mysqli_query($connect, "SELECT `id`, `date`, `time`, `name`, `quantity`, `price`, `type`  FROM `orders` WHERE `show` = 'true' ORDER BY `id` DESC LIMIT 50");
        while($data = mysqli_fetch_array($query)) {
            //push order line
            array_push($json_orders_line, array('id'=>$data['id'],'date'=>$data['date'],'time'=>$data['time'],'name'=>$data['name'],'quantity'=>$data['quantity'],'price'=>$data['price'],'type'=>$data['type']));
        }

        //get orders buy
        $query_buy = mysqli_query($connect, "SELECT `id`, `date`, `time`, `name`, `quantity`, `price`, `type`  FROM `orders`  WHERE `type` = 'buy' AND `show` = 'true' ORDER BY `price` DESC");
        while($data_buy = mysqli_fetch_array($query_buy)) {
            //push order buy
            array_push($json_orders_buy, array('id'=>$data_buy['id'],'date'=>$data_buy['date'],'time'=>$data_buy['time'],'name'=>$data_buy['name'],'quantity'=>$data_buy['quantity'],'price'=>$data_buy['price'],'type'=>$data_buy['type']));
        }

        //get orders sell
        $query_sell = mysqli_query($connect, "SELECT `id`, `date`, `time`, `name`, `quantity`, `price`, `type`  FROM `orders` WHERE `type` = 'sell' AND `show` = 'true' ORDER BY `price` DESC");
        while($data_sell = mysqli_fetch_array($query_sell)) {
            //push order sell
            array_push($json_orders_sell, array('id'=>$data_sell['id'],'date'=>$data_sell['date'],'time'=>$data_sell['time'],'name'=>$data_sell['name'],'quantity'=>$data_sell['quantity'],'price'=>$data_sell['price'],'type'=>$data_sell['type']));
        }

        //response
        echo json_encode([$json_orders_line,$json_orders_buy,$json_orders_sell]);
    }
?>
