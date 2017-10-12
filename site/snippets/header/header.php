<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $page->title()->title() ?></title>

    <meta name="description" content="<?php echo $page->description()?>">
    <meta name="keywords" content="<?php echo $page->keywords() ?>">
    <!-- OPENGRAPH META -->
    <meta property="og:url" content="<?php echo $page->url() ?>">
    <meta property="og:title" content="<?php echo $page->title() ?>">
    <meta property="og:description" content="<?php echo $page->description() ?>">
    <?php if($img = $page->image($page->mainImage())):?>
      <meta property="og:image" content="<?php echo thumb($img,array('width'=>1200, 'height'=>630, 'crop'=>true))->url() ?>">
    <?php endif?>


    <!-- UIKIT CSS STYLESHEETS -->
    <link rel="stylesheet" href="assets/uikit/css/uikit.min.css">
    <link rel="stylesheet" href="assets/uikit/css/components/slideshow.min.css">
    <link rel="stylesheet" href="assets/uikit/css/components/slidenav.min.css">
    <link rel="stylesheet" href="assets/uikit/css/components/slider.min.css">
    <link rel="stylesheet" href="assets/uikit/css/components/dotnav.min.css">
    <link rel="stylesheet" href="assets/uikit/css/components/accordion.min.css">
    <link rel="stylesheet" href="assets/uikit/css/components/notify.min.css">

    <!-- TEXT INPUT CSS STYLESHEETS -->
    <link rel="stylesheet" href="assets/css/demo.css">
    <link rel="stylesheet" href="assets/css/set2.css">

    <!-- CUSTOMIZED CSS STYLESHEETS -->
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/bower_components/sweetalert2/dist/sweetalert2.min.css">

    <!-- JS SCRIPTS -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/uikit/js/uikit.min.js"></script>
    <script src="assets/uikit/js/components/slideshow.min.js"></script>
    <script src="assets/uikit/js/components/slideset.min.js"></script>
    <!-- <script src="assets/uikit/js/components/dotnav.min.js"></script> -->
    <script src="assets/uikit/js/components/slider.min.js"></script>
    <script src="assets/uikit/js/components/accordion.min.js"></script>
    <script src="assets/uikit/js/components/notify.min.js"></script>
    <script src="assets/bower_components/sweetalert2/dist/sweetalert2.min.js"></script>

</head>

<?php snippet('header/navigation') ?>

