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
                Страна
            </p>
            <div class="field">
                <p class="control has-icons-left">
                    <span class="select">
                        <select>
                            <option>Россия</option>
                        </select>
                    </span>
                    <span class="icon is-small is-left">
                        <i class="fas fa-globe"></i>
                    </span>
                </p>
            </div>
            <p class="title">
                Город
            </p>
            <div class="field has-addons">
                <div class="control">
                    <input class="input" type="text" placeholder="Санкт Петербург">
                </div>
                <div class="control">
                    <a class="button is-link">
                        Выбрать
                    </a>
                </div>
            </div>
            <p class="title">
                Пожелания
            </p>
            <div class="field">
                <div class="control">
                    <p>
                        <label class="radio">
                            <input type="radio" name="rsvp">
                            Активный
                        </label>
                    </p>
                    <p>
                        <label class="radio">
                            <input type="radio" name="rsvp">
                            Культурный
                        </label>
                    </p>
                    <p>
                        <label class="radio">
                            <input type="radio" name="rsvp">
                            Пользовательский
                        </label>
                    </p>
                </div>
            </div>
            <div class="field">
                <label class="checkbox">
                    <input type="checkbox">
                    С детьми
                </label>
            </div>
            <div class="field">
                <label class="checkbox">
                    <input type="checkbox">
                    Я согласен с <a href="#">политикой конфиденциальности</a>
                </label>
            </div>
            <div class="field">
                <div class="control">
                    <a class="button is-link" href="/create.php">В путь!</a>
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
