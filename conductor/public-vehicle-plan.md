# Plan: Implement Public Vehicle Pages

## Background & Motivation
The user requested integrating dynamic database content into the public-facing vehicle listing page (`public/kendaraan.php`) and the detailed view page (`public/kendaraan-detail.php`).

## Scope
1. **`public/kendaraan.php`**: Fetch available vehicles from the `kendaraan` table (joined with `tipe_kendaraan`) and render them inside a `foreach` loop, replacing the hardcoded HTML blocks. Map relevant data to the UI (name, type, price, transmission, year, fuel type, etc.).
2. **`public/kendaraan-detail.php`**: Fetch a single vehicle based on an `id` query parameter. Display its detailed specifications, pricing, and description.

## Implementation Steps
1. In `kendaraan.php`, establish a database connection, run a query to fetch active vehicles, and wrap the single card HTML template in a PHP `foreach` loop. Echo the dynamic properties.
2. In `kendaraan-detail.php`, extract `$_GET['id']`, fetch the specific vehicle, and map its attributes to the detailed layout template (title, overview list, features, rent form).

## Verification
Navigate to the public vehicles page and verify the list matches the database entries. Click on a vehicle to ensure the detail page correctly displays that specific vehicle's information.