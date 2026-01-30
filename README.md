# Inventory System (Laravel Starter)

Isang starter Laravel web app para sa inventory system. May kasama itong CRUD flow para sa mga items, UI templates, at database migration para madaling makapagsimula.

## Features

- CRUD management para sa inventory items
- Stock level, unit price, at reorder level tracking
- Simple, clean Blade UI
- Pagination ready para sa list view

## Quick Start (Static HTML)

1. **Open locally**
   ```bash
   open index.html
   ```
2. **Serve via simple static server** (optional)
   ```bash
   python -m http.server 8000
   ```

Bisitahin ang `http://localhost:8000` para makita ang inventory dashboard.

## Inventory Routes (Laravel version)

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

## Vercel Deployment Notes (Static HTML)

Para gumana sa Vercel, i-deploy ang `index.html` bilang static site.

1. **Set build & output**: i-commit ang `vercel.json` na nagre-route sa `index.html`.
2. **Deploy**: wala nang PHP runtime na kailangan.
