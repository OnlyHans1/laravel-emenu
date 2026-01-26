# E-Menu - Digital Restaurant Menu System

[![Laravel](https://img.shields.io/badge/Laravel-11.x-FF2D20?style=for-the-badge&logo=laravel)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php)](https://php.net)
[![Filament](https://img.shields.io/badge/Filament-3.x-1f2937?style=for-the-badge&logo=filament)](https://filamentphp.com)
[![Midtrans](https://img.shields.io/badge/Midtrans-3D5AFE?style=for-the-badge&logo=midtrans)](https://midtrans.com)

E-Menu adalah aplikasi web modern untuk manajemen menu restoran digital yang dibangun menggunakan Laravel 11 dan FilamentPHP. Aplikasi ini menyediakan platform lengkap untuk restoran dalam mengelola menu, pesanan, dan transaksi dengan interface yang user-friendly dan mobile-responsive.

## 🚀 Fitur Utama

### ✨ Fitur Customer (Frontend)
- **Digital Menu** - Browse menu produk dengan kategori
- **Search & Filter** - Pencarian produk dan filter berdasarkan kategori
- **Shopping Cart** - Keranjang belanja dengan quantity adjustment
- **Customer Information** - Form data customer untuk checkout
- **Multiple Payment** - Support cash dan Midtrans payment gateway
- **Order Tracking** - Tracking status pesanan dengan kode unik
- **Mobile Responsive** - Optimized untuk mobile devices

### ✨ Fitur Admin (FilamentPHP)
- **Dashboard Analytics** - Ringkasan penjualan dan statistik
- **Manajemen Produk** - CRUD lengkap untuk menu makanan/minuman
- **Manajemen Kategori** - Pengelolaan kategori produk
- **Manajemen Store** - Multi-store management
- **Manajemen Transaksi** - Tracking dan pengelolaan pesanan
- **User Management** - Pengelolaan data store owner
- **Payment Gateway** - Konfigurasi Midtrans payment

## 📋 Struktur Database

### Model Utama:
- `User` - Data store owner dan admin
- `Product` - Menu makanan/minuman
- `ProductCategory` - Kategori produk
- `Transaction` - Data transaksi pesanan
- `TransactionDetail` - Detail item dalam transaksi
- `Subscription` - Data subscription store

## 🛠️ Tech Stack

- **Backend**: Laravel 11.x (PHP 8.2+)
- **Frontend**: Blade, Tailwind CSS, JavaScript
- **Admin Panel**: FilamentPHP 3.x
- **Build Tool**: Vite
- **Database**: MySQL/SQLite
- **Payment**: Midtrans Gateway
- **Development**: Laravel Sail (Docker)

## 📦 Instalasi

### Prerequisites
- PHP 8.2 atau lebih tinggi
- Composer
- Node.js & npm
- Git
- Database (MySQL/SQLite)

### Langkah Instalasi

1. **Clone Repository**
   ```bash
   git clone <repository-url>
   cd emenu
   ```

2. **Install PHP Dependencies**
   ```bash
   composer install
   ```

4. **Setup Environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Database Setup**
   ```bash
   # Untuk SQLite (default)
   touch database/database.sqlite

   # Untuk MySQL
   # Update konfigurasi DB di file .env
   # DB_CONNECTION=mysql
   # DB_HOST=127.0.0.1
   # DB_PORT=3306
   # DB_DATABASE=emenu
   # DB_USERNAME=your_username
   # DB_PASSWORD=your_password
   ```

6. **Run Migrations & Seeders**
   ```bash
   php artisan migrate
   php artisan db:seed
   ```

7. **Build Assets**
   ```bash
   npm run build
   # atau untuk development
   npm run dev
   ```

## 📖 Penggunaan

### Akses Admin Panel
1. Buka browser dan akses: `http://localhost:8000/admin`
2. Login dengan kredensial admin:
   - Email: `admin@example.com`
   - Password: `password`
3. Kelola produk, kategori, dan transaksi melalui dashboard

### Akses Customer Interface
1. Buka browser dan akses: `http://localhost:8000/{store-username}`
2. Browse menu dan tambahkan ke keranjang
3. Checkout dengan mengisi informasi customer
4. Pilih metode pembayaran (cash/Midtrans)

### Development Commands
```bash
# Menjalankan development server
php artisan serve

# Build assets untuk production
npm run build

# Watch assets untuk development
npm run dev
```

## 🔧 Konfigurasi

### Environment Variables (.env)
```env
APP_NAME="E-Menu"
APP_ENV=local
APP_KEY=base64:your-key-here
APP_DEBUG=true
APP_URL=http://localhost:8000

DB_CONNECTION=sqlite
# DB_CONNECTION=mysql (untuk MySQL)

# Midtrans Configuration
MIDTRANS_SERVER_KEY=your-midtrans-server-key
MIDTRANS_IS_PRODUCTION=false
MIDTRANS_IS_SANITIZED=true
MIDTRANS_IS_3DS=true

```

### File Konfigurasi Penting
- `config/filament.php` - Konfigurasi admin panel
- `config/midtrans.php` - Konfigurasi payment gateway

## 📁 Struktur Project

```
emenu/
├── app/
│   ├── Filament/Resources/     # Admin panel resources
│   ├── Http/Controllers/       # HTTP controllers
│   ├── Http/Controllers/Api/   # API controllers (Midtrans)
│   ├── Models/                # Eloquent models
│   └── Providers/             # Service providers
├── config/
│   ├── filament.php           # Filament configuration
│   └── midtrans.php           # Midtrans configuration
├── database/
│   ├── migrations/            # Database migrations
│   └── seeders/               # Database seeders
├── public/
│   ├── assets/                # CSS, JS, images
│   └── storage/               # Uploaded files
├── resources/
│   ├── css/                   # Custom CSS
│   ├── js/                    # JavaScript files
│   └── views/                 # Blade templates
│       ├── layouts/           # Layout templates
│       └── pages/             # Page templates
├── routes/
│   ├── web.php                # Web routes
│   └── api.php                # API routes
└── storage/                   # File storage
```

**E-Menu** - Solusi digital untuk manajemen restoran modern! 🍽️✨
