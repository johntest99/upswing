    <!-- nav-end -->
    <section class="ups-section overlay filter" id="herobanner" style="background-image: <?php if($img = $data->image($data->bkg_img())): ?> url('<?php echo thumb($img,array('width'=>2000, 'height'=>1500, 'crop'=>true))->url() ?>') <?php endif ?>">
        <div class="uk-grid ups-content ups-content-mobile uk-text-center">
            <div class="uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-2">
                <div class="typeform-widget" data-url="https://dan823.typeform.com/to/Qhkg1s" data-transparency="50" data-hide-headers=true
                    data-hide-footer=true style="margin:auto; width: 90%; height: 450px;"> </div>
                <script>
                    (function () {
                        var qs, js, q, s, d = document,
                            gi = d.getElementById,
                            ce = d.createElement,
                            gt = d.getElementsByTagName,
                            id = "typef_orm",
                            b = "https://embed.typeform.com/";
                        if (!gi.call(d, id)) {
                            js = ce.call(d, "script");
                            js.id = id;
                            js.src = b + "embed.js";
                            q = gt.call(d, "script")[0];
                            q.parentNode.insertBefore(js, q)
                        }
                    })()
                </script>
            </div>
            <div class=".uk-hidden-small uk-width-medium-1-2 uk-width-large-1-2">
                <div class="ups-banner-content">
                    <ul class="text-slide uk-slideshow" data-uk-slideshow="{autoplay:true}">

                    <?php
                    // get all data from structured field
                    $slideshowtext = $data->slideshow()->toStructure();
                    // loop through the collection of data.
                    foreach($slideshowtext as $slideshow):
                    ?>
                        <li>
                            <h1 class="banner-text">
                               <?php echo $slideshow->slideshow_text()->upper() ?>
                            </h1>
                        </li>
                       <?php endforeach ?> 
                    </ul>

                </div>
            </div>
        </div>
    </section>
