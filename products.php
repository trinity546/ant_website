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
<<<<<<< Updated upstream
            $img = $row['path'];
            $name = $row['name'];
            $html .= "<tr>
                        <td data-sku-desc='$sku'>$desc</td>
                        <td data-sku-desc='$sku'>$name</td>
=======
            $name = $row['name'];
            $html .= "<tr>
                        <td data-sku-desc='$sku'>$desc</td>
                        <td data-sku-name='$sku'>$name</td>
>>>>>>> Stashed changes
                        <td><input data-sku-qty='$sku' type='number' value='1' min='1' max='10' step='1'/></td>
                        <td data-sku-price='$sku'>$price</td>
                        <td><input data-sku-add='$sku' type='button' class='startCart' value='Add'/></td>
                        <img src='$img'>
                      </tr>";
        }
        echo $html;
        return;

    } else {
        $data = array("status" => "error", "msg" => "Only GET allowed.");

    }

    echo json_encode($data, JSON_FORCE_OBJECT);

?>
