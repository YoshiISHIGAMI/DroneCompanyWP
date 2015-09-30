<?php ?>

<?php get_header(); ?>

  <section id="service" class="content">
    <h2><img src="_asset/img/h2_service.png" height="75" width="177" alt="SERVICE"></h2>

    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h3>空撮</h3>
          <div class="cont_body">
            <p>あああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ。</p>
            <p>いいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいい。</p>
            <p>ううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううう。</p>
          </div>
        </div>
        <div class="col-md-6">
          <h3>ドローン操縦者派遣</h3>
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
          <p>いいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいい。</p>
          <p>ううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううううう。</p>
        </div>
        </div>
      </div>
    </div>
  <!-- /works --></section>

  <section id="company" class="content">
    <h2><img src="_asset/img/h2_company.png" height="75" width="207" alt="COMPANY"></h2>

    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h3>Profile</h3>
          <div class="cont_body">
            <table class="profile_company">
            <tr>
              <th>会社名</th>
              <td>ドローンソリューション株式会社</td>
            </tr>
            <tr>
              <th>設立</th>
              <td>2015年8月31日</td>
            </tr>
            <tr>
              <th>代表取締役</th>
              <td>田中 いちろう</td>
            </tr>
            <tr>
              <th>所在地</th>
              <td>東京都豊島区南池袋2-4-3 池袋ホウライビル 4F</td>
            </tr>
            <tr>
              <th>事業内容</th>
              <td>空撮、ドローン操縦者の派遣</td>
            </tr>
            <tr>
              <th>URL</th>
              <td><a href="http://drone-br.ibf-cola.com/">http://drone-br.ibf-cola.com/</a></td>
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
          <a href="<?php the_permalink(); ?>"><?php the_time('Y.m.j') ?><br><?php the_title(); ?></a>
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
  <div id="map"></div>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMwT0G9ZhR4uTkKtZWJA7axoqjZR2TA4M&callback=initMap"></script>
    <script type="text/javascript">
      var map;
      function initMap() {
        var myLatLng = {lat: 35.724444, lng: 139.716437};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: myLatLng,
          scrollwheel: false
        });
        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'DRONE SOLUTIONS inc.'
        });
        marker.setMap(map);
      }
    </script>

  <section id="contact" class="content bg_wht">
    <h2><img src="_asset/img/h2_contact.png" height="75" width="196" alt="CONTACT"></h2>
    <div class="container">
    <p>ドローンソリューション株式会社は、ドローンにまつわる様々なソリューションを提供しております。</p>
    <p>詳細は下記フォームから、お気軽にお問い合わせください。</p>
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
  <?php the_content(); ?>
<?php endwhile; ?>
<?php endif; ?>
    </div>
  <!-- /contact --></section>


<?php get_footer(); 