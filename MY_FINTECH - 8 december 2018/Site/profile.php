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
                <div class="navbar-end">
                    <a class="navbar-item" href="/events">
                        <i class="far fa-calendar-alt"></i>
                    </a>
                </div>
            </div>
        </nav>
        <div class="container is-fluid">
            <p class="title">
                Профиль
            </p>
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">Discoin:</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <p class="control">
                            <input class="input is-static" type="email" value="0" readonly>
                        </p>
                    </div>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">Имя:</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <p class="control">
                            <input class="input is-static" type="email" value="Михаил" readonly>
                        </p>
                    </div>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">Фамилия:</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <p class="control">
                            <input class="input is-static" type="email" value="Петров" readonly>
                        </p>
                    </div>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">Телефон:</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <p class="control">
                            <input class="input is-static" type="email" value="89994507090" readonly>
                        </p>
                    </div>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">E-mail:</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <p class="control">
                            <input class="input is-static" type="email" value="mis5116@yandex.ru" readonly>
                        </p>
                    </div>
                </div>
            </div>
            <div class="control">
                <textarea class="textarea has-fixed-size" placeholder="Расскажите о себе"></textarea>
            </div>
        </div>
        <div class="container is-fluid">
            <p class="title">
                Информация
            </p>
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">Страна:</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <p class="control">
                            <input class="input is-static" type="email" value="Россия" readonly>
                        </p>
                    </div>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">Город:</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <p class="control">
                            <input class="input is-static" type="email" value="Санкт Петербург" readonly>
                        </p>
                    </div>
                </div>
            </div>
            <div class="control">
                <button class="button is-link">Редактировать</button>
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
