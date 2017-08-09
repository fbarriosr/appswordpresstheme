<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
get_header(); ?>


<section id="javiera" class="callout large row align-middle">
    <div class="row text-center">
        <div class="small-12 columns show-for-small-only ">
          <h2>Para Ipad iOS 10 y 9.</h2>
        </div>
    </div>

    <div  class="row align-middle ">
        <div class="small-6 columns align-center">

            <?php rewind_posts();?>    <!-- reiniciar variables del loop php -->
            <?php query_posts('post_per_pages=3 ') ?>
            <?php query_posts('order=Desc&cat=3') ?> <!-- categoria card2 -->
            <?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>

            <!-- <img  src= <?php the_post_thumbnail('full') ?> >  -->            
          
             <?php the_post_thumbnail('full') ?>
             

             <?php endwhile; ?>
             <!-- <img data-interchange="[<?php get_post_gallery_images(11) ?>, 
                                    <?php get_post_gallery_images(10) ?>, 
                                      <?php get_post_gallery_images(12) ?>]" alt="device"  id="img">   -->
            <?php else : ?>
            <?php get_template_part( 'template-parts/content', 'none' ); ?>
            <?php endif; // End have_posts() check. ?>
        </div>
        <div class="small-6 columns">
          <?php rewind_posts();?>    <!-- reiniciar variables del loop php -->
          <?php query_posts('post_per_pages=1 ') ?>
          <?php query_posts('order=Desc&cat=5') ?> <!-- categoria card2 -->
          <?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>
          <div class="row hide-for-small-only">
              <h2><?php the_title()  ?></h2>
          </div>
          <div class="row">
            <div class="callout text-justify">
               <?php the_excerpt() ?>
            </div>
          </div>
          <?php endwhile; ?>
          <?php else : ?>
          <?php get_template_part( 'template-parts/content', 'none' ); ?>
          <?php endif; // End have_posts() check. ?>
          
          <div class="tabs-content" data-tabs-content="lineup-tabs">
                <div class="row text-center">
                     <?php rewind_posts();?>    <!-- reiniciar variables del loop php -->
                     <?php query_posts('post_per_pages=8 ') ?>
                     <?php query_posts('order=Desc&cat=4') ?> <!-- categoria card2 -->
                     <?php remove_filter ('the_content', 'wpautop'); ?>
                     <?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>
                     <div class="small-6 columns appsRow">
                        <figure  class="btn" onclick="location.href='itms-services://?action=download-manifest&url=<?php the_content() ?>'">
                           <?php the_post_thumbnail('full') ?>

                        </figure>
                     </div>
                    <?php endwhile; ?>
                    <?php else : ?>
                    <?php get_template_part( 'template-parts/content', 'none' ); ?>
                    <?php endif; // End have_posts() check. ?>
                     
                </div>

          </div>
        </div>
    </div>
   
</section>

  
<?php get_footer();