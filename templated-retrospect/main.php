<!-- Banner  Replace something-->

<?php echo do_shortcode('[metaslider id="62"]'); ?>

<!-- One -->
<section id="one" class="wrapper style1">
    <div class="inner">
        <?php 
				$i = 0;
				            $args = array(
											'posts_per_page' => 3
							);
				 $rp = new WP_Query( $args );
				 if($rp->have_posts()):
				 while($rp->have_posts()) : $rp->the_post();
				 $i++;
            echo 
            '<article class="feature ';
            echo $i%2 ? 'left' : 'right';
            echo 
						'">';
							the_post_thumbnail(array(500, 500));
          echo  '<div class="content">';
                 the_title('<h1>' ,'</h1>'); // posttitle
								the_excerpt(); // displays the excerpt		
       		 		echo 
						'</div>
						</article>';
					endwhile;
					wp_reset_postdata();
				endif;
        	 ?>
    </div>
</section>
<!-- Two -->
<section id="two" class="wrapper special">
    <div class="inner">
        <header class="major narrow">
            <h2>Social Media</h2>
        </header>
            <?php echo do_shortcode('[fts_twitter tweets_count=1 cover_photo=no stats_bar=no show_retweets=no show_replies=no search=burtle]'); ?>
            <?php echo do_shortcode('[custom-facebook-feed]'); ?>
            <?php echo do_shortcode('[fts_instagram instagram_id=rainbowbunny_official pics_count=1 type=user profile_wrap=yes profile_photo=no profile_stats=no profile_name=no profile_description=no super_gallery=yes columns=3 force_columns=no space_between_photos=1px icon_size=65px hide_date_likes_comments=no]'); ?>
    </div>
</section>

<!-- Three -->
<section id="three" class="wrapper style3 special">
    <div class="inner">
        <header class="major narrow	">
            <h2>Magna sed consequat tempus</h2>
            <p>Ipsum dolor tempus commodo turpis adipiscing Tempor placerat sed amet accumsan</p>
        </header>
        <ul class="actions">
            <li><a href="#" class="button big alt">Magna feugiat</a></li>
        </ul>
    </div>
</section>

<!-- Four -->

<section id="four" class="wrapper style2 special">
    <?php echo do_shortcode('[contact-form-7 id="32" title="Contact form 1"]'); ?>
</section>