# Plan: Add Status-Specific Widget Counts

## Background & Motivation
The user requested adding detailed widget counts for each admin page, breaking down the totals by specific statuses or roles.
- Pesanan: Count by status_pesanan.
- Kendaraan: Count by status.
- Tipe Kendaraan: Count by is_active (Aktif/Nonaktif).
- Pengguna: Count by role.
- Pembayaran: Count by status_pembayaran.

## Scope
Modify the following files to replace the single "Total" widget with a row of widgets displaying counts for each category:
1. `public/admin/pesanan.php`
2. `public/admin/kendaraan.php`
3. `public/admin/tipe_kendaraan.php`
4. `public/admin/pengguna.php`
5. `public/admin/pembayaran.php`

## Implementation Steps
For each file:
1. Add a small PHP block before the widget row to calculate counts by iterating over `$items`.
2. Update the HTML to loop over the possible statuses/roles and render a `col-sm-6 col-md-4 col-lg-3` widget card for each.

## Verification
Review the modified files to ensure syntax is valid and all statuses requested by the user are covered.