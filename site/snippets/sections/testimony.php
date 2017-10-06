<section id="testimony" class="ups-section">
        <div class="ups-content">
            <div class="title-container">
                <h1 class="ups-title"><?php echo $data->title_head()->title() ?></h1>
            </div>

            <div class="ups-space-up-100 slider-container">
                <div data-uk-slideset="{autoplay:'true', autoplayInterval:'5000', small:2, medium:3, large:3}">
                    <div class="uk-slidenav-position">
                        <ul class="uk-grid uk-slideset uk-flex-middle uk-flex-center">
                        <?php 
                            $testimonial_data = $data->testimonial_items()->toStructure();
                            foreach($testimonial_data as $item):
                        ?>
                            <li>
                                <figure id="" class="ytTrigger uk-overlay" data-uk-modal="{target:'#<?php echo str::slug($item->name())?>'}">
                                    <img class="figure-img" src="<?php if($img = $data->image($item->profileImage())){ echo thumb($img,array('width'=>250, 'height'=>250, 'crop'=>true))->url(); } ?>" width="250" height="250" alt="<?php echo $item->name()->title() ?>" width="250" height="250" alt="">
                                    <figcaption class="bkg-caption uk-overlay-hover uk-overlay-panel">
                                        <i class="uk-icon-youtube-play play-button">
                                        </i>
                                    </figcaption>
                                </figure>
                                <p>
                                <?php echo excerpt($item->description(), 140) ?> 
                                </p>
                            </li>
                            <?php endforeach ?>
                        </ul>

                        <!-- end ul here -->
                    </div>
                    <ul class="uk-slideset-nav uk-dotnav uk-flex-center">
                        <li data-uk-slider-item="1">
                            <a href=""></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <?php snippet('modals/testimony') ?>