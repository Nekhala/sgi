<?php get_header(); ?>

  <!-- Masthead -->
    
  <?php $sportLoop = new WP_Query(array("post_type" => "sport", "posts_per_page" => -1)) ?>
  <?php while($sportLoop->have_posts()): $sportLoop->the_post() ?>

    <main id="<?php the_field("id") ?>" class="masthead jarallax" style="background-image:url('<?php the_field("image") ?>" role="main">
      <div class="opener">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-5">
              <h1>SGI <span class="mark"><span><?php the_title() ?></span></span></h1>
              <p class="lead mt-4"></p>
              <a href="<?php the_field("youtube_url") ?>" class="popup-youtube icon-video-play"></a>
          </div>
          </div>
        </div>
      </div>
    </main>

  <?php endwhile ?>

  <!-- Send Request -->
  <section  class="text-center section bg-light">
    <div class="container">
        <div class="row">
        <div class="col-md-8 col-lg-6 offset-md-2 offset-lg-3" data-aos="fade-up">
          <h2>Har du nogle spørgsmål?</h2>
          <p class="mb-4">Vi vil hjerteligst gerne hjælpe dig med at finde den helt rette sportsgren til dig.</p>
          <button type="button" class="btn" data-toggle="modal" data-target="#send-request">Skriv til os</button>
        </div>
        </div>
      </div>
  </section>
<!-- DEN HER -->
<?php get_footer(); ?>