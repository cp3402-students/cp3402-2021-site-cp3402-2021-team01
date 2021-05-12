<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JazzClubTeam01
 */

?>

<footer id="colophon" class="site-footer">
   <nav id="secondary-navigation" class="secondary-navigation">
      <button class="menu-toggle" aria-controls="primary-menu"
              aria-expanded="false"><?php esc_html_e('Secondary Menu', 'jazzclubteam01'); ?></button>
       <?php
       wp_nav_menu(
           array(
               'theme_location' => 'secondary',
               'menu_id' => 'secondary-menu',
           )
       );
       ?>
   </nav>
   <div class="site-info">
      <a href="<?php echo esc_url(__('https://wordpress.org/', 'Townsville Jazz Club')); ?>">
      </a>

   </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
