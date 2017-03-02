<?php
get_header();

/*Loops For Blog Post*/
if(have_posts()):
    while(have_posts()):the_post(); ?>

<!-- Content Div Contains Article + Sidebars -->
<div class="clearfix"></div>
<div class="content">
    <!--The "MainContent" Div Contains Article And Images-->
    <div class="maincontent">
        <article class="post"> 
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>
            <p><?php the_content();?></p>
        </article>  
    </div>
    <!-- "MainContent Div Ends" -->
    
    
    
    <div class="clearfix"></div>
</div>
<!--Main Content Div Ends Here-->

    <?php
    endwhile;  

else:
    echo "No Content Found";
endif;


get_footer();

?>