-- ============================================================
--  SCHEMA DATABASE v2
--  Aplikasi Booking Kendaraan Online dengan Pembayaran QRIS
--  Revisi: Tanpa modul Driver. Admin yang mengelola & menyiapkan kendaraan.
-- ============================================================

DROP table IF EXISTS `pesanan`;
DROP table IF EXISTS `pembayaran`;
DROP table IF EXISTS `evaluasi_pesanan`;
DROP table IF EXISTS `log_pesanan`;
DROP table IF EXISTS `kendaraan`;
DROP table IF EXISTS `tipe_kendaraan`;
DROP table IF EXISTS `pengguna`;

SET
FOREIGN_KEY_CHECKS = 0;
SET
SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

-- ------------------------------------------------------------
-- 1. TABEL PENGGUNA
--    Aktor utama yang melakukan pemesanan kendaraan
-- ------------------------------------------------------------
CREATE TABLE pengguna
(
    id_pengguna   INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama_lengkap  VARCHAR(100) NOT NULL,
    email         VARCHAR(150) NOT NULL UNIQUE,
    no_telepon    VARCHAR(20)  NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin','pengguna') NOT NULL DEFAULT 'pengguna',
    status_akun   ENUM('aktif','nonaktif','suspend') NOT NULL DEFAULT 'aktif',
    created_at    TIMESTAMP    NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at    TIMESTAMP    NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ------------------------------------------------------------
-- 3. TABEL TIPE KENDARAAN
--    Master data kategori kendaraan beserta tarif
-- ------------------------------------------------------------
CREATE TABLE tipe_kendaraan
(
    id_tipe      INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama_tipe    VARCHAR(50)    NOT NULL, -- Contoh: Motor, Mobil, Van
    deskripsi    TEXT NULL,
    kapasitas    TINYINT UNSIGNED    NOT NULL DEFAULT 4,
    tarif_per_km DECIMAL(10, 2) NOT NULL,
    tarif_base   DECIMAL(10, 2) NOT NULL, -- Biaya minimum / biaya buka pintu
    icon_url     VARCHAR(255) NULL,
    is_active    TINYINT(1)          NOT NULL DEFAULT 1,
    created_at   TIMESTAMP      NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ------------------------------------------------------------
-- 4. TABEL KENDARAAN
--    Armada kendaraan yang dikelola admin
-- ------------------------------------------------------------
CREATE TABLE kendaraan
(
    id_kendaraan   INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    id_tipe        INT UNSIGNED        NOT NULL,
    nama_kendaraan VARCHAR(100) NOT NULL, -- Contoh: Toyota Avanza
    plat_nomor     VARCHAR(20)  NOT NULL UNIQUE,
    warna          VARCHAR(30)  NOT NULL,
    tahun YEAR                NOT NULL,
    foto_kendaraan VARCHAR(255) NULL,
    harga_perhari DECIMAL(10, 2) NOT NULL,
    is_manual BOOLEAN NOT NULL DEFAULT FALSE,
    jenis_bahan_bakar ENUM('bensin','diesel','listrik') NOT NULL DEFAULT 'bensin',
    kapasitas_penumpang INT UNSIGNED NOT NULL DEFAULT 4,
    status         ENUM('tersedia','dipakai','perawatan','nonaktif') NOT NULL DEFAULT 'tersedia',
    created_at     TIMESTAMP    NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at     TIMESTAMP    NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

    CONSTRAINT fk_kendaraan_tipe FOREIGN KEY (id_tipe) REFERENCES tipe_kendaraan (id_tipe)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ------------------------------------------------------------
-- 5. TABEL PESANAN
--    Pengguna memilih tipe, menentukan lokasi jemput & tujuan,
--    kemudian admin memproses dan menyiapkan kendaraan
-- ------------------------------------------------------------
CREATE TABLE pesanan
(
    id_pesanan        INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    kode_pesanan      VARCHAR(20)    NOT NULL UNIQUE, -- Contoh: ORD-20260523-001
    id_pengguna       INT UNSIGNED        NOT NULL,
    id_tipe_kendaraan INT UNSIGNED        NOT NULL,
    id_kendaraan      INT UNSIGNED        NULL,       -- Diisi admin saat memproses
    id_admin          INT UNSIGNED        NULL,       -- Admin yang memproses pesanan

    -- Lokasi
    lokasi_jemput     VARCHAR(255)   NOT NULL,
    latitude_jemput   DECIMAL(10, 8) NOT NULL,
    longitude_jemput  DECIMAL(11, 8) NOT NULL,
    lokasi_tujuan     VARCHAR(255)   NOT NULL,
    latitude_tujuan   DECIMAL(10, 8) NOT NULL,
    longitude_tujuan  DECIMAL(11, 8) NOT NULL,
    jarak_km          DECIMAL(8, 2) NULL,             -- Diisi setelah kalkulasi rute

    -- Tarif
    tarif_base        DECIMAL(10, 2) NOT NULL DEFAULT 0,
    tarif_jarak       DECIMAL(10, 2) NOT NULL DEFAULT 0,
    total_tarif       DECIMAL(10, 2) NOT NULL DEFAULT 0,

    -- Status & Waktu
    status_pesanan    ENUM(
                            'menunggu_konfirmasi',  -- Pengguna baru submit order
                            'dikonfirmasi',         -- Admin konfirmasi & siapkan kendaraan
                            'kendaraan_dikirim',    -- Kendaraan dalam perjalanan ke lokasi jemput
                            'dalam_perjalanan',     -- Pengguna sudah naik / kendaraan digunakan
                            'selesai',              -- Perjalanan selesai
                            'dibatalkan'            -- Dibatalkan pengguna atau admin
                        ) NOT NULL DEFAULT 'menunggu_konfirmasi',

    catatan_pengguna  TEXT NULL,                      -- Catatan dari pengguna saat pesan
    catatan_admin     TEXT NULL,                      -- Catatan dari admin saat proses

    waktu_pesan       TIMESTAMP      NOT NULL DEFAULT CURRENT_TIMESTAMP,
    waktu_konfirmasi  TIMESTAMP NULL,                 -- Diisi saat admin konfirmasi
    waktu_jemput      TIMESTAMP NULL,                 -- Diisi saat kendaraan tiba di lokasi jemput
    waktu_selesai     TIMESTAMP NULL,                 -- Diisi saat perjalanan selesai

    created_at        TIMESTAMP      NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at        TIMESTAMP      NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

    CONSTRAINT fk_pesanan_pengguna FOREIGN KEY (id_pengguna) REFERENCES pengguna (id_pengguna),
    CONSTRAINT fk_pesanan_tipe FOREIGN KEY (id_tipe_kendaraan) REFERENCES tipe_kendaraan (id_tipe),
    CONSTRAINT fk_pesanan_kendaraan FOREIGN KEY (id_kendaraan) REFERENCES kendaraan (id_kendaraan)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ------------------------------------------------------------
-- 6. TABEL PEMBAYARAN (QRIS)
--    Satu pesanan memiliki satu pembayaran QRIS
-- ------------------------------------------------------------
CREATE TABLE pembayaran
(
    id_pembayaran     INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    id_pesanan        INT UNSIGNED        NOT NULL UNIQUE,
    kode_transaksi    VARCHAR(100)   NOT NULL UNIQUE, -- ID dari gateway QRIS
    metode            ENUM('QRIS')        NOT NULL DEFAULT 'QRIS',
    jumlah            DECIMAL(10, 2) NOT NULL,
    qris_string       TEXT NULL,                      -- QRIS payload
    qris_image_url    VARCHAR(255) NULL,              -- URL gambar QR code
    status_pembayaran ENUM(
                            'menunggu',
                            'berhasil',
                            'gagal',
                            'expired',
                            'refund'
                        ) NOT NULL DEFAULT 'menunggu',
    waktu_bayar       TIMESTAMP NULL,
    expired_at        TIMESTAMP NULL,
    response_gateway  JSON NULL,                      -- Raw response payment gateway
    created_at        TIMESTAMP      NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at        TIMESTAMP      NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

    CONSTRAINT fk_pembayaran_pesanan FOREIGN KEY (id_pesanan) REFERENCES pesanan (id_pesanan)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ------------------------------------------------------------
-- 7. TABEL EVALUASI PESANAN
--    Pengguna memberi rating & ulasan setelah pesanan selesai
-- ------------------------------------------------------------
CREATE TABLE evaluasi_pesanan
(
    id_evaluasi INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    id_pesanan  INT UNSIGNED        NOT NULL UNIQUE,
    id_pengguna INT UNSIGNED        NOT NULL,
    rating      TINYINT UNSIGNED    NOT NULL CHECK (rating BETWEEN 1 AND 5),
    komentar    TEXT NULL,
    created_at  TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,

    CONSTRAINT fk_evaluasi_pesanan FOREIGN KEY (id_pesanan) REFERENCES pesanan (id_pesanan),
    CONSTRAINT fk_evaluasi_pengguna FOREIGN KEY (id_pengguna) REFERENCES pengguna (id_pengguna)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ------------------------------------------------------------
-- 8. TABEL LOG PESANAN
--    Audit trail setiap perubahan status pesanan
-- ------------------------------------------------------------
CREATE TABLE log_pesanan
(
    id_log      INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    id_pesanan  INT UNSIGNED        NOT NULL,
    status_lama VARCHAR(50) NULL,
    status_baru VARCHAR(50) NOT NULL,
    keterangan  VARCHAR(255) NULL,
    dibuat_oleh ENUM('pengguna','admin','sistem') NOT NULL DEFAULT 'sistem',
    created_at  TIMESTAMP   NOT NULL DEFAULT CURRENT_TIMESTAMP,

    CONSTRAINT fk_log_pesanan FOREIGN KEY (id_pesanan) REFERENCES pesanan (id_pesanan) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- ============================================================
-- RINGKASAN RELASI
-- ============================================================
-- pengguna       -|------<  pesanan
-- admin          -|------<  pesanan
-- tipe_kendaraan -|------<  pesanan
-- tipe_kendaraan -|------<  kendaraan
-- kendaraan      -|------<  pesanan
-- pesanan        -|------|| pembayaran
-- pesanan        -|------|| evaluasi_pesanan
-- pesanan        -|------<  log_pesanan
-- pesanan        -|------<  notifikasi
-- ============================================================