<?php
$list = get_field('skin-listimg_list');
$img = get_field('skin-listimg_img');
if($list || $img) : ?>
<section class="skin-listimg img-full">
  <?php if(have_rows('skin-listimg_list')) : ?>
  <div class="skin-listimg__content">
    <div class="container">
      <div class="skin-listimg__inner">
        <?php if(get_field('skin-listimg_title')) :?>
        <h2 class="skin-listimg__title _title">
          <?php the_field('skin-listimg_title'); ?>
        </h2>
        <?php endif; ?>
        <ul class="skin-listimg__list list-point">
          <?php while(have_rows('skin-listimg_list')) : the_row(); ?>
          <li class="skin-listimg__list-point">
            <?php the_sub_field('list_point'); ?>
          </li>
          <?php endwhile; ?>
        </ul>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <?php if($img):?>
  <div class="skin-listimg__img-wrapper">
    <img class="skin-listimg__img _img" src="<?php echo $img['url'];?>" alt="">
  </div>
  <?php endif; ?>
</section>
<?php endif; ?>
