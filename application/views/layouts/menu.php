<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="<?= base_url() ?>">Anang APP</a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('mahasiswa'); ?>">Mahasiswa</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('login/logout'); ?>">Logout</a>
            </li>
        </ul>
    </div>
</nav>