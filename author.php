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
    <title>Bookly - Authors</title>
  </head>
<body>
       <?php
   include "includes/header.php"
   ?>
           <?php
   include "config.php"
   ?>

   <?php include "functions.php"; ?>

    <?php 
function get_authors() {
    global $conn;
    $sql = "SELECT * FROM categories WHERE parent_id = 44 ORDER BY category_name ASC";
    $result = mysqli_query($conn, $sql);
    
    $authors = [];
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $authors[] = $row;
        }
    }
    return $authors;
}

// 2. ADD THIS LINE TO ACTUALLY RUN THE FUNCTION
$authors = get_authors();


   ?>

<section class="container">
    <div class="title-section">
        <h2>Our Authors</h2>
    </div>

    <div class="product-grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
      <?php 
      if (!empty($authors)) {
          foreach($authors as $row) { 
              // Using the 'category_image' column from your screenshot
              $author_img = !empty($row['category_image']) ? $row['category_image'] : 'default-author.png';
      ?>
          <div class="card">
            <div class="card-img">
                <img src="/images/<?php echo $author_img; ?>" alt="author-photo" style="width:100%; height:250px; object-fit:cover;"/>
            </div>
            <div class="card-info">
              <h2><?php echo htmlspecialchars($row['category_name']); ?></h2>
              
              <div class="bio" style="font-size: 0.8rem; color: #666; height: 50px; overflow: hidden;">
                  <?php echo strip_tags($row['category_desc']); ?>
              </div>
              
              <a href="author_books.php?id=<?php echo $row['category_id']; ?>" class="btn">View Books</a>
            </div>
          </div>
      <?php 
          }
      } else {
          echo "<p>No authors found in the categories table.</p>";
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