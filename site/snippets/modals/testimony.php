<?php $data = $page->children()->find('testimonials') ?>
<section class="ups-modal">
    <?php 
    $testimonialData = $data->testimonial_items()->toStructure();
    foreach($testimonialData as $item):
    ?>
        <div id="<?php echo str::slug($item->name())?>" class="uk-modal">
            <div class="uk-height-viewport uk-modal-dialog uk-modal-dialog-blank">
                <button class="modalClose uk-modal-close uk-close" type="button"></button>
                <div class="modal-height-full uk-grid">
                    <div class="uk-hidden-small uk-width-medium-1-2 uk-width-large-1-2">
                        <img class="modal-img" src="<?php if($img = $data->image($item->profileImage())){ echo thumb($img,array('width'=>1300, 'height'=>1500, 'crop'=>true))->url(); } ?>" width="100%" alt="">
                    </div>
                    <div class="uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-2">
                        <div class="modal-content">
                            <div class="modalYtFrame" data-videoid="<?php echo $item->youtubeVideoId() ?>">
                                <!-- iframe goes here -->
                            </div>
                            <div class="modal-text ups-space-up-10">
                                <h1><?php echo $item->name()->html() ?></h1>
                                <?php echo $item->description()->kt() ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php endforeach ?>
    </section>