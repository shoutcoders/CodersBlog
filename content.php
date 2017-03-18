
<!--The "MainContent" Div Contains Article And Images-->
    <div class="maincontent outline">
        <article class="post"> 
           
            <h2 class="clearfix"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>
           <small>Posted on <?php the_time(' F jS, Y') ?> | 
               By <a href="<?php get_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author();?></a>
               
               | Posted in <?php the_category(', ') ?>
            </small>
            
            <p>
                 <?php the_post_thumbnail('small-thumbnail');?>
                <?php echo the_excerpt();?>
                <div class="readmore"><a href="<?php the_permalink(); ?>"> Read More... </a></div>
            </p>
            
        </article>  
    </div>
<!-- "MainContent Div Ends" -->

