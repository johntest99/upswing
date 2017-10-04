<?php snippet('header/header') ?>
    <!-- nav-end -->


<?php 
$section = $page->children()->find('herobanner');
snippet('sections/herobanner', array("data" => $section)) ?>

<!-- About page -->
<?php 
$section_abt = $page->children()->find('about');
snippet('sections/about', array("data" => $section_abt)) ?>

    <!-- cta1 -->
<?php snippet('sections/ctaone') ?>

    <!-- Services -->
<?php 
$section_srvc = $page->children()->find('services');
snippet('sections/services', array("data" => $section_srvc)) ?>

    <!-- cta2 -->
<?php snippet('sections/ctatwo') ?>

    <!-- Testimonies -->
<?php snippet('sections/testimony') ?>
    <!-- modals -->
    
    <!-- clients -->
<?php snippet('sections/clients') ?>

    <!-- contact -->
<?php snippet('sections/contact') ?>

    <!-- ctathree -->
<?php snippet('sections/ctathree') ?>

<?php snippet('footer') ?>
