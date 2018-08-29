<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package scm_maxev
 */

get_header();
?>
<div class="banner top-bnr clearfix">
    <p class="bnr-img"><img src="<?php bloginfo('template_directory'); ?>/src/images/bnr_img01.png" alt="bnr_img01"></p>
    <div class="bnrIn clearfix">
      <h2 class="bnr-tit"><p class="bnr-titIn"><span>企業の戦略的・財務的側面から<br>経営をサポートします</span></p></h2>
      <div class="bnr-content clearfix">
        <div class="bnr-contentIn">
          <p class="bnr-txt01">アライアンス戦略、M&A、経営戦略・<br>事業計画策定、資金調達、経営<span>にお悩みの方に ─<span class="pc">───</span></span></p>
          <p class="bnr-txt02">経営サポートが必要な中小企業の経営者様に、<br>御社に本当に必要なアドバイザーをご紹介いたします</p>
          <a href="#primary" class="bnr-a"><img src="<?php bloginfo('template_directory'); ?>/src/images/down_arr_icn.png" alt="down_arr_icn"></a>
        </div>
      </div><!-- bnr-content -->
    </div><!-- bannerIn -->
  </div><!-- banner -->
<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <!-- For Top(index) page -->
    <div class="top-page">
      <div class="w1340">
        <div class="top-sec01 clearfix">
        <h2 class="com-title">MaxEVのVision</h2>
        <div class="top-sec01In clearfix">
          <div class="top-block01">
            <p> 中小企業の経営者にとって、<br/>
            心から信頼できるパートナーになりたい</p>
          </div><!-- /top-sec -->
          <div class="top-block02">
            <p class="top-title01">中小企業の経営者にとってM&Aは<br/>
              一生のうち一度あるかないかの大きな出来事です</p>
              <p class="top-txt01"> 株式会社MaxEVはM&Aのほかに資金調達や経営サポート、さまざまな分野で企業<br class="pc">価値（Enterprise Value）を最大化（Maximum）し、中小企業の経営者のお役に<br class="pc">立ちたいと思っています。</p>
              <div class="btn">
                <a href="/message" class="link-btn">代表挨拶はこちら</a>
              </div>
            </div><!-- /top-block02 -->
          </div><!-- /.top-sec01In -->
        </div><!-- /.top-sec01 -->

        <div class="top-sec02 clearfix">
          <h2 class="com-title">事業内容</h2>
          <div class="top-sec02In clearfix">
            <div class="service01">
              <p class="service-title">コンサルティングサービス</p>
              <div class="service01-in">
                <ul class="clearfix">
                <li class="circle">
                    <span>経営戦略<br>事業戦略</span></li>
                    <li class="circle">
                    <span>アライア<br>ンス戦略</span></li>
                 <li class="circle">
                    <span>資本政策<br>  </span></li>
                  <li class="circle">
                    <span>M & A<br>  </span></li>
                </ul>
                <p class="service-txt01">株式会社MaxEVでは、経営サポートが必要な中小企業の経営者様にさまざまな分野でのコンサルティングサービスをご提供しています。</p>
                <div class="btn">
                <a href="/business" class="link-btn">詳しくはこちら</a>
              </div>
              </div><!-- /.service01-in -->
            </div><!-- /.service01 -->
            <div class="service02">
              <p class="service-title">Hands-on サービス</p>
               <div class="service02-in">
                <p class="service-txt02">すべてのM&Aアドバイザーへ<span class="dashed">───</span></p>
                <p class="service-txt03"><b>信頼</b>できる<b>仲間</b>に<b>出会える・つながる</b></p>
                 <div class="sns">
                   <span class="sns-block">SNSタイプの案件シェアサービス</span>
                   <div class="sns-in clearfix">
                   <span class="sns-img">
                   <img src="<?php bloginfo('template_directory'); ?>/src/images/top_img04.png" alt="Hands-on"></span>
                 <div class="btn">
                   <a href="/business" class="link-btn">詳しくはこちら</a>
                 </div><!-- /.btn -->
                 </div><!-- /.sns-in -->
                </div><!-- /.sns -->
              </div><!-- /.service02-in -->
            </div><!-- /.service02 -->
          </div><!-- /.top-sec02In -->
        </div><!-- /.top-sec02 -->

        <div class="top-sec03 clearfix">
          <h2 class="com-title">新着情報</h2>
          <ul class="top-news-list clearfix">
            <?php
              $loop = new WP_Query(array("post_type" => "post","posts_per_page" => 4, 'order' => DSC));
              if ( $loop->have_posts() ) : while($loop->have_posts()): $loop->the_post();
            ?>
            <li class="top-news clearfix">
              <span class="top-news-date"><?php the_time('Y. m. d'); ?></span>
              <?php
                  global $post;
                  $terms = get_the_category( $post->ID );
                  if ( !empty( $terms ) ){
                  ?>
              <span class="top-news-cat top-news-<?php
                  echo esc_html( $terms[0]->slug );
                ?>">
                <?php
                  echo esc_html( $terms[0]->name );
                }
                ?>
              </span>
              <span class="top-news-tit"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></span>
              <span class="top-news-more pc"><a href="<?php the_permalink() ?>">> More</a></span>
            </li>
            <?php endwhile; endif; ?>
          </ul>
          <div class="btn">
            <a href="/news" class="link-btn">一覧はこちら</a>
          </div>
        </div><!-- top-sec03 -->

        <div class="top-sec04 clearfix">
          <h2 class="com-title">メディア実績</h2>
          <ul class="top-media-list clearfix">
            <?php
              $loop = new WP_Query(array("post_type" => "media","posts_per_page" => 3, 'order' => DSC));
              if ( $loop->have_posts() ) : while($loop->have_posts()): $loop->the_post();
            ?>
            <li class="top-media clearfix">
              <span class="top-media-date"><?php the_time('Y. m. d'); ?></span>
              <?php
                global $post;
                $terms = get_the_terms( $post->ID, 'media_tax' );
                if ( !empty( $terms ) ){
                ?>
              <span class="top-media-cat">
                <?php
                  echo esc_html( $terms[0]->name );
                }
                ?>
              </span>
              <p class="top-media-tit"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
              <span class="top-media-more pc"><a href="<?php the_permalink() ?>">> More</a></span>
            </li>
            <?php endwhile; endif; ?>
          </ul>
          <div class="btn">
            <a href="/media" class="link-btn">一覧はこちら</a>
          </div>
        </div><!-- top-sec04 -->
      </div><!-- /.w98 -->
    </div>
  </main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
?>
