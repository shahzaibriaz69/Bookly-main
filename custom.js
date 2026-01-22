let pages_text = document.getElementById("pages-text");
let dropdown_menu = document.querySelector(".dropdown_menu");

pages_text.addEventListener("click", function (e) {
  e.preventDefault();
  pages_text.classList.toggle("active");
  dropdown_menu.style.display =
    dropdown_menu.style.display === "block" ? "none" : "block";
});

let wishlist = document.getElementById("wishlist");
let wishlist_menu = document.querySelector(".wishlist-menu");

wishlist.addEventListener("click", function (e) {
  e.preventDefault() ;
  wishlist.classList.toggle("active");
  wishlist_menu.style.display =
    wishlist_menu.style.display === "block" ? "none" : "block";
})

let cart = document.querySelector("#cart");
let main_cart = document.querySelector(".main-cart");

cart.addEventListener("click", function (e) {
  e.preventDefault();
  cart.classList.toggle("active");
  main_cart.style.display =
    main_cart.style.display === "block" ? "none" : "block";
});

  let modal = document.getElementById("modal");
  let loginModal = document.querySelector(".modal-container");
  let modalOverlay  = document.querySelector(".modal-overlay"); 
  
  modal.addEventListener("click", function (e) {
    e.preventDefault();
    modal.classList.toggle("active");
    loginModal.style.display =
    loginModal.style.display === "block"? "none" : "block";
    modalOverlay.style.display =
    modalOverlay.style.display === "block"? "none" : "block";
  });


document.addEventListener("click", function (e) {
  // Dropdown
  if (!pages_text.contains(e.target) && !dropdown_menu.contains(e.target)) {
    dropdown_menu.style.display = "none";
  }

  // Wishlist
  if (!wishlist.contains(e.target) && !wishlist_menu.contains(e.target)) {
    wishlist_menu.style.display = "none";
    wishlist.classList.remove("active");
  }

  // Cart
  if (!cart.contains(e.target) && !main_cart.contains(e.target)) {
    main_cart.style.display = "none";
    cart.classList.remove("active");
  }

  // Login Modal
  if (!modal.contains(e.target) && !loginModal.contains(e.target)) {
    loginModal.style.display = "none";
    modal.classList.remove("active");
  }

  if (e.target === modalOverlay) {
    loginModal.style.display = "none";
    modalOverlay.style.display = "none";
    modal.classList.remove("active");
  }
});


// Tab toggle functionality
let loginTabBtn = document.getElementById("login-tab-btn");
let registerTabBtn = document.getElementById("register-tab-btn");
let loginForm = document.getElementById("login-form");
let registerForm = document.getElementById("register-form");

loginTabBtn.addEventListener("click", function () {
  loginTabBtn.classList.add("active");
  registerTabBtn.classList.remove("active");
  loginForm.style.display = "flex";
  registerForm.style.display = "none";
});

registerTabBtn.addEventListener("click", function () {
  registerTabBtn.classList.add("active");
  loginTabBtn.classList.remove("active");
  registerForm.style.display = "flex";
  loginForm.style.display = "none";
});



let deadline = new Date("2025-11-20");
deadline.setDate(deadline.getDate() + 15);

const setTimer = () => {
  let now = new Date().getTime();
  let diff = deadline - now;
  const diff_date = new Date(diff);

  let days = Math.floor(diff / (1000 * 60 * 60 * 24));
  let hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  let minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
  let seconds = Math.floor((diff % (1000 * 60)) / 1000);

  if(!hours) {
    setTimer();
    return;
  }

  document.getElementById("countdown").innerHTML =
    days + "  <span>:</span> " +   
    hours + "  <span>:</span> " +
    minutes + "  <span>:</span> " +
    seconds + "";

     document.querySelectorAll("#countdown span").forEach((span)=>{
      span.style.color = "orange";
     });
}

setTimer();

let countdown = setInterval(function () {
  let now = new Date().getTime();
  let diff = deadline - now;
  if (diff < 0) {
    clearInterval(countdown);
    document.getElementById("countdown").innerHTML = "Offer Expired";
  }else {
    setTimer();
  }
}, 1000);
