# Hungry Potter’s Tapsilogan (Static Version)

**A static, front-end–driven showcase** of a student-friendly silog restaurant menu and ordering UI.

> **Note:** All database-driven features (wishlist, cart, checkout) are **disabled** in this repository. For the fully functional version with PHP, PDO & MySQL integration, see [HungryPottersSql](https://github.com/kCan1/HungryPottersSql).

---

## 📦 Static Features

- **Fixed Menu**: Silog meals hard-coded in HTML/CSS, no database dependency
- **Responsive UI**: Built with Bootstrap 5 and custom CSS variables
- **Header & Footer**: Static navigation and contact info
- **About & Special Sections**: Placeholder images for easy swapping
- **No Backend**: All PHP `connect.php` and `wishlist_cart.php` calls are commented out or removed

---

## 🛠️ Tech Stack

- **HTML5 & CSS3**: Semantic markup and modern styling
- **Bootstrap 5**: Grid, flex utilities, and responsive components
- **JavaScript (ES6+)**: Menu toggle, Swiper.js carousel initialization
- **Font Awesome**: Icons for UI elements

---

## 🗂️ Repository Structure

```
/ (static version root)
├ components/         # Partial templates (header, footer)
├ css/                # Stylesheets
│  ├ style.css        # Main stylesheet (Bootstrap + custom)
│  └ shop.css
├ images/             # Placeholder images for menu & about sections
├ js/                 # Scripts (menu toggle, Swiper init)
├ index.php           # Homepage with static menu
├ about.php           # About section with static content
├ contact.php         # Contact form (no backend)
└ shop.php            # Menu listing (static)
```

---

## 🚀 Getting Started (Static)

1. **Clone repo**:
   ```bash
   git clone https://github.com/yourusername/HungryPottersStatic.git
   ```
2. **Open locally**:
   - Place the folder in your web server root (e.g., `htdocs` for XAMPP).
   - Or simply open `index.php` in your browser (no server needed).

---

## 🔗 Full-Functionality Version

For full PHP + MySQL integration (dynamic product loading, cart & wishlist, admin panel), visit:

👉 https://github.com/kCan1/HungryPottersSql

---

## 👥 Team & Credits

- **Full Stack Developer:** Ken Patrick Garcia 
- **Team Members:** Mars, Timothy, Ejay Buscato

---

## 📄 License

This static version inherits the MIT License from the main project. See `LICENSE` for details.

---

*Enjoy exploring the static prototype!*
