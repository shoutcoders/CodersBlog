<?php
get_header();

/*Loops For Blog Post*/
if(have_posts()):
    while(have_posts()):the_post();?> 

<div class="site-content">
    <div class="main-column">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>
           <small>Posted on <?php the_time(' F jS, Y') ?> | 
               By <a href="<?php get_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author();?></a>
               
               | Posted in <?php the_category(', ') ?>
            </small>
        <?php
            get_template_part(the_content(),'single');
        ?>

        <?php
        endwhile;  
        else:
        echo "No Content Found";
        endif;
        ?>
    </div>
    
    <div class="secondary-column">
    
    <?php dynamic_sidebar('sidebar-1');?>
    
    </div>
    
</div>

<?php
get_footer();

?>