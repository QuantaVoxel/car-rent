# Implement CRUD Views for Admin Modules

## Background & Motivation
The project requires a user interface for the admin panel to manage the system's core entities. The database schema and corresponding backend models (with basic CRUD methods) are already established. The backend also has process files (like `/process/kendaraan/create.php`) ready to handle form submissions. The goal is to build the front-end views using the Metronic template.

## Scope & Impact
We will create seven CRUD pages in the `public/admin/` directory:
1. `tipe_kendaraan.php`
2. `kendaraan.php`
3. `pengguna.php`
4. `pesanan.php`
5. `pembayaran.php`
6. `evaluasi_pesanan.php`
7. `log_pesanan.php`

These pages will use the Metronic layout components (`header.php`, `footer.php`).

## Proposed Solution
We will standardize the implementation across all modules using a unified layout:
- **List View:** A Metronic Card containing a Bootstrap table.
- **Add Record:** A "Create" button in the toolbar that opens a Bootstrap Modal. The modal will contain a form that submits a POST request to the respective `create.php` process handler.
- **Edit Record:** An "Edit" button in the table's action column that opens an Edit Modal. The modal will be pre-filled with the row's current data (using data attributes and JavaScript or multiple pre-rendered modals). It will submit to the `update.php` process handler.
- **Delete Record:** A "Delete" button that triggers a form submission (or confirmation dialog) to the `delete.php` process handler.
- **Relational Data:** For entities with foreign keys (e.g., `Kendaraan` needs `Tipe Kendaraan`), the PHP file will fetch the related data and populate `<select>` options in the Add/Edit forms.
- **Flash Messages:** We will include a section at the top of the content to display success/error flash messages using `get_flash()`.

## Implementation Plan
1. **Phase 1: Foundation & Simple Modules**
   - Create `public/admin/tipe_kendaraan.php` as it has no foreign keys. This will serve as the master template.
   - Implement Add, Edit, and Delete modals/forms.
   - Create `public/admin/pengguna.php` (also has no foreign keys).
2. **Phase 2: Relational Modules**
   - Create `public/admin/kendaraan.php` (depends on `TipeKendaraan`).
   - Create `public/admin/pesanan.php` (depends on `Pengguna`, `TipeKendaraan`, `Kendaraan`).
3. **Phase 3: Ancillary Modules**
   - Create `public/admin/pembayaran.php` (depends on `Pesanan`).
   - Create `public/admin/evaluasi_pesanan.php` (depends on `Pesanan`, `Pengguna`).
   - Create `public/admin/log_pesanan.php` (depends on `Pesanan`).

## Verification
- After each page is implemented, review the HTML structure and form actions.
- Ensure all necessary columns from the schema are present in the tables and forms.