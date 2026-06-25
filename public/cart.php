<?php
require_once __DIR__ . '/../backend/bootstrap.php';
?>

<?= layout('header', ['title' => 'Keranjang']) ?>

<!--Start Cart Page-->
<section class="cart-page">
    <div class="container">
        <div class="row" id="cart-container">
            <div class="col-xl-8 col-lg-7">
                <div class="cart-page__left">
                    <div class="table-responsive">
                        <table class="table cart-table">
                            <thead>
                            <tr>
                                <th>Kendaraan</th>
                                <th>Harga</th>
                                <th>Aksi</th>
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
                    <div class="cart-page__sidebar">
                        <div class="cart-page__cart-total">
                            <ul class="cart-total list-unstyled">
                                <li>
                                    <span>Total Kendaraan</span>
                                    <span id="cart-count">0</span>
                                </li>
                                <li>
                                    <span>Total Bayar (Per Hari)</span>
                                    <span class="cart-total-amount" id="cart-total-amount">Rp 0</span>
                                </li>
                            </ul>
                            <div class="cart-page__buttons">
                                <div class="cart-page__buttons-2">
                                    <a href="checkout.php" class="thm-btn w-100">
                                        Lanjut ke Checkout <span class="fas fa-arrow-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-none" id="cart-empty">
            <div class="col-12 text-center py-5">
                <h3>Cart Anda masih kosong.</h3>
                <a href="kendaraan.php" class="thm-btn mt-3">Lihat Kendaraan <span class="fas fa-arrow-right"></span></a>
            </div>
        </div>
    </div>
</section>
<!--End Cart Page-->

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
            <tr>
                <td>
                    <div class="product-box">
                        <div class="img-box">
                            <img src="${item.foto ? '/uploads/' + item.foto : 'assets/images/shop/cart-page-img-1.jpg'}" alt="${item.nama}" style="width: 80px; height: 60px; object-fit: cover;">
                        </div>
                        <h3><a href="kendaraan-detail.php?id=${item.id}">${item.nama}</a></h3>
                        <p class="fs-7 text-muted">${item.nama_tipe}</p>
                    </div>
                </td>
                <td>Rp ${new Intl.NumberFormat('id-ID').format(item.harga)}</td>
                <td>
                    <div class="cross-icon" style="cursor:pointer;" onclick="removeFromCart(${index})">
                        <i class="fas fa-times"></i> Hapus
                    </div>
                </td>
            </tr>
        `;
        body.innerHTML += row;
    });

    document.getElementById('cart-count').innerText = cart.length;
    document.getElementById('cart-total-amount').innerText = 'Rp ' + new Intl.NumberFormat('id-ID').format(total);
}

function removeFromCart(index) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart.splice(index, 1);
    localStorage.setItem('cart', JSON.stringify(cart));
    
    // Update header count if function exists
    if (typeof updateHeaderCartCount === 'function') {
        updateHeaderCartCount();
    }
    
    renderCart();
}

document.addEventListener('DOMContentLoaded', renderCart);
</script>

<?= layout('footer') ?>