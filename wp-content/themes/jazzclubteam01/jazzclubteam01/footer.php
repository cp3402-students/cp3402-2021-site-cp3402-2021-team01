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

   <div class="contact-info">
      <!--      <ul>-->
      <!--         <li>Phone: 0431 618 618</li>-->
      <!--         <li>Email: townsvillejazz@icloud.com</li>-->
      <!--         <li>Address: 54 Howitt St, Townsville, QLD, 4810</li>-->
      <!--      </ul>-->
      <table>
         <tr>
            <td>Phone:</td>
            <td>0431 618 618</td>
         </tr>
         <tr>
            <td>Email:</td>
            <td>townsvillejazz@icloud.com</td>
         </tr>
         <tr>
            <td>Address:</td>
            <td>54 Howitt St, Townsville, QLD, 4810</td>
         </tr>
      </table>
   </div>

   <div class="website-info">
      <p>Townsville Jazz Club. All Rights Reserved &#169;</p>
      </a>
   </div>

   <nav id="secondary-navigation" class="secondary-navigation">
       <?php
       wp_nav_menu(
           array(
               'theme_location' => 'secondary',
               'menu_id' => 'secondary-menu',
           )
       );
       ?>
   </nav>


   <!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
