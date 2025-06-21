# Hungry Potter’s Tapsilogan

**Student-friendly online ordering system** for a budget Filipino silog restaurant.

---

## 📦 Features

- **User Authentication**: Register, login, update profile, logout
- **Product Browsing**: View categories, quick view, detailed menu
- **Wishlist & Cart**: Add/remove items, dynamic header counts
- **Order Checkout**: Enter shipping details and place orders
- **Admin Panel**: Secure CRUD for products, categories, orders, users, and messages
- **Responsive Design**: Mobile-first layout using Bootstrap CSS and custom styles

---

## 🛠️ Tech Stack

- **Backend:** PHP 8+, PDO for database access
- **Database:** MySQL (via `shop_db.sql`)
- **Frontend:** HTML5, CSS3, Bootstrap 5, JavaScript (ES6+)
- **Libraries & Tools:** Swiper.js, Font Awesome, jQuery (bundled with Bootstrap), Git
- **Server:** Apache (XAMPP / LAMP stack)

---

## 🗂️ Project Structure

```bash
/ (project root)
├ components/         # Reusable PHP partials
│  ├ connect.php      # PDO MySQL connection
│  ├ wishlist_cart.php
│  ├ user_header.php
│  └ footer.php
├ admin/              # Admin dashboard scripts
│  ├ admin_login.php
│  ├ products.php
│  ├ categories.php
│  ├ orders.php
│  ├ users.php
│  └ messages.php
├ css/                # Stylesheets
│  ├ style.css        # Main custom styles
│  └ shop.css         # Shop-specific styles
├ images/             # Placeholder & product images
├ js/                 # JavaScript (menu toggle, Swiper init)
├ shop_db.sql         # Database schema + sample data
├ index.php           # Homepage
├ shop.php            # Menu listing
├ about.php           # About page
├ contact.php         # Contact/feedback form
└ orders.php          # User order status
```

---

## 🚀 Setup & Run

1. **Clone repository**
   ```bash
   git clone https://github.com/yourname/hungry-potters-tapsilogan.git
   ```
2. **Install dependencies**
   - Place project folder in `htdocs` (XAMPP) or web root (LAMP).
3. **Database**
   - Create database:
     ```sql
     CREATE DATABASE shop_db;
     ```
   - Import `shop_db.sql` via phpMyAdmin or CLI.
4. **Configure**
   - Edit `components/connect.php` with your MySQL credentials.
5. **Open in Browser**  
   Navigate to `http://localhost/hungry-potters-tapsilogan/index.php`

---

## 🔧 Usage

- **Browse**: Select categories and view meals.
- **Wishlist/Cart**: Click heart/cart icons to manage selections.
- **Checkout**: Fill in details to place an order.
- **Admin**: Go to `/admin/admin_login.php` to manage content.

---

## 🛡️ Security & Best Practices

- All SQL queries use **PDO** with prepared statements.
- **Output sanitization** with `htmlspecialchars()`.
- **Session**-based auth for users and admin.

---

## 👥 Team & Roles

- **Full Stack Developer:** Ken Patirck Garcia
- **Group Members:** Mars Maguddayao, Timothy Forte, Ejay Buscato

---

## 📄 License

Licensed under the **MIT License**. See `LICENSE` for details.

---

_Happy coding & ordering!_
