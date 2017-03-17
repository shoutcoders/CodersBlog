<?php
get_header();

?>

<div class="site-content clearfix">

<!-- Main - Column ( Content Column )-->

<div class="main-column">
    <?php 
        /*Loops For Blog Post*/
        if(have_posts()):
            while(have_posts()):the_post(); 
    
            get_template_part('content', get_post_format());
        
    endwhile;  
    
    else:
    
        echo "No Content Found";
    
    endif;
    
    ?>
</div>
<!-- Secondary Column(Sidebar)-->
<div class="secondary-column">

<?php dynamic_sidebar('sidebar-1');?>

</div>
    
</div>


<?php
get_footer();

?>