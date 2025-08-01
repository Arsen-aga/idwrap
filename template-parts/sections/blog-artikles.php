<section class="blog-artikles">
  <div class="container">
    <div class="blog-artikles__items" id="blog-posts-container">
      <?php
      $category_id = get_queried_object_id();
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

      $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 6,
        'paged'          => $paged,
        'cat'           => $category_id
      );

      $query = new WP_Query($args);

      if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
          get_template_part('template-parts/card-blog');
        endwhile;
      endif;
      ?>
    </div>

    <div class="pagination" data-max-pages="<?php echo $query->max_num_pages; ?>">
      <!-- <?php
      echo paginate_links(array(
        'base'    => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
        'total'   => $query->max_num_pages,
        'current' => max(1, get_query_var('paged')),
        'prev_text' => __('« Назад'),
        'next_text' => __('Вперед »')
      ));
      ?> -->
    </div>

    <?php if ($query->max_num_pages > 1) : ?>
      <a class="more-btn _main-btn" href="#" id="load-more-posts"
         data-category="<?php echo $category_id; ?>">
        Открыть больше новостей
        <?php include(get_template_directory() . '/assets/images/icons/btn-check.svg'); ?>
      </a>
    <?php endif; ?>
  </div>
</section>
