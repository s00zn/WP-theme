    <?php get_header(); ?> <!-- In case of a v2, you type ( 'v2' ) and name your file header-v2.php -->

    <!-- Content
    ============================================= -->
    <section id="content">

      <div class="content-wrap">

        <div class="section header-stick bottommargin-lg clearfix" style="padding: 20px 0;">
          <div>
            <div class="container clearfix">
              <span class="badge badge-danger bnews-title">Breaking News:</span>

              <div class="fslider bnews-slider nobottommargin" data-speed="800" data-pause="6000" data-arrows="false" data-pagi="false">
                <div class="flexslider">
                  <div class="slider-wrap">
                    <div class="slide"><a href="#"><strong> Learning all about WordPress </strong></a></div>
                    <div class="slide"><a href="#"><strong> Takes some time, but getting there! </strong></a></div>
                    <div class="slide"><a href="#"><strong> Browse around, and let me know what you think! </strong></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container clearfix">

          <!-- Post Content
          ============================================= -->
          <div class="postcontent nobottommargin clearfix">

            <!-- Posts
            ============================================= -->
            <div id="posts">

              <?php

                if( have_posts() ){
                  while( have_posts() ){
                    the_post();
                    
                    //content-excerpt.php
                    get_template_part('partials/post/content-excerpt');
                    // 1) content-excerpt.php 2) content.php
                    //get_template_part('partials/post/content', 'excerpt');
                  }
                }

              ?>

            </div><!-- #posts end -->

            <!-- Pagination
            ============================================= -->
            <div class="row mb-3">
              <div class="col-12">
                <?php

                next_posts_link( '&larr; Older' );

                previous_posts_link( 'Newer &rarr;' );

                ?>
                <!-- <a href="#" class="btn btn-outline-secondary float-left">
                  &larr; Older
                </a>
                <a href="#" class="btn btn-outline-dark float-right">
                  Newer &rarr;
                </a> -->
              </div>
            </div>
            <!-- .pager end -->

          </div><!-- .postcontent end -->

          <?php get_sidebar(); ?>

        </div>

      </div>

    </section><!-- #content end -->

    <?php get_footer(); ?>