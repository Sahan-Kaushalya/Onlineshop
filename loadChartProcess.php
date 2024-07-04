<?php

include "connection.php";

$rs = Database::search("SELECT product.id, product.title, SUM(order_item.or_qty) 
AS total_sold FROM order_item INNER JOIN product ON 
order_item.product_id=product.id GROUP BY product.id,product.title
ORDER BY total_sold DESC LIMIT 5");

$num = $rs->num_rows;

$labels = array();
$data = array();

for ($i=0; $i < $num; $i++) { 
    $d = $rs->fetch_assoc();

    $labels[] = $d["name"];
    $data[] = $d["total_sold"];
}

$json = array();
$json["labels"] = $labels;
$json["data"] = $data;

echo json_encode($json);

?>