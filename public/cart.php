<?php
require_once __DIR__ . '/../backend/bootstrap.php';
?>

<?= layout('header', ['title' => 'Keranjang']) ?>

<style>
.cart-page { background-color: #f8f9fa; padding: 60px 0; }
.product-box .img-box { flex-shrink: 0; }
.product-box h3 { font-size: 1.1rem; }
.cart-table th { font-weight: 500; font-size: 0.9rem; text-transform: uppercase; color: #6c757d; }
.cart-page__right .cart-page__sidebar { position: sticky; top: 100px; }
.icon-bin {
    display: inline-block;
    width: 20px;
    height: 20px;
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23dc3545'%3e%3cpath d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/%3e%3cpath fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
    transition: transform 0.2s;
}
.cross-icon:hover .icon-bin { transform: scale(1.15); }
.cross-icon:hover { color: #b22222 !important; }
</style>

<section class="cart-page">
    <div class="container">
        <div class="row d-none justify-content-center" id="cart-empty">
            <div class="col-12 col-md-8 col-lg-6 text-center py-5">
                <div class="bg-white p-5 rounded-3 shadow">
                    <img src="assets/images/resources/empty-cart.svg" alt="Keranjang Kosong" width="120" class="mb-4">
                    <h3 class="fw-bold fs-4">Keranjang Anda Kosong</h3>
                    <p class="text-muted">Sepertinya Anda belum menambahkan kendaraan apa pun. Mari temukan mobil yang cocok untuk Anda!</p>
                    <a href="kendaraan.php" class="thm-btn mt-3 d-inline-flex align-items-center gap-2">
                        <i class="fas fa-car"></i> Lihat Kendaraan
                    </a>
                </div>
            </div>
        </div>

        <div class="row" id="cart-container">
            <div class="col-xl-8 col-lg-7">
                <div class="cart-page__left bg-white p-4 rounded-3 shadow-sm">
                    <h3 class="mb-4 border-bottom pb-3 fs-5 fw-bold">Isi Keranjang (<span id="cart-count-title">0</span>)</h3>
                    <div class="table-responsive">
                        <table class="table cart-table align-middle">
                            <thead>
                                <tr>
                                    <th>Kendaraan</th>
                                    <th class="text-end">Harga/Hari</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="cart-items-body">
                                <!-- JS will populate this -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="cart-page__right">
                    <div class="cart-page__sidebar bg-white p-4 rounded-3 shadow-sm">
                        <div class="cart-page__cart-total">
                            <h4 class="mb-4 border-bottom pb-3 fs-5 fw-bold">Ringkasan</h4>
                            <ul class="cart-total list-unstyled fs-6">
                                <li class="d-flex justify-content-between mb-3">
                                    <span class="text-muted">Total Kendaraan</span>
                                    <span id="cart-count" class="fw-semibold">0</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <span class="text-muted">Total Pembayaran</span>
                                    <span class="cart-total-amount fw-bold fs-5 text-primary" id="cart-total-amount">Rp 0</span>
                                </li>
                            </ul>
                            <div class="cart-page__buttons mt-4">
                                <a href="checkout.php" class="thm-btn w-100 py-3 fs-6 d-flex justify-content-center align-items-center gap-2">
                                    <i class="fas fa-shopping-cart fa-sm"></i> Lanjut ke Checkout
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
function renderCart() {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    const body = document.getElementById('cart-items-body');
    const container = document.getElementById('cart-container');
    const emptyMsg = document.getElementById('cart-empty');
    
    if (cart.length === 0) {
        container.classList.add('d-none');
        emptyMsg.classList.remove('d-none');
        return;
    }

    container.classList.remove('d-none');
    emptyMsg.classList.add('d-none');
    
    body.innerHTML = '';
    let total = 0;

    cart.forEach((item, index) => {
        total += parseFloat(item.harga);
        const row = `
            <tr class="align-middle">
                <td>
                    <div class="product-box d-flex align-items-center">
                        <div class="img-box me-3">
                            <a href="kendaraan-detail.php?id=${item.id}">
                                <img src="${item.foto ? '/uploads/' + item.foto : 'assets/images/shop/cart-page-img-1.jpg'}" alt="${item.nama}" class="rounded border" style="width: 80px; height: 60px; object-fit: cover;">
                            </a>
                        </div>
                        <div>
                            <h3><a href="kendaraan-detail.php?id=${item.id}" class="text-dark fw-semibold">${item.nama}</a></h3>
                            <p class="fs-7 text-muted mb-0">${item.nama_tipe}</p>
                        </div>
                    </div>
                </td>
                <td class="text-end fw-semibold text-dark">Rp ${new Intl.NumberFormat('id-ID').format(item.harga)}</td>
                <td class="text-center">
                    <div class="cross-icon text-danger small" style="cursor:pointer;" onclick="removeFromCart(${index})" title="Hapus item">
                        <i class="icon-bin"></i>
                    </div>
                </td>
            </tr>
        `;
        body.innerHTML += row;
    });

    document.getElementById('cart-count-title').innerText = cart.length;
    document.getElementById('cart-count').innerText = cart.length;
    document.getElementById('cart-total-amount').innerText = 'Rp ' + new Intl.NumberFormat('id-ID').format(total);
}

function removeFromCart(index) {
    if (!confirm('Anda yakin ingin menghapus item ini dari keranjang?')) {
        return;
    }

    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart.splice(index, 1);
    localStorage.setItem('cart', JSON.stringify(cart));
    
    if (typeof updateHeaderCartCount === 'function') {
        updateHeaderCartCount();
    }
    
    renderCart();
}

document.addEventListener('DOMContentLoaded', renderCart);
</script>

<?= layout('footer') ?>
