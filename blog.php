<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Bookly - Blog Categories</title>
</head>
<body>
    <?php 
    // 1. Include your requirements
    include "includes/header.php";
    include "config.php";
    include "functions.php";

    // 2. Define and CALL the function immediately
    function get_all_blogs_fixed($conn) {
        $sql = "SELECT * FROM blog_category WHERE cat_status = 1 ORDER BY cat_id DESC";
        $result = mysqli_query($conn, $sql);
        
        $data = [];
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    // Call the function and store result in $blogs
    $blogs = get_all_blogs_fixed($conn); 
    ?>

    <section class="container">
        <div class="title-section">
            <h2>Blog Categories</h2>
        </div>

        <div class="product-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
            <?php if (!empty($blogs)): ?>
                <?php foreach($blogs as $row): ?>
                    <div class="card">
                        <div class="card-info">
                            <h2><?php echo htmlspecialchars($row['cat_name']); ?></h2>
                            <p>Explore articles in this category.</p>
                            <a href="category_posts.php?id=<?php echo $row['cat_id']; ?>" class="btn">View Posts</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No blog categories found in the database.</p>
            <?php endif; ?>
        </div>
    </section>

    <?php include "includes/footer.php"; ?>
    <script src="custom.js"></script>
</body>
</html>