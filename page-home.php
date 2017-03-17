<?php
get_header();
?>


<?php
if(have_posts()):
    while(have_posts()):the_post();?> 

    <div class="site-content">
    
        <?php
            get_template_part(the_content(),'home');
        ?>

        <?php
        endwhile;  
        else:
        echo "No Content Found";
        endif;
        ?>
    </div>

<?php
get_footer();

?>