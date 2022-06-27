<footer>

<?php if ( get_theme_mod( 'footer_calltoaction_visbility' ) ) {?>

<div class="footer-calltoaction text-center">
    <div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 overflow-hidden">
        <p class="sub-title"><?php  echo esc_html__( get_theme_mod( 'footer_sub_heading', 'Join the course' ) )?></p>
        <h2><?php  echo esc_html__( get_theme_mod( 'footer_calltoaction_heading', 'Bootstrap to WordPress' ) )?></h2>
        <p><?php  echo esc_html__( get_theme_mod( 'footer_calltoaction_desc', 'Learn how to design and build custom,
        beautiful & responsive WordPress websites and themes for beginners in 2022 and beyond!' ) )?></p>
        <a href="<?php  echo esc_html__( get_theme_mod( 'footer_cta_link', '#' ) )?>" class="btn btn-primary">
        <?php  echo esc_html__( get_theme_mod( 'footer_calltoaction_button', 'Join now ->' ) )?></a>
        </div>
    </div>
    </div>
</div>

<? } ?>

<div class="copyright text-center">
    <p><?php echo wp_kses_post( get_theme_mod( 'footer_copyright', 'Copyright Henry DelGlitch')) ?></p>
</div>
</footer>

<?php wp_footer(); ?>
</body>

</html>