        <!-- //////////　イベント読み込み ////////// -->
        <div class="sekoujirei-archive">
                    
                <?php query_posts( 
                    array(
                        'post_type' => 'works', //カスタム投稿名
                        //'taxonomy' => 'area',
                        //'term' => 'aomori',
                        'posts_per_page' => 6 //表示件数( -1 = 全件 )
                    )); 
                ?>
                <?php if(have_posts()): ?>
                <?php while(have_posts()):the_post(); ?>
                    
                <article class="archiveItem
                <?php if(get_option('fit_theme_articleLayout') == 'value2'): ?> archiveItem-wide<?php endif; ?>
                <?php if(get_option('fit_theme_articleLayout') == 'value3'): ?> archiveItem-wideSp<?php endif; ?>">    
                        
                    <div class="eyecatch eyecatch-archive">
                        <a href="<?php the_permalink(); ?>">
                            <div class="eyecatch-img">
                                <?php if(has_post_thumbnail()) {the_post_thumbnail('icatch');} else {echo '<img src="'.get_template_directory_uri().'/img/img_no.gif" alt="NO IMAGE"/>';}?>
                                <span class="category-name">
                                    <?php
                                    $terms = get_the_terms($post->ID, 'works_cat');
                                    if(!empty($terms)) {
                                        foreach($terms as $term):
                                        echo $term->name;
                                        endforeach;
                                    } else {
                                        echo '未分類';
                                    }
                                    ?>
                                </span>
                            </div>
                            <div class="sekoujirei-content">
                                <p class="area-name">〇〇市A様<?/*php echo get_field( 'area-name' ); */?></p>
                                <h4><?php the_title(); ?></h4>
                                <p><?php echo wp_trim_words( get_the_content(), 40, '...' ); ?></p>
                            </div>
                        </a>
                    </div>
                </article>
                <?php endwhile; else: ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
            <!-- //////////　施工事例読み込みここまで ////////// -->