## 🧰 Prerequisites

Before you begin, ensure your system has the following installed:

-   PHP 8.1 or higher
-   [Composer](https://getcomposer.org/)
-   MySQL or compatible database system
-   Git
-   A local web server (e.g., Apache, Nginx) or Laravel Sail (optional)

---

## 🚀 Installation Steps

Follow these steps to get the Laravel project up and running:

### 1. Clone the Repository

```bash
git clone https://github.com/ramadhanabelio/si-hibah.git
cd si-hibah
```

### 2. Install PHP Dependencies

```bash
composer install
```

### 3. Set Up the Environment File

Copy the example environment file and adjust it as needed:

```bash
cp .env.example .env
```

Then, update the following lines in `.env` to match your local database configuration:

```env
DB_DATABASE=si_hibah
DB_USERNAME=root
DB_PASSWORD=your_password
```

### 4. Generate the Application Key

```bash
php artisan key:generate
```

### 5. Run Migrations

Create the database tables:

```bash
php artisan migrate
```

### 6. Seed the Database (Optional)

If you want to populate the database with initial data (e.g., admin account):

```bash
php artisan db:seed
```

📌 **Default Admin Account** (if available via seeder):

-   **Email**: `admin@sihibah.com`
-   **Password**: `12345678`

### 7. Create Storage Symlink

```bash
php artisan storage:link
```

### 8. Start the Development Server

```bash
php artisan serve
```

Visit your application at [http://localhost:8000](http://localhost:8000)

---

## 📬 Contact

If you encounter any issues or have questions, feel free to:

-   Open an issue on [GitHub](https://github.com/ramadhanabelio/si-hibah/issues)
-   Contact the maintainer: **ramadhanabelionusaputra@gmail.com**
