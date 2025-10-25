# Apiato Framework

## Project Description

Apiato is a framework for building scalable and testable API-Centric Applications with PHP, built on top of Laravel 10.0. It follows the Porto architectural pattern and provides a comprehensive set of tools and functionalities to accelerate API development. The framework includes features like role-based access control, API documentation generation, auto ID hashing, API versioning, localization, code generators, and social authentication.

## File Structure Overview

The project follows a unique container-based architecture:

- **`app/`** - Main application directory
  - **`Containers/`** - Business logic organized in containers
    - **`AppSection/`** - Core application containers (Authentication, Authorization, User)
    - **`Vendor/`** - Third-party containers
  - **`Ship/`** - Shared infrastructure components (Parents, Providers, Kernels, etc.)
- **`config/`** - Laravel configuration files
- **`database/`** - Database migrations, factories, and seeders
- **`public/`** - Web server document root
- **`resources/`** - Views, assets, and language files
- **`storage/`** - Application storage (logs, cache, uploads)
- **`bootstrap/`** - Framework bootstrap files

Each container in `app/Containers/AppSection/` follows a consistent structure with Actions, Tasks, Models, UI (API/Web), Tests, and configuration files.

## Running Tests

The project uses PHPUnit for testing with multiple test suites:

```bash
# Run all tests
./vendor/bin/phpunit

# Run specific test suites
./vendor/bin/phpunit --testsuite=Unit
./vendor/bin/phpunit --testsuite=Functional
./vendor/bin/phpunit --testsuite=Ship-Unit
```

Tests are organized within each container under the `Tests/` directory, with separate Unit and Functional test folders.

## Development Setup

1. **Install dependencies**: `composer install`
2. **Environment setup**: Copy `.env.example` to `.env` and configure your database and other settings
3. **Generate application key**: `php artisan key:generate`
4. **Run migrations**: `php artisan migrate`
5. **Start development server**: `php artisan serve`

## Additional Information

- **PHP Requirements**: PHP 8.1+ with extensions: curl, gettext, mbstring, openssl, pdo, sodium, tokenizer
- **Documentation**: Comprehensive documentation available at [apiato.io/docs](https://apiato.io/docs)
- **Code Quality**: The project includes PHP CS Fixer, PHPMD, and Psalm for code quality and static analysis
- **Architecture**: Built using the Porto Software Architectural Pattern for better organization and scalability
- **API-First**: Designed specifically for API-centric applications with built-in API versioning and documentation