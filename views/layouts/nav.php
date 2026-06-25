<ul class="main-menu__list">
    <li>
        <a href="/">Beranda</a>
    </li>
    <li>
        <a href="/kendaraan.php">Kendaraan</a>
    </li>
    <?php if (auth()->check()) : ?>
        <li>
            <a class="text-danger" href="/logout.php">Keluar</a>
        </li>
    <?php else : ?>
        <li>
            <a href="/registrasi.php">Registrasi</a>
        </li>
        <li>
            <a href="/login.php">Masuk</a>
        </li>
    <?php endif; ?>
</ul>
