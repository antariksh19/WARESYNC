<div align="center">
  

  <h1>WARESYNC 📦</h1>
  
  <p>A simple, efficient full-stack inventory management system designed to track product stock levels, manage orders, and organize warehouse categories seamlessly.</p>

  <h3>🟢 <a href="http://waresync.great-site.net/">Live Deployment Available Here</a></h3>
</div>

<br />

<div align="center">
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP" />
  <img src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL" />
  <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black" alt="JavaScript" />
  <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white" alt="CSS3" />
</div>

---

## 🚀 Overview

WARESYNC is a comprehensive inventory tracking platform built with PHP and MySQL. It is designed to handle the operational categorization of various consumer products—ranging from Electronics and Groceries to Furniture and Books. The system provides immediate visibility into stock availability and streamlines the order management process.

### ✨ Key Technical Features

* **Multi-Category Tracking:** Modularized architecture handling distinct product verticals (Electronics, Health & Grooming, Sports Gear, etc.) for organized stock management.
* **Secure Authentication:** Built-in session management with dedicated `signup.php`, login, and `logout.php` flows to protect inventory data.
* **Relational Database Management:** Powered by a robust MySQL backend (`warehouse_db.sql`) to reliably persist stock levels, user credentials, and order history.
* **Lightweight UI:** A fast, responsive frontend crafted with native CSS (`style.css`) and JavaScript for optimal browser performance without heavy framework dependencies.

## 📂 Project Structure

```text
WARESYNC/
├── Books/                   # Category-specific logic and views
├── Clothes And Accessories/
├── Electronics/
├── Furnitures And Home Decor/
├── Groceries/
├── Health And Grooming/
├── Home Page/               # Dashboard and landing interface
├── Sports Gear/
├── images/                  # UI assets and product imagery
├── index.php                # Application entry point & login
├── signup.php               # User registration logic
├── logout.php               # Session termination
├── style.css                # Global stylesheets
└── warehouse_db.sql         # Database schema and initial seed data
```

## 🛠 System Setup & Local Development

This application requires a standard LAMP/XAMPP stack to run locally.

### Prerequisites

* PHP (v7.4+)
* MySQL (v8.0+)
* Apache Server (via XAMPP, MAMP, or native)

### Installation

**1. Clone the repository:**
```bash
git clone https://github.com/antariksh19/WARESYNC.git
cd WARESYNC
```

**2. Database Configuration:**
* Open MySQL/phpMyAdmin and create a new database (e.g., `warehouse_db`).
* Import the provided `warehouse_db.sql` file located in the root directory to construct the required tables and insert initial category data.
* Ensure your local database credentials align with the connection variables in the PHP files.

**3. Run the Server:**
* Move the `WARESYNC` folder into your local server's document root (e.g., `htdocs` for XAMPP).
* Start the Apache and MySQL modules.

**4. Open your browser:** 
Navigate to `http://localhost/WARESYNC` to access the login portal.

## 📫 Connect

* **LinkedIn:** [Antariksh Mohapatra](https://www.linkedin.com/in/antariksh-mohapatra/)
* **GitHub:** [@antariksh19](https://github.com/antariksh19)

## 📄 License
Distributed under the MIT License.
