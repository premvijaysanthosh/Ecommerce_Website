# 🛒 Ecommerce Website

A complete and beginner-friendly **Ecommerce Website** project built using **PHP**, **MySQL**, **HTML/CSS**, and **JavaScript**. This project includes both the customer-facing storefront and an admin panel to manage products.

---

## 📂 Project Structure

```
Ecommerce_Website-main/
│
├── admin/                          # Admin dashboard pages
│   ├── add_product.php
│   ├── dashboard.php
│   ├── login.php
│   ├── logout.php
│   └── manage_products.php
│
├── css/
│   └── style.css                   # Global styles
│
├── js/
│   └── script.js                   # JS for frontend interactivity (if any)
│
├── index.php                       # Homepage (storefront)
├── test_db.php                     # Database test file
│
├── 00_documentation.md             # Full setup and explanation (step-by-step)
├── 01_databaseSetup.md             # Database schema setup
├── 02_registrationPageSetup.md
├── 03_loginPageSetup.md
├── 04_logoutPageSetup.md
├── 05_indexPageSetup.md
├── 06_cartPageSetup.md
├── 07_adminLoginPageSetup.md
├── 08_adminLogoutPageSetup.md
├── 09_adminDashboardPageSetup.md
├── 10_adminManageProductsPageSetup.md
├── 11_adminAddProductPageSetup.md
└── README.md
```

---

## ✨ Features

### 👤 User Side
- User registration & login
- View products
- Add to cart functionality
- Checkout (basic)

### 🛠️ Admin Panel
- Admin login/logout
- Dashboard overview
- Add/Edit/Delete products
- Manage product listings

---

## 🧰 Tech Stack

- **Frontend:** HTML, CSS, JavaScript
- **Backend:** PHP
- **Database:** MySQL

---

## ⚙️ Setup Instructions

### 1. **Clone the Repository**
```bash
git clone https://github.com/premvijaysanthosh/Ecommerce_Website.git
cd Ecommerce_Website
```

### 2. **Setup Database**
- Import the SQL schema described in `01_databaseSetup.md` using phpMyAdmin or MySQL CLI.

### 3. **Configure PHP Environment**
- Ensure a local server environment is set up (e.g. XAMPP, WAMP).
- Place the project in the `htdocs` directory.

### 4. **Run the App**
- Navigate to `http://localhost/Ecommerce_Website/index.php` to view the store.
- Visit `http://localhost/Ecommerce_Website/admin/login.php` for the admin panel.

---

## 📄 Documentation

Detailed step-by-step setup and code explanation is available in the included `.md` files:

- `00_documentation.md`: Full walkthrough
- `01_databaseSetup.md`: MySQL database creation
- `02_registrationPageSetup.md`: User registration functionality
- `03_loginPageSetup.md`: User login system
- `04_logoutPageSetup.md`: User logout functionality
- `05_indexPageSetup.md`: Homepage setup
- `06_cartPageSetup.md`: Shopping cart implementation
- `07_adminLoginPageSetup.md`: Admin authentication
- `08_adminLogoutPageSetup.md`: Admin logout
- `09_adminDashboardPageSetup.md`: Admin dashboard
- `10_adminManageProductsPageSetup.md`: Product management
- `11_adminAddProductPageSetup.md`: Adding new products

---

## 🚀 Quick Start

1. **Install XAMPP/WAMP** on your local machine
2. **Start Apache and MySQL** services
3. **Clone this repository** to your `htdocs` folder
4. **Import the database** using phpMyAdmin
5. **Access the website** at `http://localhost/Ecommerce_Website/`

---

## 🔧 Configuration

### Database Configuration
Make sure to update your database connection settings in your PHP files:

```php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce_db";
```

### Admin Credentials
Default admin login credentials (update these in your database):
- **Username:** admin
- **Password:** admin123

---

## 🎯 Future Enhancements

- [ ] Payment gateway integration
- [ ] Order tracking system
- [ ] Email notifications
- [ ] Product reviews and ratings
- [ ] Inventory management
- [ ] Responsive design improvements
- [ ] Search and filter functionality

---

**Happy Coding! 🚀**
