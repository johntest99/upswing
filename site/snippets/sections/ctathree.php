<section class="ups-section" id="cta3">
        <div class="ups-container ups-content uk-text-center uk-container-center">
            <h2 class="cta-text-3">
                <?php echo $site->cta_three_text() ?>
            </h2>
            
            <?php if($site->cta_three_button_text()->isNotEmpty()): ?>
            <div class="uk-animation-slide-bottom ups-space-up-40">
                <a class=" ups-font-size-20 ups-button" href="tel:<?php echo $site->phone() ?>"><i class="uk-icon-phone"></i> <?php echo $site->cta_three_button_text() ?></a>
            </div>
            <?php endif ?>
        </div>
    </section>