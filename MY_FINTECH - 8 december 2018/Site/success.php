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
            <div class="field">
                <p class="subtitle">
                    Проезд:
                </p>
                <div class="tile notification is-primary">
                    <div>
                        Авиакомпания Победа
                    </div>
                    <div>
                        01.01.2019 - 8:00 Мск
                    </div>
                    <div>
                        10.01.2019 - 22:00 Спб
                    </div>
                </div>
            </div>
            <div class="field">
                <p class="subtitle">
                    Гостиница:
                </p>
                <div class="tile notification is-primary">
                    <div>
                        Гостиница Москва
                    </div>
                    <div>
                        01.01.2019 - 16:00 - заезд
                    </div>
                    <div>
                        10.01.2019 - 20:00 - выезд
                    </div>
                </div>
            </div>
            <div class="field">
                <p class="subtitle">
                    Рестораны:
                </p>
                <div class="tile notification is-primary">
                    <div>
                        Невский пр. 50
                    </div>
                    <div>
                        8 талонов на обед (<a class="is-link" href="#">скачать</a>)
                    </div>
                </div>
            </div>
            <div class="field">
                <p class="subtitle">
                    Развлечения:
                </p>
                <div class="tile notification is-primary">
                    <div>
                        Музей Эрмитаж
                    </div>
                    <div>
                        05.01.2019
                    </div>
                </div>
            </div>
            <div class="field">
                <p>
                    100000 рублей
                </p>
            </div>
            <div class="field">
                <div class="control">
                    <a class="button is-link" href="/cashback">Оплатить</a>
                </div>
            </div>
        </div>
    </div>
    <div class="column is-8">
        <div id="map" class="map-sticky" />
        <?php include "map.php" ?>
    </div>
</div>

<?php include "footer.php" ?>
