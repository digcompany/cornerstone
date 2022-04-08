# The Source Code of Cornerstone

![Tests](https://github.com/digcompany/cornerstone/actions/workflows/test.yml/badge.svg)
![Styling](https://github.com/digcompany/cornerstone/actions/workflows/code-formatting.yml/badge.svg)
![Linting](https://github.com/digcompany/cornerstone/actions/workflows/phplint.yml/badge.svg)

## Installation

### Install Dependencies

```bash
composer install
```

```bash
npm install && npm run dev
```

### Configure Environment

First copy `.env.example` to `.env`

```bash
cp .env.example .env
```

Then edit database configurations to match your local setup

### Run Migrations

```bash
php artisan migrate:fresh --path=database/migrations/landlord --database=landlord
```

### Then install the icons

```bash
php artisan install:icons
```

### After that is finished you can generate an app key

```bash
php artisan key:generate
```

### Run Tests

```bash
php artisan test
```

### And finally serve your application!

```bash
php artisan serve
```

### Seeding the database

Optionally you way seed the database with the following command

```bash
php artisan migrate:fresh --seed --path=database/migrations/landlord --database=landlord
```
