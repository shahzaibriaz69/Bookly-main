<?php
include 'config.php'; 

function pr($arr) {
    echo '<pre>';
    echo print_r($arr, true);
    echo '</pre>';
    exit;
}

function query_array($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $output = [];
    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) { 
        $output[] = $row;
      }
    }
    return $output;
}

function get_products($arr=[]) {

    $fields = $arr['fields'] ?? "p.product_id,p.product_name,p.product_price,p.product_image, c.category_name AS author_name";

    $limit = !empty($arr['limit']) ? "LIMIT ".$arr['limit'] : "";

    $order = !empty($arr['order']) ? "ORDER BY ".$arr['order'] : "";
    
    $query = "SELECT $fields
          FROM products AS p
          JOIN category_products AS cp ON cp.product_id=p.product_id
          JOIN categories AS c ON c.category_id=cp.category_id AND c.parent_id=44
          $order $limit";

        //   pr($query);

    $result = query_array($query);

    // pr($result);

    return $result;
}