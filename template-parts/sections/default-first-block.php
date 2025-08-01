<?php $seo_fields = get_seo_fields();
if(is_category()){
  $category = get_queried_object();
  $term = 'category_' . $category->term_id;
} else {
  $term = get_the_ID();
}?>
<section class="front-block _image-wrapper" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/front-bg-2.webp);">
  <div class="overlay"></div>
  <div class="container">
    <div class="front-block__inner relative">
      <?php dimox_breadcrumbs(); ?>
      <div class="front-block__top">
        <h1 class="front-block__title _title-1">
          <?php echo esc_html($seo_fields['h1']); ?>
        </h1>
        <?php if(get_field('preview_logo', $term) == 1) :?>
        <?php include(get_template_directory() . '/assets/images/icons/logo.svg'); ?>
        <?php endif; ?>
      </div>
      <div class="front-block__btns">
        <a class="front-block__btn _main-btn" href="#promocode" data-fancybox>
          Получить промокод на скидку
        </a>
        <a class="front-block__link" href="https://api.whatsapp.com/send/?phone=79267451861&text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5!+%D0%A5%D0%BE%D1%87%D1%83+%D0%BF%D0%BE%D0%BB%D1%83%D1%87%D0%B8%D1%82%D1%8C+%D0%BA%D0%BE%D0%BD%D1%81%D1%83%D0%BB%D1%8C%D1%82%D0%B0%D1%86%D0%B8%D1%8E+%D0%BF%D0%BE+%D0%B4%D0%B5%D1%82%D0%B5%D0%B9%D0%BB%D0%B8%D0%BD%D0%B3%D1%83&type=phone_number&app_absent=0" target="_blank">
          <?php include(get_template_directory() . '/assets/images/icons/whatsapp.svg'); ?>
          <span>Или получите консультацию</span>
        </a>
      </div>
    </div>
  </div>
</section>
