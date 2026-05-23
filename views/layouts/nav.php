<ul class="main-menu__list">
    <li>
        <a href="/">Home </a>
    </li>
    <li>
        <a href="/kendaraan.php">Kendaraan </a>
    </li>
    <?php if (auth()->check()) : ?>
        <li>
            <a class="text-danger" href="/logout.php">Logout </a>
        </li>
    <?php else : ?>
        <li>
            <a href="/registrasi.php">Registrasi </a>
        </li>
        <li>
            <a href="/login.php">Login </a>
        </li>
    <?php endif; ?>
</ul>