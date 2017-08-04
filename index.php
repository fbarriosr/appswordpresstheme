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

<div class="row ">  

<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit >

  <div class="orbit-wrapper">
    <div class="orbit-controls">
      <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
      <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
    </div>
    <ul class="orbit-container">
      <?php rewind_posts();?>    <!-- reiniciar variables del loop php -->
      <?php query_posts('post_per_pages=10') ?>
      <?php query_posts('order=Desc&cat=8') ?> <!-- categoria orbit -->
      <?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>
        <li class="is-active orbit-slide">
          <figure class="orbit-figure">
            <img class="orbit-image" src= <?php the_post_thumbnail('full') ?> >             
            </img>
    
          </figure>
        </li>
      <?php endwhile; ?>

      <?php else : ?>
        <?php get_template_part( 'template-parts/content', 'none' ); ?>
      <?php endif; // End have_posts() check. ?>

    </ul>
  </div>
  <nav class="orbit-bullets">
    <?php rewind_posts();?>    <!-- reiniciar variables del loop php -->
    <?php query_posts('post_per_pages=10') ?>
    <?php query_posts('order=Desc&cat=8') ?> <!-- categoria orbit -->
    <?php 
    $i = 0; 
    if (have_posts()) : while ( have_posts() ) : the_post(); ?>
     
    <?php if (  $i ==  0 ) { ?>
        <button class="is-active" data-slide=<?php $i ?> ><span class="show-for-sr"> <?php the_title() ?> </span></button>

       <?php } else {  ?>
         <button data-slide=<?php $i ?> ><span class="show-for-sr"> <?php the_title() ?> </span></button>
        <?php } ?>
    <?php
    $i = $i +1;  
    endwhile; ?>
    <?php else : ?>
          <?php get_template_part( 'template-parts/content', 'none' ); ?>
    <?php endif; // End have_posts() check. ?>
    <!-- <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
    <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
    <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button> -->
  </nav>
</div>
</div>

<!-- </span> que tu piel no acumule <br> más veranos Previene protege y repara la radiación solar en tu piel.</span>
 -->

      <?php rewind_posts();?>    <!-- reiniciar variables del loop php -->
      <?php query_posts('post_per_pages=10') ?>
      <?php query_posts('order=Desc&cat=7') ?> <!-- categoria card2 -->
      <?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>
<div class="row ">       
        <div class="columns">
          <div class="medium-6 columns card2">
             <picture>
              <?php the_post_thumbnail('full') ?>
             </picture>
          </div>
          <div class="medium-6 columns  card2-section ">
            <h5><?php the_title() ?></h5>
            <p><?php the_excerpt(); ?></p>
            <button class="hollow button" href="#">Ver más</button>
          </div>
        </div>
</div>
      <?php endwhile; ?>

      <?php else : ?>
          <?php get_template_part( 'template-parts/content', 'none' ); ?>
      <?php endif; // End have_posts() check. ?>




<!-- <div class="row medium-up-2 ">
  <div class="medium-6 columns">
    <div class="card columns">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/foto blog1.png" >
      <div class="card-section">
      	<h5>Titulo</h5>
        <p>This card makes use of the card-divider element.</p>
        <button class="hollow button" href="#">Ver más</button>
      </div>
    </div>
  </div>
  <div class="medium-6 columns">
    <div class="card columns">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/foto blog 2.png" >
      <div class="card-section">
        <h5>Titulo</h5>
        <p>This card makes use of the card-divider element.</p>
        <button class="hollow button" href="#">Ver más</button>
      </div>
    </div>
  </div>
</div> -->


<div class="row medium-up-2 ">
      <?php rewind_posts();?>    <!-- reiniciar variables del loop php -->
      <?php query_posts('post_per_pages=10') ?>
      <?php query_posts('order=Desc&cat=6') ?> <!-- categoria card1 -->
      <?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>
        <div class="medium-6 columns">
          <div class="card columns">
            <picture>
              <?php the_post_thumbnail('full') ?>
            </picture>
              
            <div class="card-section">
                <h5><?php the_title() ?></h5>
                <p><?php the_excerpt(); ?></p>
                <!-- <?php the_category() ?> -->
                <button class="hollow button" href="#">Ver más</button>
            </div>
          </div>
        </div>
      <?php endwhile; ?>

      <?php else : ?>
          <?php get_template_part( 'template-parts/content', 'none' ); ?>
      <?php endif; // End have_posts() check. ?>
      
</div>

 

</div>
  
<?php get_footer();
