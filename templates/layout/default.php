<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'Learn CakePHP';
?>
<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->fetch('meta') ?>

    <?= $this->Html->css('normalize.min') ?>
    <?= $this->Html->css('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') ?>
    <?= $this->Html->css('/plugins/fontawesome-free/css/all.min.css') ?>
    <?= $this->Html->css('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') ?>
    <?= $this->Html->css('/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') ?>
    <?= $this->Html->css('/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>
    <?= $this->Html->css('/plugins/jqvmap/jqvmap.min.css') ?>
    <?= $this->Html->css('adminlte.min') ?>
    <?= $this->Html->css('/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') ?>
    <?= $this->Html->css('/plugins/daterangepicker/daterangepicker.css') ?>
    <?= $this->Html->css('/plugins/summernote/summernote-bs4.min.css') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <?= $this->Html->image('AdminLTELogo.png', [
                'alt' => 'AdminLTELogo',
                'width' => 60,
                'height' => 60,
                'class' => 'animation__shake'
            ]) ?>
        </div>

        <?= $this->element('navbar') ?>
        <?= $this->element('sidebar') ?>

        <div class="content-wrapper">
            <?= $this->element('breadcrumb', ['title' => $this->fetch('title')]) ?>
            <section class="content">
                <div class="container-fluid">
                    <?= $this->Flash->render() ?>
                    <?= $this->fetch('content') ?>
                </div>
            </section>
        </div>

        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>
        <aside class="control-sidebar control-sidebar-dark"></aside>
    </div>

    <?= $this->Html->script('/plugins/jquery/jquery.min.js') ?>
    <?= $this->Html->script('/plugins/jquery-ui/jquery-ui.min.js') ?>
    <?= $this->Html->scriptBlock("$.widget.bridge('uibutton', $.ui.button)"); ?>
    <?= $this->Html->script('/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>
    <?= $this->Html->script('/plugins/moment/moment.min.js') ?>
    <?= $this->Html->script('/plugins/daterangepicker/daterangepicker.js') ?>
    <?= $this->Html->script('/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') ?>
    <?= $this->Html->script('/plugins/summernote/summernote-bs4.min.js') ?>
    <?= $this->Html->script('/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') ?>
    <?= $this->Html->script('adminlte') ?>
    <?= $this->Html->script('/plugins/jquery/jquery.min.js') ?>
    <?= $this->Html->script('/plugins/jquery/jquery.min.js') ?>
</body>

</html>
