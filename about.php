<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>About – Hungry Potter’s Tapsilogan</title>
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
  .about-hero {
    background: #181f23;
    border-radius: 1.2rem;
    margin: 5rem auto 2rem auto;
    max-width: 1100px;
    box-shadow: 0 2px 24px 0 rgba(0,0,0,0.10);
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 2.5rem;
    padding: 3rem 2rem 2rem 2rem;
  }
  .about-hero-img {
    flex: 1 1 320px;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .about-hero-img img {
    width: 100%;
    max-width: 340px;
    border-radius: 1rem;
    box-shadow: 0 2px 16px 0 rgba(0,0,0,0.12);
    object-fit: cover;
  }
  .about-hero-content {
    flex: 2 1 480px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
    text-align: left;
  }
  .about-hero-content small {
    text-transform: uppercase;
    color: var(--clr-accent);
    letter-spacing: 2px;
    font-size: 1rem;
    margin-bottom: .5rem;
    opacity: .7;
  }
  .about-hero-content h1 {
    font-family: var(--font-h);
    font-size: 2.2rem;
    letter-spacing: 2px;
    margin-bottom: 1.2rem;
    color: #fff;
  }
  .about-hero-content p {
    color: var(--clr-light);
    font-size: 1.1rem;
    margin-bottom: 1.2rem;
  }
  .about-hero-content .about-btn {
    background: var(--clr-accent);
    color: #181f23;
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
  .about-hero-content .about-btn:hover {
    background: #fff;
    color: var(--clr-accent);
  }
  .about-facts {
    max-width: 1100px;
    margin: 2rem auto 3rem auto;
    display: flex;
    flex-wrap: wrap;
    gap: 2rem;
    justify-content: center;
  }
  .about-fact {
    background: #10181c;
    border-radius: 1rem;
    padding: 2rem 1.5rem;
    flex: 1 1 260px;
    min-width: 220px;
    box-shadow: 0 2px 12px 0 rgba(0,0,0,0.10);
    text-align: center;
  }
  .about-fact h3 {
    color: var(--clr-accent);
    font-family: var(--font-h);
    font-size: 1.2rem;
    margin-bottom: .7rem;
  }
  .about-fact p {
    color: #ccc;
    font-size: 1rem;
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
    .about-hero { flex-direction: column; gap: 2rem; }
    .about-hero-content { align-items: center; text-align: center; }
    .about-facts { flex-direction: column; gap: 1.2rem; }
    .footer-content { flex-direction: column; align-items: center; gap: 1.5rem; }
    .footer-col { min-width: unset; padding: 0; }
    .footer-col ul { text-align: center; display: block; }
  }
  </style>
</head>
<body>
<nav>
  <div class="logo">Hungry Potter’s</div>
  <ul>
    <li><a href="home.php">Home</a></li>
    <li><a href="shop.php">Menu</a></li>
    <li><a href="contact.php">Contact</a></li>
    <li><a href="about.php" class="active">About</a></li>
    <li><a href="orders.php">Order Status</a></li>
  </ul>
  <div class="nav-icons">
    <a href="search.php"><i class="fas fa-search"></i></a>
    <a href="wishlist.php"><i class="fas fa-heart"></i></a>
    <a href="cart.php"><i class="fas fa-shopping-cart"></i></a>
    <a href="#" id="user-btn"><i class="fas fa-user"></i></a>
  </div>
</nav>

<section class="about-hero">
  <div class="about-hero-img">
    <img src="images/nobg.png" alt="About Hungry Potter's" />
  </div>
  <div class="about-hero-content">
    <small>special moments</small>
    <h1>ABOUT HUNGRY POTTER’S</h1>
    <p>Welcome to Hungry Potter’s Tapsilogan, where tradition meets modern Filipino comfort food! We’re passionate about serving delicious silog meals, classic favorites, and creative twists that bring people together. Our story began with a love for Filipino breakfasts and a dream to create a cozy spot for students, families, and foodies alike.</p>
    <p>Every meal is made with fresh ingredients, a dash of creativity, and a whole lot of heart. Whether you’re craving a hearty tapsilog, sizzling sisig, or a quick snack, we’ve got something for everyone. Dine in, take out, or order online—your next favorite meal is just a bite away!</p>
    <a href="shop.php" class="about-btn">See Our Menu</a>
  </div>
</section>

<section class="about-facts">
  <div class="about-fact">
    <h3>Fresh & Local</h3>
    <p>We use only the freshest local ingredients to ensure every bite is flavorful and satisfying.</p>
  </div>
  <div class="about-fact">
    <h3>Student-Friendly Prices</h3>
    <p>Enjoy generous portions and affordable meals perfect for students and barkadas.</p>
  </div>
  <div class="about-fact">
    <h3>Modern Filipino Vibes</h3>
    <p>Our menu blends classic Filipino comfort food with modern favorites and creative twists.</p>
  </div>
  <div class="about-fact">
    <h3>Warm Community</h3>
    <p>We’re more than just a tapsilogan—we’re a place to gather, celebrate, and make memories.</p>
  </div>
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
<script>
// Animate on load
window.addEventListener('DOMContentLoaded', function() {
  document.querySelector('.about-hero').classList.add('animate-fadeup');
  document.querySelector('.about-facts').classList.add('animate-fadeup');
  document.querySelector('footer').classList.add('animate-fadein');
});
</script>