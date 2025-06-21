<?php
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
?>

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
a { text-decoration:none; color:inherit; }
nav {
  position:absolute; top:0; left:0; right:0;
  padding: 1rem 2rem;
  display: flex;
  align-items: center;
  justify-content: space-between;
  z-index:10;
  /* background: var(--clr-bg); */ /* Remove solid background for transparency */
}
nav .logo {
  font-family: var(--font-h);
  font-size: 1.5rem;
  font-weight: 700;
  color: var(--clr-accent);
  /* Remove image for home.php style */
}
nav ul {
  display: flex;
  gap: 2rem;
  list-style: none;
}
nav ul li a {
  font-weight: 500;
  transition: color var(--trans);
  color: var(--clr-text);
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
  color: var(--clr-text);
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
nav .profile-dropdown {
  position: absolute;
  right: 2rem;
  top: 60px;
  background: var(--clr-bg);
  color: var(--clr-text);
  border-radius: 0.5rem;
  box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.2);
  min-width: 200px;
  display: none;
  flex-direction: column;
  z-index: 100;
  padding: 1rem;
}
nav .profile-dropdown.active {
  display: flex;
}
nav .profile-dropdown p {
  margin-bottom: 1rem;
  text-align: center;
  font-family: var(--font-h);
  font-size: 1.1rem;
}
nav .profile-dropdown a {
  color: var(--clr-accent);
  margin: 0.3rem 0;
  text-align: center;
  font-size: 1rem;
  border-radius: 0.3rem;
  padding: 0.3rem 0.5rem;
  background: none;
  transition: background var(--trans);
}
nav .profile-dropdown a:hover {
  background: var(--clr-accent);
  color: var(--clr-bg);
}
@media(max-width:900px) {
  nav ul { display: none; }
}
</style>

<nav>
  <div class="logo">Hungry Potter’s</div>
  <ul>
    <li><a href="index.php" class="<?php if(basename($_SERVER['PHP_SELF'])=='index.php') echo 'active'; ?>">Home</a></li>
    <li><a href="shop.php" class="<?php if(basename($_SERVER['PHP_SELF'])=='shop.php') echo 'active'; ?>">Menu</a></li>
    <li><a href="contact.php" class="<?php if(basename($_SERVER['PHP_SELF'])=='contact.php') echo 'active'; ?>">Contact</a></li>
    <li><a href="about.php" class="<?php if(basename($_SERVER['PHP_SELF'])=='about.php') echo 'active'; ?>">About</a></li>
    <li><a href="orders.php" class="<?php if(basename($_SERVER['PHP_SELF'])=='orders.php') echo 'active'; ?>">Order Status</a></li>
  </ul>
  <div class="nav-icons">
    <a href="search_page.php"><i class="fas fa-search"></i></a>
    <a href="wishlist.php"><i class="fas fa-heart"></i><span><?= isset($total_wishlist_counts) ? $total_wishlist_counts : 0; ?></span></a>
    <a href="cart.php"><i class="fas fa-shopping-cart"></i><span><?= isset($total_cart_counts) ? $total_cart_counts : 0; ?></span></a>
    <a href="#" id="user-btn"><i class="fas fa-user"></i></a>
  </div>
  <div class="profile-dropdown" id="profile-dropdown">
    <?php
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
    <?php } ?>
  </div>
</nav>

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

<?php
// Keep the PHP logic for wishlist/cart counts
$count_wishlist = $conn->prepare("SELECT * FROM `wishlist` WHERE user_id = ?");
$count_wishlist->execute([$user_id]);
$total_wishlist_counts = $count_wishlist->rowCount();

$count_cart = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
$count_cart->execute([$user_id]);
$total_cart_counts = $count_cart->rowCount();
?>

<!-- ...rest of your page... -->
