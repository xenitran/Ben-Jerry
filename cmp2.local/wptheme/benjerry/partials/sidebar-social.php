<?php
if(have_posts()) 
{
    while(have_posts())
    {
      
        //Print the title and the content of the current post         
?>
<?php get_nav_menu_locations() ?>
 

 <div class="section ">
    <?php  the_post(); ?>

         <div class="row content">

            <div class="col s12 m8">
                 <h3> <?php the_title(); ?></h3>
                    <p class="light"><?php  the_content(); ?></p>
             </div>

            <div class="col s12 m3 right">
                 <?php dynamic_sidebar( 'social-sidebar' ); ?>
                 
            </div>
        </div>
    </div>
</div>
<?php
    }
}
else
{
    echo 'No content available';
    
}
?>