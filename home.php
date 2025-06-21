<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Silog Meals – Hungry Potter’s Tapsilogan</title>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Roboto:wght@300;400;500&display=swap"
        rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>

  <style>
  /*====================
    VARIABLES & RESET
  ====================*/
  :root {
    --clr-bg:      #111;
    --clr-text:    #fff;
    --clr-light:   #ccc;
    --clr-accent:  #f39c12;
    --font-h:      'Montserrat', sans-serif;
    --font-b:      'Roboto',    sans-serif;
    --trans:       .3s ease;
  }
  * { margin:0; padding:0; box-sizing:border-box; }
  body {
    background: var(--clr-bg);
    color:      var(--clr-text);
    font-family: var(--font-b);
    line-height:1.6;
  }
  a { text-decoration:none; color:inherit; }

  /*====================
     NAVIGATION
  ====================*/
  nav {
    position:absolute; top:0; left:0; right:0;
    padding: 1rem 2rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    z-index:10;
  }
  nav .logo {
    font-family: var(--font-h);
    font-size: 1.5rem;
    font-weight: 700;
  }
  nav ul {
    display: flex;
    gap: 2rem;
  }
  nav ul li a {
    font-weight: 500;
    transition: color var(--trans);
  }
  nav ul li a:hover,
  nav ul li a.active {
    color: var(--clr-accent);
  }
  nav .nav-icons {
    display: flex;
    gap: 1rem;
  }
  nav .nav-icons a {
    position: relative;
    font-size: 1.2rem;
    transition: color var(--trans);
  }
  nav .nav-icons a:hover {
    color: var(--clr-accent);
  }
  nav .nav-icons a span {
    position: absolute;
    top: -6px; right: -10px;
    font-size: .65rem;
    background: var(--clr-accent);
    color: var(--clr-bg);
    padding: 2px 5px;
    border-radius: 50%;
  }

  /*====================
       HERO SECTION
  ====================*/
  .hero {
    position: relative;
    height: 60vh;
    background: url('images/tapsilog.jpg') center/cover no-repeat;
  }
  .hero::before {
    content:'';
    position:absolute; inset:0;
    background: rgba(0,0,0,0.5);
  }
  .hero .content {
    position: relative;
    z-index:1;
    max-width: 800px;
    margin: 0 auto;
    text-align: center;
    padding-top: 15vh;
  }
  .hero small {
    display: block;
    text-transform: uppercase;
    opacity: .7;
    letter-spacing: .1rem;
    margin-bottom: .5rem;
  }
  .hero h1 {
    font-family: var(--font-h);
    font-size: 2.5rem;
    text-transform: uppercase;
    margin-bottom: 1rem;
  }
  .hero p {
    color: var(--clr-light);
    margin-bottom: 1.5rem;
  }
  .hero .btn {
    background: var(--clr-accent);
    color: var(--clr-bg);
    padding: .75rem 1.5rem;
    border-radius: .3rem;
    font-weight: 500;
    transition: background var(--trans);
  }
  .hero .btn:hover {
    background: var(--clr-text);
    color: var(--clr-bg);
  }

  /*====================
      SILOG MEALS SECTION
  ====================*/
  .silog-meals {
    padding: 4rem 2rem;
    max-width: 900px;
    margin: 0 auto;
  }
  .silog-meals h2 {
    font-family: var(--font-h);
    font-size: 2rem;
    text-align: center;
    text-transform: uppercase;
    margin-bottom: 2rem;
  }
  .silog-list {
    list-style: none;
    padding: 0;
  }
  .silog-list li {
    margin-bottom: 1.5rem;
    padding-bottom: 1.5rem;
    border-bottom: 1px solid rgba(255,255,255,0.2);
  }
  .silog-list .item-header {
    display: flex;
    justify-content: space-between;
    align-items: baseline;
  }
  .silog-list .item-header .name {
    font-family: var(--font-h);
    font-size: 1.2rem;
  }
  .silog-list .item-header .price {
    font-weight: 600;
    color: var(--clr-accent);
  }
  .silog-list .details {
    margin-top: .5rem;
    color: var(--clr-light);
    font-size: .95rem;
  }

  /*====================
        FOOTER
  ====================*/
  footer {
    background: var(--clr-bg);
    color: var(--clr-light);
    padding: 3rem 2rem 1.5rem 2rem;
    border-top: 2px solid var(--clr-accent);
    margin-top: 3rem;
  }
  .footer-content {
    max-width: 1100px;
    margin: 0 auto;
    display: flex;
    flex-wrap: wrap;
    gap: 2.5rem;
    justify-content: center;
    text-align: center;
  }
  .footer-col {
    flex: 1 1 220px;
    min-width: 220px;
    align-items: center;
    text-align: center;
    padding: 0 1rem;
  }
  .footer-col h4 {
    font-family: var(--font-h);
    margin-bottom: 1.2rem;
    font-size: 1.2rem;
    color: var(--clr-accent);
    letter-spacing: 1px;
    text-transform: uppercase;
  }
  .footer-col ul {
    list-style: none;
    padding: 0;
    margin: 0 auto;
    display: inline-block;
    text-align: left;
  }
  .footer-col ul li {
    margin-bottom: .7rem;
    font-size: 1rem;
    color: var(--clr-light);
    display: flex;
    align-items: center;
    gap: 0.6em;
  }
  .footer-col ul li a {
    color: var(--clr-light);
    transition: color var(--trans);
  }
  .footer-col ul li a:hover {
    color: var(--clr-accent);
  }
  .footer-socials {
    display: flex;
    justify-content: center;
    gap: 1.2rem;
    margin-top: 0.5rem;
  }
  .footer-socials a {
    color: var(--clr-light);
    font-size: 1.5rem;
    background: #222;
    border-radius: 50%;
    width: 2.5rem;
    height: 2.5rem;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background var(--trans), color var(--trans);
  }
  .footer-socials a:hover {
    background: var(--clr-accent);
    color: var(--clr-bg);
  }
  .credit {
    text-align: center;
    margin-top: 2.5rem;
    font-size: .95rem;
    color: var(--clr-light);
    letter-spacing: 0.5px;
  }
  .credit span {
    color: var(--clr-accent);
    font-weight: 600;
  }
  @media (max-width: 900px) {
    .footer-content {
      flex-direction: column;
      align-items: center;
      gap: 1.5rem;
    }
    .footer-col {
      min-width: unset;
      padding: 0;
    }
    .footer-col ul {
      text-align: center;
      display: block;
    }
  }

  /* ABOUT & SPECIALS SECTION */
  .about-section, .special-section {
    background: #10181c;
    color: #fff;
    padding: 4rem 2rem 2rem 2rem;
    margin: 0 auto 2rem auto;
    max-width: 1200px;
    border-radius: 1.2rem;
    box-shadow: 0 2px 24px 0 rgba(0,0,0,0.10);
  }
  .about-row, .special-row {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 2.5rem;
    justify-content: center;
  }
  .about-img, .special-img {
    flex: 1 1 320px;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .about-img img, .special-img img {
    width: 100%;
    max-width: 340px;
    border-radius: 1rem;
    box-shadow: 0 2px 16px 0 rgba(0,0,0,0.12);
    object-fit: cover;
  }
  .about-content, .special-content {
    flex: 2 1 480px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
  }
  .about-content small, .special-content small {
    text-transform: uppercase;
    color: var(--clr-accent);
    letter-spacing: 2px;
    font-size: 1rem;
    margin-bottom: .5rem;
    opacity: .7;
  }
  .about-content h2, .special-content h2 {
    font-family: var(--font-h);
    font-size: 2.2rem;
    letter-spacing: 2px;
    margin-bottom: 2rem;
    color: #fff;
  }
  .about-cards {
    display: flex;
    gap: 2rem;
    justify-content: center;
    align-items: stretch;
    margin-bottom: 1rem;
  }
  .about-card {
    background: #181f23;
    border-radius: 1rem;
    padding: 1.2rem;
    display: flex;
    align-items: center;
    justify-content: center;
    min-width: 120px;
    min-height: 120px;
    box-shadow: 0 2px 12px 0 rgba(0,0,0,0.10);
  }
  .about-card img {
    width: 90px;
    height: 90px;
    object-fit: cover;
    border-radius: 0.7rem;
  }
  .about-card.about-center {
    flex-direction: column;
    min-width: 220px;
    min-height: 120px;
    background: #10181c;
    box-shadow: none;
    padding: 1.5rem 2rem;
    justify-content: center;
  }
  .about-card.about-center h3 {
    font-size: 1.3rem;
    color: var(--clr-accent);
    margin-bottom: .7rem;
    font-family: var(--font-h);
    letter-spacing: 1px;
  }
  .about-card.about-center p {
    font-size: 1rem;
    color: #ccc;
    margin-bottom: 1.2rem;
  }
  .about-btn {
    background: var(--clr-accent);
    color: #10181c;
    padding: .6rem 1.5rem;
    border-radius: .3rem;
    font-weight: 600;
    font-family: var(--font-h);
    letter-spacing: 1px;
    text-transform: uppercase;
    font-size: 1rem;
    transition: background var(--trans), color var(--trans);
    display: inline-block;
    margin-top: .5rem;
  }
  .about-btn:hover {
    background: #fff;
    color: var(--clr-accent);
  }
  .special-list {
    list-style: none;
    padding: 0;
    margin: 1.5rem 0 1.5rem 0;
    width: 100%;
    max-width: 350px;
  }
  .special-list li {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid #222;
    padding: .7rem 0;
    font-size: 1.1rem;
    color: #fff;
    font-family: var(--font-b);
  }
  .special-list li span:last-child {
    color: var(--clr-accent);
    font-weight: 600;
    font-size: 1.1rem;
  }
  @media (max-width: 900px) {
    .footer-content {
      flex-direction: column;
      align-items: center;
      gap: 1.5rem;
    }
    .footer-col {
      min-width: unset;
      padding: 0;
    }
    .footer-col ul {
      text-align: center;
      display: block;
    }
    .about-row, .special-row {
      flex-direction: column;
      gap: 2rem;
    }
    .about-content, .special-content {
      align-items: center;
      text-align: center;
    }
    .about-cards {
      flex-direction: column;
      gap: 1.2rem;
    }
    .about-section {
      margin-top: 2rem !important;
    }
  }

  /* Animation Keyframes */
  @keyframes fadeUp {
    0% { opacity: 0; transform: translateY(40px); }
    100% { opacity: 1; transform: translateY(0); }
  }
  @keyframes fadeIn {
    0% { opacity: 0; }
    100% { opacity: 1; }
  }
  /* Animation Classes */
  .animate-fadeup {
    opacity: 0;
    animation: fadeUp 0.8s cubic-bezier(.4,1.4,.6,1) forwards;
  }
  .animate-fadein {
    opacity: 0;
    animation: fadeIn 1.2s cubic-bezier(.4,1.4,.6,1) forwards;
  }
  </style>
  <script>
  // Animate on load
  window.addEventListener('DOMContentLoaded', function() {
    // Hero
    document.querySelector('.hero .content').classList.add('animate-fadeup');
    // About
    document.querySelector('.about-section').classList.add('animate-fadeup');
    // Specials
    document.querySelector('.special-section').classList.add('animate-fadeup');
    // Silog Meals
    document.querySelector('.silog-meals').classList.add('animate-fadeup');
    // Footer
    document.querySelector('footer').classList.add('animate-fadein');
  });
  </script>
</head>
<body>

<?php
// Add user logic for wishlist/cart counts and user dropdown
if(isset($message)){
   foreach($message as $msg){
      echo '
      <div class="message">
         <span>'.htmlspecialchars($msg).'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
// If $conn and $user_id are set, fetch counts, else default to 0
$total_wishlist_counts = 0;
$total_cart_counts = 0;
if(isset($conn) && isset($user_id)) {
  $count_wishlist = $conn->prepare("SELECT * FROM `wishlist` WHERE user_id = ?");
  $count_wishlist->execute([$user_id]);
  $total_wishlist_counts = $count_wishlist->rowCount();

  $count_cart = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
  $count_cart->execute([$user_id]);
  $total_cart_counts = $count_cart->rowCount();
}
?>

  <!-- NAV -->
  <nav>
    <div class="logo">Hungry Potter’s</div>
    <ul>
      <li><a href="home.php" class="<?php if(basename($_SERVER['PHP_SELF'])=='home.php') echo 'active'; ?>">Home</a></li>
      <li><a href="shop.php" class="<?php if(basename($_SERVER['PHP_SELF'])=='shop.php') echo 'active'; ?>">Menu</a></li>
      <li><a href="contact.php" class="<?php if(basename($_SERVER['PHP_SELF'])=='contact.php') echo 'active'; ?>">Contact</a></li>
      <li><a href="about.php" class="<?php if(basename($_SERVER['PHP_SELF'])=='about.php') echo 'active'; ?>">About</a></li>
      <li><a href="orders.php" class="<?php if(basename($_SERVER['PHP_SELF'])=='orders.php') echo 'active'; ?>">Order Status</a></li>
    </ul>
    <div class="nav-icons">
      <a href="search_page.php"><i class="fas fa-search"></i></a>
      <a href="wishlist.php"><i class="fas fa-heart"></i><span><?= isset($total_wishlist_counts) ? $total_wishlist_counts : 0; ?></span></a>
      <a href="cart.php"><i class="fas fa-shopping-cart"></i><span><?= isset($total_cart_counts) ? $total_cart_counts : 0; ?></span></a>
      <div class="user-dropdown-wrapper">
        <a href="#" id="user-btn"><i class="fas fa-user"></i></a>
        <div class="profile-dropdown" id="profile-dropdown">
          <?php
          if(isset($conn) && isset($user_id)) {
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            if($select_profile->rowCount() > 0){
              $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
          ?>
            <p><?= htmlspecialchars($fetch_profile["name"]); ?></p>
            <a href="update_user.php">Update Profile</a>
            <a href="components/user_logout.php" onclick="return confirm('logout from the website?');">Logout</a>
          <?php } else { ?>
            <p>Please Login/Register First!</p>
            <a href="user_register.php">Register</a>
            <a href="user_login.php">Login</a>
          <?php } } else { ?>
            <p>Please Login/Register First!</p>
            <a href="user_register.php">Register</a>
            <a href="user_login.php">Login</a>
          <?php } ?>
        </div>
      </div>
    </div>
  </nav>

<style>
.user-dropdown-wrapper {
  position: relative;
  display: inline-block;
}
.profile-dropdown {
  display: none;
  position: absolute;
  right: 0;
  top: 2.5rem;
  background: #181f23;
  color: #fff;
  min-width: 180px;
  border-radius: 0.5rem;
  box-shadow: 0 2px 12px 0 rgba(0,0,0,0.15);
  padding: 1rem 1.2rem;
  z-index: 100;
  text-align: left;
}
.profile-dropdown.active {
  display: block;
  animation: fadeIn 0.3s;
}
.profile-dropdown p {
  margin-bottom: 0.7rem;
  font-weight: 600;
  color: var(--clr-accent);
}
.profile-dropdown a {
  display: block;
  color: #fff;
  padding: 0.3rem 0;
  border-radius: 0.2rem;
  transition: background 0.2s;
  font-size: 1rem;
}
.profile-dropdown a:hover {
  background: var(--clr-accent);
  color: #181f23;
}
</style>
<script>
// Toggle profile dropdown
const userBtn = document.getElementById('user-btn');
const profileDropdown = document.getElementById('profile-dropdown');
userBtn && userBtn.addEventListener('click', function(e) {
  e.preventDefault();
  profileDropdown.classList.toggle('active');
});
document.addEventListener('click', function(e) {
  if (!userBtn.contains(e.target) && !profileDropdown.contains(e.target)) {
    profileDropdown.classList.remove('active');
  }
});
</script>

  <!-- HERO -->
  <section class="hero">
    <div class="content">
      <small>silog meals</small>
      <h1>Our Signature Silogs</h1>
      <p>Student-friendly silog combos served with garlic rice & a sunny-side-up egg.</p>
    </div>
  </section>


  <!-- ABOUT SECTION -->
  <section class="about-section" style="margin-top: 3rem;">
    <div class="about-row">
      <div class="about-img">
        <img src="images/nobg.png" alt="About Hungry Potter's" />
      </div>
      <div class="about-content">
        <small>special moments</small>
        <h2>ABOUT US</h2>
        <div class="about-cards">
          <div class="about-card">
            <img src="images/chicken-wings.png" alt="Traditional" />
          </div>
          <div class="about-card about-center">
            <h3>TRADITIONAL & MODERN</h3>
            <p>Silog at paboritong ulam under one roof! We serve classic Filipino comfort food and modern favorites, always with a smile.</p>
            <a href="about.php" class="about-btn">Read More</a>
          </div>
          <div class="about-card">
            <img src="images/hungry meals.png" alt="Modern" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <style>
  .about-section {
    margin-top: 3rem !important;
  }
  @media (max-width: 900px) {
    .about-section {
      margin-top: 2rem !important;
    }
  }
  </style>

  <!-- SILOG MEALS LIST -->
  <section class="silog-meals">
    <h2>Silog Meals</h2>
    <ul class="silog-list">
      <li>
        <div class="item-header">
          <span class="name">Porksilog</span>
          <span class="price">₱90</span>
        </div>
        <p class="details">Silog meal featuring pork, garlic fried rice, and a sunny-side-up egg.</p>
      </li>
      <li>
        <div class="item-header">
          <span class="name">Chicksilog</span>
          <span class="price">₱90</span>
        </div>
        <p class="details">Silog meal consisting of chicken, garlic fried rice, and a sunny-side-up egg.</p>
      </li>
      <li>
        <div class="item-header">
          <span class="name">Sisiglog</span>
          <span class="price">₱90</span>
        </div>
        <p class="details">Silog meal incorporating sisig, garlic fried rice, and a sunny-side-up egg.</p>
      </li>
      <li>
        <div class="item-header">
          <span class="name">Spamsilog</span>
          <span class="price">₱89</span>
        </div>
        <p class="details">Silog meal comprising SPAM, garlic fried rice, and a sunny-side-up egg.</p>
      </li>
      <li>
        <div class="item-header">
          <span class="name">Bangsilog</span>
          <span class="price">₱90</span>
        </div>
        <p class="details">Silog meal composed of bangus (milkfish), garlic fried rice, and a sunny-side-up egg.</p>
      </li>
      <li>
        <div class="item-header">
          <span class="name">Embosilog</span>
          <span class="price">₱90</span>
        </div>
        <p class="details">Silog meal including embutido (Filipino-style meatloaf), garlic fried rice, and a sunny-side-up egg.</p>
      </li>
      <li>
        <div class="item-header">
          <span class="name">Tocilog</span>
          <span class="price">₱89</span>
        </div>
        <p class="details">Silog meal made with tocino (sweet cured pork), garlic fried rice, and a sunny-side-up egg.</p>
      </li>
      <li>
        <div class="item-header">
          <span class="name">Baconsilog</span>
          <span class="price">₱89</span>
        </div>
        <p class="details">Silog meal featuring bacon, garlic fried rice, and a sunny-side-up egg.</p>
      </li>
      <li>
        <div class="item-header">
          <span class="name">Cornsilog</span>
          <span class="price">₱78</span>
        </div>
        <p class="details">Silog meal combining corned beef, garlic fried rice, and a sunny-side-up egg.</p>
      </li>
      <li>
        <div class="item-header">
          <span class="name">Hotsilog</span>
          <span class="price">₱72</span>
        </div>
        <p class="details">Silog meal with hotdog, garlic fried rice, and a sunny-side-up egg.</p>
      </li>
      <li>
        <div class="item-header">
          <span class="name">Longsilog</span>
          <span class="price">₱72</span>
        </div>
        <p class="details">Silog meal consisting of longganisa (Filipino sausage), garlic fried rice, and a sunny-side-up egg.</p>
      </li>
    </ul>
  </section>

    <!-- SPECIALS SECTION -->
  <section class="special-section">
  <div class="special-row">
    <div class="special-img">
      <img src="images/foods/wings and dips/wings and dip.jpg" alt="Hungry Hooray Specials" />
    </div>
    <div class="special-content">
      <small>HUNGRY HOORAY</small>
      <h2>SPECIALS</h2>
      <ul class="special-list">
        <li>
          <span>Wings & Dip</span>
          <span>₱180</span>
        </li>
        <li style="font-size:0.95rem; color:#ccc; margin-bottom:0.7rem; border:none;">Chicken wings served with a dipping sauce for a flavorful snack or meal.</li>
        <li>
          <span>Beshy Sisig</span>
          <span>₱159</span>
        </li>
        <li style="font-size:0.95rem; color:#ccc; margin-bottom:0.7rem; border:none;">Sizzling Filipino dish with diced pork, onions, and chili peppers. Good For 2 people.</li>
        <li>
          <span>Barkada Sisig</span>
          <span>₱239</span>
        </li>
        <li style="font-size:0.95rem; color:#ccc; margin-bottom:0.7rem; border:none;">Sizzling Filipino dish with diced pork, onions, and chili peppers. Good For 3-4 people.</li>
      </ul>
      <a href="shop.php" class="about-btn">View More</a>
    </div>
  </div>
</section>

  <!-- FOOTER -->
  <footer>
    <div class="footer-content">
      <div class="footer-col">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="shop.php">Menu</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="about.php">About</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Contact Us</h4>
        <ul>
          <li><i class="fas fa-phone"></i> +0956 802 7327</li>
          <li><i class="fas fa-envelope"></i> hungry@potter.com</li>
          <li><i class="fas fa-map-marker-alt"></i> Makati City, Philippines</li>
        </ul>
      </div>
<div class="footer-col">
      <h4>Follow Us</h4>
      <div class="footer-socials">
        <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
        <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
        <a href="#" title="Tiktok"><i class="fab fa-tiktok"></i></a>
      </div>
    </div>
    </div>
    <div class="credit">
      &copy; 2025 <span>Hungry Potter’s Tapsilogan</span> – All rights reserved.
    </div>
  </footer>

  <style>
  footer {
    background: var(--clr-bg);
    color: var(--clr-light);
    padding: 3rem 2rem 1.5rem 2rem;
    border-top: 2px solid var(--clr-accent);
    margin-top: 3rem;
  }
  .footer-content {
    max-width: 1100px;
    margin: 0 auto;
    display: flex;
    flex-wrap: wrap;
    gap: 2.5rem;
    justify-content: center;
    text-align: center;
  }
  .footer-col {
    flex: 1 1 220px;
    min-width: 220px;
    align-items: center;
    text-align: center;
    padding: 0 1rem;
  }
  .footer-col h4 {
    font-family: var(--font-h);
    margin-bottom: 1.2rem;
    font-size: 1.2rem;
    color: var(--clr-accent);
    letter-spacing: 1px;
    text-transform: uppercase;
  }
  .footer-col ul {
    list-style: none;
    padding: 0;
    margin: 0 auto;
    display: inline-block;
    text-align: left;
  }
  .footer-col ul li {
    margin-bottom: .7rem;
    font-size: 1rem;
    color: var(--clr-light);
    display: flex;
    align-items: center;
    gap: 0.6em;
  }
  .footer-col ul li a {
    color: var(--clr-light);
    transition: color var(--trans);
  }
  .footer-col ul li a:hover {
    color: var(--clr-accent);
  }
  .footer-socials {
    display: flex;
    justify-content: center;
    gap: 1.2rem;
    margin-top: 0.5rem;
  }
  .footer-socials a {
    color: var(--clr-light);
    font-size: 1.5rem;
    background: #222;
    border-radius: 50%;
    width: 2.5rem;
    height: 2.5rem;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background var(--trans), color var(--trans);
  }
  .footer-socials a:hover {
    background: var(--clr-accent);
    color: var(--clr-bg);
  }
  .credit {
    text-align: center;
    margin-top: 2.5rem;
    font-size: .95rem;
    color: var(--clr-light);
    letter-spacing: 0.5px;
  }
  .credit span {
    color: var(--clr-accent);
    font-weight: 600;
  }
  @media (max-width: 900px) {
    .footer-content {
      flex-direction: column;
      align-items: center;
      gap: 1.5rem;
    }
    .footer-col {
      min-width: unset;
      padding: 0;
    }
    .footer-col ul {
      text-align: center;
      display: block;
    }
  }
  </style>
</body>
</html>
