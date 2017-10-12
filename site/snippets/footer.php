<section id="footer" class="ups-section">
<div class="ups-content uk-text-center">
    <div class="social-media">
        <ul class="social-icons">

        <?php if($site->social_facebook()->isNotEmpty()){?>
            <li>
                <a target="_blank" href="<?php echo $site->social_facebook() ?>">
                    <i class="uk-icon-facebook"></i>
                </a>
            </li>
        <?php }
        if($site->social_linkedin()->isNotEmpty()){
        ?>
            <li>
                <a target="_blank" href="<?php echo $site->social_linkedin() ?>">
                    <i class="uk-icon-linkedin"></i>
                </a>
            </li>
        <?php } 
        if($site->social_pinterest()->isNotEmpty()){
        ?>
            <li>
                <a target="_blank" href="<?php echo $site->social_pinterest() ?>">
                    <i class="uk-icon-pinterest"></i>
                </a>
            </li>
        <?php } 
        if($site->social_youtube()->isNotEmpty()){
        ?>
            <li>
                <a target="_blank" href="<?php echo $site->social_youtube() ?>">
                    <i class="uk-icon-youtube"></i>
                </a>
            </li>
        <?php } 
        if($site->social_instagram()->isNotEmpty()){
        ?>
            <li>
                <a target="_blank" href="<?php echo $site->social_instagram() ?>">
                    <i class="uk-icon-instagram"></i>
                </a>
            </li>
        <?php } 
        if($site->social_twitter()->isNotEmpty()){
        ?>
            <li>
                <a target="_blank" href="<?php echo $site->social_twitter() ?>">
                    <i class="uk-icon-twitter"></i>
                </a>
            </li>
        <?php } ?>
        </ul>
    </div>

    <div class="term-pol ups-space-up-20">
        <a href="" data-uk-modal="{target:'#terms'}">Terms and conditions</a>
        <span>|</span>
        <a href="" data-uk-modal="{target:'#privacy'}">Privacy policy</a>
    </div>

    <!-- privacy modal -->
<?php snippet('modals/privacy') ?>
    <!-- terms modal -->
<?php snippet('modals/terms') ?>


    <div class="footer-text ups-space-up-20">
        <h5>&copy; 2017 Upswing, all rights reserved</h5>
    </div>
</div>
</section>
</body>

<script src="assets/js/classie.js"></script>
<script src="assets/js/home.js"></script>

</html>