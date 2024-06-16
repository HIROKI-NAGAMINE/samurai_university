<!-- sidebar-main に切り出す -->
<div class="sidebar">
            <div class="category">
              <div class="section_title_container category_title">
                <h2>CATEGORY</h2>
                <div class="section_subtitle">カテゴリー</div>
              </div>
              <div class="sidebar_categories">
                <ul>
                  <li><a href="#">News ニュース</a></li>
                  <li><a href="#">Event イベント</a></li>
                  <li><a href="#">CampusLife 侍の学生</a></li>
                </ul>
              </div>
            </div>
            <div class="category">
              <div class="section_title_container category_title">
                <h2>Latest Post</h2>
                <div class="section_subtitle">最新記事</div>
              </div>
              <div class="sidebar_categories">
                <ul>
                  <?php
                  $args = array(
                    'posts_per_page' => 3 //表示件数の指定
                  );
                  $posts = get_posts( $args );
                  foreach ( $posts as $post ): //ループの開始
                    setup_postdata( $post ); //記事データのセット
                  ?>
                  <li>
                    <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
                  </li>
                  <?php
                  endforeach;
                  wp_reset_postdata(); //今回作成したクエリをリセットする
                  ?>
                </ul>
              </div>
            </div>
          </div>
          <!-- sidebar-main ここまで -->