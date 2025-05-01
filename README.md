# Vaccination Center Laravel

A Laravel 12-based application for managing vaccination center operations.

---

## 🚀 Getting Started

Follow these steps to set up and run the project locally:

### 1. Clone the Repository
```bash
git clone https://github.com/Mohamed-0-Turki/vaccinaction-center-laravel.git
cd vaccinaction-center-laravel
```

### 2. Install Dependencies
```bash
composer install
npm install
```

### 3. Setup Environment File
```bash
cp .env.example .env
```

### 4. Generate Application Key
```bash
php artisan key:generate
```

### 5. Configure Environment

Update the `.env` file with your database credentials:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 6. Run Migrations and Seeders
```bash
php artisan migrate --seed
```

This will create the necessary tables and seed 3 default users: `admin`, `manager`, and `user`.

### 7. Run Laravel Development Server
```bash
php artisan serve
```

The app will be accessible at: [http://localhost:8000](http://localhost:8000)

---

## 👥 Default Users

| Role    | Email               | Password  |
|---------|---------------------|-----------|
| Admin   | admin@example.com   | password  |
| Manager | manager@example.com | password  |
| User    | user@example.com    | password  |

---

## ⚙️ Other Useful Commands

### Clear cache
```bash
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

### Run Laravel queue worker (if used)
```bash
php artisan queue:work
```

### Build front-end assets (if using Vite)
```bash
npm run dev
```

---

## 🧪 Running Tests
```bash
php artisan test
```

---

## 📝 License

This project is open-source and available under the [MIT license](LICENSE).
```