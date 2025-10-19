# 🍕 Pizza Haus Ordering Website

**A full-stack web application for ordering pizzas and menu items, developed as part of a Database Management subject project.**

This project was developed as part of our Database Management subject, with contributions from all team members. My main focus was on coding and implementing the back-end logic, integrating the front-end, and setting up the database.

***

## 📋 Project Overview

| Section | Purpose |
| :--- | :--- |
| **🚀 Getting Started** | Instructions for cloning, installing dependencies, and running the application locally. |
| **🛠️ Project Structure** | A detailed map of the repository, explaining the function of each file and folder (e.g., `admin/`, `database.sql`, `cart.php`). |
| **⚙️ Built With** | A list of the core technologies and frameworks used (PHP, MySQL, Tailwind CSS, Composer). |
| **✍️ Authors** | Attribution and roles of the student development team. |
| **📜 License** | Details regarding the usage and restrictions of this educational project code. |

***

## 🚀 Getting Started

These instructions will guide you through setting up and running the application on your local machine for development and testing.

### Prerequisites

To run this project locally, you need a local web server environment like **XAMPP**, **MAMP**, or **Laragon** that includes:

-   **PHP** (version TBD)
-   **MySQL** or **MariaDB**
-   **Composer** (for PHP dependency management)
-   **npm** or **yarn** (for managing JavaScript dependencies and front-end tools)

### Installation

1.  **Clone the Repository**
    First, clone the repository to your local machine:
    ```bash
    git clone https://github.com/aljnmusic/Pizzahaus_Ordering_Website-Database
    # Note: Using the actual folder name after cloning the URL.
    cd Pizzahaus_Ordering_Website-Database 
    ```

2.  **Install PHP Dependencies**
    Use **Composer** to install the required back-end libraries:
    ```bash
    composer install
    ```

3.  **Install Node Dependencies**
    Install the front-end dependencies using **npm** or **yarn**:
    ```bash
    npm install
    # or
    # yarn install
    ```

4.  **Database Setup**
    Create a new database in your MySQL/MariaDB setup. Use the provided SQL file to initialize the database schema and data:
    ```bash
    # Run this from the command line after creating the database:
    mysql -u [USER] -p [DB_NAME] < database.sql
    ```
    Update the database connection settings (credentials, host, etc.) in the **`database.php`** file to match your local environment.

5.  **Run the Application**
    Place the project files in your web server's document root (e.g., `htdocs` or `www`). You can access the application by navigating to: `http://localhost/[YOUR_REPO_NAME]/index.php`

***

## 🛠️ Project Structure

| Folder/File | Description |
| :--- | :--- |
| `admin/` | Contains files for the **administrative dashboard** and backend management. |
| `img/` | Stores all image assets used throughout the website. |
| `node_modules/` | Installed JavaScript dependencies via **npm** (ignored by git). |
| `scripts/` | Client-side JavaScript files. |
| `src/` | Source files for front-end assets or PHP class files. |
| **`database.php`** | PHP configuration file for connecting to the **MySQL database**. |
| **`database.sql`** | The **SQL schema** and initial data file. |
| **`index.php`** | The main entry point of the application. |
| `home.php`, `menu.php`, `about.php`, `contact.php`, `FAQ.php` | Core informational and navigation pages. |
| **`cart.php`** | Manages shopping cart functionality and checkout. |
| **`customize.php`** | Logic for allowing users to **customize pizza orders**. |
| **`insert_customer.php`** | Handles the insertion of new customer records. |
| **`insert_order.php`** | Script that processes and records the final order. |
| **`tracking.php`** | Interface for users to **track the status** of their order. |
| `sendemail.php`, `testemail.php` | Scripts for sending transactional emails (e.g., order confirmation). |
| `composer.json`, `composer.lock` | PHP dependencies managed via **Composer**. |
| `package.json`, `package-lock.json`, `tailwind.config.js` | Configuration files for **npm** and **Tailwind CSS**. |

***

## ⚙️ Built With

-   **PHP** - Server-side scripting language
-   **MySQL** - Relational database management system
-   **Tailwind CSS** - Utility-first CSS framework
-   **Composer** - PHP Dependency Management
-   **npm / yarn** - JavaScript Package Management

***

## ✍️ Authors

This project was developed by:

-   **John Aljenne Galos** (Project Planner, Primary Developer, Frontend & Backend, Logic and Coding)
    [GitHub: aljnmusic](https://github.com/aljnmusic)
-   **Ryan Bondad** (Logic, Photo Editing, Data Gathering, Documentation)  
-   **Bruce Arnold Goyena** (Basic Frontend Development, Data Gathering, Logic, Documentation)
-   **Jonathan Borebor** (Documentation, Data Gathering, Logic)
-   **John Michael Maleza** (Documentation, Data Gathering, Photo Editing)
-   **John Rey Enciso** (Documentation, Data Gathering)

***

## 📜 License

This project is licensed under a **Custom Educational/Non-Commercial Use License**.

You are permitted to use, modify, and study the code **only for educational or non-commercial purposes**. Redistribution of the code (modified or unmodified) is strictly prohibited without explicit permission from the original authors.

Please refer to the separate **`LICENSE.md`** file for the full legal details.

***

## ❓ Need Help?

If you have any questions or encounter any issues, feel free to **open an issue** on this repository or reach out directly to the authors.
