<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Single_books - shop</title>
  </head>
<body>
   <?php
   include "includes/header.php"
   ?>
<?php
include('config.php');


$id = isset($_GET['product_id']) ? (int)$_GET['product_id'] : 0;


$product = null;

if ($id > 0) {
  
    $sql = "SELECT * FROM products WHERE product_id = $id";
    $result = mysqli_query($conn, $sql);
    

    if ($result && mysqli_num_rows($result) > 0) {
        $product = mysqli_fetch_assoc($result);
    }
    
}


if (!$product) {
    die("<h2>Error: Book not found.</h2><p>The ID requested ($id) does not exist in the database.</p><a href='shop.php'>Return to Shop</a>");
}


$images = explode(',', $product['product_image']);
$main_image = trim($images[0]);
?>

<section class="container product-details">
    <div style="display: flex; gap: 50px; margin-top: 50px;">
        
        <div class="product-image" style="flex: 1;">
            <img src="/images/<?php echo $main_image; ?>" style="width: 100%; border-radius: 8px;">
        </div>

        <div class="product-info" style="flex: 1;">
            <h1><?php echo $product['product_name']; ?></h1>
            <p class="product_id">By: <strong><?php echo $product['product_id']; ?></strong></p>
            <h2 style="color: #2c3e50;">$<?php echo $product['product_price']; ?></h2>
            
            <div class="description" style="margin: 20px 0;">
                <h3>Description</h3>
                <p><?php echo $product['product_description']; ?></p>
            </div>

            <button class="add-to-cart-btn">Add to Cart</button>
        </div>
        
    </div>
</section>



 <?php
 include "includes/footer.php"
 ?>
   <script src="custom.js"></script>
</body>
</html>