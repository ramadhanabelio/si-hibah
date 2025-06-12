## 🛠️ Project Installation Guide

Following are the steps to install a Laravel project:

### Prerequisites

Make sure you have [Composer](https://getcomposer.org/) installed on your system before starting the installation.

### Steps

**1.** Clone your Laravel project repository into a local directory:

```bash
git clone https://github.com/ramadhanabelio/si-hibah.git
```

**2.** Go to the project directory:

```bash
cd si-hibah
```

**3.** Install PHP dependencies using composer:

```bash
composer install
```

**4.** Rename the .env.example file to .env. This is the Laravel configuration file:

```bash
cp .env.example .env
```

**5.** Create a database with a name according to your project, for example "si_hibah", and configure the .env file to set the database name:

Open the .env file using a text editor and find the following line:

```bash
DB_DATABASE=laravel
```

Replace database_name with the name you used for the database. For example:

```bash
DB_DATABASE=si_hibah
```

**6.** Generate application key:

```bash
php artisan key:generate
```

**7.** Create and migrate database:

```bash
php artisan migrate
```

To enter admin data, run the following seeding command:

```bash
php artisan db:seed
```

This command will run the seeder you created to populate initial data, such as admin accounts, into the database.

**8.** Create storage folder:

```bash
php artisan storage:link
```

**9.** Run the Laravel development server:

```bash
php artisan serve
```

After following the steps above, your Laravel project is now ready to use and can be accessed via the browser at http://localhost:8000.
