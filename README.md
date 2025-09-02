# Adrian Del Rosario — Portfolio (Laravel 10 + Vite + Tailwind)

A personal portfolio built with Laravel 10, Vite, and Tailwind CSS.

## Requirements
- PHP 8.1+
- Composer 2+
- Node.js 18+ and npm (for Vite dev server)

## Quick Start (Local)
1. Clone and enter the project directory
```bash
git clone https://github.com/ian1219/Adrian_Del_Rosario_portfolio.git
cd Adrian_Del_Rosario_portfolio
```
2. Install PHP dependencies
```bash
composer install
```
3. Install JS dependencies
```bash
npm install
```
4. Environment
```bash
cp .env.example .env
php artisan key:generate
```
- If you don’t need a DB, you can skip DB config.
- If you want DB features, set DB_* in `.env` and create the DB.

5. Run the app (two terminals)
```bash
# Terminal A: Laravel
php artisan serve
# Terminal B: Vite dev server
npm run dev
```
Open http://127.0.0.1:8000