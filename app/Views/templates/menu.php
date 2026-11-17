<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #002060;">
    <div class="container">
        <!-- Logo und Markenname -->
        <a class="navbar-brand" href="<?= base_url('home/index') ?>">
            <img src="<?= base_url('img/logo.png') ?>" alt="Logo" class="d-inline-block align-top me-2">
            WEB Entwicklung
        </a>

        <!-- Hamburger-Menü für mobile Ansicht -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Die eigentlichen Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('home/index') ?>">Tasks</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Boards</a>
                </li>
                <li class="nav-item">
                    <!-- Link zur Spalten-Seite (Methode spalten im Controller) -->
                    <a class="nav-link" href="<?= base_url('home/spalten') ?>">Spalten</a>
                </li>
            </ul>
        </div>
    </div>
</nav>