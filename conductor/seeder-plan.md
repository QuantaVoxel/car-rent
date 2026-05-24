# Development Seeder Plan

## Background & Motivation
The user requested a development seeder to populate the database with dummy data for all modules, and to ensure that creating or updating an order (`pesanan`) automatically logs the change to `log_pesanan`.

## Scope & Impact
1. Update `backend/Models/Pesanan.php` to automatically log changes upon `create()` and `update()`.
2. Create `seeds/dev_seeder.php` to seed the database with:
   - 10 Tipe Kendaraan
   - 20 Kendaraan
   - 5 Pengguna
   - 20 Pesanan (which will automatically trigger log creation)
   - 15 Pembayaran
   - 15 Evaluasi Pesanan

## Proposed Solution
We will use plain PHP to generate the dummy data. We will also update the Pesanan model to use `auth()->check()` or fallback to 'sistem' for the log's `dibuat_oleh` field.

## Verification
Run the seeder using `php seeds/dev_seeder.php` and verify the database has the expected number of rows.
