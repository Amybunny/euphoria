<p>〜〜〜〜〜ここからサイドバー〜〜〜〜〜</p>
<?php if(is_active_sidebar('sidebar')): ?>
  <aside role="complementary" aria-label="サイドバー">
    <div >
      <?php dynamic_sidebar('sidebar'); ?>
    </div>
  </aside>
<?php endif; ?>
<p>〜〜〜〜〜ここまでサイドバー〜〜〜〜〜</p>
