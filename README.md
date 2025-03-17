# 📚 Bibliosmia - Online Bookstore

**Bibliosmia** is an online bookstore web application that allows users to browse, purchase, and manage books. It features a user authentication system, an admin panel for managing books, and a cart system for easy purchasing.

## 🚀 Features

### 🛍 User Section
- Browse books by categories
- Search for books
- Add books to the cart
- Checkout process
- User authentication (registration & login)

### 🔑 Admin Section
- Add, update, and delete books
- Manage users
- View and manage orders
- Assign user roles (Admin/User)

### 🛒 Cart System
- Add books to the cart
- Update or remove items from the cart
- Secure checkout

## 🛠 Tech Stack
- **Frontend:** HTML, CSS, Bootstrap
- **Backend:** PHP, Laravel
- **Database:** MySQL (using phpMyAdmin via XAMPP)

## 📸 Screenshots
*(Add images here using the GitHub markdown format:)*

```md
![Homepage](screenshots/homepage.png)
![Book Details](screenshots/book_details.png)
![Admin Panel](screenshots/admin_panel.png)
```

## 🛠 Installation & Setup

### 1️⃣ Clone the Repository
```sh
git clone https://github.com/yourusername/bibliosmia.git
cd bibliosmia
```

### 2️⃣ Install Dependencies
```sh
composer install
npm install  # (If using Breeze or additional frontend dependencies)
```

### 3️⃣ Configure Environment
```sh
cp .env.example .env
php artisan key:generate
```
Set up database credentials in `.env`:
```env
DB_DATABASE=bibliosmia
DB_USERNAME=root
DB_PASSWORD=
```

### 4️⃣ Migrate & Seed the Database
```sh
php artisan migrate --seed
```

### 5️⃣ Serve the Application
```sh
php artisan serve
```

Now, visit **http://127.0.0.1:8000** in your browser. 🎉

## 📦 Database Backup & Restore

### 🔄 Backup MySQL Database (Using phpMyAdmin)
1. Open **phpMyAdmin** (`http://localhost/phpmyadmin`)
2. Select the **bibliosmia** database
3. Click **Export** > Select **Quick** and **SQL** format
4. Click **Go** and save the `.sql` file

### ♻️ Restore MySQL Database
1. Open **phpMyAdmin**
2. Create a new database named `bibliosmia`
3. Click **Import**, choose the saved `.sql` file, and upload it

## 🤝 Contributing
Feel free to fork this repository, submit issues, or make pull requests!

## 📄 License
This project is **open-source** and available under the **MIT License**.

---
🚀 *Built with ❤️ using Laravel and MySQL*
