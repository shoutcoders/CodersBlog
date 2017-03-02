<!Doctype HTML>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head>
    
<body <?php body_class(); ?>>
 
<!--  Header Section Of Blog Starts  -->
<header>
<!-- Title of Blog  -->
    <div class="inner-header">
        <div class="title">
        <!-- Showing Home URL  -->
            <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
            <h6><?php bloginfo('description'); ?></h6>
        </div>
        <div class="navbar"><i class="fa fa-bars" aria-hidden="true"></i>      </div>
        
        
        <div class="navigation">
            <?php
                $args=array(
                    'theme_location' => 'primary'
                ); 
            ?>
            
            <?php
                wp_nav_menu( $args ); 
            ?>
        </div>
    </div>
    <div class="clearfix"></div>
</header>
