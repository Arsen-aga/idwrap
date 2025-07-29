<?php

/**
 * Template Name: Антигравийная плёнка (sourse)
 * http://dontforget.pro
 * @package WordPress
 * @subpackage clean
 */


get_header(); ?>
<!-- Сингловая пленок -->
<main class="main" id="skin-single">
  <section class="sec-0 relative">
    <div class="sec-0__container container">
      <div class="sec-0__layout">
        <div class="sec-0__content">
          <img class="sec-0__content-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-0-bg.webp" alt="">
          <div class="breadcrumbs">
            <ul class="breadcrumbs__list">
              <li class="breadcrumbs__point">
                <a class="breadcrumbs__link" href="#">Главная</a>
              </li>
              <li class="breadcrumbs__point">
                <a class="breadcrumbs__link" href="#">Услуги</a>
              </li>
              <li class="breadcrumbs__point">
                <a class="breadcrumbs__link active" href="#">Оклейка автомобилей антигравийной пленкой</a>
              </li>
            </ul>
          </div>
          <h1 class="sec-0__title _main-title">
            Оклейка<br>
            автомобилей<br>
            антигравийной<br>
            пленкой
          </h1>
          <p class="sec-0__guarant">
            с гарантией на весь срок <br>
            владения автомобилем
          </p>
          <ul class="front-block__list">
            <li class="front-block__point">
              <?php include(get_template_directory() . '/assets/images/icons/front-block-1.svg'); ?>
              <p class="front-block__point-text">
                Полная или частичная оклейка <strong>в срок
                  от&nbsp;1&nbsp;дня</strong>
              </p>
            </li>
            <li class="front-block__point">
              <?php include(get_template_directory() . '/assets/images/icons/front-block-2.svg'); ?>
              <p class="front-block__point-text">
                <strong>Более 10 видов пленки</strong> от мировых производителей
              </p>
            </li>
            <li class="front-block__point">
              <?php include(get_template_directory() . '/assets/images/icons/front-block-3.svg'); ?>
              <p class="front-block__point-text">
                Оплата только <strong>после вашей проверки</strong> результата оклейки
              </p>
            </li>


          </ul>
          <div class="front-block__btns">
            <a class="front-block__btn _main-btn" href="#quiz" data-fancybox>
              Рассчитать стоимость <br>
              оклейки авто за 4 шага
            </a>
            <a class="front-block__link" target="_blank" href="https://api.whatsapp.com/send/?phone=79267451861&text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5!+%D0%A5%D0%BE%D1%87%D1%83+%D0%BF%D0%BE%D0%BB%D1%83%D1%87%D0%B8%D1%82%D1%8C+%D0%BA%D0%BE%D0%BD%D1%81%D1%83%D0%BB%D1%8C%D1%82%D0%B0%D1%86%D0%B8%D1%8E+%D0%BF%D0%BE+%D0%B4%D0%B5%D1%82%D0%B5%D0%B9%D0%BB%D0%B8%D0%BD%D0%B3%D1%83&type=phone_number&app_absent=0">
              <?php include(get_template_directory() . '/assets/images/icons/whatsapp.svg'); ?>
              Или получите консультацию
            </a>
          </div>
        </div>
        <a data-fancybox href="<?php echo get_template_directory_uri(); ?>/assets/video/main-page/long.mp4" class="sec-0__image _image-abs">
          <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-00main/okleika-plenkoi.webp"
            alt=" Изображение - Оклейка автомобилей полиуретановой пленкой">
          <video class="sec-0__image-video" style="position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; pointer-events: none; z-index: 3;" playsinline="" autoplay="" muted="" loop="">

          </video>
        </a>
      </div>
    </div>
  </section>
  <section class="sec-1">
    <div class="sec-1__container container">
      <h2 class="sec-1__title _title">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/logo.svg" alt="logo">
        — это оклейка любой сложности
      </h2>
      <p class="sec-1__subtitle">
        Посмотрите несколько выполненных работ
      </p>
      <div class="sec-1__layout">
        <!-- top -->
        <div class="sec-1__cars-layout">
          <div class="sec-1__cars sec-13__scroll2">
            <div data-car="1" class="sec-1__cars-slide _active">
              <div class="sec-1__cars-image">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/slide1.webp"
                    alt=" Изображение - изображение автомобиля BMW M3 на слайдерее">

                </div>
              </div>
              <p class="sec-1__cars-name">BMW M3</p>
            </div>
            <div data-car="2" class="sec-1__cars-slide">
              <div class="sec-1__cars-image">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/slide2.webp"
                    alt=" Изображение - изображение автомобиля Zeekr 001 на слайдерее">

                </div>
              </div>
              <p class="sec-1__cars-name">Zeekr 001</p>
            </div>
            <div data-car="3" class="sec-1__cars-slide">
              <div class="sec-1__cars-image">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/slide3.webp"
                    alt=" Изображение - изображение автомобиля Geely Monjaro на слайдерее">

                </div>
              </div>
              <p class="sec-1__cars-name">Geely Monjaro</p>
            </div>
            <div data-car="4" class="sec-1__cars-slide">
              <div class="sec-1__cars-image">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/slide4.webp"
                    alt=" Изображение - изображение автомобиля Mercedes G63 на слайдерее">

                </div>
              </div>
              <p class="sec-1__cars-name">Mercedes G63</p>
            </div>
            <div data-car="5" class="sec-1__cars-slide">
              <div class="sec-1__cars-image">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/slide5.webp"
                    alt=" Изображение - изображение автомобиля Lexus LX600 на слайдерее">

                </div>
              </div>
              <p class="sec-1__cars-name">Lexus LX600</p>
            </div>
            <div data-car="6" class="sec-1__cars-slide">
              <div class="sec-1__cars-image">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/slide6.webp"
                    alt=" Изображение - изображение автомобиля Li 9 на слайдерее">

                </div>
              </div>
              <p class="sec-1__cars-name">Li 9</p>
            </div>
            <div data-car="7" class="sec-1__cars-slide">
              <div class="sec-1__cars-image">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/slide7.webp"
                    alt=" Изображение - изображение автомобиля Porshe Macan на слайдерее">

                </div>
              </div>
              <p class="sec-1__cars-name">Porshe Macan</p>
            </div>
            <div data-car="8" class="sec-1__cars-slide">
              <div class="sec-1__cars-image">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/slide8.webp"
                    alt=" Изображение - изображение автомобиля Subaru Levorg на слайдерее">

                </div>
              </div>
              <p class="sec-1__cars-name">Subaru Levorg</p>
            </div>
            <div data-car="9" class="sec-1__cars-slide">
              <div class="sec-1__cars-image">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/slide9.webp"
                    alt=" Изображение - изображение автомобиля Mersedes глянец на слайдерее">

                </div>
              </div>
              <p class="sec-1__cars-name">Mersedes</p>
            </div>
            <div data-car="10" class="sec-1__cars-slide">
              <div class="sec-1__cars-image">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/slide10.webp"
                    alt=" Изображение - изображение автомобиля BMW черный полик на слайдерее">

                </div>
              </div>
              <p class="sec-1__cars-name">BMW</p>
            </div>
            <div data-car="11" class="sec-1__cars-slide">
              <div class="sec-1__cars-image">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/slide11.webp"
                    alt=" Изображение - изображение автомобиля Dodge Ram на слайдерее">

                </div>
              </div>
              <p class="sec-1__cars-name">Dodge Ram</p>
            </div>
            <div data-car="12" class="sec-1__cars-slide">
              <div class="sec-1__cars-image">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/slide12.webp"
                    alt=" Изображение - изображение автомобиля BMW X3 на слайдерее">

                </div>
              </div>
              <p class="sec-1__cars-name">BMW X3</p>
            </div>
          </div>
          <div class="sec-13__scroll-layout">
            <div class="sec-13__scroll-container">
              <div class="sec-13__scrollbar">
                <div class="sec-13__scrollbar-thumb sec-13__scrollbar-thumb2" style="left: 0%;"></div>
              </div>
            </div>
          </div>
        </div>
        <div data-box="1" class="sec-1__block _show">
          <div class="sec-1__block-view">
            <div class="sec-1__block-gallery swiper-gallery swiper-gallery1 swiper">
              <form class="sec-1__block-top" action="#" data-form-id="bmw01">
                <p class="sec-1__block-title">
                  Нестандартная оклейка <br>
                  BMW M3 полиуретаном
                </p>
                <div class="sec-1__likebox">
                  <p class="sec-1__likebox-title">
                    Оцените проект
                  </p>
                  <div class="sec-1__likebox-box">
                    <div class="sec-1__likebox-button">
                      <label class="_like-label">
                        <input name="rating" value="нравится" data-rating="like" type="radio">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_325_213)">
                            <path d="M5.38867 16.5V8.25H5.23867C3.97855 8.25 3.34849 8.25 2.86719 8.49523C2.44383 8.71095 2.09962 9.05516 1.88391 9.47852C1.63867 9.95982 1.63867 10.5899 1.63867 11.85V12.9C1.63867 14.1601 1.63867 14.7902 1.88391 15.2715C2.09962 15.6948 2.44383 16.039 2.86719 16.2548C3.34849 16.5 3.97855 16.5 5.23867 16.5H5.38867ZM5.38867 16.5H9.42054C11.1291 16.5 11.9834 16.5 12.7074 16.2456C13.6494 15.9147 14.4546 15.2799 14.9962 14.4412C15.4125 13.7965 15.6119 12.9658 16.0106 11.3044C16.3167 10.029 16.4698 9.39122 16.3548 8.88069C16.2053 8.2168 15.7634 7.65625 15.1527 7.35594C14.6831 7.125 14.026 7.125 12.7117 7.125C12.178 7.125 11.9112 7.125 11.7017 7.03665C11.4312 6.92264 11.216 6.70746 11.102 6.43701C11.0137 6.22743 11.0137 5.96114 11.0137 5.42855V2.72032C11.0137 2.63181 11.0137 2.58755 11.0112 2.55019C10.9737 1.98782 10.5259 1.53997 9.96348 1.50249C9.92612 1.5 9.88186 1.5 9.79335 1.5C9.71582 1.5 9.67706 1.5 9.64124 1.50171C9.11365 1.52696 8.63821 1.82782 8.38955 2.29382C8.37266 2.32546 8.35607 2.36049 8.32288 2.43056L5.38867 8.625V16.5Z" stroke="#46B449" fill="#00000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                        </svg>
                        <span style="display: block;" class="sec-1__likebox-rating">0 оценок</span>
                      </label>
                    </div>
                    <div class="sec-1__likebox-button">
                      <label class="_dislike-label">
                        <input name="rating" value="не нравится" data-rating="dislike" type="radio">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_325_215)">
                            <path d="M5.38867 1.5L5.38867 9.75H5.23867C3.97855 9.75 3.34849 9.75 2.86719 9.50476C2.44383 9.28905 2.09962 8.94484 1.88391 8.52148C1.63867 8.04018 1.63867 7.41012 1.63867 6.15L1.63867 5.1C1.63867 3.83988 1.63867 3.20982 1.88391 2.72852C2.09962 2.30516 2.44383 1.96095 2.86719 1.74524C3.3485 1.5 3.97855 1.5 5.23867 1.5L5.38867 1.5ZM5.38867 1.5L9.42055 1.5C11.1291 1.5 11.9834 1.5 12.7074 1.75439C13.6494 2.08531 14.4546 2.7201 14.9962 3.55881C15.4125 4.20354 15.6119 5.03422 16.0106 6.69559C16.3167 7.97105 16.4698 8.60878 16.3548 9.11931C16.2053 9.7832 15.7634 10.3438 15.1527 10.6441C14.6831 10.875 14.026 10.875 12.7117 10.875C12.178 10.875 11.9112 10.875 11.7017 10.9633C11.4312 11.0774 11.216 11.2925 11.102 11.563C11.0137 11.7726 11.0137 12.0389 11.0137 12.5715V15.2797C11.0137 15.3682 11.0137 15.4124 11.0112 15.4498C10.9737 16.0122 10.5259 16.46 9.96348 16.4975C9.92612 16.5 9.88186 16.5 9.79335 16.5C9.71582 16.5 9.67706 16.5 9.64124 16.4983C9.11364 16.473 8.63821 16.1722 8.38955 15.7062C8.37266 15.6745 8.35607 15.6395 8.32288 15.5694L5.38867 9.375L5.38867 1.5Z" stroke="#E42027" fill="#00000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                        </svg>
                        <span style="display: block;" class="sec-1__likebox-rating">0 оценок</span>
                      </label>
                    </div>
                  </div>
                </div>
                <a data-fancybox href="<?php echo get_template_directory_uri(); ?>/assets/video/sec-01/01.mp4" style="display: none;" class="sec-1__block-video _image-abs video-video _mobile">
                  <video
                    style="position: absolute; width: 100%; height: 100%; object-fit: cover; object-position: center; pointer-events: none;"
                    src="<?php echo get_template_directory_uri(); ?>/assets/video/sec-01/01.mp4" playsinline="" autoplay="" muted="" loop=""></video>
                  <div class="play">
                    <div class="play__inner">
                      <?php include(get_template_directory() . '/assets/images/icons/play.svg'); ?>
                    </div>
                  </div>
                </a>
              </form>
              <div class="swiper-wrapper">
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/01/slide01.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/01/IMG_8050.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/01/IMG_8052.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/01/IMG_8057_jpg.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/01/IMG_8058_jpg.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/01/IMG_7872_jpg.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/01/IMG_8048_jpg.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
              </div>
              <div class="sec-1__block-buttons">
                <div class="sec-1__block-button _orange-btn" id="prevCar1"></div>
                <div class="sec-1__block-button _orange-btn _next-car" id="nextCar1"></div>
              </div>
            </div>
            <a data-fancybox href="<?php echo get_template_directory_uri(); ?>/assets/video/sec-01/01.mp4" class="sec-1__block-video _image-abs video-video _big-video">
              <video
                style="position: absolute; width: 100%; height: 100%; object-fit: cover; object-position: center; pointer-events: none;"
                src="<?php echo get_template_directory_uri(); ?>/assets/video/sec-01/01.mp4" playsinline="" autoplay="" muted="" loop=""></video>
              <div class="play">
                <div class="play__inner">
                  <?php include(get_template_directory() . '/assets/images/icons/play.svg'); ?>
                </div>
              </div>
            </a>
          </div>
          <div thumbsSlider="" class="sec-1__swiper2 swiper-cars swiper-cars1 swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/01/slide01.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/01/IMG_8050.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/01/IMG_8052.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/01/IMG_8057_jpg.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/01/IMG_8058_jpg.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/01/IMG_7872_jpg.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/01/IMG_8048_jpg.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
            </div>
          </div>
        </div>
        <div data-box="2" class="sec-1__block">
          <div class="sec-1__block-view">
            <div class="sec-1__block-gallery swiper-gallery swiper-gallery2 swiper">
              <form class="sec-1__block-top" action="#" data-form-id="zeekr02">
                <p class="sec-1__block-title">
                  Zeekr 001 матовый полиуретан
                </p>
                <div class="sec-1__likebox">
                  <p class="sec-1__likebox-title">
                    Оцените проект
                  </p>
                  <div class="sec-1__likebox-box">
                    <div class="sec-1__likebox-button">
                      <label class="_like-label">
                        <input name="rating" value="нравится" data-rating="like" type="radio">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_325_213)">
                            <path d="M5.38867 16.5V8.25H5.23867C3.97855 8.25 3.34849 8.25 2.86719 8.49523C2.44383 8.71095 2.09962 9.05516 1.88391 9.47852C1.63867 9.95982 1.63867 10.5899 1.63867 11.85V12.9C1.63867 14.1601 1.63867 14.7902 1.88391 15.2715C2.09962 15.6948 2.44383 16.039 2.86719 16.2548C3.34849 16.5 3.97855 16.5 5.23867 16.5H5.38867ZM5.38867 16.5H9.42054C11.1291 16.5 11.9834 16.5 12.7074 16.2456C13.6494 15.9147 14.4546 15.2799 14.9962 14.4412C15.4125 13.7965 15.6119 12.9658 16.0106 11.3044C16.3167 10.029 16.4698 9.39122 16.3548 8.88069C16.2053 8.2168 15.7634 7.65625 15.1527 7.35594C14.6831 7.125 14.026 7.125 12.7117 7.125C12.178 7.125 11.9112 7.125 11.7017 7.03665C11.4312 6.92264 11.216 6.70746 11.102 6.43701C11.0137 6.22743 11.0137 5.96114 11.0137 5.42855V2.72032C11.0137 2.63181 11.0137 2.58755 11.0112 2.55019C10.9737 1.98782 10.5259 1.53997 9.96348 1.50249C9.92612 1.5 9.88186 1.5 9.79335 1.5C9.71582 1.5 9.67706 1.5 9.64124 1.50171C9.11365 1.52696 8.63821 1.82782 8.38955 2.29382C8.37266 2.32546 8.35607 2.36049 8.32288 2.43056L5.38867 8.625V16.5Z" stroke="#46B449" fill="#00000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                        </svg>
                        <span style="display: block;" class="sec-1__likebox-rating">0 оценок</span>
                      </label>
                    </div>
                    <div class="sec-1__likebox-button">
                      <label class="_dislike-label">
                        <input name="rating" value="не нравится" data-rating="dislike" type="radio">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_325_215)">
                            <path d="M5.38867 1.5L5.38867 9.75H5.23867C3.97855 9.75 3.34849 9.75 2.86719 9.50476C2.44383 9.28905 2.09962 8.94484 1.88391 8.52148C1.63867 8.04018 1.63867 7.41012 1.63867 6.15L1.63867 5.1C1.63867 3.83988 1.63867 3.20982 1.88391 2.72852C2.09962 2.30516 2.44383 1.96095 2.86719 1.74524C3.3485 1.5 3.97855 1.5 5.23867 1.5L5.38867 1.5ZM5.38867 1.5L9.42055 1.5C11.1291 1.5 11.9834 1.5 12.7074 1.75439C13.6494 2.08531 14.4546 2.7201 14.9962 3.55881C15.4125 4.20354 15.6119 5.03422 16.0106 6.69559C16.3167 7.97105 16.4698 8.60878 16.3548 9.11931C16.2053 9.7832 15.7634 10.3438 15.1527 10.6441C14.6831 10.875 14.026 10.875 12.7117 10.875C12.178 10.875 11.9112 10.875 11.7017 10.9633C11.4312 11.0774 11.216 11.2925 11.102 11.563C11.0137 11.7726 11.0137 12.0389 11.0137 12.5715V15.2797C11.0137 15.3682 11.0137 15.4124 11.0112 15.4498C10.9737 16.0122 10.5259 16.46 9.96348 16.4975C9.92612 16.5 9.88186 16.5 9.79335 16.5C9.71582 16.5 9.67706 16.5 9.64124 16.4983C9.11364 16.473 8.63821 16.1722 8.38955 15.7062C8.37266 15.6745 8.35607 15.6395 8.32288 15.5694L5.38867 9.375L5.38867 1.5Z" stroke="#E42027" fill="#00000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                        </svg>
                        <span style="display: block;" class="sec-1__likebox-rating">0 оценок</span>
                      </label>
                    </div>
                  </div>
                </div>
                <a data-fancybox href="<?php echo get_template_directory_uri(); ?>/assets/video/sec-01/02.mp4" style="display: none;" class="sec-1__block-video _image-abs video-video _mobile">
                  <video
                    style="position: absolute; width: 100%; height: 100%; object-fit: cover; object-position: center; pointer-events: none;"
                    src="<?php echo get_template_directory_uri(); ?>/assets/video/sec-01/02.mp4" playsinline="" autoplay="" muted="" loop=""></video>
                  <div class="play">
                    <div class="play__inner">
                      <?php include(get_template_directory() . '/assets/images/icons/play.svg'); ?>
                    </div>
                  </div>
                </a>
              </form>
              <div class="swiper-wrapper">
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/02/slide01.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/02/IMG_2105.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/02/IMG_2107.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/02/IMG_2113.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/02/IMG_2108.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/02/IMG_2106.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/02/IMG_2113.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
              </div>
              <div class="sec-1__block-buttons">
                <div class="sec-1__block-button _orange-btn" id="prevCar2"></div>
                <div class="sec-1__block-button _orange-btn _next-car" id="nextCar2"></div>
              </div>
            </div>
            <a data-fancybox href="<?php echo get_template_directory_uri(); ?>/assets/video/sec-01/02.mp4" class="sec-1__block-video _image-abs video-video _big-video">
              <video
                style="position: absolute; width: 100%; height: 100%; object-fit: cover; object-position: center; pointer-events: none;"
                src="<?php echo get_template_directory_uri(); ?>/assets/video/sec-01/02.mp4" playsinline="" autoplay="" muted="" loop=""></video>
              <div class="play">
                <div class="play__inner">
                  <?php include(get_template_directory() . '/assets/images/icons/play.svg'); ?>
                </div>
              </div>
            </a>
          </div>
          <div thumbsSlider="" class="sec-1__swiper2 swiper-cars swiper-cars2 swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/02/slide01.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/02/IMG_2105.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/02/IMG_2107.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/02/IMG_2113.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/02/IMG_2108.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/02/IMG_2106.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/02/IMG_2113.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
            </div>
          </div>
        </div>
        <div data-box="3" class="sec-1__block">
          <div class="sec-1__block-view">
            <div class="sec-1__block-gallery swiper-gallery swiper-gallery3 swiper">
              <form class="sec-1__block-top" action="#" data-form-id="geely03">
                <p class="sec-1__block-title">
                  Geely Monjaro матовый полиуретан
                </p>
                <div class="sec-1__likebox">
                  <p class="sec-1__likebox-title">
                    Оцените проект
                  </p>
                  <div class="sec-1__likebox-box">
                    <div class="sec-1__likebox-button">
                      <label class="_like-label">
                        <input name="rating" value="нравится" data-rating="like" type="radio">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_325_213)">
                            <path d="M5.38867 16.5V8.25H5.23867C3.97855 8.25 3.34849 8.25 2.86719 8.49523C2.44383 8.71095 2.09962 9.05516 1.88391 9.47852C1.63867 9.95982 1.63867 10.5899 1.63867 11.85V12.9C1.63867 14.1601 1.63867 14.7902 1.88391 15.2715C2.09962 15.6948 2.44383 16.039 2.86719 16.2548C3.34849 16.5 3.97855 16.5 5.23867 16.5H5.38867ZM5.38867 16.5H9.42054C11.1291 16.5 11.9834 16.5 12.7074 16.2456C13.6494 15.9147 14.4546 15.2799 14.9962 14.4412C15.4125 13.7965 15.6119 12.9658 16.0106 11.3044C16.3167 10.029 16.4698 9.39122 16.3548 8.88069C16.2053 8.2168 15.7634 7.65625 15.1527 7.35594C14.6831 7.125 14.026 7.125 12.7117 7.125C12.178 7.125 11.9112 7.125 11.7017 7.03665C11.4312 6.92264 11.216 6.70746 11.102 6.43701C11.0137 6.22743 11.0137 5.96114 11.0137 5.42855V2.72032C11.0137 2.63181 11.0137 2.58755 11.0112 2.55019C10.9737 1.98782 10.5259 1.53997 9.96348 1.50249C9.92612 1.5 9.88186 1.5 9.79335 1.5C9.71582 1.5 9.67706 1.5 9.64124 1.50171C9.11365 1.52696 8.63821 1.82782 8.38955 2.29382C8.37266 2.32546 8.35607 2.36049 8.32288 2.43056L5.38867 8.625V16.5Z" stroke="#46B449" fill="#00000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                        </svg>
                        <span style="display: block;" class="sec-1__likebox-rating">0 оценок</span>
                      </label>
                    </div>
                    <div class="sec-1__likebox-button">
                      <label class="_dislike-label">
                        <input name="rating" value="не нравится" data-rating="dislike" type="radio">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_325_215)">
                            <path d="M5.38867 1.5L5.38867 9.75H5.23867C3.97855 9.75 3.34849 9.75 2.86719 9.50476C2.44383 9.28905 2.09962 8.94484 1.88391 8.52148C1.63867 8.04018 1.63867 7.41012 1.63867 6.15L1.63867 5.1C1.63867 3.83988 1.63867 3.20982 1.88391 2.72852C2.09962 2.30516 2.44383 1.96095 2.86719 1.74524C3.3485 1.5 3.97855 1.5 5.23867 1.5L5.38867 1.5ZM5.38867 1.5L9.42055 1.5C11.1291 1.5 11.9834 1.5 12.7074 1.75439C13.6494 2.08531 14.4546 2.7201 14.9962 3.55881C15.4125 4.20354 15.6119 5.03422 16.0106 6.69559C16.3167 7.97105 16.4698 8.60878 16.3548 9.11931C16.2053 9.7832 15.7634 10.3438 15.1527 10.6441C14.6831 10.875 14.026 10.875 12.7117 10.875C12.178 10.875 11.9112 10.875 11.7017 10.9633C11.4312 11.0774 11.216 11.2925 11.102 11.563C11.0137 11.7726 11.0137 12.0389 11.0137 12.5715V15.2797C11.0137 15.3682 11.0137 15.4124 11.0112 15.4498C10.9737 16.0122 10.5259 16.46 9.96348 16.4975C9.92612 16.5 9.88186 16.5 9.79335 16.5C9.71582 16.5 9.67706 16.5 9.64124 16.4983C9.11364 16.473 8.63821 16.1722 8.38955 15.7062C8.37266 15.6745 8.35607 15.6395 8.32288 15.5694L5.38867 9.375L5.38867 1.5Z" stroke="#E42027" fill="#00000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                        </svg>
                        <span style="display: block;" class="sec-1__likebox-rating">0 оценок</span>
                      </label>
                    </div>
                  </div>
                </div>
                <a data-fancybox href="<?php echo get_template_directory_uri(); ?>/assets/video/sec-01/03.mp4" style="display: none;" class="sec-1__block-video _image-abs video-video _mobile">
                  <video
                    style="position: absolute; width: 100%; height: 100%; object-fit: cover; object-position: center; pointer-events: none;"
                    src="<?php echo get_template_directory_uri(); ?>/assets/video/sec-01/03.mp4" playsinline="" autoplay="" muted="" loop=""></video>
                  <div class="play">
                    <div class="play__inner">
                      <?php include(get_template_directory() . '/assets/images/icons/play.svg'); ?>
                    </div>
                  </div>
                </a>
              </form>
              <div class="swiper-wrapper">
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/03/slide01.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/03/IMG_4393_jpg.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/03/IMG_4392_jpg.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/03/IMG_4401_jpg.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/03/IMG_4404_jpg.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/03/IMG_4393_jpg.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/03/IMG_4398_jpg.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
              </div>
              <div class="sec-1__block-buttons">
                <div class="sec-1__block-button _orange-btn" id="prevCar3"></div>
                <div class="sec-1__block-button _orange-btn _next-car" id="nextCar3"></div>
              </div>
            </div>
            <a data-fancybox href="<?php echo get_template_directory_uri(); ?>/assets/video/sec-01/03.mp4" class="sec-1__block-video _image-abs video-video _big-video">
              <video
                style="position: absolute; width: 100%; height: 100%; object-fit: cover; object-position: center; pointer-events: none;"
                src="<?php echo get_template_directory_uri(); ?>/assets/video/sec-01/03.mp4" playsinline="" autoplay="" muted="" loop=""></video>
              <div class="play">
                <div class="play__inner">
                  <?php include(get_template_directory() . '/assets/images/icons/play.svg'); ?>
                </div>
              </div>
            </a>
          </div>
          <div thumbsSlider="" class="sec-1__swiper2 swiper-cars swiper-cars3 swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/03/slide01.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/03/IMG_4393_jpg.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/03/IMG_4392_jpg.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/03/IMG_4401_jpg.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/03/IMG_4404_jpg.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/03/IMG_4393_jpg.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/03/IMG_4398_jpg.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
            </div>
          </div>
        </div>
        <div data-box="4" class="sec-1__block">
          <div class="sec-1__block-view">
            <div class="sec-1__block-gallery swiper-gallery swiper-gallery4 swiper">
              <form class="sec-1__block-top" action="#" data-form-id="mercedes04">
                <p class="sec-1__block-title">
                  Mercedes G63 Глянцевый полиуретан
                </p>
                <div class="sec-1__likebox">
                  <p class="sec-1__likebox-title">
                    Оцените проект
                  </p>
                  <div class="sec-1__likebox-box">
                    <div class="sec-1__likebox-button">
                      <label class="_like-label">
                        <input name="rating" value="нравится" data-rating="like" type="radio">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_325_213)">
                            <path d="M5.38867 16.5V8.25H5.23867C3.97855 8.25 3.34849 8.25 2.86719 8.49523C2.44383 8.71095 2.09962 9.05516 1.88391 9.47852C1.63867 9.95982 1.63867 10.5899 1.63867 11.85V12.9C1.63867 14.1601 1.63867 14.7902 1.88391 15.2715C2.09962 15.6948 2.44383 16.039 2.86719 16.2548C3.34849 16.5 3.97855 16.5 5.23867 16.5H5.38867ZM5.38867 16.5H9.42054C11.1291 16.5 11.9834 16.5 12.7074 16.2456C13.6494 15.9147 14.4546 15.2799 14.9962 14.4412C15.4125 13.7965 15.6119 12.9658 16.0106 11.3044C16.3167 10.029 16.4698 9.39122 16.3548 8.88069C16.2053 8.2168 15.7634 7.65625 15.1527 7.35594C14.6831 7.125 14.026 7.125 12.7117 7.125C12.178 7.125 11.9112 7.125 11.7017 7.03665C11.4312 6.92264 11.216 6.70746 11.102 6.43701C11.0137 6.22743 11.0137 5.96114 11.0137 5.42855V2.72032C11.0137 2.63181 11.0137 2.58755 11.0112 2.55019C10.9737 1.98782 10.5259 1.53997 9.96348 1.50249C9.92612 1.5 9.88186 1.5 9.79335 1.5C9.71582 1.5 9.67706 1.5 9.64124 1.50171C9.11365 1.52696 8.63821 1.82782 8.38955 2.29382C8.37266 2.32546 8.35607 2.36049 8.32288 2.43056L5.38867 8.625V16.5Z" stroke="#46B449" fill="#00000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                        </svg>
                        <span style="display: block;" class="sec-1__likebox-rating">0 оценок</span>
                      </label>
                    </div>
                    <div class="sec-1__likebox-button">
                      <label class="_dislike-label">
                        <input name="rating" value="не нравится" data-rating="dislike" type="radio">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_325_215)">
                            <path d="M5.38867 1.5L5.38867 9.75H5.23867C3.97855 9.75 3.34849 9.75 2.86719 9.50476C2.44383 9.28905 2.09962 8.94484 1.88391 8.52148C1.63867 8.04018 1.63867 7.41012 1.63867 6.15L1.63867 5.1C1.63867 3.83988 1.63867 3.20982 1.88391 2.72852C2.09962 2.30516 2.44383 1.96095 2.86719 1.74524C3.3485 1.5 3.97855 1.5 5.23867 1.5L5.38867 1.5ZM5.38867 1.5L9.42055 1.5C11.1291 1.5 11.9834 1.5 12.7074 1.75439C13.6494 2.08531 14.4546 2.7201 14.9962 3.55881C15.4125 4.20354 15.6119 5.03422 16.0106 6.69559C16.3167 7.97105 16.4698 8.60878 16.3548 9.11931C16.2053 9.7832 15.7634 10.3438 15.1527 10.6441C14.6831 10.875 14.026 10.875 12.7117 10.875C12.178 10.875 11.9112 10.875 11.7017 10.9633C11.4312 11.0774 11.216 11.2925 11.102 11.563C11.0137 11.7726 11.0137 12.0389 11.0137 12.5715V15.2797C11.0137 15.3682 11.0137 15.4124 11.0112 15.4498C10.9737 16.0122 10.5259 16.46 9.96348 16.4975C9.92612 16.5 9.88186 16.5 9.79335 16.5C9.71582 16.5 9.67706 16.5 9.64124 16.4983C9.11364 16.473 8.63821 16.1722 8.38955 15.7062C8.37266 15.6745 8.35607 15.6395 8.32288 15.5694L5.38867 9.375L5.38867 1.5Z" stroke="#E42027" fill="#00000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                        </svg>
                        <span style="display: block;" class="sec-1__likebox-rating">0 оценок</span>
                      </label>
                    </div>
                  </div>
                </div>
                <a data-fancybox href="<?php echo get_template_directory_uri(); ?>/assets/video/sec-01/04.mp4" style="display: none;" class="sec-1__block-video _image-abs video-video _mobile">
                  <video
                    style="position: absolute; width: 100%; height: 100%; object-fit: cover; object-position: center; pointer-events: none;"
                    src="<?php echo get_template_directory_uri(); ?>/assets/video/sec-01/04.mp4" playsinline="" autoplay="" muted="" loop=""></video>
                  <div class="play">
                    <div class="play__inner">
                      <?php include(get_template_directory() . '/assets/images/icons/play.svg'); ?>
                    </div>
                  </div>
                </a>
              </form>
              <div class="swiper-wrapper">
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/04/slide01.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/04/IMG_1528.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/04/IMG_1539_jpg.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/04/IMG_1537_jpg.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/04/IMG_1530_jpg.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/04/IMG_1541_jpg.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/04/IMG_1550_jpg.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
              </div>
              <div class="sec-1__block-buttons">
                <div class="sec-1__block-button _orange-btn" id="prevCar4"></div>
                <div class="sec-1__block-button _orange-btn _next-car" id="nextCar4"></div>
              </div>
            </div>
            <a data-fancybox href="<?php echo get_template_directory_uri(); ?>/assets/video/sec-01/04.mp4" class="sec-1__block-video _image-abs video-video _big-video">
              <video
                style="position: absolute; width: 100%; height: 100%; object-fit: cover; object-position: center; pointer-events: none;"
                src="<?php echo get_template_directory_uri(); ?>/assets/video/sec-01/04.mp4" playsinline="" autoplay="" muted="" loop=""></video>
              <div class="play">
                <div class="play__inner">
                  <?php include(get_template_directory() . '/assets/images/icons/play.svg'); ?>
                </div>
              </div>
            </a>
          </div>
          <div thumbsSlider="" class="sec-1__swiper2 swiper-cars swiper-cars4 swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/04/slide01.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/04/IMG_1528.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/04/IMG_1539_jpg.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/04/IMG_1537_jpg.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/04/IMG_1530_jpg.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/04/IMG_1541_jpg.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/04/IMG_1550_jpg.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
            </div>
          </div>
        </div>
        <div data-box="5" class="sec-1__block">
          <div class="sec-1__block-view">
            <div class="sec-1__block-gallery swiper-gallery swiper-gallery5 swiper">
              <form class="sec-1__block-top" action="#" data-form-id="lexus05">
                <p class="sec-1__block-title">
                  Lexus LX600 глянцевая антигравийная плёнка
                </p>
                <div class="sec-1__likebox">
                  <p class="sec-1__likebox-title">
                    Оцените проект
                  </p>
                  <div class="sec-1__likebox-box">
                    <div class="sec-1__likebox-button">
                      <label class="_like-label">
                        <input name="rating" value="нравится" data-rating="like" type="radio">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_325_213)">
                            <path d="M5.38867 16.5V8.25H5.23867C3.97855 8.25 3.34849 8.25 2.86719 8.49523C2.44383 8.71095 2.09962 9.05516 1.88391 9.47852C1.63867 9.95982 1.63867 10.5899 1.63867 11.85V12.9C1.63867 14.1601 1.63867 14.7902 1.88391 15.2715C2.09962 15.6948 2.44383 16.039 2.86719 16.2548C3.34849 16.5 3.97855 16.5 5.23867 16.5H5.38867ZM5.38867 16.5H9.42054C11.1291 16.5 11.9834 16.5 12.7074 16.2456C13.6494 15.9147 14.4546 15.2799 14.9962 14.4412C15.4125 13.7965 15.6119 12.9658 16.0106 11.3044C16.3167 10.029 16.4698 9.39122 16.3548 8.88069C16.2053 8.2168 15.7634 7.65625 15.1527 7.35594C14.6831 7.125 14.026 7.125 12.7117 7.125C12.178 7.125 11.9112 7.125 11.7017 7.03665C11.4312 6.92264 11.216 6.70746 11.102 6.43701C11.0137 6.22743 11.0137 5.96114 11.0137 5.42855V2.72032C11.0137 2.63181 11.0137 2.58755 11.0112 2.55019C10.9737 1.98782 10.5259 1.53997 9.96348 1.50249C9.92612 1.5 9.88186 1.5 9.79335 1.5C9.71582 1.5 9.67706 1.5 9.64124 1.50171C9.11365 1.52696 8.63821 1.82782 8.38955 2.29382C8.37266 2.32546 8.35607 2.36049 8.32288 2.43056L5.38867 8.625V16.5Z" stroke="#46B449" fill="#00000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                        </svg>
                        <span style="display: block;" class="sec-1__likebox-rating">0 оценок</span>
                      </label>
                    </div>
                    <div class="sec-1__likebox-button">
                      <label class="_dislike-label">
                        <input name="rating" value="не нравится" data-rating="dislike" type="radio">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_325_215)">
                            <path d="M5.38867 1.5L5.38867 9.75H5.23867C3.97855 9.75 3.34849 9.75 2.86719 9.50476C2.44383 9.28905 2.09962 8.94484 1.88391 8.52148C1.63867 8.04018 1.63867 7.41012 1.63867 6.15L1.63867 5.1C1.63867 3.83988 1.63867 3.20982 1.88391 2.72852C2.09962 2.30516 2.44383 1.96095 2.86719 1.74524C3.3485 1.5 3.97855 1.5 5.23867 1.5L5.38867 1.5ZM5.38867 1.5L9.42055 1.5C11.1291 1.5 11.9834 1.5 12.7074 1.75439C13.6494 2.08531 14.4546 2.7201 14.9962 3.55881C15.4125 4.20354 15.6119 5.03422 16.0106 6.69559C16.3167 7.97105 16.4698 8.60878 16.3548 9.11931C16.2053 9.7832 15.7634 10.3438 15.1527 10.6441C14.6831 10.875 14.026 10.875 12.7117 10.875C12.178 10.875 11.9112 10.875 11.7017 10.9633C11.4312 11.0774 11.216 11.2925 11.102 11.563C11.0137 11.7726 11.0137 12.0389 11.0137 12.5715V15.2797C11.0137 15.3682 11.0137 15.4124 11.0112 15.4498C10.9737 16.0122 10.5259 16.46 9.96348 16.4975C9.92612 16.5 9.88186 16.5 9.79335 16.5C9.71582 16.5 9.67706 16.5 9.64124 16.4983C9.11364 16.473 8.63821 16.1722 8.38955 15.7062C8.37266 15.6745 8.35607 15.6395 8.32288 15.5694L5.38867 9.375L5.38867 1.5Z" stroke="#E42027" fill="#00000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                        </svg>
                        <span style="display: block;" class="sec-1__likebox-rating">0 оценок</span>
                      </label>
                    </div>
                  </div>
                </div>
                <a data-fancybox href="<?php echo get_template_directory_uri(); ?>/assets/video/sec-01/05.mp4" style="display: none;" class="sec-1__block-video _image-abs video-video _mobile">
                  <video
                    style="position: absolute; width: 100%; height: 100%; object-fit: cover; object-position: center; pointer-events: none;"
                    src="<?php echo get_template_directory_uri(); ?>/assets/video/sec-01/05.mp4" playsinline="" autoplay="" muted="" loop=""></video>
                  <div class="play">
                    <div class="play__inner">
                      <?php include(get_template_directory() . '/assets/images/icons/play.svg'); ?>
                    </div>
                  </div>
                </a>
              </form>
              <div class="swiper-wrapper">
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/05/slide01.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/05/IMG_2404_jpg.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/05/IMG_3162_jpg.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/05/IMG_3156_jpg.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/05/IMG_3158_jpg.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/05/IMG_3172_jpg.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/05/IMG_3165_jpg.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
              </div>
              <div class="sec-1__block-buttons">
                <div class="sec-1__block-button _orange-btn" id="prevCar5"></div>
                <div class="sec-1__block-button _orange-btn _next-car" id="nextCar5"></div>
              </div>
            </div>
            <a data-fancybox href="<?php echo get_template_directory_uri(); ?>/assets/video/sec-01/05.mp4" class="sec-1__block-video _image-abs video-video _big-video">
              <video
                style="position: absolute; width: 100%; height: 100%; object-fit: cover; object-position: center; pointer-events: none;"
                src="<?php echo get_template_directory_uri(); ?>/assets/video/sec-01/05.mp4" playsinline="" autoplay="" muted="" loop=""></video>
              <div class="play">
                <div class="play__inner">
                  <?php include(get_template_directory() . '/assets/images/icons/play.svg'); ?>
                </div>
              </div>
            </a>
          </div>
          <div thumbsSlider="" class="sec-1__swiper2 swiper-cars swiper-cars5 swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/05/slide01.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/05/IMG_2404_jpg.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/05/IMG_3162_jpg.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/05/IMG_3156_jpg.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/05/IMG_3158_jpg.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/05/IMG_3172_jpg.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/05/IMG_3165_jpg.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
            </div>
          </div>
        </div>
        <div data-box="6" class="sec-1__block">
          <div class="sec-1__block-view">
            <div class="sec-1__block-gallery swiper-gallery swiper-gallery6 swiper">
              <form class="sec-1__block-top" action="#" data-form-id="li06">
                <p class="sec-1__block-title">
                  Li 9 цветной синий полиуретан
                </p>
                <div class="sec-1__likebox">
                  <p class="sec-1__likebox-title">
                    Оцените проект
                  </p>
                  <div class="sec-1__likebox-box">
                    <div class="sec-1__likebox-button">
                      <label class="_like-label">
                        <input name="rating" value="нравится" data-rating="like" type="radio">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_325_213)">
                            <path d="M5.38867 16.5V8.25H5.23867C3.97855 8.25 3.34849 8.25 2.86719 8.49523C2.44383 8.71095 2.09962 9.05516 1.88391 9.47852C1.63867 9.95982 1.63867 10.5899 1.63867 11.85V12.9C1.63867 14.1601 1.63867 14.7902 1.88391 15.2715C2.09962 15.6948 2.44383 16.039 2.86719 16.2548C3.34849 16.5 3.97855 16.5 5.23867 16.5H5.38867ZM5.38867 16.5H9.42054C11.1291 16.5 11.9834 16.5 12.7074 16.2456C13.6494 15.9147 14.4546 15.2799 14.9962 14.4412C15.4125 13.7965 15.6119 12.9658 16.0106 11.3044C16.3167 10.029 16.4698 9.39122 16.3548 8.88069C16.2053 8.2168 15.7634 7.65625 15.1527 7.35594C14.6831 7.125 14.026 7.125 12.7117 7.125C12.178 7.125 11.9112 7.125 11.7017 7.03665C11.4312 6.92264 11.216 6.70746 11.102 6.43701C11.0137 6.22743 11.0137 5.96114 11.0137 5.42855V2.72032C11.0137 2.63181 11.0137 2.58755 11.0112 2.55019C10.9737 1.98782 10.5259 1.53997 9.96348 1.50249C9.92612 1.5 9.88186 1.5 9.79335 1.5C9.71582 1.5 9.67706 1.5 9.64124 1.50171C9.11365 1.52696 8.63821 1.82782 8.38955 2.29382C8.37266 2.32546 8.35607 2.36049 8.32288 2.43056L5.38867 8.625V16.5Z" stroke="#46B449" fill="#00000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                        </svg>
                        <span style="display: block;" class="sec-1__likebox-rating">0 оценок</span>
                      </label>
                    </div>
                    <div class="sec-1__likebox-button">
                      <label class="_dislike-label">
                        <input name="rating" value="не нравится" data-rating="dislike" type="radio">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_325_215)">
                            <path d="M5.38867 1.5L5.38867 9.75H5.23867C3.97855 9.75 3.34849 9.75 2.86719 9.50476C2.44383 9.28905 2.09962 8.94484 1.88391 8.52148C1.63867 8.04018 1.63867 7.41012 1.63867 6.15L1.63867 5.1C1.63867 3.83988 1.63867 3.20982 1.88391 2.72852C2.09962 2.30516 2.44383 1.96095 2.86719 1.74524C3.3485 1.5 3.97855 1.5 5.23867 1.5L5.38867 1.5ZM5.38867 1.5L9.42055 1.5C11.1291 1.5 11.9834 1.5 12.7074 1.75439C13.6494 2.08531 14.4546 2.7201 14.9962 3.55881C15.4125 4.20354 15.6119 5.03422 16.0106 6.69559C16.3167 7.97105 16.4698 8.60878 16.3548 9.11931C16.2053 9.7832 15.7634 10.3438 15.1527 10.6441C14.6831 10.875 14.026 10.875 12.7117 10.875C12.178 10.875 11.9112 10.875 11.7017 10.9633C11.4312 11.0774 11.216 11.2925 11.102 11.563C11.0137 11.7726 11.0137 12.0389 11.0137 12.5715V15.2797C11.0137 15.3682 11.0137 15.4124 11.0112 15.4498C10.9737 16.0122 10.5259 16.46 9.96348 16.4975C9.92612 16.5 9.88186 16.5 9.79335 16.5C9.71582 16.5 9.67706 16.5 9.64124 16.4983C9.11364 16.473 8.63821 16.1722 8.38955 15.7062C8.37266 15.6745 8.35607 15.6395 8.32288 15.5694L5.38867 9.375L5.38867 1.5Z" stroke="#E42027" fill="#00000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                        </svg>
                        <span style="display: block;" class="sec-1__likebox-rating">0 оценок</span>
                      </label>
                    </div>
                  </div>
                </div>
                <a data-fancybox href="<?php echo get_template_directory_uri(); ?>/assets/video/sec-01/06.mp4" style="display: none;" class="sec-1__block-video _image-abs video-video _mobile">
                  <video
                    style="position: absolute; width: 100%; height: 100%; object-fit: cover; object-position: center; pointer-events: none;"
                    src="<?php echo get_template_directory_uri(); ?>/assets/video/sec-01/06.mp4" playsinline="" autoplay="" muted="" loop=""></video>
                  <div class="play">
                    <div class="play__inner">
                      <?php include(get_template_directory() . '/assets/images/icons/play.svg'); ?>
                    </div>
                  </div>
                </a>
              </form>
              <div class="swiper-wrapper">
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/06/slide01.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/06/IMG_7284_jpg.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/06/IMG_7287_jpg.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/06/IMG_7290_jpg.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/06/IMG_7292.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/06/IMG_7290_jpg.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/06/IMG_7291_jpg.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
              </div>
              <div class="sec-1__block-buttons">
                <div class="sec-1__block-button _orange-btn" id="prevCar6"></div>
                <div class="sec-1__block-button _orange-btn _next-car" id="nextCar6"></div>
              </div>
            </div>
            <a data-fancybox href="<?php echo get_template_directory_uri(); ?>/assets/video/sec-01/06.mp4" class="sec-1__block-video _image-abs video-video _big-video">
              <video
                style="position: absolute; width: 100%; height: 100%; object-fit: cover; object-position: center; pointer-events: none;"
                src="<?php echo get_template_directory_uri(); ?>/assets/video/sec-01/06.mp4" playsinline="" autoplay="" muted="" loop=""></video>
              <div class="play">
                <div class="play__inner">
                  <?php include(get_template_directory() . '/assets/images/icons/play.svg'); ?>
                </div>
              </div>
            </a>
          </div>
          <div thumbsSlider="" class="sec-1__swiper2 swiper-cars swiper-cars6 swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/06/slide01.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/06/IMG_7284_jpg.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/06/IMG_7287_jpg.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/06/IMG_7290_jpg.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/06/IMG_7292.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/06/IMG_7290_jpg.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/06/IMG_7291_jpg.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
            </div>
          </div>
        </div>
        <div data-box="7" class="sec-1__block">
          <div class="sec-1__block-view">
            <div class="sec-1__block-gallery swiper-gallery swiper-gallery7 swiper">
              <form class="sec-1__block-top" action="#" data-form-id="porshe07">
                <p class="sec-1__block-title">
                  Porshe Macan Цветной глянцевый полиуретан
                </p>
                <div class="sec-1__likebox">
                  <p class="sec-1__likebox-title">
                    Оцените проект
                  </p>
                  <div class="sec-1__likebox-box">
                    <div class="sec-1__likebox-button">
                      <label class="_like-label">
                        <input name="rating" value="нравится" data-rating="like" type="radio">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_325_213)">
                            <path d="M5.38867 16.5V8.25H5.23867C3.97855 8.25 3.34849 8.25 2.86719 8.49523C2.44383 8.71095 2.09962 9.05516 1.88391 9.47852C1.63867 9.95982 1.63867 10.5899 1.63867 11.85V12.9C1.63867 14.1601 1.63867 14.7902 1.88391 15.2715C2.09962 15.6948 2.44383 16.039 2.86719 16.2548C3.34849 16.5 3.97855 16.5 5.23867 16.5H5.38867ZM5.38867 16.5H9.42054C11.1291 16.5 11.9834 16.5 12.7074 16.2456C13.6494 15.9147 14.4546 15.2799 14.9962 14.4412C15.4125 13.7965 15.6119 12.9658 16.0106 11.3044C16.3167 10.029 16.4698 9.39122 16.3548 8.88069C16.2053 8.2168 15.7634 7.65625 15.1527 7.35594C14.6831 7.125 14.026 7.125 12.7117 7.125C12.178 7.125 11.9112 7.125 11.7017 7.03665C11.4312 6.92264 11.216 6.70746 11.102 6.43701C11.0137 6.22743 11.0137 5.96114 11.0137 5.42855V2.72032C11.0137 2.63181 11.0137 2.58755 11.0112 2.55019C10.9737 1.98782 10.5259 1.53997 9.96348 1.50249C9.92612 1.5 9.88186 1.5 9.79335 1.5C9.71582 1.5 9.67706 1.5 9.64124 1.50171C9.11365 1.52696 8.63821 1.82782 8.38955 2.29382C8.37266 2.32546 8.35607 2.36049 8.32288 2.43056L5.38867 8.625V16.5Z" stroke="#46B449" fill="#00000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                        </svg>
                        <span style="display: block;" class="sec-1__likebox-rating">0 оценок</span>
                      </label>
                    </div>
                    <div class="sec-1__likebox-button">
                      <label class="_dislike-label">
                        <input name="rating" value="не нравится" data-rating="dislike" type="radio">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_325_215)">
                            <path d="M5.38867 1.5L5.38867 9.75H5.23867C3.97855 9.75 3.34849 9.75 2.86719 9.50476C2.44383 9.28905 2.09962 8.94484 1.88391 8.52148C1.63867 8.04018 1.63867 7.41012 1.63867 6.15L1.63867 5.1C1.63867 3.83988 1.63867 3.20982 1.88391 2.72852C2.09962 2.30516 2.44383 1.96095 2.86719 1.74524C3.3485 1.5 3.97855 1.5 5.23867 1.5L5.38867 1.5ZM5.38867 1.5L9.42055 1.5C11.1291 1.5 11.9834 1.5 12.7074 1.75439C13.6494 2.08531 14.4546 2.7201 14.9962 3.55881C15.4125 4.20354 15.6119 5.03422 16.0106 6.69559C16.3167 7.97105 16.4698 8.60878 16.3548 9.11931C16.2053 9.7832 15.7634 10.3438 15.1527 10.6441C14.6831 10.875 14.026 10.875 12.7117 10.875C12.178 10.875 11.9112 10.875 11.7017 10.9633C11.4312 11.0774 11.216 11.2925 11.102 11.563C11.0137 11.7726 11.0137 12.0389 11.0137 12.5715V15.2797C11.0137 15.3682 11.0137 15.4124 11.0112 15.4498C10.9737 16.0122 10.5259 16.46 9.96348 16.4975C9.92612 16.5 9.88186 16.5 9.79335 16.5C9.71582 16.5 9.67706 16.5 9.64124 16.4983C9.11364 16.473 8.63821 16.1722 8.38955 15.7062C8.37266 15.6745 8.35607 15.6395 8.32288 15.5694L5.38867 9.375L5.38867 1.5Z" stroke="#E42027" fill="#00000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                        </svg>
                        <span style="display: block;" class="sec-1__likebox-rating">0 оценок</span>
                      </label>
                    </div>
                  </div>
                </div>
                <a data-fancybox href="<?php echo get_template_directory_uri(); ?>/assets/video/sec-01/07.mp4" style="display: none;" class="sec-1__block-video _image-abs video-video _mobile">
                  <video
                    style="position: absolute; width: 100%; height: 100%; object-fit: cover; object-position: center; pointer-events: none;"
                    src="<?php echo get_template_directory_uri(); ?>/assets/video/sec-01/07.mp4" playsinline="" autoplay="" muted="" loop=""></video>
                  <div class="play">
                    <div class="play__inner">
                      <?php include(get_template_directory() . '/assets/images/icons/play.svg'); ?>
                    </div>
                  </div>
                </a>
              </form>
              <div class="swiper-wrapper">
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/07/slide01.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/07/IMG_4181.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/07/IMG_4184.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/07/IMG_4187.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/07/IMG_4194.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/07/IMG_4197.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/07/IMG_4189.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
              </div>
              <div class="sec-1__block-buttons">
                <div class="sec-1__block-button _orange-btn" id="prevCar7"></div>
                <div class="sec-1__block-button _orange-btn _next-car" id="nextCar7"></div>
              </div>
            </div>
            <a data-fancybox href="<?php echo get_template_directory_uri(); ?>/assets/video/sec-01/07.mp4" class="sec-1__block-video _image-abs video-video _big-video">
              <video
                style="position: absolute; width: 100%; height: 100%; object-fit: cover; object-position: center; pointer-events: none;"
                src="<?php echo get_template_directory_uri(); ?>/assets/video/sec-01/07.mp4" playsinline="" autoplay="" muted="" loop=""></video>
              <div class="play">
                <div class="play__inner">
                  <?php include(get_template_directory() . '/assets/images/icons/play.svg'); ?>
                </div>
              </div>
            </a>
          </div>
          <div thumbsSlider="" class="sec-1__swiper2 swiper-cars swiper-cars7 swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/07/slide01.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/07/IMG_4181.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/07/IMG_4184.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/07/IMG_4187.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/07/IMG_4194.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/07/IMG_4197.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/07/IMG_4189.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
            </div>
          </div>
        </div>
        <div data-box="8" class="sec-1__block">
          <div class="sec-1__block-view">
            <div class="sec-1__block-gallery swiper-gallery swiper-gallery8 swiper">
              <form class="sec-1__block-top" action="#" data-form-id="subaru08">
                <p class="sec-1__block-title">
                  Subaru Levorg глянцевый полиуретан
                </p>
                <div class="sec-1__likebox">
                  <p class="sec-1__likebox-title">
                    Оцените проект
                  </p>
                  <div class="sec-1__likebox-box">
                    <div class="sec-1__likebox-button">
                      <label class="_like-label">
                        <input name="rating" value="нравится" data-rating="like" type="radio">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_325_213)">
                            <path d="M5.38867 16.5V8.25H5.23867C3.97855 8.25 3.34849 8.25 2.86719 8.49523C2.44383 8.71095 2.09962 9.05516 1.88391 9.47852C1.63867 9.95982 1.63867 10.5899 1.63867 11.85V12.9C1.63867 14.1601 1.63867 14.7902 1.88391 15.2715C2.09962 15.6948 2.44383 16.039 2.86719 16.2548C3.34849 16.5 3.97855 16.5 5.23867 16.5H5.38867ZM5.38867 16.5H9.42054C11.1291 16.5 11.9834 16.5 12.7074 16.2456C13.6494 15.9147 14.4546 15.2799 14.9962 14.4412C15.4125 13.7965 15.6119 12.9658 16.0106 11.3044C16.3167 10.029 16.4698 9.39122 16.3548 8.88069C16.2053 8.2168 15.7634 7.65625 15.1527 7.35594C14.6831 7.125 14.026 7.125 12.7117 7.125C12.178 7.125 11.9112 7.125 11.7017 7.03665C11.4312 6.92264 11.216 6.70746 11.102 6.43701C11.0137 6.22743 11.0137 5.96114 11.0137 5.42855V2.72032C11.0137 2.63181 11.0137 2.58755 11.0112 2.55019C10.9737 1.98782 10.5259 1.53997 9.96348 1.50249C9.92612 1.5 9.88186 1.5 9.79335 1.5C9.71582 1.5 9.67706 1.5 9.64124 1.50171C9.11365 1.52696 8.63821 1.82782 8.38955 2.29382C8.37266 2.32546 8.35607 2.36049 8.32288 2.43056L5.38867 8.625V16.5Z" stroke="#46B449" fill="#00000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                        </svg>
                        <span style="display: block;" class="sec-1__likebox-rating">0 оценок</span>
                      </label>
                    </div>
                    <div class="sec-1__likebox-button">
                      <label class="_dislike-label">
                        <input name="rating" value="не нравится" data-rating="dislike" type="radio">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_325_215)">
                            <path d="M5.38867 1.5L5.38867 9.75H5.23867C3.97855 9.75 3.34849 9.75 2.86719 9.50476C2.44383 9.28905 2.09962 8.94484 1.88391 8.52148C1.63867 8.04018 1.63867 7.41012 1.63867 6.15L1.63867 5.1C1.63867 3.83988 1.63867 3.20982 1.88391 2.72852C2.09962 2.30516 2.44383 1.96095 2.86719 1.74524C3.3485 1.5 3.97855 1.5 5.23867 1.5L5.38867 1.5ZM5.38867 1.5L9.42055 1.5C11.1291 1.5 11.9834 1.5 12.7074 1.75439C13.6494 2.08531 14.4546 2.7201 14.9962 3.55881C15.4125 4.20354 15.6119 5.03422 16.0106 6.69559C16.3167 7.97105 16.4698 8.60878 16.3548 9.11931C16.2053 9.7832 15.7634 10.3438 15.1527 10.6441C14.6831 10.875 14.026 10.875 12.7117 10.875C12.178 10.875 11.9112 10.875 11.7017 10.9633C11.4312 11.0774 11.216 11.2925 11.102 11.563C11.0137 11.7726 11.0137 12.0389 11.0137 12.5715V15.2797C11.0137 15.3682 11.0137 15.4124 11.0112 15.4498C10.9737 16.0122 10.5259 16.46 9.96348 16.4975C9.92612 16.5 9.88186 16.5 9.79335 16.5C9.71582 16.5 9.67706 16.5 9.64124 16.4983C9.11364 16.473 8.63821 16.1722 8.38955 15.7062C8.37266 15.6745 8.35607 15.6395 8.32288 15.5694L5.38867 9.375L5.38867 1.5Z" stroke="#E42027" fill="#00000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                        </svg>
                        <span style="display: block;" class="sec-1__likebox-rating">0 оценок</span>
                      </label>
                    </div>
                  </div>
                </div>
                <a data-fancybox href="<?php echo get_template_directory_uri(); ?>/assets/video/sec-01/08.mp4" style="display: none;" class="sec-1__block-video _image-abs video-video _mobile">
                  <video
                    style="position: absolute; width: 100%; height: 100%; object-fit: cover; object-position: center; pointer-events: none;"
                    src="<?php echo get_template_directory_uri(); ?>/assets/video/sec-01/08.mp4" playsinline="" autoplay="" muted="" loop=""></video>
                  <div class="play">
                    <div class="play__inner">
                      <?php include(get_template_directory() . '/assets/images/icons/play.svg'); ?>
                    </div>
                  </div>
                </a>
              </form>
              <div class="swiper-wrapper">
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/08/slide01.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/08/IMG_4854.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/08/IMG_4856.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/08/IMG_4857.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/08/IMG_4852.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/08/IMG_4860.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/08/IMG_4858.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
              </div>
              <div class="sec-1__block-buttons">
                <div class="sec-1__block-button _orange-btn" id="prevCar8"></div>
                <div class="sec-1__block-button _orange-btn _next-car" id="nextCar8"></div>
              </div>
            </div>
            <a data-fancybox href="<?php echo get_template_directory_uri(); ?>/assets/video/sec-01/08.mp4" class="sec-1__block-video _image-abs video-video _big-video">
              <video
                style="position: absolute; width: 100%; height: 100%; object-fit: cover; object-position: center; pointer-events: none;"
                src="<?php echo get_template_directory_uri(); ?>/assets/video/sec-01/08.mp4" playsinline="" autoplay="" muted="" loop=""></video>
              <div class="play">
                <div class="play__inner">
                  <?php include(get_template_directory() . '/assets/images/icons/play.svg'); ?>
                </div>
              </div>
            </a>
          </div>
          <div thumbsSlider="" class="sec-1__swiper2 swiper-cars swiper-cars8 swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/08/slide01.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/08/IMG_4854.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/08/IMG_4856.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/08/IMG_4857.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/08/IMG_4852.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/08/IMG_4860.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/08/IMG_4858.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
            </div>
          </div>
        </div>
        <div data-box="9" class="sec-1__block">
          <div class="sec-1__block-view">
            <div class="sec-1__block-gallery swiper-gallery swiper-gallery9 swiper">
              <form class="sec-1__block-top" action="#" data-form-id="mercedes09">
                <p class="sec-1__block-title">
                  Mercedes - Benz <br>
                  глянцевая антигравийная плёнка
                </p>
                <div class="sec-1__likebox">
                  <p class="sec-1__likebox-title">
                    Оцените проект
                  </p>
                  <div class="sec-1__likebox-box">
                    <div class="sec-1__likebox-button">
                      <label class="_like-label">
                        <input name="rating" value="нравится" data-rating="like" type="radio">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_325_213)">
                            <path d="M5.38867 16.5V8.25H5.23867C3.97855 8.25 3.34849 8.25 2.86719 8.49523C2.44383 8.71095 2.09962 9.05516 1.88391 9.47852C1.63867 9.95982 1.63867 10.5899 1.63867 11.85V12.9C1.63867 14.1601 1.63867 14.7902 1.88391 15.2715C2.09962 15.6948 2.44383 16.039 2.86719 16.2548C3.34849 16.5 3.97855 16.5 5.23867 16.5H5.38867ZM5.38867 16.5H9.42054C11.1291 16.5 11.9834 16.5 12.7074 16.2456C13.6494 15.9147 14.4546 15.2799 14.9962 14.4412C15.4125 13.7965 15.6119 12.9658 16.0106 11.3044C16.3167 10.029 16.4698 9.39122 16.3548 8.88069C16.2053 8.2168 15.7634 7.65625 15.1527 7.35594C14.6831 7.125 14.026 7.125 12.7117 7.125C12.178 7.125 11.9112 7.125 11.7017 7.03665C11.4312 6.92264 11.216 6.70746 11.102 6.43701C11.0137 6.22743 11.0137 5.96114 11.0137 5.42855V2.72032C11.0137 2.63181 11.0137 2.58755 11.0112 2.55019C10.9737 1.98782 10.5259 1.53997 9.96348 1.50249C9.92612 1.5 9.88186 1.5 9.79335 1.5C9.71582 1.5 9.67706 1.5 9.64124 1.50171C9.11365 1.52696 8.63821 1.82782 8.38955 2.29382C8.37266 2.32546 8.35607 2.36049 8.32288 2.43056L5.38867 8.625V16.5Z" stroke="#46B449" fill="#00000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                        </svg>
                        <span style="display: block;" class="sec-1__likebox-rating">0 оценок</span>
                      </label>
                    </div>
                    <div class="sec-1__likebox-button">
                      <label class="_dislike-label">
                        <input name="rating" value="не нравится" data-rating="dislike" type="radio">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_325_215)">
                            <path d="M5.38867 1.5L5.38867 9.75H5.23867C3.97855 9.75 3.34849 9.75 2.86719 9.50476C2.44383 9.28905 2.09962 8.94484 1.88391 8.52148C1.63867 8.04018 1.63867 7.41012 1.63867 6.15L1.63867 5.1C1.63867 3.83988 1.63867 3.20982 1.88391 2.72852C2.09962 2.30516 2.44383 1.96095 2.86719 1.74524C3.3485 1.5 3.97855 1.5 5.23867 1.5L5.38867 1.5ZM5.38867 1.5L9.42055 1.5C11.1291 1.5 11.9834 1.5 12.7074 1.75439C13.6494 2.08531 14.4546 2.7201 14.9962 3.55881C15.4125 4.20354 15.6119 5.03422 16.0106 6.69559C16.3167 7.97105 16.4698 8.60878 16.3548 9.11931C16.2053 9.7832 15.7634 10.3438 15.1527 10.6441C14.6831 10.875 14.026 10.875 12.7117 10.875C12.178 10.875 11.9112 10.875 11.7017 10.9633C11.4312 11.0774 11.216 11.2925 11.102 11.563C11.0137 11.7726 11.0137 12.0389 11.0137 12.5715V15.2797C11.0137 15.3682 11.0137 15.4124 11.0112 15.4498C10.9737 16.0122 10.5259 16.46 9.96348 16.4975C9.92612 16.5 9.88186 16.5 9.79335 16.5C9.71582 16.5 9.67706 16.5 9.64124 16.4983C9.11364 16.473 8.63821 16.1722 8.38955 15.7062C8.37266 15.6745 8.35607 15.6395 8.32288 15.5694L5.38867 9.375L5.38867 1.5Z" stroke="#E42027" fill="#00000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                        </svg>
                        <span style="display: block;" class="sec-1__likebox-rating">0 оценок</span>
                      </label>
                    </div>
                  </div>
                </div>
                <a data-fancybox href="<?php echo get_template_directory_uri(); ?>/assets/video/sec-01/09.mp4" style="display: none;" class="sec-1__block-video _image-abs video-video _mobile">
                  <video
                    style="position: absolute; width: 100%; height: 100%; object-fit: cover; object-position: center; pointer-events: none;"
                    src="<?php echo get_template_directory_uri(); ?>/assets/video/sec-01/09.mp4" playsinline="" autoplay="" muted="" loop=""></video>
                  <div class="play">
                    <div class="play__inner">
                      <?php include(get_template_directory() . '/assets/images/icons/play.svg'); ?>
                    </div>
                  </div>
                </a>
              </form>
              <div class="swiper-wrapper">
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/09/slide01.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/09/IMG_3852.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/09/IMG_3857.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/09/IMG_3853.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/09/IMG_3861.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/09/IMG_3862.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/09/IMG_3866.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
              </div>
              <div class="sec-1__block-buttons">
                <div class="sec-1__block-button _orange-btn" id="prevCar9"></div>
                <div class="sec-1__block-button _orange-btn _next-car" id="nextCar9"></div>
              </div>
            </div>
            <a data-fancybox href="<?php echo get_template_directory_uri(); ?>/assets/video/sec-01/09.mp4" class="sec-1__block-video _image-abs video-video _big-video">
              <video
                style="position: absolute; width: 100%; height: 100%; object-fit: cover; object-position: center; pointer-events: none;"
                src="<?php echo get_template_directory_uri(); ?>/assets/video/sec-01/09.mp4" playsinline="" autoplay="" muted="" loop=""></video>
              <div class="play">
                <div class="play__inner">
                  <?php include(get_template_directory() . '/assets/images/icons/play.svg'); ?>
                </div>
              </div>
            </a>
          </div>
          <div thumbsSlider="" class="sec-1__swiper2 swiper-cars swiper-cars9 swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/09/slide01.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/09/IMG_3852.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/09/IMG_3857.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/09/IMG_3853.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/09/IMG_3861.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/09/IMG_3862.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/09/IMG_3866.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
            </div>
          </div>
        </div>
        <div data-box="10" class="sec-1__block">
          <div class="sec-1__block-view">
            <div class="sec-1__block-gallery swiper-gallery swiper-gallery10 swiper">
              <form class="sec-1__block-top" action="#" data-form-id="bmw10">
                <p class="sec-1__block-title">
                  BMW цветной глянцевый полиуретан — преображение в черный
                </p>
                <div class="sec-1__likebox">
                  <p class="sec-1__likebox-title">
                    Оцените проект
                  </p>
                  <div class="sec-1__likebox-box">
                    <div class="sec-1__likebox-button">
                      <label class="_like-label">
                        <input name="rating" value="нравится" data-rating="like" type="radio">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_325_213)">
                            <path d="M5.38867 16.5V8.25H5.23867C3.97855 8.25 3.34849 8.25 2.86719 8.49523C2.44383 8.71095 2.09962 9.05516 1.88391 9.47852C1.63867 9.95982 1.63867 10.5899 1.63867 11.85V12.9C1.63867 14.1601 1.63867 14.7902 1.88391 15.2715C2.09962 15.6948 2.44383 16.039 2.86719 16.2548C3.34849 16.5 3.97855 16.5 5.23867 16.5H5.38867ZM5.38867 16.5H9.42054C11.1291 16.5 11.9834 16.5 12.7074 16.2456C13.6494 15.9147 14.4546 15.2799 14.9962 14.4412C15.4125 13.7965 15.6119 12.9658 16.0106 11.3044C16.3167 10.029 16.4698 9.39122 16.3548 8.88069C16.2053 8.2168 15.7634 7.65625 15.1527 7.35594C14.6831 7.125 14.026 7.125 12.7117 7.125C12.178 7.125 11.9112 7.125 11.7017 7.03665C11.4312 6.92264 11.216 6.70746 11.102 6.43701C11.0137 6.22743 11.0137 5.96114 11.0137 5.42855V2.72032C11.0137 2.63181 11.0137 2.58755 11.0112 2.55019C10.9737 1.98782 10.5259 1.53997 9.96348 1.50249C9.92612 1.5 9.88186 1.5 9.79335 1.5C9.71582 1.5 9.67706 1.5 9.64124 1.50171C9.11365 1.52696 8.63821 1.82782 8.38955 2.29382C8.37266 2.32546 8.35607 2.36049 8.32288 2.43056L5.38867 8.625V16.5Z" stroke="#46B449" fill="#00000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                        </svg>
                        <span style="display: block;" class="sec-1__likebox-rating">0 оценок</span>
                      </label>
                    </div>
                    <div class="sec-1__likebox-button">
                      <label class="_dislike-label">
                        <input name="rating" value="не нравится" data-rating="dislike" type="radio">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_325_215)">
                            <path d="M5.38867 1.5L5.38867 9.75H5.23867C3.97855 9.75 3.34849 9.75 2.86719 9.50476C2.44383 9.28905 2.09962 8.94484 1.88391 8.52148C1.63867 8.04018 1.63867 7.41012 1.63867 6.15L1.63867 5.1C1.63867 3.83988 1.63867 3.20982 1.88391 2.72852C2.09962 2.30516 2.44383 1.96095 2.86719 1.74524C3.3485 1.5 3.97855 1.5 5.23867 1.5L5.38867 1.5ZM5.38867 1.5L9.42055 1.5C11.1291 1.5 11.9834 1.5 12.7074 1.75439C13.6494 2.08531 14.4546 2.7201 14.9962 3.55881C15.4125 4.20354 15.6119 5.03422 16.0106 6.69559C16.3167 7.97105 16.4698 8.60878 16.3548 9.11931C16.2053 9.7832 15.7634 10.3438 15.1527 10.6441C14.6831 10.875 14.026 10.875 12.7117 10.875C12.178 10.875 11.9112 10.875 11.7017 10.9633C11.4312 11.0774 11.216 11.2925 11.102 11.563C11.0137 11.7726 11.0137 12.0389 11.0137 12.5715V15.2797C11.0137 15.3682 11.0137 15.4124 11.0112 15.4498C10.9737 16.0122 10.5259 16.46 9.96348 16.4975C9.92612 16.5 9.88186 16.5 9.79335 16.5C9.71582 16.5 9.67706 16.5 9.64124 16.4983C9.11364 16.473 8.63821 16.1722 8.38955 15.7062C8.37266 15.6745 8.35607 15.6395 8.32288 15.5694L5.38867 9.375L5.38867 1.5Z" stroke="#E42027" fill="#00000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                        </svg>
                        <span style="display: block;" class="sec-1__likebox-rating">0 оценок</span>
                      </label>
                    </div>
                  </div>
                </div>
                <a data-fancybox href="<?php echo get_template_directory_uri(); ?>/assets/video/sec-01/10.mp4" style="display: none;" class="sec-1__block-video _image-abs video-video _mobile">
                  <video
                    style="position: absolute; width: 100%; height: 100%; object-fit: cover; object-position: center; pointer-events: none;"
                    src="<?php echo get_template_directory_uri(); ?>/assets/video/sec-01/10.mp4" playsinline="" autoplay="" muted="" loop=""></video>
                  <div class="play">
                    <div class="play__inner">
                      <?php include(get_template_directory() . '/assets/images/icons/play.svg'); ?>
                    </div>
                  </div>
                </a>
              </form>
              <div class="swiper-wrapper">
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/10/slide01.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/10/photo_2024-11-14_14-07-07.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/10/photo_2024-11-14_14-07-12.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">
                    webp">
                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/10/photo_2024-11-14_14-07-10(2).webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/10/photo_2024-11-14_14-07-13.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">
                    webp">
                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/10/photo_2024-11-14_14-07-17(2).webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/10/photo_2024-11-14_14-07-19.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
              </div>
              <div class="sec-1__block-buttons">
                <div class="sec-1__block-button _orange-btn" id="prevCar10"></div>
                <div class="sec-1__block-button _orange-btn _next-car" id="nextCar10"></div>
              </div>
            </div>
            <a data-fancybox href="<?php echo get_template_directory_uri(); ?>/assets/video/sec-01/10.mp4" class="sec-1__block-video _image-abs video-video _big-video">
              <video
                style="position: absolute; width: 100%; height: 100%; object-fit: cover; object-position: center; pointer-events: none;"
                src="<?php echo get_template_directory_uri(); ?>/assets/video/sec-01/10.mp4" playsinline="" autoplay="" muted="" loop=""></video>
              <div class="play">
                <div class="play__inner">
                  <?php include(get_template_directory() . '/assets/images/icons/play.svg'); ?>
                </div>
              </div>
            </a>
          </div>
          <div thumbsSlider="" class="sec-1__swiper2 swiper-cars swiper-cars10 swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/10/slide01.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/10/photo_2024-11-14_14-07-07.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/10/photo_2024-11-14_14-07-12.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/10/photo_2024-11-14_14-07-10(2).webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/10/photo_2024-11-14_14-07-13.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/10/photo_2024-11-14_14-07-17(2).webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/10/photo_2024-11-14_14-07-19.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
            </div>
          </div>
        </div>
        <div data-box="11" class="sec-1__block">
          <div class="sec-1__block-view">
            <div class="sec-1__block-gallery swiper-gallery swiper-gallery11 swiper">
              <form class="sec-1__block-top" action="#" data-form-id="dodge11">
                <p class="sec-1__block-title">
                  Dodge Ram глянцевый полиуретан
                </p>
                <div class="sec-1__likebox">
                  <p class="sec-1__likebox-title">
                    Оцените проект
                  </p>
                  <div class="sec-1__likebox-box">
                    <div class="sec-1__likebox-button">
                      <label class="_like-label">
                        <input name="rating" value="нравится" data-rating="like" type="radio">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_325_213)">
                            <path d="M5.38867 16.5V8.25H5.23867C3.97855 8.25 3.34849 8.25 2.86719 8.49523C2.44383 8.71095 2.09962 9.05516 1.88391 9.47852C1.63867 9.95982 1.63867 10.5899 1.63867 11.85V12.9C1.63867 14.1601 1.63867 14.7902 1.88391 15.2715C2.09962 15.6948 2.44383 16.039 2.86719 16.2548C3.34849 16.5 3.97855 16.5 5.23867 16.5H5.38867ZM5.38867 16.5H9.42054C11.1291 16.5 11.9834 16.5 12.7074 16.2456C13.6494 15.9147 14.4546 15.2799 14.9962 14.4412C15.4125 13.7965 15.6119 12.9658 16.0106 11.3044C16.3167 10.029 16.4698 9.39122 16.3548 8.88069C16.2053 8.2168 15.7634 7.65625 15.1527 7.35594C14.6831 7.125 14.026 7.125 12.7117 7.125C12.178 7.125 11.9112 7.125 11.7017 7.03665C11.4312 6.92264 11.216 6.70746 11.102 6.43701C11.0137 6.22743 11.0137 5.96114 11.0137 5.42855V2.72032C11.0137 2.63181 11.0137 2.58755 11.0112 2.55019C10.9737 1.98782 10.5259 1.53997 9.96348 1.50249C9.92612 1.5 9.88186 1.5 9.79335 1.5C9.71582 1.5 9.67706 1.5 9.64124 1.50171C9.11365 1.52696 8.63821 1.82782 8.38955 2.29382C8.37266 2.32546 8.35607 2.36049 8.32288 2.43056L5.38867 8.625V16.5Z" stroke="#46B449" fill="#00000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                        </svg>
                        <span style="display: block;" class="sec-1__likebox-rating">0 оценок</span>
                      </label>
                    </div>
                    <div class="sec-1__likebox-button">
                      <label class="_dislike-label">
                        <input name="rating" value="не нравится" data-rating="dislike" type="radio">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_325_215)">
                            <path d="M5.38867 1.5L5.38867 9.75H5.23867C3.97855 9.75 3.34849 9.75 2.86719 9.50476C2.44383 9.28905 2.09962 8.94484 1.88391 8.52148C1.63867 8.04018 1.63867 7.41012 1.63867 6.15L1.63867 5.1C1.63867 3.83988 1.63867 3.20982 1.88391 2.72852C2.09962 2.30516 2.44383 1.96095 2.86719 1.74524C3.3485 1.5 3.97855 1.5 5.23867 1.5L5.38867 1.5ZM5.38867 1.5L9.42055 1.5C11.1291 1.5 11.9834 1.5 12.7074 1.75439C13.6494 2.08531 14.4546 2.7201 14.9962 3.55881C15.4125 4.20354 15.6119 5.03422 16.0106 6.69559C16.3167 7.97105 16.4698 8.60878 16.3548 9.11931C16.2053 9.7832 15.7634 10.3438 15.1527 10.6441C14.6831 10.875 14.026 10.875 12.7117 10.875C12.178 10.875 11.9112 10.875 11.7017 10.9633C11.4312 11.0774 11.216 11.2925 11.102 11.563C11.0137 11.7726 11.0137 12.0389 11.0137 12.5715V15.2797C11.0137 15.3682 11.0137 15.4124 11.0112 15.4498C10.9737 16.0122 10.5259 16.46 9.96348 16.4975C9.92612 16.5 9.88186 16.5 9.79335 16.5C9.71582 16.5 9.67706 16.5 9.64124 16.4983C9.11364 16.473 8.63821 16.1722 8.38955 15.7062C8.37266 15.6745 8.35607 15.6395 8.32288 15.5694L5.38867 9.375L5.38867 1.5Z" stroke="#E42027" fill="#00000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                        </svg>
                        <span style="display: block;" class="sec-1__likebox-rating">0 оценок</span>
                      </label>
                    </div>
                  </div>
                </div>
                <a data-fancybox href="<?php echo get_template_directory_uri(); ?>/assets/video/sec-01/11.mp4" style="display: none;" class="sec-1__block-video _image-abs video-video _mobile">
                  <video
                    style="position: absolute; width: 100%; height: 100%; object-fit: cover; object-position: center; pointer-events: none;"
                    src="<?php echo get_template_directory_uri(); ?>/assets/video/sec-01/11.mp4" playsinline="" autoplay="" muted="" loop=""></video>
                  <div class="play">
                    <div class="play__inner">
                      <?php include(get_template_directory() . '/assets/images/icons/play.svg'); ?>
                    </div>
                  </div>
                </a>
              </form>
              <div class="swiper-wrapper">
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/11/slide01.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/11/IMG_2555_jpg.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/11/IMG_2545.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/11/IMG_2549_jpg.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/11/IMG_2548_jpg.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/11/IMG_2558.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/11/IMG_2562_jpg.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
              </div>
              <div class="sec-1__block-buttons">
                <div class="sec-1__block-button _orange-btn" id="prevCar11"></div>
                <div class="sec-1__block-button _orange-btn _next-car" id="nextCar11"></div>
              </div>
            </div>
            <a data-fancybox href="<?php echo get_template_directory_uri(); ?>/assets/video/sec-01/11.mp4" class="sec-1__block-video _image-abs video-video _big-video">
              <video
                style="position: absolute; width: 100%; height: 100%; object-fit: cover; object-position: center; pointer-events: none;"
                src="<?php echo get_template_directory_uri(); ?>/assets/video/sec-01/11.mp4" playsinline="" autoplay="" muted="" loop=""></video>
              <div class="play">
                <div class="play__inner">
                  <?php include(get_template_directory() . '/assets/images/icons/play.svg'); ?>
                </div>
              </div>
            </a>
          </div>
          <div thumbsSlider="" class="sec-1__swiper2 swiper-cars swiper-cars11 swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/11/slide01.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/11/IMG_2555_jpg.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/11/IMG_2545.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/11/IMG_2549_jpg.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/11/IMG_2548_jpg.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/11/IMG_2558.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/11/IMG_2562_jpg.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
            </div>
          </div>
        </div>
        <div data-box="12" class="sec-1__block">
          <div class="sec-1__block-view">
            <div class="sec-1__block-gallery swiper-gallery swiper-gallery12 swiper">
              <form class="sec-1__block-top" action="#" data-form-id="bmw12">
                <p class="sec-1__block-title">
                  BMWX3 Цветной глянцевый полиуретан оттенок хамелеон
                </p>
                <div class="sec-1__likebox">
                  <p class="sec-1__likebox-title">
                    Оцените проект
                  </p>
                  <div class="sec-1__likebox-box">
                    <div class="sec-1__likebox-button">
                      <label class="_like-label">
                        <input name="rating" value="нравится" data-rating="like" type="radio">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_325_213)">
                            <path d="M5.38867 16.5V8.25H5.23867C3.97855 8.25 3.34849 8.25 2.86719 8.49523C2.44383 8.71095 2.09962 9.05516 1.88391 9.47852C1.63867 9.95982 1.63867 10.5899 1.63867 11.85V12.9C1.63867 14.1601 1.63867 14.7902 1.88391 15.2715C2.09962 15.6948 2.44383 16.039 2.86719 16.2548C3.34849 16.5 3.97855 16.5 5.23867 16.5H5.38867ZM5.38867 16.5H9.42054C11.1291 16.5 11.9834 16.5 12.7074 16.2456C13.6494 15.9147 14.4546 15.2799 14.9962 14.4412C15.4125 13.7965 15.6119 12.9658 16.0106 11.3044C16.3167 10.029 16.4698 9.39122 16.3548 8.88069C16.2053 8.2168 15.7634 7.65625 15.1527 7.35594C14.6831 7.125 14.026 7.125 12.7117 7.125C12.178 7.125 11.9112 7.125 11.7017 7.03665C11.4312 6.92264 11.216 6.70746 11.102 6.43701C11.0137 6.22743 11.0137 5.96114 11.0137 5.42855V2.72032C11.0137 2.63181 11.0137 2.58755 11.0112 2.55019C10.9737 1.98782 10.5259 1.53997 9.96348 1.50249C9.92612 1.5 9.88186 1.5 9.79335 1.5C9.71582 1.5 9.67706 1.5 9.64124 1.50171C9.11365 1.52696 8.63821 1.82782 8.38955 2.29382C8.37266 2.32546 8.35607 2.36049 8.32288 2.43056L5.38867 8.625V16.5Z" stroke="#46B449" fill="#00000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                        </svg>
                        <span style="display: block;" class="sec-1__likebox-rating">0 оценок</span>
                      </label>
                    </div>
                    <div class="sec-1__likebox-button">
                      <label class="_dislike-label">
                        <input name="rating" value="не нравится" data-rating="dislike" type="radio">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_325_215)">
                            <path d="M5.38867 1.5L5.38867 9.75H5.23867C3.97855 9.75 3.34849 9.75 2.86719 9.50476C2.44383 9.28905 2.09962 8.94484 1.88391 8.52148C1.63867 8.04018 1.63867 7.41012 1.63867 6.15L1.63867 5.1C1.63867 3.83988 1.63867 3.20982 1.88391 2.72852C2.09962 2.30516 2.44383 1.96095 2.86719 1.74524C3.3485 1.5 3.97855 1.5 5.23867 1.5L5.38867 1.5ZM5.38867 1.5L9.42055 1.5C11.1291 1.5 11.9834 1.5 12.7074 1.75439C13.6494 2.08531 14.4546 2.7201 14.9962 3.55881C15.4125 4.20354 15.6119 5.03422 16.0106 6.69559C16.3167 7.97105 16.4698 8.60878 16.3548 9.11931C16.2053 9.7832 15.7634 10.3438 15.1527 10.6441C14.6831 10.875 14.026 10.875 12.7117 10.875C12.178 10.875 11.9112 10.875 11.7017 10.9633C11.4312 11.0774 11.216 11.2925 11.102 11.563C11.0137 11.7726 11.0137 12.0389 11.0137 12.5715V15.2797C11.0137 15.3682 11.0137 15.4124 11.0112 15.4498C10.9737 16.0122 10.5259 16.46 9.96348 16.4975C9.92612 16.5 9.88186 16.5 9.79335 16.5C9.71582 16.5 9.67706 16.5 9.64124 16.4983C9.11364 16.473 8.63821 16.1722 8.38955 15.7062C8.37266 15.6745 8.35607 15.6395 8.32288 15.5694L5.38867 9.375L5.38867 1.5Z" stroke="#E42027" fill="#00000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                          </g>
                        </svg>
                        <span style="display: block;" class="sec-1__likebox-rating">0 оценок</span>
                      </label>
                    </div>
                  </div>
                </div>
                <a data-fancybox href="<?php echo get_template_directory_uri(); ?>/assets/video/sec-01/12.mp4" style="display: none;" class="sec-1__block-video _image-abs video-video _mobile">
                  <video
                    style="position: absolute; width: 100%; height: 100%; object-fit: cover; object-position: center; pointer-events: none;"
                    src="<?php echo get_template_directory_uri(); ?>/assets/video/sec-01/12.mp4" playsinline="" autoplay="" muted="" loop=""></video>
                  <div class="play">
                    <div class="play__inner">
                      <?php include(get_template_directory() . '/assets/images/icons/play.svg'); ?>
                    </div>
                  </div>
                </a>
              </form>
              <div class="swiper-wrapper">
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/12/slide01.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/12/IMG_1861.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/12/IMG_1862.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/12/IMG_1867.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/12/IMG_1868.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/12/IMG_1872.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
                <div class="sec-1__block-photo swiper-slide">
                  <div class="_image-abs">

                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/12/IMG_1876.webp"
                      alt=" Изображение - автомобиль в слайдере">

                  </div>
                </div>
              </div>
              <div class="sec-1__block-buttons">
                <div class="sec-1__block-button _orange-btn" id="prevCar12"></div>
                <div class="sec-1__block-button _orange-btn _next-car" id="nextCar12"></div>
              </div>
            </div>
            <a data-fancybox href="<?php echo get_template_directory_uri(); ?>/assets/video/sec-01/12.mp4" class="sec-1__block-video _image-abs video-video _big-video">
              <video
                style="position: absolute; width: 100%; height: 100%; object-fit: cover; object-position: center; pointer-events: none;"
                src="<?php echo get_template_directory_uri(); ?>/assets/video/sec-01/12.mp4" playsinline="" autoplay="" muted="" loop=""></video>
              <div class="play">
                <div class="play__inner">
                  <?php include(get_template_directory() . '/assets/images/icons/play.svg'); ?>
                </div>
              </div>
            </a>
          </div>
          <div thumbsSlider="" class="sec-1__swiper2 swiper-cars swiper-cars12 swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/12/slide01.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/12/IMG_1861.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/12/IMG_1862.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/12/IMG_1867.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/12/IMG_1868.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/12/IMG_1872.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
              <div class="swiper-slide">
                <div class="_image-abs">

                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-01/gallery/12/IMG_1876.webp"
                    alt=" Изображение - автомобиль в слайдере">

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="sec-1__buttons">
          <a data-fancybox href="#quiza" class="sec-1__cars-modal _main-btn _orange-btn">
            Рассчитать стоимость <br>
            оклейки авто за 4 шага
          </a>
          <button class="sec-1__cars-next _main-btn">
            Смотреть следующий проект
            <svg width="26" height="9" viewBox="0 0 26 9" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_360_304)">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M22.1285 8.26793L20.7845 6.92393L23.4085 4.39593L20.7845 1.86893L22.1285 0.523926L26.0005 4.39593L22.1285 8.26793ZM10.4645 6.92393L13.0885 4.39593L10.4645 1.86893L11.8085 0.523926L15.6805 4.39593L11.8085 8.26793L10.4645 6.92393ZM0.144531 6.92393L2.76853 4.39593L0.144531 1.86893L1.48853 0.523926L5.36053 4.39593L1.48853 8.26793L0.144531 6.92393Z"
                  fill="#ffffff66" />
              </g>
            </svg>
          </button>
        </div>
      </div>
    </div>
  </section>
  <section class="full-wrapping">
    <div class="container">
      <h2 class="full-wrapping__title _title">
        Полная оклейка включает<br>
        все внешние элементы кузова,
      </h2>
      <p class="full-wrapping__subtitle _subtitle">
        которые формируют визуальный облик автомобиля:
      </p>
      <div class="full-wrapping__inner">
        <div class="full-wrapping__item full-wrapping__item-left">
          <img class="full-wrapping__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/full-wrapping-1.webp" alt="">
          <div class="overlay"></div>
          <div class="full-wrapping__item-inner">
            <ul class="full-wrapping__item-list list-point">
              <li class="full-wrapping__item-point">
                Капот
              </li>
              <li class="full-wrapping__item-point">
                Крыша
              </li>
              <li class="full-wrapping__item-point">
                Крылья (передние и задние)
              </li>
              <li class="full-wrapping__item-point">
                Двери снаружи
              </li>
              <li class="full-wrapping__item-point">
                Задние и передние бамперы
              </li>
              <li class="full-wrapping__item-point">
                Наружные стойки
              </li>
              <li class="full-wrapping__item-point">
                Наружные зеркала
              </li>
              <li class="full-wrapping__item-point">
                Ручки и крышка багажника
              </li>
            </ul>
          </div>
        </div>
        <div class="full-wrapping__right">
          <h3 class="full-wrapping__right-title">
            Детализация рассчитывается отдельно<br>
            в зависимости от сложности элементов<br>
            автомобиля:
          </h3>
          <div class="full-wrapping__item">
            <img class="full-wrapping__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/full-wrapping-2.webp" alt="">
            <div class="overlay"></div>
            <div class="full-wrapping__item-inner">
              <ul class="full-wrapping__item-list list-point">
                <li class="full-wrapping__item-point">
                  Внутренние пороги и дверные проёмы
                </li>
                <li class="full-wrapping__item-point">
                  Торцы дверей
                </li>
                <li class="full-wrapping__item-point">
                  Внутренние части капота и крышки багажника
                </li>
                <li class="full-wrapping__item-point">
                  Эмблемы, шильдики и декоративные вставки
                </li>
                <li class="full-wrapping__item-point">
                  Решётки радиатора
                </li>
                <li class="full-wrapping__item-point">
                  Зоны под уплотнителями и резинками
                </li>
                <li class="full-wrapping__item-point">
                  Стойки внутри дверного проёма
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="wrapper-brown">
    <section class="section sec-2">
      <div class="sec-2__background">

        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/big-text.webp" alt=" Изображение - большой текст-лого">

      </div>
      <div class="sec-2__container container">
        <div class="sec-2__titlebox">
          <h2 class="sec-2__title _title">
            Качество оклейки и уровень <br>
            сервиса подтверждает огромное <br>
            количество независимых отзывов
          </h2>
          <div class="sec-2__yandexbox">
            <div class="sec-2__yandex-maps">

              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/yandex-map2.svg" alt=" Изображение - лого яндекса">

            </div>
            <div class="sec-2__yandex-reviews">


              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/yandex-review2.webp" alt=" Изображение - лого яндекса 2">

            </div>
          </div>
        </div>
        <div class="sec-2__mobile">
          <div class="sec-2__yandexbox">
            <div class="sec-2__yandex-maps">

              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/yandex-map2.svg" alt=" Изображение - лого яндекса">

            </div>
            <div class="sec-2__yandex-reviews">


              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/yandex-review2.webp" alt=" Изображение - лого яндекса 2">

            </div>
          </div>
          <div class="sec-2__quality">
            <div class="sec-2__quality-item">


              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-02/quality01.webp" alt=" Изображение - итоги отзывов">

            </div>
            <div class="sec-2__quality-item">


              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-02/quality02.webp" alt=" Изображение - итоги отзывов">

            </div>
            <div class="sec-2__quality-item">


              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-02/quality03.webp" alt=" Изображение - итоги отзывов">

            </div>
            <div class="sec-2__quality-item">


              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-02/quality04.webp" alt=" Изображение - итоги отзывов">

            </div>
            <div class="sec-2__quality-item">


              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-02/quality05.webp" alt=" Изображение - итоги отзывов">

            </div>
          </div>
        </div>
        <div class="sec-2__reviews swiper-rev swiper">
          <div class="sec-2__review-buttons">
            <svg class="_before" width="14" height="14" viewBox="0 0 14 14" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <g filter="url(#filter0_d_300_110)">
                <path d="M0 0V0C7.73199 0 14 6.26801 14 14V14H0V0Z" fill="#242528" />
              </g>
              <defs>
                <filter x="-14" y="-14" width="42" height="42"
                  filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix" />
                  <feColorMatrix in="SourceAlpha" type="matrix"
                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                  <feMorphology radius="14" operator="dilate" in="SourceAlpha"
                    result="effect1_dropShadow_300_110" />
                  <feOffset />
                  <feComposite in2="hardAlpha" operator="out" />
                  <feColorMatrix type="matrix"
                    values="0 0 0 0 0.180392 0 0 0 0 0.156863 0 0 0 0 0.14902 0 0 0 1 0" />
                  <feBlend mode="normal" in2="BackgroundImageFix"
                    result="effect1_dropShadow_300_110" />
                  <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_300_110"
                    result="shape" />
                </filter>
              </defs>
            </svg>
            <svg class="_after" width="14" height="14" viewBox="0 0 14 14" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <g filter="url(#filter0_d_300_110)">
                <path d="M0 0V0C7.73199 0 14 6.26801 14 14V14H0V0Z" fill="#242528" />
              </g>
              <defs>
                <filter x="-14" y="-14" width="42" height="42"
                  filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix" />
                  <feColorMatrix in="SourceAlpha" type="matrix"
                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                  <feMorphology radius="14" operator="dilate" in="SourceAlpha"
                    result="effect1_dropShadow_300_110" />
                  <feOffset />
                  <feComposite in2="hardAlpha" operator="out" />
                  <feColorMatrix type="matrix"
                    values="0 0 0 0 0.180392 0 0 0 0 0.156863 0 0 0 0 0.14902 0 0 0 1 0" />
                  <feBlend mode="normal" in2="BackgroundImageFix"
                    result="effect1_dropShadow_300_110" />
                  <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_300_110"
                    result="shape" />
                </filter>
              </defs>
            </svg>
            <button class="sec-2__review-button _orange-btn" id="prevButton-rev"></button>
            <button class="sec-2__review-button _orange-btn" id="nextButton-rev"></button>
          </div>
          <div class="swiper-wrapper">
            <div class="sec-2__review swiper-slide">
              <div class="sec-2__review-text">


                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-02/review01.webp" alt=" Изображение - отзыв о детейлинг центре">

              </div>
              <div class="sec-2__review-picture">


                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-02/mobile01.webp"
                  alt=" Изображение - фотография автомобиля с отзыва">

              </div>
            </div>
            <div class="sec-2__review swiper-slide">
              <div class="sec-2__review-text">


                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-02/review02.webp" alt=" Изображение - отзыв о детейлинг центре">

              </div>
              <div class="sec-2__review-picture">


                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-02/mobile02.webp"
                  alt=" Изображение - фотография автомобиля с отзыва">

              </div>
            </div>
            <div class="sec-2__review swiper-slide">
              <div class="sec-2__review-text">


                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-02/review03.webp" alt=" Изображение - отзыв о детейлинг центре">

              </div>
              <div class="sec-2__review-picture">


                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-02/mobile03.webp"
                  alt=" Изображение - фотография автомобиля с отзыва">

              </div>
            </div>
            <div class="sec-2__review swiper-slide">
              <div class="sec-2__review-text">


                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-02/review04.webp" alt=" Изображение - отзыв о детейлинг центре">

              </div>
              <div class="sec-2__review-picture">


                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-02/mobile04.webp"
                  alt=" Изображение - фотография автомобиля с отзыва">

              </div>
            </div>
            <div class="sec-2__review swiper-slide">
              <div class="sec-2__review-text">


                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-02/review05.webp" alt=" Изображение - отзыв о детейлинг центре">

              </div>
              <div class="sec-2__review-picture">


                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-02/mobile05.webp"
                  alt=" Изображение - фотография автомобиля с отзыва">

              </div>
            </div>
            <div class="sec-2__review swiper-slide">
              <div class="sec-2__review-text">


                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-02/review06.webp" alt=" Изображение - отзыв о детейлинг центре">

              </div>
              <div class="sec-2__review-picture">


                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-02/mobile06.webp"
                  alt=" Изображение - фотография автомобиля с отзыва">

              </div>
            </div>
            <div class="sec-2__review swiper-slide">
              <div class="sec-2__review-text">


                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-02/review07.webp" alt=" Изображение - отзыв о детейлинг центре">

              </div>
              <div class="sec-2__review-picture">


                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-02/mobile07.webp"
                  alt=" Изображение - фотография автомобиля с отзыва">

              </div>
            </div>
            <div class="sec-2__review swiper-slide">
              <div class="sec-2__review-text">


                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-02/review08.webp" alt=" Изображение - отзыв о детейлинг центре">

              </div>
              <div class="sec-2__review-picture">


                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-02/mobile08.webp"
                  alt=" Изображение - фотография автомобиля с отзыва">

              </div>
            </div>
            <div class="sec-2__review swiper-slide">
              <div class="sec-2__review-text">


                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-02/review09.webp" alt=" Изображение - отзыв о детейлинг центре">

              </div>
              <div class="sec-2__review-picture">


                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-02/mobile09.webp"
                  alt=" Изображение - фотография автомобиля с отзыва">

              </div>
            </div>
            <div class="sec-2__review swiper-slide">
              <div class="sec-2__review-text">


                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-02/review10.webp" alt=" Изображение - отзыв о детейлинг центре">

              </div>
              <div class="sec-2__review-picture">


                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-02/mobile10.webp"
                  alt=" Изображение - фотография автомобиля с отзыва">

              </div>
            </div>
            <div class="sec-2__review swiper-slide">
              <div class="sec-2__review-text">


                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-02/review11.webp" alt=" Изображение - отзыв о детейлинг центре">

              </div>
              <div class="sec-2__review-picture">


                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-02/mobile11.webp"
                  alt=" Изображение - фотография автомобиля с отзыва">

              </div>
            </div>
            <div class="sec-2__review swiper-slide">
              <div class="sec-2__review-text">


                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-02/review12.webp" alt=" Изображение - отзыв о детейлинг центре">

              </div>
              <div class="sec-2__review-picture">


                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-02/mobile12.webp"
                  alt=" Изображение - фотография автомобиля с отзыва">

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <section class="sec-3">
    <div class="sec-3__container container">
      <h2 class="sec-3__title _title">
        Или посмотрите видеоотзывы клиентов
      </h2>
      <div class="cursor">
        <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
      </div>
      <div class="sec-3__layout">
        <a data-fancybox href="<?php echo get_template_directory_uri(); ?>/assets/video/vid1.mp4" class="sec-3__slide">
          <div class="sec-3__slide-image _image-abs video-video">


            <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-03video/emotions.webp"
              alt=" Изображение - исключительно положительные эмоции">

            <div class="play">
              <div class="play__inner">
                <?php include(get_template_directory() . '/assets/images/icons/play.svg'); ?>
              </div>
            </div>
          </div>
          <div class="sec-3__slide-textbox">
            <p class="sec-3__slide-text">
              Исключительно положительные эмоции от работы с командой IDWrap
            </p>
          </div>
        </a>
        <a data-fancybox href="<?php echo get_template_directory_uri(); ?>/assets/video/vid3.mp4" class="sec-3__slide">
          <div class="sec-3__slide-image _image-abs video-video">


            <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-03video/better.webp" alt=" Изображение -  в 2021 еще лучше">

            <div class="play">
              <div class="play__inner">
                <?php include(get_template_directory() . '/assets/images/icons/play.svg'); ?>
              </div>
            </div>
          </div>
          <div class="sec-3__slide-textbox">
            <p class="sec-3__slide-text">
              Обращаюсь в IDWrap уже не первый раз! В 2016 и 2018 было всё отлично,
              в 2021- еще лучше, казалось бы, куда больше
            </p>
          </div>
        </a>
        <a data-fancybox href="<?php echo get_template_directory_uri(); ?>/assets/video/vid2.mp4" class="sec-3__slide">
          <div class="sec-3__slide-image _image-abs video-video">


            <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-03video/expectation.webp"
              alt=" Изображение - результат превзошёл ожидания">

            <div class="play">
              <div class="play__inner">
                <?php include(get_template_directory() . '/assets/images/icons/play.svg'); ?>
              </div>
            </div>
          </div>
          <div class="sec-3__slide-textbox">
            <p class="sec-3__slide-text">
              Результат превзошёл все ожидания,
              я остался доволен
            </p>
          </div>
        </a>
      </div>
    </div>
  </section>
  <div class="space-sec"></div>
  <section class="sec-4">
    <div class="sec-4__layout">
      <div class="sec-4__background">
        <div class="_image-abs">
          <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-04form/vehicle.webp" alt=" Изображение - машина на фон">
        </div>
      </div>
      <div class="sec-4__container container relative">
        <h2 class="sec-4__title _title">
          Рассчитаем стоимость <br>
          оклейки вашего авто за 4 шага
        </h2>
        <p class="sec-4__subtitle _subtitle">
          + подарим промокод на бесплатную оклейку фар или порога в подарок
        </p>
        <form action="#" class="form sec-4__form form form-submit">
          <input type="hidden" name="newToken" value="<?php echo (rand(10000, 99999)) ?>">
          <input type="hidden" name="from" value="Получить расчёт стоимости + подарок">
          <div class="progress-bar progress-bar1">
            <div class="progress progress1"></div>
            <span class="progress-num progress-num1">Осталось 5 вопросов из 5</span>
          </div>

          <div class="quiz-step quiz-step1 step-1">
            <h3 class="quiz-step__title">01. Какую часть автомобиля вы планируете оклеить?</h3>
            <div class="quiz-options">
              <label class="quiz-option quiz-option1" data-next="2">
                <input type="radio" name="step1" required value="Полная оклейка">
                <span class="quiz-option__image">
                  <span class="_image-abs">
                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-04form/step1/polnaya_okleyka.webp"
                      alt=" Изображение - полная оклейка">
                  </span>
                </span>
                <span class="quiz-option__circle">
                  <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_130_577)">
                      <path d="M2.24121 5.49099L4.90521 8.15299L10.7662 2.29199"
                        stroke="currentColor" stroke-width="3" stroke-linecap="round" />
                    </g>
                  </svg>
                </span>
                <span style="display: block;" class="quiz-option__text">
                  Полная оклейка
                </span>
              </label>
              <label class="quiz-option quiz-option1" data-next="2">
                <input type="radio" name="step1" required value="Частичная оклейка">
                <span class="quiz-option__image">
                  <span class="_image-abs">
                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-04form/step1/chastichnaya_okleyka.webp"
                      alt=" Изображение - частичная оклейка">
                  </span>
                </span>
                <span class="quiz-option__circle">
                  <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_130_577)">
                      <path d="M2.24121 5.49099L4.90521 8.15299L10.7662 2.29199"
                        stroke="currentColor" stroke-width="3" stroke-linecap="round" />
                    </g>
                  </svg>
                </span>
                <span style="display: block;" class="quiz-option__text">
                  Частичная оклейка
                </span>
              </label>
              <label class="quiz-option quiz-option1" data-next="2">
                <input type="radio" name="step1" required value="Оклейка отдельных элементов">
                <span class="quiz-option__image">
                  <span class="_image-abs">
                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-04form/step1/okleyka_otdelnih_elementov.webp"
                      alt=" Изображение - оклейка отдельных элементов">
                  </span>
                </span>
                <span class="quiz-option__circle">
                  <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_130_577)">
                      <path d="M2.24121 5.49099L4.90521 8.15299L10.7662 2.29199"
                        stroke="currentColor" stroke-width="3" stroke-linecap="round" />
                    </g>
                  </svg>
                </span>
                <span style="display: block;" class="quiz-option__text">
                  Оклейка отдельных <br>
                  элементов
                </span>
              </label>
              <label class="quiz-option quiz-option1" data-next="2">
                <input type="radio" name="step1" required value="Затрудняюсь ответить">
                <span class="quiz-option__image">
                  <span class="_image-abs">
                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-04form/step1/ne_znayu.webp"
                      alt=" Изображение - затрудняюсь ответить">
                  </span>
                </span>
                <span class="quiz-option__circle">
                  <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_130_577)">
                      <path d="M2.24121 5.49099L4.90521 8.15299L10.7662 2.29199"
                        stroke="currentColor" stroke-width="3" stroke-linecap="round" />
                    </g>
                  </svg>
                </span>
                <span style="display: block;" class="quiz-option__text">
                  Затрудняюсь ответить
                </span>
              </label>
            </div>
            <button class="next-step _main-btn _orange-btn">На следующий шаг</button>
          </div>

          <div class="quiz-step quiz-step1 step-2">
            <h3 class="quiz-step__title">02. Что вы хотели бы сделать?</h3>
            <div class="quiz-options">
              <div class="quiz-options">
                <label class="quiz-option quiz-option1" data-next="3">
                  <input type="radio" name="step2" required value="Защитить автомобиль">
                  <span class="quiz-option__image">
                    <span class="_image-abs">
                      <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-04form/step2/defence.webp"
                        alt=" Изображение - Защитить автомобиль">
                    </span>
                  </span>
                  <span class="quiz-option__circle">
                    <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_130_577)">
                        <path d="M2.24121 5.49099L4.90521 8.15299L10.7662 2.29199"
                          stroke="currentColor" stroke-width="3"
                          stroke-linecap="round" />
                      </g>
                    </svg>
                  </span>
                  <span style="display: block;" class="quiz-option__text">
                    Защитить автомобиль
                  </span>
                </label>
                <label class="quiz-option quiz-option1" data-next="3">
                  <input type="radio" name="step2" required value="Поменять цвет">
                  <span class="quiz-option__image">
                    <span class="_image-abs">
                      <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-04form/step2/change_color.webp"
                        alt=" Изображение - Поменять цвет">
                    </span>
                  </span>
                  <span class="quiz-option__circle">
                    <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_130_577)">
                        <path d="M2.24121 5.49099L4.90521 8.15299L10.7662 2.29199"
                          stroke="currentColor" stroke-width="3"
                          stroke-linecap="round" />
                      </g>
                    </svg>
                  </span>
                  <span style="display: block;" class="quiz-option__text">
                    Поменять цвет
                  </span>
                </label>
                <label class="quiz-option quiz-option1" data-next="3">
                  <input type="radio" name="step2" required value="Индивидуальный дизайн">
                  <span class="quiz-option__image">
                    <span class="_image-abs">
                      <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-04form/step2/individual_design.webp"
                        alt=" Изображение - Индивидуальный дизайн">
                    </span>
                  </span>
                  <span class="quiz-option__circle">
                    <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_130_577)">
                        <path d="M2.24121 5.49099L4.90521 8.15299L10.7662 2.29199"
                          stroke="currentColor" stroke-width="3"
                          stroke-linecap="round" />
                      </g>
                    </svg>
                  </span>
                  <span style="display: block;" class="quiz-option__text">
                    Индивидуальный дизайн
                  </span>
                </label>
                <label class="quiz-option quiz-option1" data-next="3">
                  <input type="radio" name="step2" required
                    value="Защитить или убрать хромированные элементы авто (антихром)">
                  <span class="quiz-option__image">
                    <span class="_image-abs">
                      <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-04form/step2/defence_or_remove_chrome.webp"
                        alt=" Изображение - Защитить или убрать хромированные элементы авто (антихром)">
                    </span>
                  </span>
                  <span class="quiz-option__circle">
                    <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_130_577)">
                        <path d="M2.24121 5.49099L4.90521 8.15299L10.7662 2.29199"
                          stroke="currentColor" stroke-width="3"
                          stroke-linecap="round" />
                      </g>
                    </svg>
                  </span>
                  <span style="display: block;" class="quiz-option__text">
                    Защитить или убрать хромированные <br>
                    элементы авто (антихром)
                  </span>
                </label>
                <label class="quiz-option quiz-option1" data-next="3">
                  <input type="radio" name="step2" required value="Стайлинг">
                  <span class="quiz-option__image">
                    <span class="_image-abs">
                      <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-04form/step2/styling.webp"
                        alt=" Изображение - Стайлинг">
                    </span>
                  </span>
                  <span class="quiz-option__circle">
                    <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_130_577)">
                        <path d="M2.24121 5.49099L4.90521 8.15299L10.7662 2.29199"
                          stroke="currentColor" stroke-width="3"
                          stroke-linecap="round" />
                      </g>
                    </svg>
                  </span>
                  <span style="display: block;" class="quiz-option__text">
                    Стайлинг
                  </span>
                </label>
                <label class="quiz-option quiz-option1" data-next="3">
                  <input type="radio" name="step2" required value="Затрудняюсь ответить">
                  <span class="quiz-option__image">
                    <span class="_image-abs">
                      <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-04form/step2/i_dont_know.webp"
                        alt=" Изображение - затрудняюсь ответить">
                    </span>
                  </span>
                  <span class="quiz-option__circle">
                    <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_130_577)">
                        <path d="M2.24121 5.49099L4.90521 8.15299L10.7662 2.29199"
                          stroke="currentColor" stroke-width="3"
                          stroke-linecap="round" />
                      </g>
                    </svg>
                  </span>
                  <span style="display: block;" class="quiz-option__text">
                    Затрудняюсь ответить
                  </span>
                </label>
              </div>
            </div>
            <button class="next-step _main-btn _orange-btn">На следующий шаг</button>
          </div>

          <div class="quiz-step quiz-step1 step-3">
            <h3 class="quiz-step__title">03. Когда вы хотели бы провести оклейку?</h3>
            <div class="quiz-options">
              <label class="quiz-option quiz-option1" data-next="4">
                <input type="radio" name="step3" required value="В ближайшее время">
                <span class="quiz-option__circle">
                  <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_130_577)">
                      <path d="M2.24121 5.49099L4.90521 8.15299L10.7662 2.29199"
                        stroke="currentColor" stroke-width="3" stroke-linecap="round" />
                    </g>
                  </svg>
                </span>
                <span style="display: block;" class="quiz-option__text">
                  В ближайшее <br>
                  время
                </span>
              </label>
              <label class="quiz-option quiz-option1" data-next="4">
                <input type="radio" name="step3" required value="В течение месяца">
                <span class="quiz-option__circle">
                  <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_130_577)">
                      <path d="M2.24121 5.49099L4.90521 8.15299L10.7662 2.29199"
                        stroke="currentColor" stroke-width="3" stroke-linecap="round" />
                    </g>
                  </svg>
                </span>
                <span style="display: block;" class="quiz-option__text">
                  В течение <br>
                  месяца
                </span>
              </label>
              <label class="quiz-option quiz-option1" data-next="4">
                <input type="radio" name="step3" required value="Через месяц или более">
                <span class="quiz-option__circle">
                  <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_130_577)">
                      <path d="M2.24121 5.49099L4.90521 8.15299L10.7662 2.29199"
                        stroke="currentColor" stroke-width="3" stroke-linecap="round" />
                    </g>
                  </svg>
                </span>
                <span style="display: block;" class="quiz-option__text">
                  Через месяц <br>
                  или более
                </span>
              </label>
              <label class="quiz-option quiz-option1" data-next="4">
                <input type="radio" name="step3" required value="Затрудняюсь ответить">
                <span class="quiz-option__circle">
                  <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_130_577)">
                      <path d="M2.24121 5.49099L4.90521 8.15299L10.7662 2.29199"
                        stroke="currentColor" stroke-width="3" stroke-linecap="round" />
                    </g>
                  </svg>
                </span>
                <span style="display: block;" class="quiz-option__text">
                  Затрудняюсь <br>
                  ответить
                </span>
              </label>
            </div>
            <button class="next-step _main-btn _orange-btn">На следующий шаг</button>
          </div>
          <div class="quiz-step quiz-step1 step-4">
            <h3 class="quiz-step__title">04. Выберите подарок при заказе оклейки</h3>
            <div class="quiz-options">
              <label class="quiz-option quiz-option1" data-next="5">
                <input type="radio" name="step4" required value="Оклейка порога" id="step4-1">
                <span class="quiz-option__image">
                  <span class="_image-abs">
                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-04form/step4/porog.webp"
                      alt=" Изображение - Оклейка порога">
                  </span>
                </span>
                <span class="quiz-option__circle">
                  <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_130_577)">
                      <path d="M2.24121 5.49099L4.90521 8.15299L10.7662 2.29199"
                        stroke="currentColor" stroke-width="3" stroke-linecap="round" />
                    </g>
                  </svg>
                </span>
                <span style="display: block;" class="quiz-option__text">
                  Оклейка порога
                </span>
              </label>
              <label class="quiz-option quiz-option1" data-next="5">
                <input type="radio" name="step4" required value="Оклейка фар" id="step4-2">
                <span class="quiz-option__image">
                  <span class="_image-abs">
                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-04form/step4/fara.webp" alt=" Изображение - Оклейка фар">
                  </span>
                </span>
                <span class="quiz-option__circle">
                  <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_130_577)">
                      <path d="M2.24121 5.49099L4.90521 8.15299L10.7662 2.29199"
                        stroke="currentColor" stroke-width="3" stroke-linecap="round" />
                    </g>
                  </svg>
                </span>
                <span style="display: block;" class="quiz-option__text">
                  Оклейка фар
                </span>
              </label>
              <label class="quiz-option quiz-option1" data-next="5">
                <input type="radio" name="step4" required value="Мойка кузова" id="step4-3">
                <span class="quiz-option__image">
                  <span class="_image-abs">
                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-04form/step4/kuzov.webp"
                      alt=" Изображение - Мойка кузова">
                  </span>
                </span>
                <span class="quiz-option__circle">
                  <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_130_577)">
                      <path d="M2.24121 5.49099L4.90521 8.15299L10.7662 2.29199"
                        stroke="currentColor" stroke-width="3" stroke-linecap="round" />
                    </g>
                  </svg>
                </span>
                <span style="display: block;" class="quiz-option__text">
                  Мойка кузова
                </span>
              </label>
              <label class="quiz-option quiz-option1" data-next="5">
                <input type="radio" name="step4" required value="Выберу подарок позже"
                  id="step4-4">
                <span class="quiz-option__image">
                  <span class="_image-abs">
                    <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-04form/step1/ne_znayu.webp"
                      alt=" Изображение - Выберу подарок позже">
                  </span>
                </span>
                <span class="quiz-option__circle">
                  <svg width="13" height="11" viewBox="0 0 13 11" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_130_577)">
                      <path d="M2.24121 5.49099L4.90521 8.15299L10.7662 2.29199"
                        stroke="currentColor" stroke-width="3" stroke-linecap="round" />
                    </g>
                  </svg>
                </span>
                <span style="display: block;" class="quiz-option__text">
                  Выберу подарок позже
                </span>
              </label>
            </div>
            <button class="next-step _main-btn _orange-btn">На следующий шаг</button>
          </div>
          <div class="quiz-step quiz-step1 step-5">
            <div class="quiz-step__background">
              <div class="_image-abs">
                <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-04form/phone.webp" alt=" Изображение - телефон на фон">
              </div>
            </div>
            <h3 class="quiz-step__title">
              <span>Спасибо за ответы!</span> <br>
              Специалист уже приступил <br>
              к формированию стоимости
            </h3>
            <p class="quiz-step__subtitle">
              Оставьте контакты и получите:
            </p>
            <ul class="quiz-step__list">
              <li>
                <p class="quiz-option__text">стоимость оклейки по выбранным параметрам</p>
              </li>
              <li>
                <p class="quiz-option__text">подарок:&nbsp;<span id="gift-value"></span></p>
              </li>
            </ul>
            <p class="quiz-step__method">
              Каким способом вам удобнее получить <br>
              информацию от специалиста?
            </p>
            <div class="sec-6__form-methodbox sec-12__form-methodbox">
              <input class="sec-6__form-method sec-12__form-method" checked required name="method"
                id="method-elementquiz1" type="radio" value="Телефон">
              <label class="sec-6__form-social sec-12__form-social _transparent-btn _callbtn"
                for="method-elementquiz1">
                <svg width="14" height="22" viewBox="0 0 14 22" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_130_1508)">
                    <path
                      d="M9.88676 21.9893H3.87215C3.83445 21.9785 3.79138 21.9571 3.75368 21.9517C1.63215 21.6727 0.0113762 19.8805 0.00599159 17.7556C0.000606971 13.2483 0.000606971 8.74097 0.00599159 4.23366C0.0113762 2.44146 1.18522 0.826341 2.88138 0.252195C3.20445 0.144878 3.54368 0.0858537 3.87215 0C5.87522 0 7.88368 0 9.88676 0C9.92445 0.0107317 9.96753 0.0321951 10.0052 0.037561C11.7875 0.273659 13.2145 1.5561 13.6345 3.30537C13.6775 3.49317 13.7152 3.68098 13.7529 3.86341V18.1205C13.7421 18.158 13.7206 18.201 13.7152 18.2385C13.4568 19.8966 12.5468 21.0556 10.996 21.6888C10.646 21.8337 10.2583 21.8873 9.88676 21.9839V21.9893ZM12.0352 11.0161C12.0352 8.80537 12.0352 6.59463 12.0352 4.3839C12.0352 2.83854 10.9152 1.71707 9.36445 1.71707C7.71138 1.71707 6.0583 1.71707 4.40522 1.71707C2.84368 1.71707 1.72368 2.83317 1.72368 4.38927C1.72368 8.78927 1.72368 13.1893 1.72368 17.5946C1.72368 19.1561 2.84368 20.2722 4.39984 20.2722C6.04753 20.2722 7.69522 20.2722 9.33753 20.2722C10.9152 20.2722 12.0298 19.1615 12.0298 17.5893C12.0298 15.4 12.0298 13.2107 12.0298 11.0215L12.0352 11.0161Z"
                      fill="#999999" />
                    <path
                      d="M6.88672 3.43457C7.16672 3.43457 7.44672 3.43457 7.72134 3.43457C8.22211 3.43994 8.59903 3.81555 8.59365 4.30384C8.59365 4.77603 8.21672 5.14628 7.72672 5.15164C7.16134 5.15701 6.59595 5.15701 6.03057 5.15164C5.5298 5.15164 5.15288 4.7653 5.15826 4.28238C5.15826 3.81018 5.53518 3.43994 6.02518 3.43457C6.31057 3.43457 6.59595 3.43457 6.88134 3.43457H6.88672Z"
                      fill="#999999" />
                    <path
                      d="M6.88128 18.5554C6.60128 18.5554 6.32128 18.5554 6.04666 18.5554C5.54051 18.55 5.16359 18.1852 5.1582 17.7022C5.1582 17.2193 5.53513 16.8437 6.0359 16.8383C6.60128 16.8383 7.16666 16.833 7.73205 16.8383C8.22205 16.8383 8.59359 17.2139 8.59897 17.6915C8.59897 18.1637 8.22743 18.5447 7.74282 18.5554C7.45743 18.5608 7.17205 18.5554 6.88666 18.5554H6.88128Z"
                      fill="#999999" />
                  </g>
                </svg>
                Телефон
              </label>
              <input class="sec-6__form-method sec-12__form-method" name="method"
                id="method-elementquiz2" type="radio" value="WhatsApp">
              <label class="sec-6__form-social sec-12__form-social _transparent-btn _whatsapp"
                for="method-elementquiz2">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_130_1005)">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M16.7023 2.85581C14.8651 1.01395 12.4186 0 9.81395 0C4.45116 0 0.0837209 4.36744 0.0837209 9.73488C0.0837209 11.4512 0.530233 13.1256 1.3814 14.6L0 19.6465L5.15814 18.293C6.5814 19.0698 8.1814 19.4791 9.8093 19.4791C15.1721 19.4791 19.5395 15.1116 19.5442 9.74419C19.5442 7.14419 18.5349 4.69767 16.6977 2.85581H16.7023ZM9.8186 17.8326C8.36744 17.8326 6.94419 17.4419 5.70233 16.707L5.4093 16.5302L2.34884 17.3349L3.16744 14.3488L2.97674 14.0419C2.16744 12.7535 1.73953 11.2651 1.73953 9.73488C1.73953 5.27442 5.37209 1.64651 9.83256 1.64651C11.9953 1.64651 14.0233 2.48837 15.5535 4.0186C17.0837 5.54884 17.9209 7.5814 17.9209 9.74419C17.9209 14.2047 14.2884 17.8372 9.82791 17.8372L9.8186 17.8326ZM14.2558 11.7721C14.014 11.6512 12.8186 11.0605 12.5953 10.9814C12.3721 10.9023 12.2093 10.8605 12.0465 11.1023C11.8837 11.3442 11.4186 11.893 11.2744 12.0558C11.1302 12.2186 10.9907 12.2372 10.7488 12.1163C10.507 11.9953 9.72093 11.7395 8.7907 10.907C8.06977 10.2605 7.58139 9.46512 7.43721 9.22326C7.29767 8.9814 7.43721 8.86047 7.54419 8.72558C7.8093 8.4 8.06977 8.05581 8.15349 7.89302C8.23256 7.73023 8.19535 7.5907 8.13488 7.46512C8.07442 7.34419 7.58605 6.14419 7.38605 5.66047C7.1907 5.18605 6.98605 5.25116 6.83721 5.24186C6.69767 5.23256 6.53488 5.23256 6.37209 5.23256C6.2093 5.23256 5.94419 5.29302 5.72558 5.53488C5.50233 5.77674 4.87442 6.36744 4.87442 7.56279C4.87442 8.75814 5.74419 9.91628 5.86977 10.0791C5.99535 10.2419 7.58605 12.6977 10.0233 13.7535C10.6047 14.0047 11.0558 14.1535 11.4093 14.2651C11.9907 14.4512 12.5209 14.4233 12.9395 14.3628C13.4047 14.293 14.3767 13.7721 14.5814 13.2047C14.786 12.6372 14.786 12.1488 14.7209 12.0465C14.6605 11.9442 14.4977 11.8837 14.2558 11.7628V11.7721Z"
                      fill="white" />
                  </g>
                </svg>
                WhatsApp
              </label>
            </div>
            <div class="sec-6__form-inputs">
              <input class="sec-6__form-number" name="phone" type="tel" required
                placeholder="Введите ваш телефон">
              <button type="submit" class="sec-6__form-submit _main-btn _orange-btn">
                Получить расчет стоимости + подарок
              </button>
              <div class="sec-6__form-policy">
                <input class="sec-12__form-checkbox" checked required type="checkbox"
                  name="checkbox" id="checkbox-elementquiz">
                <label class="sec-6__form-accept sec-12__form-accept"
                  for="checkbox-elementquiz">
                  <span>
                    <svg width="11" height="8" viewBox="0 0 11 8" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M9.74334 2.50072L5.50034 6.74572C5.10934 7.13672 4.47634 7.13672 4.08634 6.74572L1.25734 3.91372C0.867344 3.52372 0.867344 2.89672 1.25734 2.50072C1.64834 2.10672 2.28134 2.10672 2.67234 2.50072L4.79334 4.62372L8.32834 1.08772C8.71934 0.694719 9.35234 0.694719 9.74334 1.08772C10.1333 1.48372 10.1333 2.10672 9.74334 2.50072Z"
                        fill="#F37021" />
                    </svg>
                  </span> Я принимаю условия <a class="sec-12__form-link" data-fancybox
                    href="#policy">политики конфиденциальности</a>
                </label>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  <div class="wrapper-brown">
    <section class="verified-materials">
      <div class="container">
        <h2 class="verified-materials__title _title">
          Используем только проверенные<br>
          материалы от ведущих мировых<br>
          производителей
        </h2>
      </div>
      <div class="cursor">
        <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
      </div>
      <div class="verified-materials__elems-wrapper">
        <div class="container">
          <div class="verified-materials__elems">
            <div class="verified-materials__elem">
              <div class="verified-materials__elem-icon">
                <?php include(get_template_directory() . '/assets/images/icons/verified-materials-1.svg'); ?>
              </div>
              <div class="verified-materials__elem-info">
                <h4 class="verified-materials__elem-title">
                  Толщина пленок<br>
                  от 200 микрон,
                </h4>
                <p class="verified-materials__elem-text">
                  что обеспечивает надежную<br>
                  защиту и долговечность
                </p>
              </div>
            </div>
            <div class="verified-materials__elem">
              <div class="verified-materials__elem-icon">
                <?php include(get_template_directory() . '/assets/images/icons/verified-materials-2.svg'); ?>
              </div>
              <div class="verified-materials__elem-info">
                <h4 class="verified-materials__elem-title">
                  С каждым производителем<br>
                  сотрудничаем более 5 лет,
                </h4>
                <p class="verified-materials__elem-text">
                  а долговечность пленок<br>
                  протестирована на наших<br>
                  собственных автомобилях
                </p>
              </div>
            </div>
            <div class="verified-materials__elem">
              <div class="verified-materials__elem-icon">
                <?php include(get_template_directory() . '/assets/images/icons/verified-materials-3.svg'); ?>
              </div>
              <div class="verified-materials__elem-info">
                <h4 class="verified-materials__elem-title">
                  Большое разнообразие<br>
                  пленок в наличии,
                </h4>
                <p class="verified-materials__elem-text">
                  что позволяет приступить<br>
                  к оклейке уже сегодня
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="cursor">
          <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
        </div>
        <div class="verified-materials__partners">
          <div class="verified-materials__partner">
            <img class="verified-materials__partner-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/verified-materials-1.webp" alt="">
          </div>
          <div class="verified-materials__partner">
            <img class="verified-materials__partner-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/verified-materials-2.webp" alt="">
          </div>
          <div class="verified-materials__partner">
            <img class="verified-materials__partner-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/verified-materials-3.webp" alt="">
          </div>
          <div class="verified-materials__partner">
            <img class="verified-materials__partner-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/verified-materials-4.webp" alt="">
          </div>
          <div class="verified-materials__partner">
            <img class="verified-materials__partner-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/verified-materials-5.webp" alt="">
          </div>
        </div>
        <div class="cursor">
          <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
        </div>
        <div class="verified-materials__items">
          <div class="verified-materials__item">
            <div class="verified-materials__item-wrapper">
              <img class="verified-materials__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/verified-materials-item-1.webp" alt="">
            </div>
            <div class="verified-materials__item-info">
              <h4 class="verified-materials__item-title">
                Глянцевые пленки
              </h4>
              <p class="verified-materials__item-text">
                — придают кузову яркий блеск,<br> усиливая глубину цвета и создавая<br> эффект зеркальной поверхности
              </p>
              <a class="verified-materials__item-btn _main-btn" href="#">
                Рассчитать стоимость<br>
                оклейки глянцевой пленкой
              </a>
            </div>
          </div>
          <div class="verified-materials__item">
            <div class="verified-materials__item-wrapper">
              <img class="verified-materials__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/verified-materials-item-2.webp" alt="">
            </div>
            <div class="verified-materials__item-info">
              <h4 class="verified-materials__item-title">
                Матовые пленки
              </h4>
              <p class="verified-materials__item-text">
                — придают автомобилю стильный<br>
                и современный вид, подчеркивая<br>
                его формы
              </p>
              <a class="verified-materials__item-btn _main-btn" href="#">
                Рассчитать стоимость<br>
                оклейки матовой пленкой
              </a>
            </div>
          </div>
          <div class="verified-materials__item">
            <div class="verified-materials__item-wrapper">
              <img class="verified-materials__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/verified-materials-item-3.webp" alt="">
            </div>
            <div class="verified-materials__item-info">
              <h4 class="verified-materials__item-title">
                Цветные пленки
              </h4>
              <p class="verified-materials__item-text">
                — позволяют изменить цвет<br>
                кузова, при этом сохраняя<br>
                защитные свойства
              </p>
              <a class="verified-materials__item-btn _main-btn" href="#">
                Рассчитать стоимость<br>
                оклейки цветной пленкой
              </a>
            </div>
          </div>
          <div class="verified-materials__item">
            <div class="verified-materials__item-wrapper">
              <img class="verified-materials__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/verified-materials-item-4.webp" alt="">
            </div>
            <div class="verified-materials__item-info">
              <h4 class="verified-materials__item-title">
                Винилография
              </h4>
              <p class="verified-materials__item-text">
                — нанесение декоративных<br> виниловых пленок для создания<br> уникального дизайна Винилография
              </p>
              <a class="verified-materials__item-btn _main-btn" href="#">
                Рассчитать стоимость<br>
                винилографии
              </a>
            </div>
          </div>
          <div class="verified-materials__item">
            <div class="verified-materials__item-wrapper">
              <img class="verified-materials__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/verified-materials-item-5.webp" alt="">
            </div>
            <div class="verified-materials__item-info">
              <h4 class="verified-materials__item-title">
                Перламутровые пленки
              </h4>
              <p class="verified-materials__item-text">
                — создают эффект переливающихся<br> цветов, добавляя автомобилю<br> эксклюзивности
              </p>
              <a class="verified-materials__item-btn _main-btn" href="#">
                Рассчитать стоимость<br>
                оклейки перламутровой пленкой
              </a>
            </div>
          </div>
          <div class="verified-materials__item">
            <div class="verified-materials__item-wrapper">
              <img class="verified-materials__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/verified-materials-item-6.webp" alt="">
            </div>
            <div class="verified-materials__item-info">
              <h4 class="verified-materials__item-title">
                Карбоновые пленки
              </h4>
              <p class="verified-materials__item-text">
                — виниловое покрытие,<br> имитирующее текстуру и внешний<br> вид карбона
              </p>
              <a class="verified-materials__item-btn _main-btn" href="#">
                Рассчитать стоимость<br>
                оклейки карбоновой пленкой
              </a>
            </div>
          </div>
        </div>
        <div class="verified-materials__blocks">
          <div class="verified-materials__block">
            <h4 class="verified-materials__block-title">
              Хотите <span>частично восстановить<br></span>
              уже нанесенную пленку?
            </h4>
            <p class="verified-materials__block-text">'
              Подберем пленку, учитывая все особенности<br>
              оригинала — цвет, текстуру и производителя
            </p>
            <a class="verified-materials__block-btn _main-btn" href="#">
              Рассчитать стоимость<br>
              восстановления пленки
            </a>
          </div>
          <div class="verified-materials__block">
            <h4 class="verified-materials__block-title">
              Хотите <span>улучшить состояние<br></span>
              и внешний вид пленки?
            </h4>
            <p class="verified-materials__block-text">'
              Проведет детейлинг-мойку, полировку пленки<br>
              и нанесение покрытия для блеска
            </p>
            <a class="verified-materials__block-btn _main-btn" href="#">
              Рассчитать стоимость<br>
              улучшения состояния пленки
            </a>
          </div>
        </div>
      </div>
    </section>
    <div class="divider"></div>
    <section class="section sec-6">
      <div class="sec-6__container container">
        <h2 class="sec-6__title _title">
          Возможна полная оклейка авто <br>
          или оклейка отдельных элементов
        </h2>
        <p class="sec-6__subtitle _subtitle">
          Вы можете выбрать необходимые элементы <br>
          и ниже получить расчет стоимости
        </p>
        <form action="#" class="form sec-6__form form form-submit">
          <input type="hidden" name="newToken" value="<?php echo (rand(10000, 99999)) ?>">
          <input type="hidden" name="from" value="Получить расчет стоимости оклейки выбранных элементов">
          <div class="cursor sec-6__catalog-cursor">
            <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
          </div>
          <div class="sec-6__catalog">
            <div class="sec-6__element">
              <div class="sec-6__element-image">
                <div class="_image-abs">
                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-06/element01.webp"
                    alt=" Изображение - Изображение -  отдельного элемента для оклейки">
                </div>
              </div>
              <input id="element01" type="checkbox" class="sec-6__element-checkbox" name="element[]" value="Кузов автомобиля">
              <div class="sec-6__element-textbox">
                <p class="sec-6__element-title">
                  Кузов автомобиля
                </p>
                <p class="sec-6__element-info">
                  для защиты зон с высоким <br>
                  риском повреждений: <br>
                  капота, бампера, крыльев
                </p>
                <label for="element01" class="sec-6__element-button _main-btn">выбрать
                  элемент</label>
              </div>
            </div>
            <div class="sec-6__element">
              <div class="sec-6__element-image">
                <div class="_image-abs">
                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-06/element02.webp"
                    alt=" Изображение - Изображение -  отдельного элемента для оклейки">
                </div>
              </div>
              <input id="element02" type="checkbox" class="sec-6__element-checkbox" name="element[]" value="">
              <div class="sec-6__element-textbox">
                <p class="sec-6__element-title">
                  Фары и оптика
                </p>
                <p class="sec-6__element-info">
                  для защиты от царапин, <br>
                  сколов и помутнения
                </p>
                <label for="element02" class="sec-6__element-button _main-btn">выбрать
                  элемент</label>
              </div>
            </div>
            <div class="sec-6__element">
              <div class="sec-6__element-image">
                <div class="_image-abs">
                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-06/element03.webp"
                    alt=" Изображение - Изображение -  отдельного элемента для оклейки">
                </div>
              </div>
              <input id="element03" type="checkbox" class="sec-6__element-checkbox" name="element[]" value="Декоративные элементы кузова">
              <div class="sec-6__element-textbox">
                <p class="sec-6__element-title">
                  Декоративные <br>
                  элементы кузова
                </p>
                <p class="sec-6__element-info">
                  спойлер, хромированные <br>
                  накладки, молдинги, ручки <br>
                  дверей для доп. защиты
                </p>
                <label for="element03" class="sec-6__element-button _main-btn">выбрать
                  элемент</label>
              </div>
            </div>
            <div class="sec-6__element">
              <div class="sec-6__element-image">
                <div class="_image-abs">
                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-06/element04.webp"
                    alt=" Изображение - Изображение -  отдельного элемента для оклейки">
                </div>
              </div>
              <input id="element04" type="checkbox" class="sec-6__element-checkbox" name="element[]" value="Дверные проемы и пороги">
              <div class="sec-6__element-textbox">
                <p class="sec-6__element-title">
                  Дверные проемы <br>
                  и пороги
                </p>
                <p class="sec-6__element-info">
                  для защиты от царапин, <br>
                  возникающих при посадке <br>
                  в автомобиль
                </p>
                <label for="element04" class="sec-6__element-button _main-btn">выбрать
                  элемент</label>
              </div>
            </div>
            <div class="sec-6__element">
              <div class="sec-6__element-image">
                <div class="_image-abs">
                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-06/element05.webp"
                    alt=" Изображение - Изображение -  отдельного элемента для оклейки">
                </div>
              </div>
              <input id="element05" type="checkbox" class="sec-6__element-checkbox" name="element[]" value="Крыша и стойки">
              <div class="sec-6__element-textbox">
                <p class="sec-6__element-title">
                  Крыша и стойки
                </p>
                <p class="sec-6__element-info">
                  для защиты при плохих <br>
                  погодных условиях, таких <br>
                  как град
                </p>
                <label for="element05" class="sec-6__element-button _main-btn">выбрать
                  элемент</label>
              </div>
            </div>
            <div class="sec-6__element">
              <div class="sec-6__element-image">
                <div class="_image-abs">
                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-06/element06.webp"
                    alt=" Изображение - Изображение -  отдельного элемента для оклейки">
                </div>
              </div>
              <input id="element06" type="checkbox" class="sec-6__element-checkbox" name="element[]" value="Капот и багажник">
              <div class="sec-6__element-textbox">
                <p class="sec-6__element-title">
                  Капот и багажник
                </p>
                <p class="sec-6__element-info">
                  для защиты от гравия, <br>
                  веток и дорожного <br>
                  мусора
                </p>
                <label for="element06" class="sec-6__element-button _main-btn">выбрать
                  элемент</label>
              </div>
            </div>
            <div class="sec-6__element">
              <div class="sec-6__element-image">
                <div class="_image-abs">
                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-06/element07.webp"
                    alt=" Изображение - Изображение -  отдельного элемента для оклейки">
                </div>
              </div>
              <input id="element07" type="checkbox" class="sec-6__element-checkbox" name="element[]" value="Бамперы">
              <div class="sec-6__element-textbox">
                <p class="sec-6__element-title">
                  Бамперы
                </p>
                <p class="sec-6__element-info">
                  для максимально <br>
                  уязвимых зон при <br>
                  парковке и движении
                </p>
                <label for="element07" class="sec-6__element-button _main-btn">выбрать
                  элемент</label>
              </div>
            </div>
            <div class="sec-6__element">
              <div class="sec-6__element-image">
                <div class="_image-abs">
                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-06/element08.webp"
                    alt=" Изображение - Изображение -  отдельного элемента для оклейки">
                </div>
              </div>
              <input id="element08" type="checkbox" class="sec-6__element-checkbox" name="element[]" value="Колесные арки и зоны перед задними колесами">
              <div class="sec-6__element-textbox">
                <p class="sec-6__element-title">
                  Колесные арки и <br>
                  зоны перед задними <br>
                  колесами
                </p>
                <p class="sec-6__element-info">
                  для предотвращения <br>
                  сколов от песка, камней <br>
                  и грязи
                </p>

                <label for="element08" class="sec-6__element-button _main-btn">выбрать
                  элемент</label>
              </div>
            </div>
            <div class="sec-6__element">
              <div class="sec-6__element-image">
                <div class="_image-abs">
                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-06/element09.webp"
                    alt=" Изображение - Изображение -  отдельного элемента для оклейки">
                </div>
              </div>
              <input id="element09" type="checkbox" class="sec-6__element-checkbox" name="element[]" value="Зеркала заднего вида">
              <div class="sec-6__element-textbox">
                <p class="sec-6__element-title">
                  Зеркала <br>
                  заднего вида
                </p>
                <p class="sec-6__element-info">
                  для предотвращения <br>
                  потертостей <br>
                  и повреждений <br>
                  от мелких ударов
                </p>
                <label for="element09" class="sec-6__element-button _main-btn">выбрать
                  элемент</label>
              </div>
            </div>
            <div class="sec-6__element">
              <div class="sec-6__element-image">
                <div class="_image-abs">
                  <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-06/element10.webp"
                    alt=" Изображение - Изображение -  отдельного элемента для оклейки">
                </div>
              </div>
              <input id="element10" type="checkbox" class="sec-6__element-checkbox" name="element[]" value="Иные элементы салона">
              <div class="sec-6__element-textbox">
                <p class="sec-6__element-title">
                  Иные элементы <br>
                  салона
                </p>
                <p class="sec-6__element-info">
                  включая мониторы <br>
                  и иные элементы для <br>
                  защиты от царапин
                </p>
                <label for="element10" class="sec-6__element-button _main-btn">выбрать
                  элемент</label>
              </div>
            </div>
          </div>
          <div class="sec-6__form-layout">
            <div class="sec-6__form-image">
              <div class="_image-abs">
                <img class="_tablet01 _active" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-06/layout/tablet01.webp"
                  alt=" Изображение - планшет со скриншотом в форму">
                <img class="_tablet02" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-06/layout/tablet02.webp"
                  alt=" Изображение - планшет со скриншотом в форму">
                <img class="_tablet03" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-06/layout/tablet03.webp"
                  alt=" Изображение - планшет со скриншотом в форму">
              </div>
            </div>
            <p class="sec-6__form-title">
              <span class="_dinamic-title">Вы выбрали</span> <span class="_dinamic-number">3
                элемента</span> <br>
              оклейки автомобиля
            </p>
            <p class="sec-6__form-subtitle">
              Получите расчет стоимости оклейки <br>
              в мессенджере в течение 2-х минут
            </p>
            <p class="sec-6__form-li">
              Выберите способ связи:
            </p>
            <div class="sec-6__form-methodbox sec-12__form-methodbox">
              <input class="sec-6__form-method sec-12__form-method" checked required name="method"
                id="method-element1" type="radio" value="Телефон">
              <label class="sec-6__form-social sec-12__form-social _transparent-btn _callbtn"
                for="method-element1">
                <svg width="14" height="22" viewBox="0 0 14 22" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_130_1508)">
                    <path
                      d="M9.88676 21.9893H3.87215C3.83445 21.9785 3.79138 21.9571 3.75368 21.9517C1.63215 21.6727 0.0113762 19.8805 0.00599159 17.7556C0.000606971 13.2483 0.000606971 8.74097 0.00599159 4.23366C0.0113762 2.44146 1.18522 0.826341 2.88138 0.252195C3.20445 0.144878 3.54368 0.0858537 3.87215 0C5.87522 0 7.88368 0 9.88676 0C9.92445 0.0107317 9.96753 0.0321951 10.0052 0.037561C11.7875 0.273659 13.2145 1.5561 13.6345 3.30537C13.6775 3.49317 13.7152 3.68098 13.7529 3.86341V18.1205C13.7421 18.158 13.7206 18.201 13.7152 18.2385C13.4568 19.8966 12.5468 21.0556 10.996 21.6888C10.646 21.8337 10.2583 21.8873 9.88676 21.9839V21.9893ZM12.0352 11.0161C12.0352 8.80537 12.0352 6.59463 12.0352 4.3839C12.0352 2.83854 10.9152 1.71707 9.36445 1.71707C7.71138 1.71707 6.0583 1.71707 4.40522 1.71707C2.84368 1.71707 1.72368 2.83317 1.72368 4.38927C1.72368 8.78927 1.72368 13.1893 1.72368 17.5946C1.72368 19.1561 2.84368 20.2722 4.39984 20.2722C6.04753 20.2722 7.69522 20.2722 9.33753 20.2722C10.9152 20.2722 12.0298 19.1615 12.0298 17.5893C12.0298 15.4 12.0298 13.2107 12.0298 11.0215L12.0352 11.0161Z"
                      fill="#999999" />
                    <path
                      d="M6.88672 3.43457C7.16672 3.43457 7.44672 3.43457 7.72134 3.43457C8.22211 3.43994 8.59903 3.81555 8.59365 4.30384C8.59365 4.77603 8.21672 5.14628 7.72672 5.15164C7.16134 5.15701 6.59595 5.15701 6.03057 5.15164C5.5298 5.15164 5.15288 4.7653 5.15826 4.28238C5.15826 3.81018 5.53518 3.43994 6.02518 3.43457C6.31057 3.43457 6.59595 3.43457 6.88134 3.43457H6.88672Z"
                      fill="#999999" />
                    <path
                      d="M6.88128 18.5554C6.60128 18.5554 6.32128 18.5554 6.04666 18.5554C5.54051 18.55 5.16359 18.1852 5.1582 17.7022C5.1582 17.2193 5.53513 16.8437 6.0359 16.8383C6.60128 16.8383 7.16666 16.833 7.73205 16.8383C8.22205 16.8383 8.59359 17.2139 8.59897 17.6915C8.59897 18.1637 8.22743 18.5447 7.74282 18.5554C7.45743 18.5608 7.17205 18.5554 6.88666 18.5554H6.88128Z"
                      fill="#999999" />
                  </g>
                </svg>
                Телефон
              </label>
              <input class="sec-6__form-method sec-12__form-method" name="method" id="method-element2"
                type="radio" value="WhatsApp">
              <label class="sec-6__form-social sec-12__form-social _transparent-btn _whatsapp"
                for="method-element2">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_130_1005)">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M16.7023 2.85581C14.8651 1.01395 12.4186 0 9.81395 0C4.45116 0 0.0837209 4.36744 0.0837209 9.73488C0.0837209 11.4512 0.530233 13.1256 1.3814 14.6L0 19.6465L5.15814 18.293C6.5814 19.0698 8.1814 19.4791 9.8093 19.4791C15.1721 19.4791 19.5395 15.1116 19.5442 9.74419C19.5442 7.14419 18.5349 4.69767 16.6977 2.85581H16.7023ZM9.8186 17.8326C8.36744 17.8326 6.94419 17.4419 5.70233 16.707L5.4093 16.5302L2.34884 17.3349L3.16744 14.3488L2.97674 14.0419C2.16744 12.7535 1.73953 11.2651 1.73953 9.73488C1.73953 5.27442 5.37209 1.64651 9.83256 1.64651C11.9953 1.64651 14.0233 2.48837 15.5535 4.0186C17.0837 5.54884 17.9209 7.5814 17.9209 9.74419C17.9209 14.2047 14.2884 17.8372 9.82791 17.8372L9.8186 17.8326ZM14.2558 11.7721C14.014 11.6512 12.8186 11.0605 12.5953 10.9814C12.3721 10.9023 12.2093 10.8605 12.0465 11.1023C11.8837 11.3442 11.4186 11.893 11.2744 12.0558C11.1302 12.2186 10.9907 12.2372 10.7488 12.1163C10.507 11.9953 9.72093 11.7395 8.7907 10.907C8.06977 10.2605 7.58139 9.46512 7.43721 9.22326C7.29767 8.9814 7.43721 8.86047 7.54419 8.72558C7.8093 8.4 8.06977 8.05581 8.15349 7.89302C8.23256 7.73023 8.19535 7.5907 8.13488 7.46512C8.07442 7.34419 7.58605 6.14419 7.38605 5.66047C7.1907 5.18605 6.98605 5.25116 6.83721 5.24186C6.69767 5.23256 6.53488 5.23256 6.37209 5.23256C6.2093 5.23256 5.94419 5.29302 5.72558 5.53488C5.50233 5.77674 4.87442 6.36744 4.87442 7.56279C4.87442 8.75814 5.74419 9.91628 5.86977 10.0791C5.99535 10.2419 7.58605 12.6977 10.0233 13.7535C10.6047 14.0047 11.0558 14.1535 11.4093 14.2651C11.9907 14.4512 12.5209 14.4233 12.9395 14.3628C13.4047 14.293 14.3767 13.7721 14.5814 13.2047C14.786 12.6372 14.786 12.1488 14.7209 12.0465C14.6605 11.9442 14.4977 11.8837 14.2558 11.7628V11.7721Z"
                      fill="white" />
                  </g>
                </svg>
                WhatsApp
              </label>
            </div>
            <div class="sec-6__form-inputs">
              <input class="sec-6__form-number" name="phone" type="tel" required
                placeholder="Введите ваш телефон">
              <button type="submit" class="sec-6__form-submit _main-btn _orange-btn">
                Получить расчет стоимости оклейки <br>
                выбранных элементов
              </button>
              <div class="sec-6__form-policy">
                <input class="sec-12__form-checkbox" checked required type="checkbox"
                  name="checkbox" id="checkbox-element">
                <label class="sec-6__form-accept sec-12__form-accept" for="checkbox-element">
                  <span>
                    <svg width="11" height="8" viewBox="0 0 11 8" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M9.74334 2.50072L5.50034 6.74572C5.10934 7.13672 4.47634 7.13672 4.08634 6.74572L1.25734 3.91372C0.867344 3.52372 0.867344 2.89672 1.25734 2.50072C1.64834 2.10672 2.28134 2.10672 2.67234 2.50072L4.79334 4.62372L8.32834 1.08772C8.71934 0.694719 9.35234 0.694719 9.74334 1.08772C10.1333 1.48372 10.1333 2.10672 9.74334 2.50072Z"
                        fill="#F37021" />
                    </svg>
                  </span> Я принимаю условия <a class="sec-12__form-link" data-fancybox
                    href="#policy">политики конфиденциальности</a>
                </label>
              </div>
            </div>
          </div>
        </form>
      </div>
    </section>
    <div class="space-sec"></div>
  </div>
  <section class="sec-7">
    <div class="sec-7__container container">
      <h2 class="sec-7__title _title">
        Успешно реализуем самые сложные <br>
        и нестандартные проекты
      </h2>
    </div>
    <div class="sec-7__background _image-abs">
      <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-07/background.webp" alt=" Изображение - зеленая машина баннер">
    </div>
    <div class="sec-7__container container relative">
      <div class="sec-7__content">
        <div class="sec-7__card">
          <div class="sec-7__card-textbox">
            <p class="sec-7__card-title _card-title">
              Умеем работать <br>
              с цветным полиуретаном,
            </p>
            <p class="sec-7__card-info _card-info">
              укладывая его без засветов, <br>
              что является сложной задачей <br>
              для большинства студий
            </p>
          </div>
          <div class="sec-7__card-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo-dark.svg" alt=" Изображение - ">
          </div>
        </div>
        <div class="sec-7__card">
          <div class="sec-7__card-textbox">
            <p class="sec-7__card-title _card-title">
              Умеем оклеивать <br>
              сложные автомобили,
            </p>
            <p class="sec-7__card-info _card-info">
              с нестандартными конструктивными <br>
              элементами и большим количество <br>
              деталей
            </p>
          </div>
          <div class="sec-7__card-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo-dark.svg" alt=" Изображение - ">
          </div>
        </div>
        <div class="sec-7__card">
          <div class="sec-7__card-textbox">
            <p class="sec-7__card-title _card-title">
              Выполняем оклейку даже <br>
              нестандартных элементов,
            </p>
            <p class="sec-7__card-info _card-info">
              например, дверных проемов, чтобы <br>
              родной цвет вашего авто остался <br>
              только в подкапотном пространстве
            </p>
          </div>
          <div class="sec-7__card-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo-dark.svg" alt=" Изображение - ">
          </div>
        </div>
      </div>
    </div>
    <div class="sec-7__gallery swiper01 swiper">
      <div class="swiper-wrapper">
        <div class="sec-7__gallery-item swiper-slide">
          <div class="_image-abs">

            <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-07/gallery/project-01.webp" alt=" Изображение - ">
          </div>
        </div>
        <div class="sec-7__gallery-item swiper-slide">
          <div class="_image-abs">
            <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-07/gallery/project-02.webp" alt=" Изображение - ">
          </div>
        </div>
        <div class="sec-7__gallery-item swiper-slide">
          <div class="_image-abs">
            <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-07/gallery/project-03.webp" alt=" Изображение - ">
          </div>
        </div>
        <div class="sec-7__gallery-item swiper-slide">
          <div class="_image-abs">
            <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-07/gallery/project-04.webp" alt=" Изображение - ">
          </div>
        </div>
        <div class="sec-7__gallery-item swiper-slide">
          <div class="_image-abs">
            <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-07/gallery/project-05.webp" alt=" Изображение - ">
          </div>
        </div>
        <div class="sec-7__gallery-item swiper-slide">
          <div class="_image-abs">
            <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-07/gallery/project-01.webp" alt=" Изображение - ">
          </div>
        </div>
        <div class="sec-7__gallery-item swiper-slide">
          <div class="_image-abs">
            <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-07/gallery/project-02.webp" alt=" Изображение - ">
          </div>
        </div>
        <div class="sec-7__gallery-item swiper-slide">
          <div class="_image-abs">
            <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-07/gallery/project-03.webp" alt=" Изображение - ">
          </div>
        </div>
        <div class="sec-7__gallery-item swiper-slide">
          <div class="_image-abs">
            <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-07/gallery/project-04.webp" alt=" Изображение - ">
          </div>
        </div>
        <div class="sec-7__gallery-item swiper-slide">
          <div class="_image-abs">
            <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-07/gallery/project-05.webp" alt=" Изображение - ">
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section sec-8 _sec-light">
    <div class="sec-8__container container">
      <h2 class="sec-8__title _title">
        Гарантируем безупречный результат
      </h2>
      <p class="sec-8__subtitle _subtitle">
        без зазоров, изгибов и засветов даже на самых сложных автомобилях
      </p>
      <div class="cursor">
        <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
      </div>
      <div class="sec-8__content">
        <div class="sec-8__item">
          <div class="_image-abs">
            <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-08/masters.webp" alt=" Изображение - ">
          </div>
          <div class="sec-8__item-textbox">
            <p class="sec-8__item-title">
              Все мастера — <br>
              штатные сотрудники,
            </p>
            <p class="sec-8__item-info">
              что гарантирует стабильность качества <br>
              и надежность каждого этапа работы
            </p>
          </div>
        </div>
        <div class="sec-8__item">
          <div class="_image-abs">
            <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-08/fixation.webp" alt=" Изображение - ">
          </div>
          <div class="sec-8__item-textbox">
            <p class="sec-8__item-title">
              До старта работ проводим <br>
              фото- и видеофиксацию <br>
              всех элементов,
            </p>
            <p class="sec-8__item-info _card-info">
              которые были установлены на вашем <br>
              автомобиле, чтобы зафиксировать их состояние <br>
              до разборки
            </p>
          </div>
        </div>
        <div class="sec-8__item">
          <div class="_image-abs">
            <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-08/okleika.webp" alt=" Изображение - ">
          </div>
          <div class="sec-8__item-textbox">
            <p class="sec-8__item-title">
              Проводим оклейку с разбором <br>
              только необходимых элементов <br>
              для качественной оклейки
            </p>
            <p class="sec-8__item-info _card-info">
              Строго соблюдаем стандарты при разборке — если <br>
              по регламенту предусмотрены одноразовые клипсы, <br>
              мы обязательно заменим их на новые, оригинальные
            </p>
          </div>
        </div>
        <div class="sec-8__item">
          <div class="_image-abs">
            <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-08/report.webp" alt=" Изображение - ">
          </div>
          <div class="sec-8__item-textbox">
            <p class="sec-8__item-title">
              Ежедневно присылаем <br>
              отчеты о ходе работы, <br>
              в мессенджер фото и видео
            </p>
            <p class="sec-8__item-info _card-info">
              чтобы вы могли следить за процессом и своевременно <br>
              согласовывать дополнительные детали
            </p>
          </div>
        </div>
        <div class="sec-8__item">
          <div class="_image-abs">
            <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-08/photofix.webp" alt=" Изображение - ">
          </div>
          <div class="sec-8__item-textbox">
            <p class="sec-8__item-title">
              В финале работ <br>
              проводим повторную фото- <br>
              и видеофиксацию,
            </p>
            <p class="sec-8__item-info _card-info">
              чтобы вы могли сравнить и убедиться <br>
              в качестве выполненных услуг
            </p>
          </div>
        </div>
        <div class="sec-8__item">
          <div class="_image-abs">
            <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-08/result.webp" alt=" Изображение - ">
          </div>
          <div class="sec-8__item-textbox">
            <p class="sec-8__item-title">
              Финальный результат <br>
              проверяется в 2 этапа
            </p>
            <ul class="sec-8__item-checklist">
              <li>
                <p class="sec-8__item-text _card-info">
                  проверка мастером по 30+ пунктам
                </p>
              </li>
              <li>
                <p class="sec-8__item-text _card-info">
                  проверка главным мастером цеха каждого <br>
                  оклеенного элемента авто по 5 пунктам:
                </p>
              </li>
            </ul>
            <ul class="sec-8__item-list">
              <li>
                <p class="sec-8__item-more">
                  качество реза
                </p>
              </li>
              <li>
                <p class="sec-8__item-more">
                  отсутствие мусора
                </p>
              </li>
              <li>
                <p class="sec-8__item-more">
                  отсутствие пузырей
                </p>
              </li>
              <li>
                <p class="sec-8__item-more">
                  качество укладки
                </p>
              </li>
              <li>
                <p class="sec-8__item-more">
                  отсутствие клеевых растяжек
                </p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="wrapper-brown">
    <section class="quality-pasting">
      <div class="container">
        <h2 class="quality-pasting__title _title">
          Хотите увидеть процесс лично<br>
          и убедиться в качестве оклейки?
        </h2>
        <div class="quality-pasting__items">
          <div class="quality-pasting__item">
            <div class="quality-pasting__item-wrapper">
              <img class="quality-pasting__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-09/excurs.webp" alt="">
            </div>
            <div class="quality-pasting__item-info">
              <h4 class="quality-pasting__item-title">
                Проведем экскурсию<br>
                по детейлинг-студии
              </h4>
              <p class="quality-pasting__item-text">
                Приглашаем вас посетить нашу<br> студию, где вы сможете увидеть <br>автомобили, находящиеся в работе,<br>
                и ознакомиться с процессом<br> разборки и сборки
              </p>
              <address class="footer__col-address quality-pasting__item-address">
                <?php include(get_template_directory() . '/assets/images/icons/geo.svg'); ?>
                <p>ул. Архитектора Щусева, 5, к1</p>
              </address>
              <a class="quality-pasting__item-btn _main-btn" href="">
                Записаться на экскурсию<br>
                по детелинг-студии
              </a>
            </div>
          </div>
          <div class="quality-pasting__item">
            <div class="quality-pasting__item-info">
              <h4 class="quality-pasting__item-title">
                Предоставим видеоотчеты<br>
                выполненных оклеек,
              </h4>
              <p class="quality-pasting__item-text">
                в которых вы увидите все этапы —<br>
                от процесса разборки до оклейки<br>
                и сборки автомобиля
              </p>
              <a class="quality-pasting__item-btn _main-btn" href="">
                Получить видеоотчеты<br>
                выполненных оклеек
              </a>
            </div>
            <div class="quality-pasting__item-wrapper">
              <img class="quality-pasting__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-09/report.webp" alt="">
            </div>
          </div>
          <div class="quality-pasting__item">
            <div class="quality-pasting__item-wrapper">
              <img class="quality-pasting__item-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-09/translation.webp" alt="">
            </div>
            <div class="quality-pasting__item-info">
              <h4 class="quality-pasting__item-title">
                Организуем онлайн- <br>
                трансляцию из студии<br>
                из детейлинга
              </h4>
              <p class="quality-pasting__item-text">
                Специалист выйдет с вами<br>
                на видеосвязь прямо из студии <br>детейлинга и покажет любой <br>интересующий процесс
              </p>
              <a class="quality-pasting__item-btn _main-btn" href="">
                Согласовать время<br>
                видеосозвона
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="space-sec"></div>
  </div>
  <section class="sec-10">
    <div class="sec-10__background _image-abs">
      <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-10/1top/background.webp" alt=" Изображение - автомобиль в паркинге">
    </div>
    <div class="sec-10__container container relative">
      <h2 class="sec-10__title _title">
        После выполнения работ <br>
        ваш автомобиль будет находиться
      </h2>
      <p class="sec-10__subtitle _subtitle">
        в теплом охраняемом паркинге под видеонаблюдением
      </p>
      <div class="sec-10__content">
        <div class="sec-10__item">
          <div class="_image-abs">
            <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-10/2bottom/osmotr.webp"
              alt=" Изображение - оплата после осмотра обложка">
          </div>
          <div class="sec-10__item-textbox">
            <p class="sec-10__item-title">
              Полную оплату вы <br>
              производите только после <br>
              осмотра автомобиля
            </p>
          </div>
        </div>
        <div class="sec-10__item">
          <div class="_image-abs">
            <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-10/2bottom/free.webp"
              alt=" Изображение - бесплатный контрольный осмотр обложка">
          </div>
          <div class="sec-10__item-textbox">
            <p class="sec-10__item-title">
              Через 2 недели проводим <br>
              бесплатный контрольный осмотр —
            </p>
            <p class="sec-10__item-info _card-info">
              моем ваш авто и проводим осмотр <br>
              состояния пленки
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section sec-11 _sec-light">
    <div class="sec-11__background _image-abs">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-11/background.svg" alt=" Изображение - логотип на фон">
    </div>
    <div class="sec-11__container container relative">
      <div class="sec-11__content">
        <div class="sec-11__element">
          <div class="_image-abs">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-11/docs.webp" alt=" Изображение - документы на фон">
          </div>
        </div>
        <h2 class="sec-11__title _title">
          Гарантия <br>
          действует <br>
          <span>на весь срок <br>
            эксплуатации <br>
            автомобиля:</span>
        </h2>
        <ul class="sec-11__list">
          <li>
            <p class="sec-11__info _card-info">
              гарантия на <span>качество оклейки: </span><br>
              отсутствие вздутий пленки или отклеиваний
            </p>
          </li>
          <li>
            <p class="sec-11__info _card-info">
              гарантия на <span>качество сборки </span>автомобиля
            </p>
          </li>
          <li>
            <p class="sec-11__info _card-info">
              гарантия на <span>оригинальность пленки</span>
            </p>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section class="section sec-12">
    <div class="sec-12__container container">
      <h2 class="sec-12__title _title">
        Получите промокод <br>
        на бесплатную оклейку <br>
        элементов автомобиля
      </h2>
      <div class="sec-12__content">
        <form action="#" class="form sec-12__form form form-submit">
          <input type="hidden" name="newToken" value="<?php echo (rand(10000, 99999)) ?>">
          <input type="hidden" name="from"
            value="получите промокод на бесплатную оклейку элементов автомобиля">
          <p class="sec-12__form-li _li-1">
            1. Выберите вид оклейки и подарок:
          </p>
          <div class="sec-12__form-typebox">
            <input class="sec-12__form-type" checked required name="type" id="type1" type="radio"
              value="При частичной оклейке — защита под ручками или внутреннего водительского порога">
            <label class="sec-12__form-button _transparent-btn" for="type1">
              <span class="sec-12__button-text">При частичной оклейке <span class="sec-12__button-specialize">— защита под ручками <br>
                  или внутреннего водительского порога</span></span>
            </label>
            <input class="sec-12__form-type" name="type" id="type2" type="radio"
              value="При полной оклейке — защита передней оптики">
            <label class="sec-12__form-button _transparent-btn" for="type2">
              <span class="sec-12__button-text">При полной оклейке — <span class="sec-12__button-specialize">защита передней оптики</span></span>
            </label>
          </div>
          <p class="sec-12__form-li _li-2">
            2. Куда вам удобно получить промокод?
          </p>
          <div class="sec-12__form-methodbox">
            <input class="sec-12__form-method" checked required name="method" id="method1"
              type="radio" value="Телефон">
            <label class="sec-12__form-social _transparent-btn _callbtn" for="method1">
              <svg width="14" height="22" viewBox="0 0 14 22" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_130_1508)">
                  <path
                    d="M9.88676 21.9893H3.87215C3.83445 21.9785 3.79138 21.9571 3.75368 21.9517C1.63215 21.6727 0.0113762 19.8805 0.00599159 17.7556C0.000606971 13.2483 0.000606971 8.74097 0.00599159 4.23366C0.0113762 2.44146 1.18522 0.826341 2.88138 0.252195C3.20445 0.144878 3.54368 0.0858537 3.87215 0C5.87522 0 7.88368 0 9.88676 0C9.92445 0.0107317 9.96753 0.0321951 10.0052 0.037561C11.7875 0.273659 13.2145 1.5561 13.6345 3.30537C13.6775 3.49317 13.7152 3.68098 13.7529 3.86341V18.1205C13.7421 18.158 13.7206 18.201 13.7152 18.2385C13.4568 19.8966 12.5468 21.0556 10.996 21.6888C10.646 21.8337 10.2583 21.8873 9.88676 21.9839V21.9893ZM12.0352 11.0161C12.0352 8.80537 12.0352 6.59463 12.0352 4.3839C12.0352 2.83854 10.9152 1.71707 9.36445 1.71707C7.71138 1.71707 6.0583 1.71707 4.40522 1.71707C2.84368 1.71707 1.72368 2.83317 1.72368 4.38927C1.72368 8.78927 1.72368 13.1893 1.72368 17.5946C1.72368 19.1561 2.84368 20.2722 4.39984 20.2722C6.04753 20.2722 7.69522 20.2722 9.33753 20.2722C10.9152 20.2722 12.0298 19.1615 12.0298 17.5893C12.0298 15.4 12.0298 13.2107 12.0298 11.0215L12.0352 11.0161Z"
                    fill="#999999" />
                  <path
                    d="M6.88672 3.43457C7.16672 3.43457 7.44672 3.43457 7.72134 3.43457C8.22211 3.43994 8.59903 3.81555 8.59365 4.30384C8.59365 4.77603 8.21672 5.14628 7.72672 5.15164C7.16134 5.15701 6.59595 5.15701 6.03057 5.15164C5.5298 5.15164 5.15288 4.7653 5.15826 4.28238C5.15826 3.81018 5.53518 3.43994 6.02518 3.43457C6.31057 3.43457 6.59595 3.43457 6.88134 3.43457H6.88672Z"
                    fill="#999999" />
                  <path
                    d="M6.88128 18.5554C6.60128 18.5554 6.32128 18.5554 6.04666 18.5554C5.54051 18.55 5.16359 18.1852 5.1582 17.7022C5.1582 17.2193 5.53513 16.8437 6.0359 16.8383C6.60128 16.8383 7.16666 16.833 7.73205 16.8383C8.22205 16.8383 8.59359 17.2139 8.59897 17.6915C8.59897 18.1637 8.22743 18.5447 7.74282 18.5554C7.45743 18.5608 7.17205 18.5554 6.88666 18.5554H6.88128Z"
                    fill="#999999" />
                </g>
              </svg>
              Телефон
            </label>
            <input class="sec-12__form-method" name="method" id="method2" type="radio"
              value="WhatsApp">
            <label class="sec-12__form-social _transparent-btn _whatsapp" for="method2">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_130_1005)">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M16.7023 2.85581C14.8651 1.01395 12.4186 0 9.81395 0C4.45116 0 0.0837209 4.36744 0.0837209 9.73488C0.0837209 11.4512 0.530233 13.1256 1.3814 14.6L0 19.6465L5.15814 18.293C6.5814 19.0698 8.1814 19.4791 9.8093 19.4791C15.1721 19.4791 19.5395 15.1116 19.5442 9.74419C19.5442 7.14419 18.5349 4.69767 16.6977 2.85581H16.7023ZM9.8186 17.8326C8.36744 17.8326 6.94419 17.4419 5.70233 16.707L5.4093 16.5302L2.34884 17.3349L3.16744 14.3488L2.97674 14.0419C2.16744 12.7535 1.73953 11.2651 1.73953 9.73488C1.73953 5.27442 5.37209 1.64651 9.83256 1.64651C11.9953 1.64651 14.0233 2.48837 15.5535 4.0186C17.0837 5.54884 17.9209 7.5814 17.9209 9.74419C17.9209 14.2047 14.2884 17.8372 9.82791 17.8372L9.8186 17.8326ZM14.2558 11.7721C14.014 11.6512 12.8186 11.0605 12.5953 10.9814C12.3721 10.9023 12.2093 10.8605 12.0465 11.1023C11.8837 11.3442 11.4186 11.893 11.2744 12.0558C11.1302 12.2186 10.9907 12.2372 10.7488 12.1163C10.507 11.9953 9.72093 11.7395 8.7907 10.907C8.06977 10.2605 7.58139 9.46512 7.43721 9.22326C7.29767 8.9814 7.43721 8.86047 7.54419 8.72558C7.8093 8.4 8.06977 8.05581 8.15349 7.89302C8.23256 7.73023 8.19535 7.5907 8.13488 7.46512C8.07442 7.34419 7.58605 6.14419 7.38605 5.66047C7.1907 5.18605 6.98605 5.25116 6.83721 5.24186C6.69767 5.23256 6.53488 5.23256 6.37209 5.23256C6.2093 5.23256 5.94419 5.29302 5.72558 5.53488C5.50233 5.77674 4.87442 6.36744 4.87442 7.56279C4.87442 8.75814 5.74419 9.91628 5.86977 10.0791C5.99535 10.2419 7.58605 12.6977 10.0233 13.7535C10.6047 14.0047 11.0558 14.1535 11.4093 14.2651C11.9907 14.4512 12.5209 14.4233 12.9395 14.3628C13.4047 14.293 14.3767 13.7721 14.5814 13.2047C14.786 12.6372 14.786 12.1488 14.7209 12.0465C14.6605 11.9442 14.4977 11.8837 14.2558 11.7628V11.7721Z"
                    fill="white" />
                </g>
              </svg>
              WhatsApp
            </label>
          </div>
          <p class="sec-12__form-li _li-3">
            3. Введите номер телефона
          </p>
          <div class="sec-12__form-inputs">
            <input class="sec-12__form-number" name="phone" type="tel" required
              placeholder="Введите ваш телефон">
            <button type="submit" class="sec-12__form-submit _main-btn _orange-btn">
              Получить промокод
            </button>
            <div class="sec-12__form-policy">
              <input class="sec-12__form-checkbox" checked required type="checkbox"
                name="checkbox" id="checkbox1">
              <label class="sec-12__form-accept" for="checkbox1">
                <span>
                  <svg width="11" height="8" viewBox="0 0 11 8" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M9.74334 2.50072L5.50034 6.74572C5.10934 7.13672 4.47634 7.13672 4.08634 6.74572L1.25734 3.91372C0.867344 3.52372 0.867344 2.89672 1.25734 2.50072C1.64834 2.10672 2.28134 2.10672 2.67234 2.50072L4.79334 4.62372L8.32834 1.08772C8.71934 0.694719 9.35234 0.694719 9.74334 1.08772C10.1333 1.48372 10.1333 2.10672 9.74334 2.50072Z"
                      fill="#F37021" />
                  </svg>
                </span> Я принимаю условия <a class="sec-12__form-link" data-fancybox
                  href="#policy">политики конфиденциальности</a>
              </label>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  <section class="complex-services">
    <div class="container">
      <h2 class="complex-services__title _title">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/logo.svg" alt="logo">
        это полный комплекс услуг<br>
        для самых требовательных<br>
        клиентов
      </h2>
      <div class="complex-services__swiper main-swiper swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide complex-services__slide main-swiper__slide">
            <div class="complex-services__item main-swiper__item default-card">
              <img class="default-card__img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/default-card-28.webp" alt="">
              <div class="overlay"></div>
              <div class="default-card__inner">
                <h4 class="default-card__title">
                  Химчистка<br>
                  автомобиля
                </h4>
              </div>
            </div>
          </div>
          <div class="swiper-slide complex-services__slide">
            <div class="complex-services__item default-card">
              <img class="default-card__img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/default-card-29.webp" alt="">
              <div class="overlay"></div>
              <div class="default-card__inner">
                <h4 class="default-card__title">
                  Полировка<br>
                  автомобиля
                </h4>
              </div>
            </div>
          </div>
          <div class="swiper-slide complex-services__slide">
            <div class="complex-services__item default-card">
              <img class="default-card__img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/default-card-30.webp" alt="">
              <div class="overlay"></div>
              <div class="default-card__inner">
                <h4 class="default-card__title">
                  Нанесение<br>
                  защитных<br>
                  покрытий
                </h4>
                <div class="default-card__usluga-infobox">
                  <ul class="list-point default-card__usluga-box _morebox _noactive" id="more1">
                    <li>
                      <p class="sec-13__usluga-info">
                        керамика
                      </p>
                    </li>
                    <li>
                      <p class="sec-13__usluga-info">
                        антидождь
                      </p>
                    </li>
                    <li>
                      <p class="sec-13__usluga-info">
                        жидкое стекло
                      </p>
                    </li>
                    <li>
                      <p class="sec-13__usluga-info">
                        кварц
                      </p>
                    </li>
                  </ul>
                  <div class="default-card__btns">
                    <a class="default-card__link _main-btn info-more" href="#more1">
                      Подробнее
                    </a>
                    <a class="default-card__info" href="#">
                      <?php include(get_template_directory() . '/assets/images/icons/info.svg'); ?>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide complex-services__slide">
            <div class="complex-services__item default-card">
              <img class="default-card__img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/default-card-31.webp" alt="">
              <div class="overlay"></div>
              <div class="default-card__inner">
                <h4 class="default-card__title">
                  Шумоизоляция
                </h4>
              </div>
            </div>
          </div>
          <div class="swiper-slide complex-services__slide">
            <div class="complex-services__item default-card">
              <img class="default-card__img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/default-card-32.webp" alt="">
              <div class="overlay"></div>
              <div class="default-card__inner">
                <h4 class="default-card__title">
                  Восстановление<br>
                  кузова
                </h4>
              </div>
            </div>
          </div>
          <div class="swiper-slide complex-services__slide">
            <div class="complex-services__item default-card">
              <img class="default-card__img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/default-card-33.webp" alt="">
              <div class="overlay"></div>
              <div class="default-card__inner">
                <h4 class="default-card__title">
                  Антихром
                </h4>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-scrollbar"></div>
      </div>
      <div class="cursor">
        <?php include(get_template_directory() . '/assets/images/icons/cursor.svg'); ?>
      </div>
      <div class="complex-services__cards">
        <div class="complex-services__card">
          <img class="complex-services__card-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-13/priemka.webp" alt=" Изображение - приемка и выдача автомобиля">
          <div class="overlay"></div>
          <div class="complex-services__card-inner">
            <span></span>
            <div class="complex-services__card-content">
              <p class="complex-services__card-title">
                Приемка и выдача автомобиля <br>
                проходит в теплом охраняемом <br>
                паркинге
              </p>
            </div>
          </div>
        </div>
        <div class="complex-services__card">
          <img class="complex-services__card-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-13/podmena.webp" alt=" Изображение - предоставляем подменный автомобиль">
          <div class="overlay"></div>
          <div class="complex-services__card-inner">
            <ul class="complex-services__usluga-list list-point">
              <li>
                <p class="complex-services__usluga-info">
                  полный привод
                </p>
              </li>
              <li>
                <p class="complex-services__usluga-info">
                  автопилот
                </p>
              </li>
              <li>
                <p class="complex-services__usluga-info">
                  полная шумоизоляция
                </p>
              </li>
              <li>
                <p class="complex-services__usluga-info">
                  запуск с ключа
                </p>
              </li>
            </ul>
            <div class="complex-services__card-content">
              <p class="complex-services__card-title">
                Предоставляем подменный автомобиль <br>
                Geely Manjaro при оклейке на сумму <br>
                от 300 тыс. руб.
              </p>
            </div>
          </div>
        </div>
        <div class="complex-services__card">
          <img class="complex-services__card-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-13/zaberi.webp" alt=" Изображение - услуга забери и привези">
          <div class="overlay"></div>
          <div class="complex-services__card-inner">
            <div class="complex-services__card-content _last-content">
              <span class="complex-services__card-sign _main-btn">
                По запросу
              </span>
              <p class="complex-services__card-title">
                Услуга «Забери и привези» —
              </p>
              <p class="complex-services__card-info">
                мы сами заберем ваш автомобиль и доставим <br>
                его после завершения работ
              </p>
            </div>
          </div>
        </div>
        <div class="complex-services__card">
          <img class="complex-services__card-img _img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-13/oneday.webp"
            alt=" Изображение - услуга оклейка автомобиля за один день">
          <div class="overlay"></div>
            <div class="complex-services__card-inner">
            <div class="complex-services__card-content _last-content">
              <span class="complex-services__card-sign _main-btn">
                По запросу
              </span>
              <p class="complex-services__card-title">
                Услуга «Оклейка автомобиля <br>
                за один день» —
              </p>
              <p class="complex-services__card-info">
                по запросу выполним полную оклейку авто <br>
                всего за 1 день, вместо стандартных 3-4 дней
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="wrapper-brown">
    <section class="sec-14">
      <div class="sec-14__container container">
        <div class="sec-14__layout">
          <div class="sec-14__content">
            <h2 class="sec-14__title _title">
              Ждем вас в <br>
              студии детейлинга
            </h2>
            <div class="sec-14__logo">

              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo.svg" alt=" Изображение - логотип">
            </div>
            <p class="sec-14__time">
              Ежедневно с 10:00 до 22:00 <br>без выходных
            </p>
            <p class="sec-14__li _location">
              Адрес в Москве:
            </p>
            <p class="sec-14__location">
              ул. Архитектора Щусева, 5, к1
            </p>
            <p class="sec-14__li _phone">
              Телефон для предварительной записи:
            </p>
            <a href="tel:+74952980377" class="sec-14__phone">
              +7 495 298 03 77
            </a>
            <a target="_blank" href="https://api.whatsapp.com/send/?phone=79267451861&text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5!+%D0%A5%D0%BE%D1%87%D1%83+%D0%BF%D0%BE%D0%BB%D1%83%D1%87%D0%B8%D1%82%D1%8C+%D0%BA%D0%BE%D0%BD%D1%81%D1%83%D0%BB%D1%8C%D1%82%D0%B0%D1%86%D0%B8%D1%8E+%D0%BF%D0%BE+%D0%B4%D0%B5%D1%82%D0%B5%D0%B9%D0%BB%D0%B8%D0%BD%D0%B3%D1%83&type=phone_number&app_absent=0" class="sec-14__whatsapp _whatsapp-btn">
              <?php include(get_template_directory() . '/assets/images/icons/whatsapp.svg'); ?>
              Написать в WhatsApp
            </a>
          </div>
          <div class="sec-14__banner">
            <div class="_image-abs">

              <img class="_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/sec-14-banner.webp"
                alt=" Изображение - баннер секции ждем вас в студии детейлинга">
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <section id="mapscroll" class="sec-map _sec-light">
    <div class="container">
      <h2 class="sec-map__title _title">
        Получите схему проезда <br>
        и все контакты себе на телефон
      </h2>
    </div>
    <div class="sec-map__map">
      <div id="map"></div>
      <div class="sec-map__container container">
        <div class="sec-map__contacts">
          <div class="sec-map__contacts-inner">
            <p class="sec-map__contacts-title">Заполните форму ниже,</p>
            <p class="sec-map__contacts-name">чтобы получить подробную схему<br> проезда в
              <span>WhatsApp</span>
            </p>
            <form onsubmit="ym(98054545,'reachGoal','ssf')" action="#" class="form sec-map__form form form-submit">
              <input type="hidden" name="newToken" value="<?php echo (rand(10000, 99999)) ?>">
              <input type="hidden" name="from"
                value="Получить схему проезда и все контакты себе в WhatsApp">
              <div class="sec-12__form-inputs sec-map__contacts-inputs">
                <input class="sec-12__form-number" name="phone" type="tel" required
                  placeholder="Введите ваш телефон">
                <button type="submit" class="sec-12__form-submit _whatsapp-btn _green-btn">
                  Получить схему проезда <br>
                  и все контакты себе в WhatsApp
                </button>
                <div class="sec-12__form-policy">
                  <input class="sec-12__form-checkbox" checked required type="checkbox"
                    name="checkbox" id="checkboxmap1">
                  <label class="sec-12__form-accept" for="checkboxmap1">
                    <span>
                      <svg width="11" height="8" viewBox="0 0 11 8" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M9.74334 2.50072L5.50034 6.74572C5.10934 7.13672 4.47634 7.13672 4.08634 6.74572L1.25734 3.91372C0.867344 3.52372 0.867344 2.89672 1.25734 2.50072C1.64834 2.10672 2.28134 2.10672 2.67234 2.50072L4.79334 4.62372L8.32834 1.08772C8.71934 0.694719 9.35234 0.694719 9.74334 1.08772C10.1333 1.48372 10.1333 2.10672 9.74334 2.50072Z"
                          fill="#F37021" />
                      </svg>
                    </span> Я принимаю условия <a class="sec-12__form-link" data-fancybox
                      href="#politics">политики конфиденциальности</a>
                  </label>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>