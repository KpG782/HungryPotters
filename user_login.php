<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

if(isset($_POST['submit'])){

   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = sha1($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);

   $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ?");
   $select_user->execute([$email, $pass]);
   $row = $select_user->fetch(PDO::FETCH_ASSOC);

   if($select_user->rowCount() > 0){
      $_SESSION['user_id'] = $row['id'];
      header('location:home.php');
   }else{
      $message[] = 'incorrect username or password!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Login – Hungry Potter’s Tapsilogan</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
  <style>
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
  .hero {
    position: relative;
    height: 30vh;
    background: url('images/tapsilog.jpg') center/cover no-repeat;
    margin-bottom: 2.5rem;
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
    padding-top: 14vh;
  }
  .hero h1 {
    font-family: var(--font-h);
    font-size: 2rem;
    text-transform: uppercase;
    margin-bottom: 1rem;
    color: var(--clr-accent);
  }
  .form-container {
    padding: 4rem 2rem 2rem 2rem;
    max-width: 500px;
    margin: 0 auto;
  }
  .form-container form {
    background: #181f23;
    border-radius: 1.1rem;
    box-shadow: 0 2px 16px 0 rgba(0,0,0,0.10);
    padding: 2.5rem 2rem 2rem 2rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 1.2rem;
  }
  .form-container h3 {
    font-family: var(--font-h);
    font-size: 1.5rem;
    color: var(--clr-accent);
    margin-bottom: 1.2rem;
    text-transform: uppercase;
  }
  .form-container .box {
    width: 100%;
    padding: .7rem 1rem;
    border-radius: .3rem;
    border: 1px solid #222;
    background: #222;
    color: #fff;
    font-size: 1rem;
    margin-bottom: .5rem;
  }
  .form-container .btn, .form-container .option-btn {
    background: var(--clr-accent);
    color: #181f23;
    border: none;
    border-radius: .3rem;
    padding: .7rem 1.5rem;
    font-weight: 600;
    font-family: var(--font-h);
    letter-spacing: 1px;
    text-transform: uppercase;
    font-size: 1rem;
    transition: background var(--trans), color var(--trans);
    cursor: pointer;
    margin-top: 1rem;
  }
  .form-container .btn:hover, .form-container .option-btn:hover {
    background: #fff;
    color: var(--clr-accent);
  }
  .form-container p {
    color: #ccc;
    margin-top: 1rem;
    font-size: 1rem;
  }
  .empty {
    color: #ccc;
    text-align: center;
    font-size: 1.1rem;
    margin: 2rem 0;
  }
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
  @keyframes fadeIn {
    0% { opacity: 0; }
    100% { opacity: 1; }
  }
  .animate-fadein {
    opacity: 0;
    animation: fadeIn 1.2s cubic-bezier(.4,1.4,.6,1) forwards;
  }
  </style>
  <script>
  window.addEventListener('DOMContentLoaded', function() {
    const userBtn = document.getElementById('user-btn');
    const profileDropdown = document.getElementById('profile-dropdown');
    if(userBtn && profileDropdown) {
      userBtn.addEventListener('click', function(e) {
        e.preventDefault();
        profileDropdown.classList.toggle('active');
      });
      document.addEventListener('click', function(e) {
        if (!userBtn.contains(e.target) && !profileDropdown.contains(e.target)) {
          profileDropdown.classList.remove('active');
        }
      });
    }
  });
  </script>
</head>
<body>
<?php
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
<section class="hero">
  <div class="content">
    <h1>Login</h1>
  </div>
</section>
<section class="form-container">
  <form action="" method="post">
    <h3>login now</h3>
    <input type="email" name="email" required placeholder="enter your email" maxlength="50"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
    <input type="password" name="pass" required placeholder="enter your password" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
    <input type="submit" value="login now" class="btn" name="submit">
    <p>don't have an account?</p>
    <a href="user_register.php" class="option-btn">register now</a>
  </form>
</section>
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
<script src="js/script.js"></script>
</body>
</html>