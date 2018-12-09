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
        </nav>
        <div class="container is-fluid">
            <p class="title">
                Вход
            </p>
            <div class="field">
                <p class="control has-icons-left has-icons-right">
                    <input class="input" type="email" placeholder="Email">
                    <span class="icon is-small is-left">
                        <i class="fas fa-envelope"></i>
                    </span>
                    <span class="icon is-small is-right">
                        <i class="fas fa-check"></i>
                    </span>
                </p>
            </div>
            <div class="field">
                <p class="control has-icons-left">
                    <input class="input" type="password" placeholder="Пароль">
                    <span class="icon is-small is-left">
                        <i class="fas fa-lock"></i>
                    </span>
                </p>
            </div>
            <div class="field">
                <p class="control">
                    <a class="button is-link" href="/">
                        Войти
                    </a>
                </p>
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
