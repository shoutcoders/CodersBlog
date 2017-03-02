<footer>
    
    
    <div class="footer-Innerlinks">
         <div class="copyright">
            <p>Copyright - &copy; <?php echo date('Y');?> </p>
        </div>    
        
        <div class="importantlinks">
           <?php
                $args=array(
                    'theme_location' => 'footer'
                ); 
            ?>
            
            <?php
                wp_nav_menu( $args ); 
            ?>
    </div>
    
   
    </div>    
    
</footer>
<?php wp_footer(); ?>
    </body>
</html>