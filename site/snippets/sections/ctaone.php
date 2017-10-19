

<section style="background-image:<?php if($img = $site->image($site->cta_one_background())): ?> 
            url('<?php echo thumb($img,array('width'=>1500, 'height'=>1500, 'crop'=>true))->url()?>') 
            <?php endif ?>" id="cta-one" class="parallax-background overlay filter"> 
            <div class=" ups-section ups-space uk-text-center uk-container-center">
        <div class="cta-text">
            <?php echo $site->cta_one_text()->kt() ?>
        </div>
        <?php if($site->cta_one_button_text()->isNotEmpty()): ?>    
            <div class="uk-animation-slide-bottom ups-space-up-20">
                <a class=" ups-font-size-20 ups-button" href="tel:<?php echo $site->phone() ?>"> <i class="uk-icon-phone"></i> <?php echo $site->cta_one_button_text()->html() ?></a>
            </div>
        <?php endif ?>
    </div>
</section>