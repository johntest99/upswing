<section id="about" class="ups-section">
        <div class="ups-space uk-grid">
            <div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-2">
                <h1 class="about-greeting">
                    <?php echo $data->about_greeting()->html() ?>
                </h1>

                <div class="ups-space-up-20 uk-text-left about-text">
                    <?php echo $data->about_desc()->kirby() ?>
                </div>

                <?php if($data->cta_button_text()->isNotEmpty()):?>
                <div class="ups-space-up-20">
                    <a class="button ups-button" href=""><?php echo $data->cta_button_text()->html() ?></a>
                </div>
                <?php endif ?>
            </div>


            <div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-2">
                <div class="birdeye-title">
                    Google reviews
                </div>
                <script type="text/javascript" src="https://birdeye.com/embed/v4/149814187402239/3/4294915248"></script>
                <div class="birdeye-container ups-space-up-10" id="bf-revz-widget-4294915248" style="-webkit-overflow-scrolling:touch;">
                    <div class="bf-dv"><span class="bf-spn">powered by <a class="bf-pwr" href="https://birdeye.com" target="_blank">BirdEye</a></span></div>
                </div>
            </div>
        </div>
    </section>