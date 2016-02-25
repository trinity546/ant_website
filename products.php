<?php

require_once('init.php');
loadScripts();

    $data = array("status" => "not set!");

    if(Utils::isGET()) {
        $pm = new ProductManager();
        $rows = $pm->listProducts();

        $html = "";
        //var_dump($rows);
        foreach($rows as $row) {
            $sku = $row['SKU'];
            $price = $row['item_price'];
            $desc = $row['description'];
            $img = $row['path'];
            $name = $row['name'];
            $html .= "";
        }
        echo $html;
        return;

    } else {
        $data = array("status" => "error", "msg" => "Only GET allowed.");

    }

    echo json_encode($data, JSON_FORCE_OBJECT);

?>
