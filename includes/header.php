    <div class="topbar-container">
      <div class="header-content">
        <div class="top-bar">
          <div class="top-item">
            Need any help? Call us <strong>112233344455</strong>
          </div>
          <div class="top-item">
            Summer sale discount 60% off! <a href="#">Shop Now</a>
          </div>
          <div class="top-item">2-3 business days delivery & free returns</div>
        </div>
      </div>
    </div>
    <header>
      <div class="container">
        <div class="navbar">
          <div class="nav-logo">
            <img
              src="images/main-logo.png"
              style="cursor: pointer"
              alt="Logo"
            />
          </div>
          <div class="nav-item">
            <ul class="main-menu-list">
              <li><a href="#">HOME</a></li>
              <li><a href="#">ABOUT</a></li>
              <li><a href="/shop.php">BOOKS</a></li>
              <li><a href="#">BLOGS</a></li>
              <li>
                <div class="pages-dropdown">
                  <a href="#" id="pages-text"
                    >PAGES <i class="fa-solid fa-caret-down"></i
                  ></a>
                  <div class="dropdown_menu">
                    <ul class="pages-menu">
                      <li>ABOUT <span> PRO </span></li>
                      <li>SHOP <span> PRO </span></li>
                      <li>SINGLE PRODUCT <span> PRO </span></li>
                      <li>CART <span> PRO </span></li>
                      <li>CHECKOUT <span> PRO </span></li>
                      <li>BLOGS <span> PRO </span></li>
                      <li>SINGLE POST <span> PRO </span></li>
                      <li>CONTACT <span> PRO </span></li>
                    </ul>
                  </div>
                </div>
              </li>

              <li><a href="#">CONTACT</a></li>
              <li>
                <a href="#" style="text-decoration: underline">GET PRO</a>
              </li>
            </ul>
          </div>
          <div class="nav-icon">
            <ul>
              <li>
                <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
              </li>
              <li>
                <a href="#" id="modal"><i class="fa-solid fa-user"></i></a>
                <div class="modal-overlay">
                  <div class="modal-container">
                    <div class="tab-btns">
                      <button id="login-tab-btn" class="active">Sign In</button>
                      <button id="register-tab-btn">Register</button>
                    </div>

                    <hr />

                    <!-- Sign In form -->
                    <form class="login-form" id="login-form">
                      <label for="username">Username or Email Address*</label>
                      <input
                        type="text"
                        id="Username"
                        placeholder="Your Username"
                      />

                      <label for="password">Password*</label>
                      <input
                        type="password"
                        id="Password"
                        placeholder="Your Password"
                      />

                      <div class="login-options">
                        <label><input type="checkbox" /> Remember me</label>
                        <a href="#">Forgot Password</a>
                      </div>
                      <button type="submit" class="login-btn">Login</button>
                    </form>

                    <!-- Register form -->
                    <form
                      class="login-form"
                      id="register-form"
                      style="display: none"
                    >
                      <label for="email">Your Email Address*</label>
                      <input
                        type="text"
                        id="email"
                        placeholder="Your Email Address"
                      />

                      <label for="password">Password*</label>
                      <input
                        type="password"
                        id="Password"
                        placeholder="Your Password"
                      />

                      <div class="login-options">
                        <label><input type="checkbox" /> I agree to the</label>
                        <a href="#">Privacy Policy</a>
                      </div>
                      <button type="submit" class="login-btn">Register</button>
                    </form>
                  </div>
                </div>
              </li>
              <li>
                <div class="wishlist-dropdwon">
                  <a href="#" id="wishlist"
                    ><i class="fa-solid fa-heart"></i
                  ></a>
                  <div class="wishlist-menu">
                    <div class="wishlist-header">
                      <h4>Your Wishlist</h4>
                    </div>
                    <div class="wishlist-body">
                      <div>
                        <span><a href="#">The Emerald Crown</a> $2000 </span>
                        <p style="margin: 10px 0 8px 0px">
                          Special discounted price.
                        </p>
                        <a href="#" style="font-size: 17px">Add To Cart</a>
                      </div>
                      <div>
                        <span><a href="#">The Last Enchantment</a> $400</span>
                        <p style="margin: 10px 0 8px 0px">
                          Perfect for enlightened people.
                        </p>
                        <a href="#" style="font-size: 17px; font-weight: 430" ;
                          >Add To Cart</a
                        >
                      </div>
                      <div>
                        <span style="color: black">
                          <p style="font-size: 15px; font-weight: 400">
                            Total (USD)
                          </p>
                          <p style="font-size: 15px; font-weight: 450">$1470</p>
                        </span>
                      </div>
                    </div>
                    <div class="btn">
                      <button class="btn-1">Add All To Cart</button>
                      <button class="btn-2">View All</button>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <a href="#" id="cart"
                  ><i class="fa-solid fa-cart-shopping"></i
                ></a>
                <div class="main-cart">
                  <div class="cart-dropdown">
                    <div class="cart-menu">
                      <div class="cart-card">
                        <h5>Your Cart</h5>
                      </div>
                      <div></div>
                      <div class="cart-body">
                        <div class="cart-item">
                          <div class="cart-product-detail">
                            <a href="#">Secrets of the <br />Alchemist</a>
                            <span><a href="#">$870</a></span>
                          </div>
                          <p>High quality in good price.</p>
                        </div>
                        <div class="cart-item">
                          <div class="cart-product-detail">
                            <a href="#">Quest for the Lost City</a>
                            <span><a href="#">$600</a></span>
                          </div>
                          <p>Professional Quest for the Lost City.</p>
                        </div>
                        <div></div>

                        <div class="subtotal">
                          <span>
                            <p>Total (USD)</p>
                            <p>$1470</p>
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="btn-cart">
                      <button class="btn-cart-1">View Cart</button>
                      <button class="btn-cart-2">Go To Checkout</button>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </header>