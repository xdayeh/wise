<nav class="navbar navbar-expand-sm bg-body-tertiary border-bottom">
    <div class="container-fluid">
        <a class="navbar-brand" href="/"><?= config('MVC.name') ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link <?= isActive(''); ?>" href="<?= url('/'); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= isActive('about'); ?>" href="<?= url('about'); ?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= isActive('team'); ?>" href="<?= url('team'); ?>">Team</a>
                </li>
            </ul>
            <div class="d-flex">
                <button class="btn btn-link nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg width="16" height="16" class="bi my-1 theme-icon-active"><use href="#circle-half"></use></svg>
                </button>
                <ul class="dropdown-menu dropdown-menu-end py-0 " aria-labelledby="bd-theme" style="--bs-dropdown-min-width: 8rem;">
                    <li>
                        <button type="button" class="dropdown-item d-flex align-items-center rounded-top" data-bs-theme-value="light">
                            <?= svg('light'); ?>
                            Light
                        </button>
                    </li>
                    <li>
                        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark">
                            <?= svg('dark'); ?>
                            Dark
                        </button>
                    </li>
                    <li>
                        <button type="button" class="dropdown-item d-flex align-items-center rounded-bottom" data-bs-theme-value="auto">
                            <?= svg('auto'); ?>
                            Auto
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>