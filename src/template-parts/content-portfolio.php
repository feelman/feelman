<div class="portfolio__item">
  <div class="portfolio__item-pages">
    <div class="portfolio__item-page">
      <a href="<?php the_permalink(); ?>">
        <?php if(has_post_thumbnail()) { ?>
        <div class="portfolio__item-image">
          <?php echo get_the_post_thumbnail(); ?>
        </div>
        <?php }; ?>
        <div class="portfolio__item-description"><?php the_title(); ?></div>
      </a>
    </div>
  </div>
</div>
