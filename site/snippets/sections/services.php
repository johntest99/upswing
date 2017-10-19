<section id="<?php echo str::slug($data->title()->title())?>" class="ups-section">
        <div class="ups-content">
            <div class="title-container">
                <h1 class="ups-title"><?php echo $data->title_head()->title()?></h1>
            </div>
            <div class="uk-grid uk-hidden-small">
        <?php 
        $serviceData = $data->services_items()->toStructure(); 
        foreach($serviceData as $item):
        ?>
                <div class="uk-width-1-3">
                    <h2 class="service-title blue-text">
                        <i class="service-icon uk-icon-<?php echo $item->service_icon() ?>"></i>
                        <?php echo $item->service_title()->title() ?>
                    </h2>

                    <div class="service-desc">
                        <?php echo $item->service_text()->kt()?>
                    </div>
                </div>
            <?php endforeach ?>
            </div>
            <!-- services-mobile -->
            <div class="uk-grid uk-hidden-medium uk-hidden-large">
                <div class="ups-accordion ups-container uk-accordion" data-uk-accordion="{collapse: true, showfirst: false}">
                <?php 
                    $serviceData = $data->services_items()->toStructure(); 
                    foreach($serviceData as $item):
                 ?>
                    <div class="uk-width-small-1-1">
                        <div class="uk-accordion-title">
                            <span class="img-con">
                                <i class="ups-icon-acc uk-icon-<?php echo $item->service_icon()->lower() ?>"></i>
                            </span>
                            <span class="ups-icon-text"><?php echo $item->service_title()->title()?></span>
                        </div>

                        <article class="uk-accordion-content">
                            <?php echo $item->service_text()->kt() ?>
                        </article>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </section>