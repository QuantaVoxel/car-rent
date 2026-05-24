# Plan: Refactor Public Index Page

## Background & Motivation
The user requested fixing `public/index.php` to align with the database schema. The current file contains hardcoded vehicle listings in the "Explore Most Popular Cars" section. 

## Scope
Replace the static HTML carousel items in `public/index.php` with dynamic data pulled from the `kendaraan` and `tipe_kendaraan` tables.

## Implementation Steps
1. Add a PHP block at the top of `public/index.php` to connect to the database and query the latest 6 active vehicles, joining with `tipe_kendaraan` to get type names and capacities.
2. Replace the multiple static `<div class="item">...</div>` blocks within the `listing-three__carousel` with a single `foreach` loop.
3. Map the database fields (`foto_kendaraan`, `nama_tipe`, `nama_kendaraan`, `is_manual`, `tahun`, `jenis_bahan_bakar`, `warna`, `kapasitas_penumpang`, `status`, `harga_perhari`) to the HTML structure.
4. Update the "Details Now" links to point to `kendaraan-detail.php?id=...`.

## Verification
Load the index page and verify that the "Explore Most Popular Cars" section displays the 6 most recently added vehicles from the database with correct formatting.