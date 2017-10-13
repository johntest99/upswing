<section id="<?php echo str::slug($data->title()->title()) ?>">
        <div class="ups-content-client client-section-background">
            <div data-uk-slider="{center:true, autoplay:true, autoplayInterval:'5000'} ">
                <div class="uk-slider-container uk-text-center">
                    <ul class="uk-slider uk-grid-width-small-1-2 uk-grid-width-medium-1-1 uk-grid-width-large-1-3">
                      <?php 
                        $clientItems = $data->client_items()->toStructure();
                        foreach($clientItems as $item):
                      ?>
                        <li class="client-logo-container">
                        <?php if($item->client_link()->isNotEmpty()): ?>
                            <a class="client-logo" href="<?php echo $item->client_link()?>" target="_blank" title="<?php if($img = $data->image($item->client_image())) { echo $item->client_title()->title()?>"><img src="<?php echo thumb($img,array('width'=>500, 'height'=>500, 'crop'=>false))->url(); } ?>" alt="<?php echo str::slug($item->client_title()->title()) ?>"></a>
                        <?php else: ?>
                            <img class="client-logo" title="<?php echo $item->client_title()->title()?>" src="<?php if($img = $data->image($item->client_image())) {  echo thumb($img,array('width'=>500, 'height'=>500, 'crop'=>false))->url(); } ?>" alt="<?php echo str::slug($item->client_title()->title()) ?>">
                        <?php endif ?> 
                        </li>
                        <?php endforeach ?> 
                    </ul>
                </div>
            </div>
        </div>
    </section>