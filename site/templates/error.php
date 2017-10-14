
<?php snippet('header/header') ?>
<section class="ups-section">
<div class="error-container">
    <h1 class="error-title uk-text-center"><?php echo $page->error_title()->title() ?></h1>

    <?php echo $page->error_message()->kt() ?>
</div>
</section>
</body>
</html>


