<?php
/**
* Template Name: トップページ用テンプレート
*
* これはカスタム固定ページテンプレートです。
* 固定ページ編集画面から使用するテンプレートを指定できます。
*/
?>


<?php get_header(); ?>

  <section id="news" class="content">
    <h2><img src="/_asset/img/h2_news.png" height="75" width="207" alt="NEWS"></h2>

    <div class="container">
      <div class="row">


        <?php
        $args = array( 'category_name' => 'articles, news', 'posts_per_page' =>3 );
        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="col-md-4">
        <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail( 'medium' ); ?>
        </a>
        <div class="cont_body">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <?php /*the_excerpt();*/ ?>
        <!--/cont_body--></div>
        <!--p class="read_more">Read More</p-->
        <!--/col-md-4--></div>
        <?php endwhile; ?>
        <?php endif; wp_reset_postdata(); ?>

        
      </div>
    </div>

    <p class="box_contact"><a href="#contact" class="btn btn-lg btn_contact anchor">お問い合せ</a></p>
  <!-- /service --></section>

  <section id="works" class="content bg_wht">
    <h2><img src="_asset/img/h2_works.png" height="75" width="156" alt="WORKS"></h2>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <?php
        $args = array( 'category_name' => 'works', 'posts_per_page' =>1 );
        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <?php the_content(); ?>
        <div class="cont_body">
        <h3><?php the_title(); ?></h3>
        
        <!--/cont_body--></div>
        <?php endwhile; ?>
        <?php endif; wp_reset_postdata(); ?>

        </div>
      </div>
    </div>
  <!-- /works --></section>

  <section id="aboutus" class="content">
    <h2><img src="/_asset/img/h2_aboutus.png" height="75" width="214" alt="ABOUT US"></h2>

    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="cont_body">
            <table class="profile_company">
            <tr>
              <th>企業名</th>
              <td>一般社団法人日本ドローンレース協会</td>
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
              <td>FPVドローンレース、<br>2.4Ghzドローンレースの開催、<br>初心者向け体験会、<br>ドローンレース練習会、<br>ドローン取扱講習会、<br>ドローン操縦者派遣、<br>空撮業者斡旋</td>
            </tr>
            <tr>
              <th>URL</th>
              <td><a href="http://jdra.or.jp/">http://jdra.or.jp</a></td>
            </tr>
            </table>
          </div>
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
