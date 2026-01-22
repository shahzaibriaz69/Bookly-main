<?php 
include "functions.php";


?>

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
    <title>Bookly</title>
  </head>

  <body>
    <?php 
    include "includes/header.php"
    ?>

    <section class="hero-section">
      <div class="container hero-section-matrial">
        <div class="hero-section-content">
          <h2>The Fine Print Book Collection</h2>
          <p>Best Offer Save 30%. Grab it now!</p>
          <button>Shop Collection</button>
        </div>
        <div class="img-section">
          <img src="images/banner-image2.png" alt="" />
        </div>
      </div>
    </section>

    <section class="container">
      <div class="companny-container">
        <div class="company-services-content">
          <div>
            <i class="fa-solid fa-cart-shopping"></i>
          </div>
          <div>
            <h2>Free Delivery</h2>
            <p>Consectetur adipi elit lorem ipsum dolor sit amet.</p>
          </div>
        </div>
        <div class="company-services-content">
          <div><i class="fa-solid fa-award"></i></div>
          <div>
            <h2>Quality guarantee</h2>
            <p>Dolor sit amet orem ipsu mcons ectetur adipi elit.</p>
          </div>
        </div>
        <div class="company-services-content">
          <div><i class="fa-solid fa-tag"></i></div>

          <div>
            <h2>Daily offers</h2>
            <p>Amet consectetur adipi elit loreme ipsum dolor sit.</p>
          </div>
        </div>
        <div class="company-services-content">
          <div><i class="fa-solid fa-shield-halved"></i></div>
          <div>
            <h2>100% secure payment</h2>
            <p>Rem Lopsum dolor sit amet, consectetur adipi elit.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="container" style="height: 70vh">
      <div class="title-section">
        <h2>Best Selling Items</h2>
        <a href="shop.php">
          <button>View All</button>
        </a>
      </div>

<div class="slider">
  <?php 
  $products = get_products([
    'limit' => 4,
    'order' => 'sale_count desc'
  ]);


  if (!empty($products)) {
      foreach($products as $row) { 
          $images = explode(',', $row['product_image']);
        
          $first_image = trim($images[0]);
  ?>
    <a href="/single_book.php?product_id=<?=$row['product_id']?>">
      <div class="card">
        <div class="card-img">
          <img src="/images/<?php echo $first_image; ?>" alt="book-cover" />
        </div>
        <div class="card-info">
          <h2><?php echo $row['product_name']; ?></h2>
          <p> <?php echo $row['author_name']; ?></p>

          <h5>$<?php echo $row['product_price']; ?></h5>
        </div>
      </div>
    </a>
  <?php 
      }
  } else {
      echo "No products found.";
  }
  ?>
