<?php 

function sampletheme_scripts(){
  wp_enqueue_style('sampletheme_style',get_stylesheet_uri(),[],wp_get_theme()->get('Version'));
  wp_enqueue_script('sampletheme_script','https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js',[],'1.1');
}

function sampletheme_setup(){
  register_nav_menus(
    [
    'menu-1'=>'メイン',
    'menu-2'=>'メイン2',
    'menu-2'=>'フッター',
    ]
  );
  add_theme_support('post-thumbnails');
  set_post_thumbnail_size(96,54);

  add_theme_support(
    'custom-logo',
    [
      'height'=>64,
      'width'=>235,
      'flex-width'=>false,
      'flwx-height'=>false,
      'header-text'=>['site-title','site-description']
    ]
  );
}

function sampletheme_widgets_init(){
  register_sidebar([
    'name'=>'サイドバー',
    'id'=> 'sidebar',
    'description'=> 'サイドバーに表示するウィジェットを追加します',
    'before_widget'=>'<section id="%1$s" class="widget %2$s">',
    'after_widget'=>'</section>',
    'before_title'=>'<h2 class="widget-title">',
    'after_title'=>'</h2>',
  ]);
}
add_action('after_setup_theme','sampletheme_setup');
add_action('widgets_init','sampletheme_widgets_init');
add_action('wp_enqueue_scripts','sampletheme_scripts');

//余計な文字列を消す
add_filter( 'get_the_archive_title', function ($title) {
  if (is_category()) {
      $title = single_cat_title('',false);
  } elseif (is_tag()) {
      $title = single_tag_title('',false);
} elseif (is_tax()) {
    $title = single_term_title('',false);
} elseif (is_post_type_archive() ){
  $title = post_type_archive_title('',false);
} elseif (is_date()) {
    $title = get_the_time('Y年n月');
} elseif (is_search()) {
    $title = '検索結果：'.esc_html( get_search_query(false) );
} elseif (is_404()) {
    $title = '「404」ページが見つかりません';
} else {
}
  return $title;
});

//headのタイトル
add_theme_support( 'title-tag' );
function change_title_separator( $sep ){
  $sep = ' | ';
  return $sep;
}
add_filter( 'document_title_separator', 'change_title_separator' );

//パンくずリスト
function breadcrumb(){
	global $post;
	$str ='';
	if(!is_home()&&!is_admin()){ /* !is_admin は管理ページ以外という条件分岐 */
		$str.= '<div>';
		$str.= '<ul class="breadcrumb">';
		$str.= '<li><a href="'. home_url() .'/">ホーム</a></li>';
		$str.= '<li>&gt;</li>';
		
		if(is_search()){
			$str.='<li>「'. get_search_query() .'」で検索した結果</li>';
		} elseif(is_404()){
			$str.='<li>404 Not found</li>';
		} elseif(is_date()){
			if(get_query_var('day') != 0){
				$str.='<li><a href="'. get_year_link(get_query_var('year')). '">' . get_query_var('year'). '年</a></li>';
				$str.='<li>&gt;</li>';
				$str.='<li><a href="'. get_month_link(get_query_var('year'), get_query_var('monthnum')). '">'. get_query_var('monthnum') .'月</a></li>';
				$str.='<li>&gt;</li>';
				$str.='<li>'. get_query_var('day'). '日</li>';
			} elseif(get_query_var('monthnum') != 0){
				$str.='<li><a href="'. get_year_link(get_query_var('year')) .'">'. get_query_var('year') .'年</a></li>';
				$str.='<li>&gt;</li>';
				$str.='<li>'. get_query_var('monthnum'). '月</li>';
			} else {
				$str.='<li>'. get_query_var('year') .'年</li>';
			}
		} elseif(is_category()) {
			$cat = get_queried_object();
			if($cat -> parent != 0){
				$ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' ));
				foreach($ancestors as $ancestor){
					$str.='<li><a href="'. get_category_link($ancestor) .'">'. get_cat_name($ancestor) .'</a></li>';
					$str.='<li>&gt;</li>';
				}
			}
			$str.='<li>'. $cat -> name . '</li>';
		} elseif(is_page()){
			if($post -> post_parent != 0 ){
				$ancestors = array_reverse(get_post_ancestors( $post->ID ));
				foreach($ancestors as $ancestor){
					$str.='<li><a href="'. get_permalink($ancestor).'">'. get_the_title($ancestor) .'</a></li>';
					$str.='<li>&gt;</li>';
				}
			}
			$str.= '<li>'. $post -> post_title .'</li>';
			
		} elseif(is_single()){
			$categories = get_the_category($post->ID);
			$cat = $categories[0];
			if($cat -> parent != 0){
				$ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' ));
				foreach($ancestors as $ancestor){
					$str.='<li><a href="'. get_category_link($ancestor).'">'. get_cat_name($ancestor). '</a></li>';
					$str.='<li>&gt;</li>';
				}
			}
			$str.='<li><a href="'. get_category_link($cat -> term_id). '">'. $cat-> cat_name . '</a></li>';
			$str.='<li>&gt;</li>';
			// $str.= '<li>'. $post -> post_title .'</li>';
		} else{
			$str.='<li>'. wp_title('', false) .'</li>';
		}
		$str.='</ul>';
		$str.='</div>';
	}
	echo $str;
}