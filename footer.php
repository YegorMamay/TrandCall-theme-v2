<footer class="footer js-footer">
    <?php if (is_active_sidebar('footer-widget-area')) : ?>
        <div class="pre-footer">
            <div class="container">
                <div class="row">
                    <?php dynamic_sidebar('footer-widget-area'); ?>
                </div>
            </div>
        </div><!-- .pre-footer end-->
    <?php endif; ?>

    <div class="container">
        <div class="copyright row align-items-center">
            <div class="col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                <div class="logo">
	                    <?php get_default_logo_link([
                            'name'    => 'logo-footer.png',
                            'options' => [
                                'class'  => 'logo-img',
                                'width'  => 130,
                                'height' => 70,
                                ],
                            ])
                        ?>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                <div class="head-ph">
                    <i class="fal fa-phone"></i> <?php echo do_shortcode('[bw-phone]');?>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                <div class="footer-mail">
            <?php
            $email = get_theme_mod('bw_additional_email');
            if (!empty($email)) { ?>
                <a href="mailto:<?php echo esc_attr($email); ?>">
                    <i class="far fa-envelope"></i> 
                    <?php echo esc_html($email); ?>
                </a>
            <?php } ?>
            </div>
                
            </div>
            <div class="col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
            <div class="footer-adress">
<?php
    $address = get_theme_mod('bw_additional_address');
    if (!empty($address)) { ?>
<span>
    <i class="far fa-map-marker-alt"></i>
    <?php echo esc_html($address); ?>
</span>
<?php } ?>
            </div>
            </div>
        </div>
    </div>
</footer>

</div><!-- .wrapper end Do not delete! -->

<?php scroll_top(); ?>

<div class="is-hide"><?php svg_sprite(); ?></div>

<?php wp_footer(); ?>

</body>
</html>
