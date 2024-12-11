<footer class="fixed-bottom bg-body-tertiary py-1 shadow border-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <small>
                    <a class="navbar-brand" href="<?= url('about'); ?>">
                        <?= config('MVC.name') . " &copy; " . date('Y') . " " . config('MVC.version'); ?>
                    </a>
                </small>
                <div class="float-end">
                    <a class="nav-link active" href="<?= url('language'); ?>"><?= 'Language'; ?></a>
                </div>
            </div>
        </div>
    </div>
</footer>