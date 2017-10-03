<?php snippet('header/header') ?>
    <!-- nav-end -->


<?php 
$section = $page->children()->find('herobanner');
snippet('sections/herobanner', array("data" => $section)) ?>

<!-- About page -->
<?php 
$sectionabt = $page->children()->find('about');
snippet('sections/about', array("data" => $sectionabt)) ?>

    <!-- cta1 -->
<?php snippet('sections/ctaone') ?>

    <!-- Services -->
<?php snippet('sections/services') ?>

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
