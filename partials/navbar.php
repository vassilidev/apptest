<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="<?= url() . '/img/logo.jpg' ?>" width="64" class="d-inline-block align-middle">
            Movie-Chainer
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= url() . 'contacts.php' ?>">Contacts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= url() . 'films.php' ?>">Films</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
