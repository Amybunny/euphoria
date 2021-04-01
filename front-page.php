<?php get_header(); ?>
<img class="top-img" src="/wordpress/wp-content/themes/ayaka/top.png" alt="">

<section class="wrap">
  <div class="container">
    <h1 class="text-center front-title">レイキは日本発祥の<br>「手当て療法」です！
    </h1>

    <p>私たちの身体に流れるエネルギーを、レイキの世界では「気」と呼び、「気」が滞りなくスムーズに流れているのが健康な状態だと考えます。
    しかし、気の流れ・バランスが悪くなってしまうと、人は不調を感じます。
    レイキヒーリングは、ヒーラーが手を当てることによって気のバランスを調節し、癒やしを与える技法です。
    </p>

    <img style="width:60%;" src="/wordpress/wp-content/themes/ayaka/cat1.jpeg" alt="">
    <p class="text-center">実際の施療の様子</p>

    <h1 class="text-center front-title">レイキの主なメリット5つ</h1>

    <p>
    ・ストレスの軽減、リラックス効果<br>
    ・不安感、うつ症状の軽減<br>
    ・トラウマや嫌な記憶を癒やす<br>
    ・身体の痛みの軽減<br>
    ・直感力アップ、エネルギーの向上、良い引き寄せ(すでに健康な人向け)<br>
    <br>
    感じ方には個人差がありますが、多くの方が最初の施療で「気持ち良さ」「リラックス感」「癒やされてる感じ」を味わいます。
    <br>
    <br>
    レイキは幅広い範囲の不調に対応できますが、特に<span>精神面の効果</span>を実感される方が多いです。
    <br>
    <br>
    ぼく自身がパニック障害、抗不安薬(ベンゾジアゼピン系)の重篤な副作用をレイキで克服したのもあり、当院は精神面での体調が優れない方、精神薬の副作用が強く出すぎてつらい方へのヒーリングが最も得意です。
    </p>

    <a class="more-btn more-btn-yellow" href="http://localhost:8888/wordpress/aboutreiki/">その他の詳しい効果など</a>
  </div>
</section>
  
<section>
  <?php
    $information= get_posts( array(
    //ここで取得条件を指定する
    ));
    if( $information):
  ?>
    <h1 class="text-center front-title">ブログ</h1>
    <ul>
      <?php
        foreach( $information as $post ):
        setup_postdata( $post );
      ?>

      <li>
        <a class="rectangle-border entry-card" href="<?php the_permalink(); ?>"> 
          <figure class="rectangle-border entry-img">
            <?php the_post_thumbnail(); ?>
          </figure>
          <div class="entry-card-text">
            <p class="entry-card-title">
              <?php the_title(); ?>
            </p>
            <p class="entry-card-date">
              <?php the_time('Y.n.j'); ?>  
            </p>
          </div>
        </a>
      </li>

      <?php
        endforeach;
        wp_reset_postdata();
      ?>
    </ul>
  <?php endif; ?>
  <a class="more-btn more-btn-yellow" href="http://localhost:8888/wordpress/new/">もっと見る</a>
</section>

<?php 
  get_footer();
