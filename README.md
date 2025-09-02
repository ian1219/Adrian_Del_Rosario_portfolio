# Adrian Del Rosario — Portfolio (Laravel 10 + Vite + Tailwind)

A personal portfolio built with Laravel 10, Vite, and Tailwind CSS.

## Requirements
- PHP 8.1+
- Composer 2+
- Node.js 18+ and npm (for Vite dev server)
- SQLite or MySQL (optional — only needed if you plan to run migrations)
- Optional: Docker Desktop (for Laravel Sail)

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

5. (Optional) Run migrations
```bash
php artisan migrate
```

6. Run the app (two terminals)
```bash
# Terminal A: Laravel
php artisan serve
# Terminal B: Vite dev server
npm run dev
```
Open http://127.0.0.1:8000

## Docker (Laravel Sail)
1. Ensure Docker Desktop is running
2. Install dependencies and enable Sail
```bash
composer install
```
3. Copy env and generate key
```bash
cp .env.example .env
php artisan key:generate
```
4. Start Sail (first run builds images)
```bash
./vendor/bin/sail up -d
```
5. Vite in Sail
```bash
./vendor/bin/sail npm install
./vendor/bin/sail npm run dev
```
Open http://localhost

## Build for Production
```bash
npm run build
# or with Sail
./vendor/bin/sail npm run build
```
Vite will output production assets to `public/build/`. Ensure `@vite` is used in Blade templates (already configured in `resources/views/layouts/header.blade.php`).

## Useful Commands
- Start local dev: `php artisan serve` and `npm run dev`
- Cache config/routes/views: `php artisan optimize`
- Clear caches: `php artisan optimize:clear`
- Lint format (Pint): `./vendor/bin/pint`
- Run tests: `php artisan test`

## Project Structure (high level)
- `resources/views/` — Blade templates (e.g., `about.blade.php`, `index.blade.php`, `layouts/`)
- `public/` — Public assets (images, CSS)
- `resources/css` and `resources/js` — Tailwind/Vite sources
- `routes/web.php` — Web routes
- `app/` — Laravel app code (controllers, models, etc.)

## Environment Notes
- Vite config: `vite.config.js`
- Tailwind config: `tailwind.config.js`
- PostCSS: `postcss.config.js`
- If you change `.env`, restart Vite to pick up URL changes.

## Troubleshooting
- Blank styling? Ensure Vite is running (`npm run dev`) and `@vite('resources/css/app.css')` is present in `resources/views/layouts/header.blade.php`.
- 500 errors after clone: run `php artisan key:generate`.
- Port conflicts: use `php artisan serve --port=8001` or change Vite port `vite --port 5174`.
- Node version issues: use Node 18 LTS.

## License
MIT