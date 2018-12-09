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
                    <a class="navbar-item" href="/create.php">
                        <i class="far fa-calendar-alt"></i>
                    </a>
                </div>
            </div>
        </nav>
        <div class="container is-fluid">
            <aside class="menu">
                <p class="title">
                    Места
                </p>
                <ul class="menu-list">
                    <li><a href="/create/hotels.php"><i class="fas fa-hotel"></i>Гостиницы</a></li>
                    <li><a href="#"><i class="fas fa-utensils"></i>Рестораны</a></li>
                    <li><a href="/create/bars.php"><i class="fas fa-wine-bottle"></i>Бары</a></li>
                    <li><a href="#"><i class="fas fa-theater-masks"></i>Театры</a></li>
                    <li><a href="#"><i class="fas fa-landmark"></i>Музеи</a></li>
                    <li><a href="#"><i class="fas fa-mosque"></i>Достопримечательности</a></li>
                </ul>
            </aside>
        </div>
        <div class="container is-fluid">
            <aside class="menu">
                <p class="title">
                    Транспорт
                </p>
                <ul class="menu-list">
                    <li><a href="#"><i class="fas fa-plane"></i>Самолет</a></li>
                    <li><a href="#"><i class="fas fa-train"></i>Поезд</a></li>
                    <li><a href="#"><i class="fas fa-taxi"></i>Такси</a></li>
                    <li><a href="/create/bus.php"><i class="fas fa-bus"></i>Автобусы</a></li>
                </ul>
            </aside>
            <br>
            <div class="field">
                <div class="control">
                    <a class="button is-link" href="/success">Готово</a>
                </div>
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
