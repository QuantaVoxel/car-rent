# Plan: Add Widget Counts

## Background & Motivation
The user requested adding widget counts to the admin pages to display the total number of records (pesanan, kendaraan, tipe kendaraan, pengguna, pembayaran).

## Scope
Modify the following files:
1. `public/admin/pesanan.php`
2. `public/admin/kendaraan.php`
3. `public/admin/tipe_kendaraan.php`
4. `public/admin/pengguna.php`
5. `public/admin/pembayaran.php`

## Implementation Steps
For each file, I will insert a Metronic card widget immediately above the main datatable card. The widget will display `count($items)` with the respective label (e.g., "Total Pesanan", "Total Kendaraan").

## Verification
Review the modified PHP files to ensure the widget HTML is correctly placed and syntax is valid.