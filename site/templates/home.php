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
<?php 
$section_test = $page->children()->find('testimonials');
snippet('sections/testimony', array("data" => $section_test)) ?>
    <!-- modals -->
    
    <!-- clients -->
<?php 
$section_client = $page->children()->find('clients');
snippet('sections/clients',array("data" => $section_client)) ?>

    <!-- contact -->
<?php snippet('sections/contact') ?>

    <!-- ctathree -->
<?php snippet('sections/ctathree') ?>

<?php snippet('footer') ?>
