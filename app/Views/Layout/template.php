<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/dist/css/adminlte.min.css">
    <!-- fullCalendar -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/fullcalendar/main.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/fullcalendar-daygrid/main.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/fullcalendar-timegrid/main.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/fullcalendar-bootstrap/main.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/css/style.css">
    <title><?= $title; ?></title>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

    <?= $this->include('layout/header'); ?>
    <?= $this->include('layout/sidebar'); ?>
    <?= $this->renderSection('content'); ?>
    <?= $this->include('layout/footer'); ?>

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="<?= base_url() ?>/template/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url() ?>/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ADMIN LTE -->
    <script src="<?= base_url() ?>/template/dist/js/adminlte.min.js"></script>
</body>

</html>