<?php
require_once __DIR__ . '/../backend/bootstrap.php';

if (!auth()->check()) {
    set_flash('error', 'Silakan login terlebih dahulu untuk melakukan pemesanan.');
    header('Location: login.php');
    exit;
}
?>

<?= layout('header', ['title' => 'Checkout']) ?>

<section class="checkout-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="checkout-page__left">
                    <div class="checkout-page__billing-details">
                        <h3 class="checkout-page__title">Detail Pengantaran</h3>
                        <form action="process/checkout.php" method="POST" id="checkout-form" class="checkout-page__form">
                            <input type="hidden" name="cart_data" id="cart-data-input">

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="checkout-page__input-box">
                                        <p>Lokasi Penjemputan<span>*</span></p>
                                        <input type="text" class="form-control" name="lokasi_jemput" placeholder="Alamat lengkap penjemputan" required>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="checkout-page__input-box">
                                        <p>Lokasi Tujuan<span>*</span></p>
                                        <input type="text" class="form-control" name="lokasi_tujuan" placeholder="Alamat lengkap tujuan" required>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="checkout-page__input-box">
                                        <p>Estimasi Jarak (KM)<span>*</span></p>
                                        <input type="number" class="form-control" step="0.01" name="jarak_km" placeholder="Contoh: 15.5" required>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="checkout-page__input-box">
                                        <p>Catatan Tambahan</p>
                                        <textarea name="catatan_pengguna" class="form-control" rows="7" placeholder="Catatan untuk admin/driver"></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="checkout-page__right">
                    <div class="checkout-page__your-order">
                        <h3 class="checkout-page__title">Ringkasan Pesanan</h3>
                        <div class="checkout-page__order-table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Kendaraan</th>
                                        <th class="text-end">Harga/Hari</th>
                                    </tr>
                                </thead>
                                <tbody id="checkout-items-body">
                                    <!-- JS will populate -->
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Total Pembayaran (Booking)</th>
                                        <td class="text-end"><span id="checkout-total">Rp 0</span></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="checkout-page__payment-method">
                            <div class="checkout-page__payment-method-single">
                                <h3 class="checkout-page__payment-method-title">Metode Pembayaran</h3>
                                <div class="p-3 bg-light rounded border d-flex align-items-center">
                                    <i class="fas fa-qrcode fa-2x text-primary me-3"></i>
                                    <div>
                                        <h5 class="mb-0">QRIS (Otomatis)</h5>
                                        <p class="mb-0 small text-muted">Bayar instan menggunakan GoPay, OVO, Dana, dll.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout-page__btn-box mt-4">
                                <button type="button" onclick="submitCheckout()" class="thm-btn w-100">Buat Pesanan & Bayar <span class="fas fa-arrow-right"></span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
                <td>${item.nama} <br><small class="text-muted">${item.nama_tipe}</small></td>
                <td class="text-end">Rp ${new Intl.NumberFormat('id-ID').format(item.harga)}</td>
            </tr>
        `;
    });

    totalSpan.innerText = 'Rp ' + new Intl.NumberFormat('id-ID').format(total);
}

function submitCheckout() {
    const form = document.getElementById('checkout-form');
    if (form.checkValidity()) {
        form.submit();
    } else {
        form.reportValidity();
    }
}

document.addEventListener('DOMContentLoaded', renderCheckout);
</script>

<?= layout('footer') ?>