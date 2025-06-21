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
├ css/                # Stylesheets
│  ├ style.css        # Main custom styles
│  └ shop.css         # Shop-specific styles
├ images/             # Placeholder & menu images
├ js/                 # Scripts (menu toggle, carousel init)
├ about.html          # About page with static content
├ contact.html        # Contact form (no backend)
├ index.html          # Homepage with static menu
└ shop.html           # Menu listing (static)
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
- **Team Members:** Mars Maguddayao, Timothy Forte, Lanz Corpuz, Ejay Buscato

---

## 📄 License

This static version inherits the MIT License from the main project. See `LICENSE` for details.

---

*Enjoy exploring the static prototype!*
