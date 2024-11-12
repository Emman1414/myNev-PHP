<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
   
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
    />
    <?php wp_head()?>
  </head>
  <body>

<?php 

// BACKGROUND IMAGE
if(get_field('banner_background_img')): ?>



    
<section class="banner" style="background:url('<?php the_field('banner_background_img')?>');
 background-attachment: fixed; background-repeat: no-repeat; background-size:cover; background-position:center">

<?php endif; ?>

<?php get_header() ?>

      <div class="container">
        <div class="banner__content">
          <h1><?php the_field('banner_title')?></h1>
          <h2 class="mb--8 text--primary"><?php the_field('banner_intro')?></h2>
          <p class="mb--8">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto
            consequatur ipsam, eveniet, repellat aliquam dolores aperiam enim
            voluptas at, totam vel ab doloribus repudiandae fugit dolorem
            numquam quas! Natus, consequatur.
          </p>
          <a class="btn bg--primary" href="<?php the_field('banner_btn_link')?>"><?php the_field('banner_btn_text')?></a>
        </div>

        <div class="banner__services py--3">
          <div class="banner__wrapper">

          <?php 

          $args = array(
            'post_type' => 'service ',
            'posts_per_page' => -1,
          );
          $newQuery = new WP_Query($args);

          ?>

          <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>

          <?php if(get_field('isactive')): ?>

            <div class="banner__services__items d--flex active">

            <?php else : ?>

            <div class="banner__services__items d--flex">

            <?php endif ?>

              <!-- <img src="./img/car.png" alt="" /> -->

               <?php 
               if(has_post_thumbnail()) :
                  the_post_thumbnail();
               endif; 
               ?>

              <div class="services__desc">
                <h3 class="text--primary"><?php the_title() ?></h3>
                <p>
                  <?php the_excerpt() ?>
                </p>
                <a href="<?php the_field('service_btn_link')?>" class="btn--transparent"><?php the_field('service_btn_text')?></a>
              </div>
            </div>

            <?php
                endwhile;
                else :
                  echo "No Available Content Yet";
                endif;
                wp_reset_postdata();
            ?>

          </div>
        </div>
      </div>
      <div class="sectionGradient--bottom"></div>
    </section>


<!-- TOURS -->

<section class="tours py--10 text--center">
      <div class="container">
        <h2>POPULAR TOURS</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate?
        </p>
        <div class="tours__wrapper py--5">

        <?php 

          $args = array(
            'post_type' => 'tour',
            'posts_per_page' => -1,
          );
          $newQuery = new WP_Query($args);

          ?>
          <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>
          
          <div class="tours__card">

               <?php
               if(has_post_thumbnail()) :
                 the_post_thumbnail();
               endif;
               ?>
          
           
            <div class="tours__card__desc">
              <h4><?php the_title() ?></h4>
              <p><?php the_excerpt() ?></p>
            </div>
          </div>

          
            <?php
                endwhile;
                else :
                  echo "No Available Content Yet";
                endif;
                wp_reset_postdata();
            ?>
          

        </div>
      </div>
    </section>

 <?php
// BACKGROUND IMAGE
if(get_field('discover_background_image')): ?>


     <section class="watchVideos" style="background:url('<?php the_field('discover_background_image')?>');
     background-attachment: fixed; background-repeat: no-repeat; background-size:cover; background-position:center">

<?php endif; ?>

      <div class="sectionGradient--top">
      <div class="container">
        <div class="watchVideos__wrapper">
          <div class="watchVideos__content">
            <h2><?php the_field('discover_title')?></h2>
            <ul class="d--flex align--center">
              <li><img src="<?php the_field('discover_play_image')?>" alt=""></li>
              <li><h5>Watch Videos</h5></li>
            </ul>
            <p>
              <?php the_field('discover_text')?>
            </p>
            <a href="<?php the_field('discover_btn_link')?>" class="text--primary"><?php the_field('discover_btn_text')?></a>
          </div>

          <div class="videos d--flex">
            <iframe
              width="300"
              height="150"
              src="<?php the_field('discover_video_one')?>" 
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen
            ></iframe>
            <iframe
              width="300"
              height="150"
              src="<?php the_field('discover_video_two')?>"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen
            ></iframe>
          </div>

          
        </div>
      </div>
      <div class="sectionGradient--bottom"></div>
    </section>

    <?php get_footer() ?>
    
</body>