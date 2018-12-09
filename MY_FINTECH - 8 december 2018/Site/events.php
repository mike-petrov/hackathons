<?php include "header.php" ?>

<div class="columns is-gapless">
    <div class="column  has-background-info sidebar">
        <nav class="navbar is-primary">
            <div class="navbar-brand">
                <a class="navbar-item" href="/">
                    MOTU
                </a>
                <a role="button" class="navbar-burger burger nav-toggle" aria-label="menu" aria-expanded="false" data-target="navbar-menu">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>
            <div id="navbar-menu" class="navbar-menu nav-menu">
                <div class="navbar-start">
                    <a class="navbar-item" href="/profile">
                        <img src="/img/photo.png" width="30" height="30">
                        <p class="navbar-item">
                            Михаил Петров
                        </p>
                    </a>
                </div>
                <div class="navbar-end">
                    <a class="navbar-item" href="/events">
                        <i class="far fa-calendar-alt"></i>
                    </a>
                </div>
            </div>
        </nav>
        <div class="container is-fluid">
            <p class="title">
                Путешествия
            </p>
            <div class="tile notification is-primary">
                <a class="title" href="/">
                    <i class="fas fa-plus"></i>
                </a>
            </div>
        </div>
        <div class="container is-fluid">
            <p class="title">
                Прошедшие
            </p>
            <div class="tile notification is-link">
                <a class="title" href="#">
                    <i class="fas fa-spinner fa-spin"></i>
                </a>
            </div>
        </div>
        <footer class="footer has-background-info">
            <div class="content has-text-centered">
                <p>
                    <i class="fa fa-copyright"></i> MOTU | 2019 Все права защищены
                </p>
            </div>
        </footer>
    </div>
    <div class="column is-8">
        <div id="map" class="map-sticky" />
        <?php include "map.php" ?>
    </div>
</div>

<?php include "footer.php" ?>
