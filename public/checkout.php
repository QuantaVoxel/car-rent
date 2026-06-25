<?php
require_once __DIR__ . '/../backend/bootstrap.php';

if (!auth()->check()) {
    set_flash('error', 'Silakan login terlebih dahulu untuk melakukan pemesanan.');
    header('Location: login.php');
    exit;
}
?>

<?= layout('header', ['title' => 'Checkout']) ?>

<section class="checkout-page py-5">
    <div class="container">
        <div class="row gx-5">
            <div class="col-xl-7 col-lg-7 mb-4 mb-lg-0">
                <div class="checkout-page__left shadow-sm p-4 bg-white rounded border">
                    <div class="checkout-page__billing-details">
                        <h3 class="checkout-page__title border-bottom pb-3 mb-4">Detail Pengantaran</h3>
                        <form action="process/checkout.php" method="POST" id="checkout-form" class="checkout-page__form">
                            <input type="hidden" name="cart_data" id="cart-data-input">

                            <div class="row g-4">
                                <div class="col-xl-12">
                                    <div class="checkout-page__input-box">
                                        <label class="form-label fw-semibold">Lokasi Penjemputan <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-lg bg-light" name="lokasi_jemput" placeholder="Alamat lengkap penjemputan" required>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="checkout-page__input-box">
                                        <label class="form-label fw-semibold">Lokasi Tujuan <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-lg bg-light" name="lokasi_tujuan" placeholder="Alamat lengkap tujuan" required>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="checkout-page__input-box">
                                        <label class="form-label fw-semibold">Estimasi Jarak (KM) <span class="text-danger">*</span></label>
                                        <div class="input-group input-group-lg">
                                            <input type="number" class="form-control bg-light" step="0.01" name="jarak_km" placeholder="15.5" required>
                                            <span class="input-group-text bg-light text-muted">KM</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="checkout-page__input-box">
                                        <label class="form-label fw-semibold">Catatan Tambahan</label>
                                        <textarea name="catatan_pengguna" class="form-control form-control-lg bg-light" rows="4" placeholder="Catatan untuk admin atau pengemudi (opsional)"></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-5 col-lg-5">
                <div class="checkout-page__right shadow-sm p-4 bg-white rounded border sticky-top" style="top: 100px; z-index: 10;">
                    <div class="checkout-page__your-order">
                        <h3 class="checkout-page__title border-bottom pb-3 mb-4">Ringkasan Pesanan</h3>
                        <div class="checkout-page__order-table table-responsive mb-4">
                            <table class="table align-middle">
                                <thead>
                                    <tr class="text-muted">
                                        <th class="fw-medium border-0">Kendaraan</th>
                                        <th class="text-end fw-medium border-0">Harga/Hari</th>
                                    </tr>
                                </thead>
                                <tbody id="checkout-items-body" class="border-top">
                                    <!-- JS will populate -->
                                </tbody>
                                <tfoot class="border-top">
                                    <tr>
                                        <th class="py-3 fs-6">Total Pembayaran</th>
                                        <td class="text-end py-3"><span id="checkout-total" class="fs-5 fw-bold text-primary">Rp 0</span></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        
                        <div class="checkout-page__payment-method">
                            <h4 class="mb-3 fs-6 fw-semibold">Metode Pembayaran</h4>
                            <div class="p-3 bg-light rounded border d-flex align-items-center mb-4 transition-hover">
                                <div class="bg-white p-2 rounded shadow-sm me-3 border">
                                    <i class="fas fa-qrcode fa-2x text-primary"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1 fs-6">QRIS (Otomatis)</h5>
                                    <p class="mb-0 small text-muted">GoPay, OVO, Dana, ShopeePay, LinkAja</p>
                                </div>
                            </div>
                            
                            <div class="checkout-page__btn-box">
                                <button type="button" onclick="submitCheckout()" class="thm-btn w-100 py-3 fs-6 d-flex justify-content-center align-items-center gap-2">
                                    <i class="fas fa-lock fa-sm"></i> Buat Pesanan & Bayar 
                                </button>
                                <p class="text-center small text-muted mt-3 mb-0">
                                    <i class="fas fa-shield-alt me-1"></i> Transaksi Anda aman dan terenkripsi
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.checkout-page { background-color: #f8f9fa; }
.form-control:focus { box-shadow: 0 0 0 0.25rem rgba(var(--bs-primary-rgb), 0.1); border-color: var(--bs-primary); }
.transition-hover { transition: all 0.2s ease; cursor: pointer; }
.transition-hover:hover { border-color: var(--bs-primary) !important; background-color: rgba(var(--bs-primary-rgb), 0.05) !important; }
</style>

<script>
function renderCheckout() {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    const body = document.getElementById('checkout-items-body');
    const totalSpan = document.getElementById('checkout-total');
    const input = document.getElementById('cart-data-input');
    
    if (cart.length === 0) {
        alert('Keranjang Anda kosong.');
        window.location.href = 'kendaraan.php';
        return;
    }

    input.value = JSON.stringify(cart);
    
    body.innerHTML = '';
    let total = 0;

    cart.forEach(item => {
        total += parseFloat(item.harga);
        body.innerHTML += `
            <tr>
                <td class="py-3">
                    <div class="d-flex align-items-center">
                        <div class="me-3 d-none d-sm-block">
                            <img src="${item.foto ? '/uploads/' + item.foto : 'assets/images/shop/cart-page-img-1.jpg'}" class="rounded border" style="width: 50px; height: 40px; object-fit: cover;">
                        </div>
                        <div>
                            <span class="d-block fw-semibold text-dark">${item.nama}</span>
                            <small class="text-muted">${item.nama_tipe}</small>
                        </div>
                    </div>
                </td>
                <td class="text-end py-3 fw-medium text-dark">Rp ${new Intl.NumberFormat('id-ID').format(item.harga)}</td>
            </tr>
        `;
    });

    totalSpan.innerText = 'Rp ' + new Intl.NumberFormat('id-ID').format(total);
}

function submitCheckout() {
    const form = document.getElementById('checkout-form');
    if (form.checkValidity()) {
        const btn = document.querySelector('.thm-btn');
        btn.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span> Memproses...';
        btn.disabled = true;
        form.submit();
    } else {
        form.reportValidity();
    }
}

document.addEventListener('DOMContentLoaded', renderCheckout);
</script>

<?= layout('footer') ?>
