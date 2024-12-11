<!doctype html>
<html lang="en" dir="ltr" data-bs-theme="auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= config('MVC.name') ?></title>
    <meta name="description" content="Description">
    <meta name="keywords" content="Keywords">
    <link href="<?= url('style/stylesheet/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= url('style/stylesheet/main.css'); ?>" rel="stylesheet">
    <script src="<?= url('style/javascript/mode.js'); ?>"></script>
</head>
<body>
<?php if (empty($hiddenNavbar)) include_once 'navbar.tpl.php'; ?>
<div class="container">
    <div class="row">
        <div class="col">
            {{content}}
        </div>
    </div>
</div>
<?php include_once 'footer.tpl.php'; ?>
<script src="<?= url('style/javascript/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>