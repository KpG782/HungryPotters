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
        <li><i class="fas fa-phone"></i> 099999999</li>
        <li><i class="fas fa-phone"></i> 539 5555</li>
        <li><i class="fas fa-envelope"></i> hungrypotters@gmail.com</li>
        <li><i class="fas fa-map-marker-alt"></i> Makati City, Philippines - 1200</li>
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
    &copy; <?php echo date('Y'); ?> <span>Hungry Potter’s Tapsilogan</span> – All rights reserved.
  </div>
</footer>

<style>
footer {
  background: var(--clr-bg, #111);
  color: var(--clr-light, #ccc);
  padding: 3rem 2rem 1.5rem 2rem;
  border-top: 2px solid var(--clr-accent, #f39c12);
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
  font-family: var(--font-h, 'Montserrat', sans-serif);
  margin-bottom: 1.2rem;
  font-size: 1.2rem;
  color: var(--clr-accent, #f39c12);
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
  color: var(--clr-light, #ccc);
  display: flex;
  align-items: center;
  gap: 0.6em;
}
.footer-col ul li a {
  color: var(--clr-light, #ccc);
  transition: color var(--trans, .3s ease);
}
.footer-col ul li a:hover {
  color: var(--clr-accent, #f39c12);
}
.footer-socials {
  display: flex;
  justify-content: center;
  gap: 1.2rem;
  margin-top: 0.5rem;
}
.footer-socials a {
  color: var(--clr-light, #ccc);
  font-size: 1.5rem;
  background: #222;
  border-radius: 50%;
  width: 2.5rem;
  height: 2.5rem;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: background var(--trans, .3s ease), color var(--trans, .3s ease);
}
.footer-socials a:hover {
  background: var(--clr-accent, #f39c12);
  color: var(--clr-bg, #111);
}
.credit {
  text-align: center;
  margin-top: 2.5rem;
  font-size: .95rem;
  color: var(--clr-light, #ccc);
  letter-spacing: 0.5px;
}
.credit span {
  color: var(--clr-accent, #f39c12);
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