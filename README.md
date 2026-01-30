# Inventory System (Laravel Starter)

Isang starter Laravel web app para sa inventory system. May kasama itong CRUD flow para sa mga items, UI templates, at database migration para madaling makapagsimula.

## Features

- CRUD management para sa inventory items
- Stock level, unit price, at reorder level tracking
- Simple, clean Blade UI
- Pagination ready para sa list view

## Quick Start

1. **Install dependencies**
   ```bash
   composer install
   ```
2. **Setup environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
3. **Configure database** sa `.env`, pagkatapos ay i-run ang migration:
   ```bash
   php artisan migrate
   ```
4. **Run local server**
   ```bash
   php artisan serve
   ```

Bisitahin ang `http://localhost:8000` para makita ang inventory dashboard.

## Inventory Routes

| Method | URI | Description |
| --- | --- | --- |
| GET | `/inventory` | Inventory list |
| GET | `/inventory/create` | Add new item form |
| POST | `/inventory` | Save new item |
| GET | `/inventory/{item}/edit` | Edit item form |
| PUT | `/inventory/{item}` | Update item |
| DELETE | `/inventory/{item}` | Delete item |

## Next Steps

- Magdagdag ng authentication (`php artisan make:auth` or Jetstream)
- Gumawa ng reports (low stock alerts, valuation)
- Integrate barcode scanner support
