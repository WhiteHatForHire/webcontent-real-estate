<nav id="site-navigation" class="main-navigation col-md-8 col-sm-12 title-font" role="navigation">
    <?php $walker = new Wpre_menu_with_Icon;
    if (!has_nav_menu('primary')) :
        $walker = '';
    endif;
    wp_nav_menu( array( 'theme_location' => 'primary', 'walker' => $walker ) ); ?>

    <div class="social-icons">
        <?php get_template_part('modules/social/social', 'fa'); ?>
    </div>
</nav><!-- #site-navigation -->

<div class="hamburger" id="hamburger-7">
          <span class="line"></span>
          <span class="line"></span>
          <span class="line"></span>
</div>

<div class="mobile-new hidden">

        <h1 class="text-center">Menu</h1>

    <ul>
        <a href="/"><li>Home</li></a>
        <a href="/advice-tools"><li>Advice & Tools</li></a>
        <a href="/blog"><li>Blog</li></a>
        <a href="/explore"><li>Explore!</li></a>
        <a href="/our-team"><li>Our Team</li></a>
        <a href="/the-market"><li>The Market</li></a>
    </ul>
</div>