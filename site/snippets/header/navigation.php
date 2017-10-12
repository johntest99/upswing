<body id="home-scroll">
<!-- FIXED TOP MENU -->
<nav class="menu main-bkg-color uk-navbar">
    <ul class="nav-space uk-navbar-nav">
        <li class="logo uk-animation-hover uk-animation-shake">
            <a href="#home-scroll" data-uk-smooth-scroll><img src="assets/img/upswing.png" alt=""></a>
        </li>
    </ul>
    <div class="uk-navbar-flip uk-hidden-small uk-hidden-medium" data-uk-scrollspy-nav="{closest:'li'}">
        <ul class="nav-space-items uk-navbar-nav">
            <li class="nav-items"><a href="#about" data-uk-smooth-scroll>About</a></li>
            <li class="nav-items"><a href="#services" data-uk-smooth-scroll>Services</a></li>
            <li class="nav-items"><a href="#testimony" data-uk-smooth-scroll>Testimonials</a></li>
            <li class="nav-items"><a href="#clients" data-uk-smooth-scroll="{offset: -10px;">Clients</a></li>
            <li class="nav-items"><a href="#contact" data-uk-smooth-scroll>Contact</a></li>
        </ul>
    </div>
    <a href="#mobile-menu" class="tick-mobile hamburger uk-hidden-large" data-uk-toggle="{target:'.tick-mobile',animation:'uk-animation-fade'}"><i class="uk-icon-bars"></i></a>
    <a href="#mobile-menu" class="tick-mobile close-link uk-hidden" data-uk-toggle="{target:'.tick-mobile'}"><i class="uk-close"></i></a>
</nav>

<section id="mobile-nav" class="tick-mobile uk-text-center uk-width-1-1 uk-hidden">
    <ul>
        <li><a class="menu-link" href="#about" data-uk-toggle="{target:'.tick-mobile'}">About</a></li>
        <li><a class="menu-link" href="#services" data-uk-toggle="{target:'.tick-mobile'}">Services</a></li>
        <li><a class="menu-link" href="#testimony" data-uk-toggle="{target:'.tick-mobile'}">Testimonials</a></li>
        <li><a class="menu-link" href="#clients" data-uk-toggle="{target:'.tick-mobile'}">Clients</a></li>
        <li><a class="menu-link" href="#contact" data-uk-toggle="{target:'.tick-mobile'}">Contact</a></li>
        <li>
            <ul class="social-icons-nav">
                <?php if($site->social_facebook()->isNotEmpty()){ ?>
                <li><a href="<?php echo $site->social_facebook() ?>" title="share on facebook"><i class="uk-icon-facebook"></i></a></li>
                <?php } if($site->social_pinterest()->isNotEmpty()){ ?>
                <li><a href="<?php echo $site->social_pinterest() ?>" title="share on pinterest"><i class="uk-icon-pinterest"></i></a></li>
                <?php } if($site->social_instagram()->isNotEmpty()){ ?>
                <li><a href="<?php echo $site->social_instagram() ?>" title="share on instagram"><i class="uk-icon-tumblr"></i></a></li>
                <?php } if($site->social_youtube()->isNotEmpty()){ ?>               
                <li><a href="<?php echo $site->social_youtube() ?>" title="share on youtube"><i class="uk-icon-youtube"></i></a></li>
                <?php } if($site->social_linkedin()->isNotEmpty()){ ?>
                <li><a href="<?php echo $site->social_linkedin() ?>" title="share on linkedin"><i class="uk-icon-linkedin"></i></a></li>
                <?php } if($site->social_twitter()->isNotEmpty()){ ?>
                <li><a href="<?php echo $site->social_twitter() ?>" title="share on twitter"><i class="uk-icon-twitter"></i></a></li>
                <?php } ?>
            </ul>
        </li>
    </ul>
</section>