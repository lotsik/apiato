# Apiato Framework

Apiato is a framework for building scalable and testable API-Centric Applications with PHP, built on top of Laravel 10.0 and PHP 8.1+. It follows the Porto architectural pattern and provides tools and functionalities that facilitate the development of any API-Centric App with features like role-based access control, API documentation generation, auto ID hashing, API versioning, localization, and code generation.

## File Structure

The project follows the Porto architectural pattern with a unique container-based structure:

- **`app/`** - Main application directory
  - **`Containers/`** - Business logic containers organized by domain
    - **`AppSection/`** - Core application containers (Authentication, Authorization, User)
    - **`Vendor/`** - Third-party containers
  - **`Ship/`** - Shared infrastructure components (Parents, Providers, Kernels, etc.)
- **`config/`** - Laravel configuration files
- **`database/`** - Database migrations, factories, and seeders
- **`public/`** - Web server document root
- **`resources/`** - Views, assets, and language files
- **`storage/`** - Application storage (logs, cache, uploads)
- **`bootstrap/`** - Framework bootstrap files

Each container in `app/Containers/AppSection/` follows a consistent structure with Actions, Tasks, Models, UI (Controllers/Routes), Tests, and other domain-specific components.

## Running Tests

The project uses PHPUnit for testing with separate test suites:

```bash
# Run all tests
./vendor/bin/phpunit

# Run specific test suites
./vendor/bin/phpunit --testsuite=Unit
./vendor/bin/phpunit --testsuite=Functional
./vendor/bin/phpunit --testsuite=Ship-Unit
```

Tests are organized within each container under `Tests/Unit` and `Tests/Functional` directories.

## Development Commands

```bash
# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install

# Generate application key
php artisan key:generate

# Run database migrations
php artisan migrate

# Start development server
php artisan serve

# Build frontend assets
npm run dev          # Development mode
npm run build        # Production build

# Code quality tools
./vendor/bin/php-cs-fixer fix    # Code formatting
./vendor/bin/psalm               # Static analysis
./vendor/bin/phpmd app text ruleset.xml  # Mess detection
```

## Getting Started

1. Copy `.env.example` to `.env` and configure your environment variables
2. Run `composer install` to install PHP dependencies
3. Run `php artisan key:generate` to generate application key
4. Configure your database settings in `.env`
5. Run `php artisan migrate` to set up the database
6. Start the development server with `php artisan serve`

For comprehensive documentation, visit [https://apiato.io/docs](https://apiato.io/docs).