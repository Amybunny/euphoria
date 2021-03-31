</div>
  <footer class="footer">

    <?php if(has_nav_menu('menu-2')): ?>
      <nav aria-label="フッターメニュー">
        <?php 
        wp_nav_menu(
          [
            'theme_location' => 'menu-2',
            'menu_class'=>'footer-menu',
          ]
          );
        ?>
      </nav>
    <?php endif; ?>

    <img class="footer-logo" src="/wordpress/wp-content/themes/ayaka/euphoria.png" alt="">

  </footer>
  <script>
    // jQuery(function(){
    //   alert("test");
    // })
  </script>
</body>
</html>