</div>
    </section>

    <section class="limited-offer">
      <div class="offer-content container">
        <div><img src="images/banner-image3.png" alt="image" /></div>
        <div>
          <h2>30% Discount On All Items. Hurry Up !!!</h2>
          <div id="countdown" class="timer"></div>
          <div class="timer-labels">
            <span>Days</span>
            <span>Hrs</span>
            <span>Min</span>
            <span>Sec</span>
          </div>
          <button>Shop Collection</button>
        </div>
      </div>
    </section>

    <section class="item-list container">
      <div class="featured-card">
        <h2>Featured</h2>
        <div class="featured-item">
          <img src="images/product-item2.png" alt="Echoes Of The Ancients" />
          <div class="featured-info">
            <h3>Echoes Of The Ancients</h3>
            <p>Lauren Asher</p>
            <h4>$870</h4>
          </div>
        </div>
        <hr />
        <div class="featured-item">
          <img src="images/product-item1.png" alt="The Midnight Garden" />
          <div class="featured-info">
            <h3>The Midnight Garden</h3>
            <p>Lauren Asher</p>
            <h4>$870</h4>
          </div>
        </div>
        <hr />
        <div class="featured-item">
          <img src="images/product-item3.png" alt="Shadow Of The Serpent" />
          <div class="featured-info">
            <h3>Shadow Of The Serpent</h3>
            <p>Lauren Asher</p>
            <h4>$870</h4>
          </div>
        </div>
      </div>
      <div class="featured-card">
        <h2>Latest items</h2>

        <div class="featured-item">
          <img src="images/product-item4.png" alt="Whispering Winds" />
          <div class="featured-info">
            <h3>Whispering Winds</h3>
            <p>Lauren Asher</p>
            <h4>$870</h4>
          </div>
        </div>

        <hr />

        <div class="featured-item">
          <img src="images/product-item5.png" alt="The Forgotten Realm" />
          <div class="featured-info">
            <h3>The Forgotten Realm</h3>
            <p>Lauren Asher</p>
            <h4>$870</h4>
          </div>
        </div>

        <hr />

        <div class="featured-item">
          <img src="images/product-item6.png" alt="Moonlit Secrets" />
          <div class="featured-info">
            <h3>Moonlit Secrets</h3>
            <p>Lauren Asher</p>
            <h4>$870</h4>
          </div>
        </div>
      </div>
      <div class="featured-card">
        <h2>Best Reviewed</h2>

        <div class="featured-item">
          <img src="images/product-item7.png" alt="The Crystal Key" />
          <div class="featured-info">
            <h3>The Crystal Key</h3>
            <p>Lauren Asher</p>
            <h4>$870</h4>
          </div>
        </div>

        <hr />

        <div class="featured-item">
          <img src="images/product-item8.png" alt="Starlight Sonata" />
          <div class="featured-info">
            <h3>Starlight Sonata</h3>
            <p>Lauren Asher</p>
            <h4>$870</h4>
          </div>
        </div>

        <hr />

        <div class="featured-item">
          <img
            src="images/product-item9.png"
            alt="Tales of the Enchanted Forest"
          />
          <div class="featured-info">
            <h3>Tales of the Enchanted Forest</h3>
            <p>Lauren Asher</p>
            <h4>$870</h4>
          </div>
        </div>
      </div>
      <div class="featured-card">
        <h2>On Sale</h2>

        <div class="featured-item">
          <img src="images/product-item10.png" alt="The Phoenix Chronicles" />
          <div class="featured-info">
            <h3>The Phoenix Chronicles</h3>
            <p>Lauren Asher</p>
            <span
              ><s>$1600</s>
              <h4>$999</h4></span
            >
          </div>
        </div>

        <hr />

        <div class="featured-item">
          <img src="images/product-item11.png" alt="Dreams of Avalon" />
          <div class="featured-info">
            <h3>Dreams of Avalon</h3>
            <p>Lauren Asher</p>
            <span
              ><s>$1600</s>
              <h4>$410</h4></span
            >
          </div>
        </div>

        <hr />

        <div class="featured-item">
          <img src="images/product-item12.png" alt="Dreams of Avalon" />
          <div class="featured-info">
            <h3>Dreams of Avalon</h3>
            <p>Lauren Asher</p>
            <span
              ><s>$1600</s>
              <h4>$500</h4></span
            >
          </div>
        </div>
      </div>
    </section>

    <section class="category container">
      <div class="category-title">
        <h2>Categories</h2>
      </div>
      <div class="category-cards">
        <div class="category-card">
          <img src="images/category1.jpg" alt="Romance" />
          <span class="category-label">Romance</span>
        </div>
        <div class="category-card">
          <img src="images/category2.jpg" alt="Romance" />
          <span class="category-label">Lifestyle</span>
        </div>
        <div class="category-card">
          <img src="images/category3.jpg" alt="Romance" />
          <span class="category-label">Recipe</span>
        </div>
      </div>
    </section>

    <section class="customer-review">
      <div class="container">
        <div class="review-title">
          <h2>Customer Reviews</h2>
        </div>
        <div class="review-card">
          <p>
            "I stumbled upon this bookstore while visiting the city, and it
            instantly became my favorite spot. The cozy atmosphere, friendly
            staff, and wide selection of books make every visit a delight!"
          </p>
          <br />
          <h3>Emma Chamberlin</h3>
        </div>
      </div>
    </section>

    <section class="latest-post container">
      <div class="post-section">
        <h2>Latest Posts</h2>
        <a href="#"><button>View All</button></a>
      </div>
      <div class="card-slider">
        <div class="post-card">
          <div>
            <img src="images/post-item1.jpg" alt="books" />
          </div>
          <div>
            <h5>books</h5>
            <a href="#"
              ><h6>10 Must-Read Books of the Year: Our Top Picks!</h6></a
            >
            <p>
              Dive into the world of cutting-edge technology with our latest
              blog post, where we highlight <a href="#">Read More</a>
            </p>
          </div>
        </div>
        <div class="post-card">
          <div>
            <img src="images/post-item2.jpg" alt="books" />
          </div>
          <div>
            <h5>books</h5>
            <a href="#"><h6>The Fascinating Realm of Science Fiction</h6></a>
            <p>
              Dive into the world of cutting-edge technology with our latest
              blog post, where we highlight <a href="#">Read More</a>
            </p>
          </div>
        </div>
        <div class="post-card">
          <div>
            <img src="images/post-item3.jpg" alt="books" />
          </div>
          <div>
            <h5>books</h5>
            <a href="#"><h6>Finding Love in the Pages of a Book</h6></a>
            <p>
              Dive into the world of cutting-edge technology with our latest
              blog post, where we highlight <a href="#">Read More</a>
            </p>
          </div>
        </div>
        <div class="post-card">
          <div>
            <img src="images/post-item4.jpg" alt="books" />
          </div>
          <div>
            <h5>books</h5>
            <a href="#"
              ><h6>
                Reading for Mental Health: How Books Can Heal and Inspire
              </h6></a
            >
            <p>
              Dive into the world of cutting-edge technology with our latest
              blog post, where we highlight <a href="#">Read More</a>
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="container" style="margin-top: 200px">
      <div class="insta-text">
        <h3>Instagram</h3>
      </div>
      <div class="insta-card">
        <div class="post-insta-card">
          <img src="images/insta-item1.jpg" alt="Books" />
          <div class="insta-icon">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
            >
              <path
                fill="currentColor"
                fill-rule="evenodd"
                d="M12 2c-2.716 0-3.056.012-4.123.06c-1.064.049-1.791.218-2.427.465a4.9 4.9 0 0 0-1.772 1.153A4.9 4.9 0 0 0 2.525 5.45c-.247.636-.416 1.363-.465 2.427C2.011 8.944 2 9.284 2 12s.011 3.056.06 4.123c.049 1.064.218 1.791.465 2.427a4.9 4.9 0 0 0 1.153 1.772a4.9 4.9 0 0 0 1.772 1.153c.636.247 1.363.416 2.427.465c1.067.048 1.407.06 4.123.06s3.056-.012 4.123-.06c1.064-.049 1.791-.218 2.427-.465a4.9 4.9 0 0 0 1.772-1.153a4.9 4.9 0 0 0 1.153-1.772c.247-.636.416-1.363.465-2.427c.048-1.067.06-1.407.06-4.123s-.012-3.056-.06-4.123c-.049-1.064-.218-1.791-.465-2.427a4.9 4.9 0 0 0-1.153-1.772a4.9 4.9 0 0 0-1.772-1.153c-.636-.247-1.363-.416-2.427-.465C15.056 2.012 14.716 2 12 2m0 1.802c2.67 0 2.986.01 4.04.058c.976.045 1.505.207 1.858.344c.466.182.8.399 1.15.748c.35.35.566.684.748 1.15c.136.353.3.882.344 1.857c.048 1.055.058 1.37.058 4.041c0 2.67-.01 2.986-.058 4.04c-.045.976-.208 1.505-.344 1.858a3.1 3.1 0 0 1-.748 1.15c-.35.35-.684.566-1.15.748c-.353.136-.882.3-1.857.344c-1.054.048-1.37.058-4.041.058c-2.67 0-2.987-.01-4.04-.058c-.976-.045-1.505-.208-1.858-.344a3.1 3.1 0 0 1-1.15-.748a3.1 3.1 0 0 1-.748-1.15c-.137-.353-.3-.882-.344-1.857c-.048-1.055-.058-1.37-.058-4.041c0-2.67.01-2.986.058-4.04c.045-.976.207-1.505.344-1.858c.182-.466.399-.8.748-1.15c.35-.35.684-.566 1.15-.748c.353-.137.882-.3 1.857-.344c1.055-.048 1.37-.058 4.041-.058m0 11.531a3.333 3.333 0 1 1 0-6.666a3.333 3.333 0 0 1 0 6.666m0-8.468a5.135 5.135 0 1 0 0 10.27a5.135 5.135 0 0 0 0-10.27m6.538-.203a1.2 1.2 0 1 1-2.4 0a1.2 1.2 0 0 1 2.4 0"
              />
            </svg>
          </div>
        </div>
        <div class="post-insta-card">
          <img src="images/insta-item2.jpg" alt="Books" />
          <div class="insta-icon">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
            >
              <path
                fill="currentColor"
                fill-rule="evenodd"
                d="M12 2c-2.716 0-3.056.012-4.123.06c-1.064.049-1.791.218-2.427.465a4.9 4.9 0 0 0-1.772 1.153A4.9 4.9 0 0 0 2.525 5.45c-.247.636-.416 1.363-.465 2.427C2.011 8.944 2 9.284 2 12s.011 3.056.06 4.123c.049 1.064.218 1.791.465 2.427a4.9 4.9 0 0 0 1.153 1.772a4.9 4.9 0 0 0 1.772 1.153c.636.247 1.363.416 2.427.465c1.067.048 1.407.06 4.123.06s3.056-.012 4.123-.06c1.064-.049 1.791-.218 2.427-.465a4.9 4.9 0 0 0 1.772-1.153a4.9 4.9 0 0 0 1.153-1.772c.247-.636.416-1.363.465-2.427c.048-1.067.06-1.407.06-4.123s-.012-3.056-.06-4.123c-.049-1.064-.218-1.791-.465-2.427a4.9 4.9 0 0 0-1.153-1.772a4.9 4.9 0 0 0-1.772-1.153c-.636-.247-1.363-.416-2.427-.465C15.056 2.012 14.716 2 12 2m0 1.802c2.67 0 2.986.01 4.04.058c.976.045 1.505.207 1.858.344c.466.182.8.399 1.15.748c.35.35.566.684.748 1.15c.136.353.3.882.344 1.857c.048 1.055.058 1.37.058 4.041c0 2.67-.01 2.986-.058 4.04c-.045.976-.208 1.505-.344 1.858a3.1 3.1 0 0 1-.748 1.15c-.35.35-.684.566-1.15.748c-.353.136-.882.3-1.857.344c-1.054.048-1.37.058-4.041.058c-2.67 0-2.987-.01-4.04-.058c-.976-.045-1.505-.208-1.858-.344a3.1 3.1 0 0 1-1.15-.748a3.1 3.1 0 0 1-.748-1.15c-.137-.353-.3-.882-.344-1.857c-.048-1.055-.058-1.37-.058-4.041c0-2.67.01-2.986.058-4.04c.045-.976.207-1.505.344-1.858c.182-.466.399-.8.748-1.15c.35-.35.684-.566 1.15-.748c.353-.137.882-.3 1.857-.344c1.055-.048 1.37-.058 4.041-.058m0 11.531a3.333 3.333 0 1 1 0-6.666a3.333 3.333 0 0 1 0 6.666m0-8.468a5.135 5.135 0 1 0 0 10.27a5.135 5.135 0 0 0 0-10.27m6.538-.203a1.2 1.2 0 1 1-2.4 0a1.2 1.2 0 0 1 2.4 0"
              />
            </svg>
          </div>
        </div>
        <div class="post-insta-card">
          <img src="images/insta-item3.jpg" alt="Books" />
          <div class="insta-icon">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
            >
              <path
                fill="currentColor"
                fill-rule="evenodd"
                d="M12 2c-2.716 0-3.056.012-4.123.06c-1.064.049-1.791.218-2.427.465a4.9 4.9 0 0 0-1.772 1.153A4.9 4.9 0 0 0 2.525 5.45c-.247.636-.416 1.363-.465 2.427C2.011 8.944 2 9.284 2 12s.011 3.056.06 4.123c.049 1.064.218 1.791.465 2.427a4.9 4.9 0 0 0 1.153 1.772a4.9 4.9 0 0 0 1.772 1.153c.636.247 1.363.416 2.427.465c1.067.048 1.407.06 4.123.06s3.056-.012 4.123-.06c1.064-.049 1.791-.218 2.427-.465a4.9 4.9 0 0 0 1.772-1.153a4.9 4.9 0 0 0 1.153-1.772c.247-.636.416-1.363.465-2.427c.048-1.067.06-1.407.06-4.123s-.012-3.056-.06-4.123c-.049-1.064-.218-1.791-.465-2.427a4.9 4.9 0 0 0-1.153-1.772a4.9 4.9 0 0 0-1.772-1.153c-.636-.247-1.363-.416-2.427-.465C15.056 2.012 14.716 2 12 2m0 1.802c2.67 0 2.986.01 4.04.058c.976.045 1.505.207 1.858.344c.466.182.8.399 1.15.748c.35.35.566.684.748 1.15c.136.353.3.882.344 1.857c.048 1.055.058 1.37.058 4.041c0 2.67-.01 2.986-.058 4.04c-.045.976-.208 1.505-.344 1.858a3.1 3.1 0 0 1-.748 1.15c-.35.35-.684.566-1.15.748c-.353.136-.882.3-1.857.344c-1.054.048-1.37.058-4.041.058c-2.67 0-2.987-.01-4.04-.058c-.976-.045-1.505-.208-1.858-.344a3.1 3.1 0 0 1-1.15-.748a3.1 3.1 0 0 1-.748-1.15c-.137-.353-.3-.882-.344-1.857c-.048-1.055-.058-1.37-.058-4.041c0-2.67.01-2.986.058-4.04c.045-.976.207-1.505.344-1.858c.182-.466.399-.8.748-1.15c.35-.35.684-.566 1.15-.748c.353-.137.882-.3 1.857-.344c1.055-.048 1.37-.058 4.041-.058m0 11.531a3.333 3.333 0 1 1 0-6.666a3.333 3.333 0 0 1 0 6.666m0-8.468a5.135 5.135 0 1 0 0 10.27a5.135 5.135 0 0 0 0-10.27m6.538-.203a1.2 1.2 0 1 1-2.4 0a1.2 1.2 0 0 1 2.4 0"
              />
            </svg>
          </div>
        </div>
        <div class="post-insta-card">
          <img src="images/insta-item4.jpg" alt="Books" />
          <div class="insta-icon">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
            >
              <path
                fill="currentColor"
                fill-rule="evenodd"
                d="M12 2c-2.716 0-3.056.012-4.123.06c-1.064.049-1.791.218-2.427.465a4.9 4.9 0 0 0-1.772 1.153A4.9 4.9 0 0 0 2.525 5.45c-.247.636-.416 1.363-.465 2.427C2.011 8.944 2 9.284 2 12s.011 3.056.06 4.123c.049 1.064.218 1.791.465 2.427a4.9 4.9 0 0 0 1.153 1.772a4.9 4.9 0 0 0 1.772 1.153c.636.247 1.363.416 2.427.465c1.067.048 1.407.06 4.123.06s3.056-.012 4.123-.06c1.064-.049 1.791-.218 2.427-.465a4.9 4.9 0 0 0 1.772-1.153a4.9 4.9 0 0 0 1.153-1.772c.247-.636.416-1.363.465-2.427c.048-1.067.06-1.407.06-4.123s-.012-3.056-.06-4.123c-.049-1.064-.218-1.791-.465-2.427a4.9 4.9 0 0 0-1.153-1.772a4.9 4.9 0 0 0-1.772-1.153c-.636-.247-1.363-.416-2.427-.465C15.056 2.012 14.716 2 12 2m0 1.802c2.67 0 2.986.01 4.04.058c.976.045 1.505.207 1.858.344c.466.182.8.399 1.15.748c.35.35.566.684.748 1.15c.136.353.3.882.344 1.857c.048 1.055.058 1.37.058 4.041c0 2.67-.01 2.986-.058 4.04c-.045.976-.208 1.505-.344 1.858a3.1 3.1 0 0 1-.748 1.15c-.35.35-.684.566-1.15.748c-.353.136-.882.3-1.857.344c-1.054.048-1.37.058-4.041.058c-2.67 0-2.987-.01-4.04-.058c-.976-.045-1.505-.208-1.858-.344a3.1 3.1 0 0 1-1.15-.748a3.1 3.1 0 0 1-.748-1.15c-.137-.353-.3-.882-.344-1.857c-.048-1.055-.058-1.37-.058-4.041c0-2.67.01-2.986.058-4.04c.045-.976.207-1.505.344-1.858c.182-.466.399-.8.748-1.15c.35-.35.684-.566 1.15-.748c.353-.137.882-.3 1.857-.344c1.055-.048 1.37-.058 4.041-.058m0 11.531a3.333 3.333 0 1 1 0-6.666a3.333 3.333 0 0 1 0 6.666m0-8.468a5.135 5.135 0 1 0 0 10.27a5.135 5.135 0 0 0 0-10.27m6.538-.203a1.2 1.2 0 1 1-2.4 0a1.2 1.2 0 0 1 2.4 0"
              />
            </svg>
          </div>
        </div>
        <div class="post-insta-card">
          <img src="images/insta-item5.jpg" alt="Books" />
          <div class="insta-icon">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
            >
              <path
                fill="currentColor"
                fill-rule="evenodd"
                d="M12 2c-2.716 0-3.056.012-4.123.06c-1.064.049-1.791.218-2.427.465a4.9 4.9 0 0 0-1.772 1.153A4.9 4.9 0 0 0 2.525 5.45c-.247.636-.416 1.363-.465 2.427C2.011 8.944 2 9.284 2 12s.011 3.056.06 4.123c.049 1.064.218 1.791.465 2.427a4.9 4.9 0 0 0 1.153 1.772a4.9 4.9 0 0 0 1.772 1.153c.636.247 1.363.416 2.427.465c1.067.048 1.407.06 4.123.06s3.056-.012 4.123-.06c1.064-.049 1.791-.218 2.427-.465a4.9 4.9 0 0 0 1.772-1.153a4.9 4.9 0 0 0 1.153-1.772c.247-.636.416-1.363.465-2.427c.048-1.067.06-1.407.06-4.123s-.012-3.056-.06-4.123c-.049-1.064-.218-1.791-.465-2.427a4.9 4.9 0 0 0-1.153-1.772a4.9 4.9 0 0 0-1.772-1.153c-.636-.247-1.363-.416-2.427-.465C15.056 2.012 14.716 2 12 2m0 1.802c2.67 0 2.986.01 4.04.058c.976.045 1.505.207 1.858.344c.466.182.8.399 1.15.748c.35.35.566.684.748 1.15c.136.353.3.882.344 1.857c.048 1.055.058 1.37.058 4.041c0 2.67-.01 2.986-.058 4.04c-.045.976-.208 1.505-.344 1.858a3.1 3.1 0 0 1-.748 1.15c-.35.35-.684.566-1.15.748c-.353.136-.882.3-1.857.344c-1.054.048-1.37.058-4.041.058c-2.67 0-2.987-.01-4.04-.058c-.976-.045-1.505-.208-1.858-.344a3.1 3.1 0 0 1-1.15-.748a3.1 3.1 0 0 1-.748-1.15c-.137-.353-.3-.882-.344-1.857c-.048-1.055-.058-1.37-.058-4.041c0-2.67.01-2.986.058-4.04c.045-.976.207-1.505.344-1.858c.182-.466.399-.8.748-1.15c.35-.35.684-.566 1.15-.748c.353-.137.882-.3 1.857-.344c1.055-.048 1.37-.058 4.041-.058m0 11.531a3.333 3.333 0 1 1 0-6.666a3.333 3.333 0 0 1 0 6.666m0-8.468a5.135 5.135 0 1 0 0 10.27a5.135 5.135 0 0 0 0-10.27m6.538-.203a1.2 1.2 0 1 1-2.4 0a1.2 1.2 0 0 1 2.4 0"
              />
            </svg>
          </div>
        </div>
        <div class="post-insta-card">
          <img src="images/insta-item6.jpg" alt="Books" />
          <div class="insta-icon">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
            >
              <path
                fill="currentColor"
                fill-rule="evenodd"
                d="M12 2c-2.716 0-3.056.012-4.123.06c-1.064.049-1.791.218-2.427.465a4.9 4.9 0 0 0-1.772 1.153A4.9 4.9 0 0 0 2.525 5.45c-.247.636-.416 1.363-.465 2.427C2.011 8.944 2 9.284 2 12s.011 3.056.06 4.123c.049 1.064.218 1.791.465 2.427a4.9 4.9 0 0 0 1.153 1.772a4.9 4.9 0 0 0 1.772 1.153c.636.247 1.363.416 2.427.465c1.067.048 1.407.06 4.123.06s3.056-.012 4.123-.06c1.064-.049 1.791-.218 2.427-.465a4.9 4.9 0 0 0 1.772-1.153a4.9 4.9 0 0 0 1.153-1.772c.247-.636.416-1.363.465-2.427c.048-1.067.06-1.407.06-4.123s-.012-3.056-.06-4.123c-.049-1.064-.218-1.791-.465-2.427a4.9 4.9 0 0 0-1.153-1.772a4.9 4.9 0 0 0-1.772-1.153c-.636-.247-1.363-.416-2.427-.465C15.056 2.012 14.716 2 12 2m0 1.802c2.67 0 2.986.01 4.04.058c.976.045 1.505.207 1.858.344c.466.182.8.399 1.15.748c.35.35.566.684.748 1.15c.136.353.3.882.344 1.857c.048 1.055.058 1.37.058 4.041c0 2.67-.01 2.986-.058 4.04c-.045.976-.208 1.505-.344 1.858a3.1 3.1 0 0 1-.748 1.15c-.35.35-.684.566-1.15.748c-.353.136-.882.3-1.857.344c-1.054.048-1.37.058-4.041.058c-2.67 0-2.987-.01-4.04-.058c-.976-.045-1.505-.208-1.858-.344a3.1 3.1 0 0 1-1.15-.748a3.1 3.1 0 0 1-.748-1.15c-.137-.353-.3-.882-.344-1.857c-.048-1.055-.058-1.37-.058-4.041c0-2.67.01-2.986.058-4.04c.045-.976.207-1.505.344-1.858c.182-.466.399-.8.748-1.15c.35-.35.684-.566 1.15-.748c.353-.137.882-.3 1.857-.344c1.055-.048 1.37-.058 4.041-.058m0 11.531a3.333 3.333 0 1 1 0-6.666a3.333 3.333 0 0 1 0 6.666m0-8.468a5.135 5.135 0 1 0 0 10.27a5.135 5.135 0 0 0 0-10.27m6.538-.203a1.2 1.2 0 1 1-2.4 0a1.2 1.2 0 0 1 2.4 0"
              />
            </svg>
          </div>
        </div>
      </div>
    </section>


    <script src="custom.js"></script>
  </body>
</html>
