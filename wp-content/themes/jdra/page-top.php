<?php
/**
* Template Name: トップページ用テンプレート
*
* これはカスタム固定ページテンプレートです。
* 固定ページ編集画面から使用するテンプレートを指定できます。
*/
?>


<?php get_header(); ?>

  <section id="articles" class="content">
    <h2><img src="/_asset/img/h2_articles.png" height="75" width="207" alt="ARTICLES"></h2>

    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h3>ドローンレース</h3>
          <div class="cont_body">
            <p>あああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ。</p>
            <p>いいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいい。</p>
            <p>ううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううう。</p>
          </div>
        </div>
        <div class="col-md-6">
          <h3>体験会</h3>
          <div class="cont_body">
            <p>あああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ。</p>
            <p>いいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいい。</p>
            <p>ううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううう。</p>
          </div>
        </div>
      </div>
    </div>

    <p class="box_contact"><a href="#contact" class="btn btn-lg btn_contact anchor">お問い合せ</a></p>
  <!-- /service --></section>

  <section id="works" class="content bg_wht">
    <h2><img src="_asset/img/h2_works.png" height="75" width="156" alt="WORKS"></h2>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe src="https://www.youtube.com/embed/XjxOW5oKElc?rel=0" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="cont_body">
          <h3>Cast Your Shell/Fear, and Loathing in Las Vegas</h3>
        </div>
        </div>
      </div>
    </div>
  <!-- /works --></section>

  <section id="aboutus" class="content">
    <h2><img src="/_asset/img/h2_aboutus.png" height="75" width="214" alt="ABOUT US"></h2>

    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h3>Profile</h3>
          <div class="cont_body">
            <table class="profile_company">
            <tr>
              <th>団体名</th>
              <td>日本ドローンレース協会</td>
            </tr>
            <tr>
              <th>設立</th>
              <td>2015年2月</td>
            </tr>
            <tr>
              <th>代表理事</th>
              <td>小寺 悠</td>
            </tr>
            <tr>
              <th>所在地</th>
              <td>東京都豊島区南池袋2-4-3 池袋ホウライビル 4F</td>
            </tr>
            <tr>
              <th>事業内容</th>
              <td>ドローンレースの開催</td>
            </tr>
            <tr>
              <th>URL</th>
              <td><a href="http://jdra.or.jp/">http://jdra.or.jp</a></td>
            </tr>
            </table>
          </div>
        </div>
        
        <div class="col-md-6" id="news">
        <?php
        $args = array( 'category_name' => 'news', 'posts_per_page' => 5 );
        $the_query = new WP_Query( $args );// 新規WP query を作成　変数args で定義したパラメータを参照
        if ( $the_query->have_posts() ) : ?>
        <h3>News</h3>
        <div class="cont_body">
        <ul class="list_news">
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <li>
          <a href="<?php the_permalink(); ?>">
            <span class="date"><?php the_time('Y.m.j') ?></span>
            <span class="title"><?php the_title(); ?></span>
          </a>
        </li>
				<?php endwhile; ?>
			</ul>
			<p id="top-news-link"><a href="<?php echo home_url(); ?>/category/news/">一覧を見る</a></p>
          </div>
          <?php endif; wp_reset_postdata(); ?>
      </div>
    </div>
    </div>
  <!-- /company --></section>


  <section id="contact" class="content bg_wht">
    <h2><img src="_asset/img/h2_contact.png" height="75" width="196" alt="CONTACT"></h2>
    <div class="container">
    <p>下記フォームから、お気軽にお問い合わせください。</p>
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
  <?php the_content(); ?>
<?php endwhile; ?>
<?php endif; ?>
    </div>
  <!-- /contact --></section>


<?php get_footer(); 
