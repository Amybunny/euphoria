<?php get_header(); ?>
<img class="top-img" src="/wordpress/wp-content/themes/ayaka/youDSC_0057のコピー.jpg" alt="">

<section class="wrap back-white">
  <div class="front-container">
    <h1 class="text-center front-title">レイキは日本発祥の<br>「手当て療法」です！
    </h1>

    <p>私たちの身体に流れるエネルギーを、レイキの世界では「気」と呼び、「気」が滞りなくスムーズに流れているのが健康な状態だと考えます。
    しかし、気の流れ・バランスが悪くなってしまうと、人は不調を感じます。
    レイキヒーリングは、ヒーラーが手を当てることによって気のバランスを調節し、癒やしを与える技法です。
    </p>

    <img src="/wordpress/wp-content/themes/ayaka/cat1.jpeg" alt="">
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

    <a class="more-btn back-yellow" href="http://localhost:8888/wordpress/aboutreiki/">その他の詳しい効果など</a>
  </div>
</section>

<section class="wrap back-yellow">
  <div class="front-container">
    <h1 class="text-center front-title">プロフィール</h1>
    <img src="/wordpress/wp-content/themes/ayaka/profile.jpg" alt="">
    <p class="text-center">レイキヒーラー</p>
    <p class="text-center">飯塚優亮</p>
    <br>
    <p>18歳の時に発症し、10年間苦しんだパニック障害をレイキで克服。
    丸4年間服用していた「ベンゾジアゼピン系抗不安薬」による激しい副作用もあり、生き地獄を味わっていたが、これもレイキのヒーリングパワーに助けられ、完全断薬に成功。
    苦しんでいる人の助けになるべく、現在は福岡市を拠点にレイキヒーラーとして活動している。
    </p>

    <a href="http://localhost:8888/wordpress/profile/" class="more-btn back-white">より詳しいプロフィールへ</a>
  </div>
</section>
  
<section class="wrap back-white">
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
  <a class="more-btn back-yellow" href="http://localhost:8888/wordpress/new/">ブログ一覧へ</a>
</section>

<section class="wrap back-yellow">
  <div class="front-container">  
    <h1 class="text-center front-title">アクセスガイド</h1>
    <p>当院は、決まった店舗はございません。<br>
    ・福岡市中心部のレンタルサロン<br>
    ・自宅訪問施療<br>
    にて施術をしております。<br>
    <br>
    （レンタルサロンのご案内）<br>
    福岡市中央区の薬院駅付近に2箇所、天神駅付近に1箇所ございます。<br>
    以下に詳しいアクセスを記載いたします。お客様のご都合に合わせ、場所をお選びください。
    </p>
    <a href="http://localhost:8888/wordpress/access/" class="more-btn back-white">詳しいアクセス</a>
  </div>
</section>

<section class="wrap back-white">
  <div class="front-container">
    <h1 class="text-center front-title">よくある質問</h1>
    <div class="qa-box">
      <h2 class="question fw6">Q .ヒーリングを受けている間はどうすればいいのですか？</h2>
      <p>A .エネルギーを受け取ると眠くなる場合がございますので、運転などは控えてください。
      家でリラックスした状態で受けていただくのが理想です。スマホや読書、入浴などはしていただいていてかまいません。
      </p>
    </div>
    <div class="qa-box">
      <h2 class="question fw6">Q .オプションありとなしでは差がありますか？</h2>
      <p>A .通常500円のヒーリングでもエネルギーが十分流せますのでご安心ください。
      ただし、より深いレベルでのヒーリングをご希望の方は、オプションの【スピリットレイキ】追加をおすすめします。イエスやケルト神アニュといった、神様系の波動の高いエネルギーです。
      </p>
    </div>
    <div class="qa-box">
      <h2 class="question fw6">Q .健康上の問題はないのですが、人間関係が最悪で…。それもなんとかできるのでしょうか？</h2>
      <p>A .人間関係そのものをレイキすることが可能です。
      このように、生き物でなくても癒やしのエネルギーを届けられるのが海外系レイキの素晴らしいところです。
      本当に何でもレイキできますので、お気軽にご相談ください。
      </p>
    </div>
    <a class="more-btn back-yellow" href="http://localhost:8888/wordpress/voice/">もっと見る</a>
  </div>
</section>

<section class="wrap back-yellow pb32">
  <div class="front-container">  
    <h1 class="text-center front-title">料金一覧</h1>
    <p>・5000円<br>
    ・初回限定4000円<br>
    （まずは一度お試しください）<br>
    <br>
    施療の時間は約40分〜50分程度です。簡単なカウンセリング含め、トータル1時間程度になります。<br>
    <br>
    ・遠隔ヒーリング2500円<br>
    （遠隔について、詳しくは<a class="remote-link" href="http://localhost:8888/wordpress/remote/">こちら</a>から）</p>
  </div>
</section>

<section class="wrap back-white">
  <div class="front-container">
    <h1 class="text-center front-title">お客様の声</h1>
    <p class="voice back-yellow">とても良かったです。ヒーリング中の体感も強かったですが翌日のスッキリ感がとてもありました♪またよろしくお願い致します。</p>
    <p class="voice back-yellow ">月1,2回猫ちゃんにレイキを送ってもらってます。調子悪いなって時にお願いして、30分から半日くらいで良くなるのでいつも助かってます。</p>
    <p class="voice back-yellow">肋間神経痛で動けなかったのですが、やって頂いた30分後から痛みが和らぎ始めました！助かりました、ありがとうございました。</p>
    <p class="voice back-yellow">迅速にヒーリングしてくださりありがとうございました。
    ヒーリングもとても強力で浄化の効果が感じられましたし不調な部分も当たってました。
    メッセージも今の自分の悩みにピッタリな言葉でした。
    またぜひよろしくお願いします。</p>
    <a class="more-btn back-yellow" href="http://localhost:8888/wordpress/voice/">もっと見る</a>
  </div>
</section>

<?php 
  get_footer();
