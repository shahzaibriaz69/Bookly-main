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
    <title>Bookly - shop</title>
  </head>
<body>
   <?php
   include "includes/header.php"
   ?>

    <?php 

include('functions.php'); 

$products = get_products([
    'order' => 'product_id desc' 
]);
?>

<section class="container">
    <div class="title-section">
        <h2>All Books</h2>
    </div>

    <div class="product-grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
      <?php 
      if (!empty($products)) {
          foreach($products as $row) { 
              $images = explode(',', $row['product_image']);
              $first_image = trim($images[0]);
      ?>
        <a href="/single_book.php?product_id=<?=$row['product_id']?>">
          <div class="card">
            <div class="card-img">
              <img src="/images/<?php echo $first_image; ?>" alt="book-cover" style="width:100%"/>
            </div>
            <div class="card-info">
              <h2><?php echo $row['product_name']; ?></h2>
              <p><?php echo $row['author_name']; ?></p>
              <h5>$<?php echo $row['product_price']; ?></h5>
            </div>
          </div>
        </a>
      <?php 
          }
      } else {
          echo "<p>No products found in the database.</p>";
      }
      ?>
    </div>
</section>


 <?php
 include "includes/footer.php"
 ?>
   <script src="custom.js"></script>
</body>
</html>