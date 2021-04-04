</div>
  <section class="wrap back-white">
    <h1 class="text-center contact-title">お問い合わせ</h1>
    <p class="text-center">TEL：080-0000-0000</p>
    <p class="text-center">メール：euphoria@gmail.com</p>
    <a class="line-btn" href=""><img src="/wordpress/wp-content/themes/ayaka/line.png" alt=""></a>
  </section>
  <footer class="footer">

    <?php if(has_nav_menu('menu-2')): ?>
      <nav aria-label="フッターメニュー">
        <?php 
        wp_nav_menu(
          [
            'theme_location' => 'menu-2',
            'menu_class'=>'menu-common footer-menu',
          ]
          );
        ?>
      </nav>
    <?php endif; ?>

    <img class="footer-logo" src="/wordpress/wp-content/themes/ayaka/euphoria.png" alt="">

  </footer>
  <script>
    'use strict';
    {
      const open = document.getElementById('open');
      const close = document.getElementById('close');
      const overlay = document.querySelector('.overlay');
      open.addEventListener('click',()=>{
        overlay.classList.add('show');
      });
      close.addEventListener('click',()=>{
        overlay.classList.remove('show');
      });
    }
  </script>
</body>
</html>