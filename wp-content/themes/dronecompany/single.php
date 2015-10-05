<?php
/**
* single.phpは投稿ページテンプレートです。
* このテンプレートを利用する全てのページでコメント機能を無効化したい場合は　comments_template();　の行を削除します。
* （投稿ごとのコメント有効/無効化は、投稿編集画面の「ディスカッション」で切り替えます）
*/
?>

<?php get_header(); //header.phpを取得 ?>

<section id="contents">


<div class="container">
<div class="row">


	<div id="main" class="col-md-8">
	
	<?php if ( have_posts() ) : // ループ開始　投稿があるなら ?>
		
		<?php while ( have_posts() ) : the_post();//繰り返し処理開始 ?>	
	
			<div <?php post_class(); //CSSカスタム用のクラスを付加（投稿ID、投稿タイプなど） ?>>
			
				<h1 class="page-title"><?php the_title(); ?></h1>
        
				<div class="page-meta"><?php the_time('Y.m.j'); ?><?php /*the_category(',');*/ ?></div>

        <div class="page-content">
          <?php the_content(); ?>
        </div>
			
			</div>
	
			<div id="post-link" class="clearfix">
				<p id="post-link-prev"><?php previous_post_link('%link', '< 前の記事へ' ); ?></p>
				<p id="post-link-next"><?php next_post_link('%link', '新しい記事へ >' ); ?></p>
			</div>
		
			<?php /*comments_template();*/ ?>
	
		<?php endwhile; // 繰り返し終了 ?>	
				
		<?php else : //投稿が無い場合は ?>
		
			<h2>投稿がみつかりません。</h2>
			<p><a href="<?php echo home_url(); //サイトURLを取得 ?>">トップページに戻る</a></p>
	
	<?php endif; //ループ終了 ?>
	
	</div>
	
	<div id="side" class="col-md-4">
	
		<?php get_sidebar(); //sidebar.phpを取得 ?>
	
	</div>


<!--/row--></div>
<!--/container--></div>
<!--/#main_contents--></section>
	
<?php get_footer();