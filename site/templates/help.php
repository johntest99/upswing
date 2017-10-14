<?php snippet('header/header') ?>

<section class="ups-section">
    <div class="help-container">
        <h1><?php echo $page->help_title()->title() ?></h1>
        <?php echo $page->help_text()->kt() ?>
    </div>
</section>