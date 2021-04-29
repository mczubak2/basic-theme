<div class="container">
  <div class="container__inner">
    <div class="homeHero__inner" data-hero-inner>
      <div class="homeHero__content">
        <div class="homeHero__caption">
          <div class="homeHero__subtitle">
            <h4 class="homeHero__subtitleContent">
              <?= $content['subtitle'] ?>
            </h4>
          </div>
          <div class="homeHero__title">
            <h3 class="homeHero__titleContent">
              <?= $content['title'] ?>
            </h3>
          </div>
        </div>
        <div class="homeHero__additional">
          <div class="homeHero__social">
            <?php foreach ($content['social_media'] as $item) :?>
              <div class="homeHero__socialItem ">
                <a href="<?= $item['link'] ?>" class="homeHero__socialLink">
                  <?php if ( $item['name'] == 'facebook' ) : ?>
                    <div class="homeHero__socialIcon homeHero__socialIcon--facebook"></div>
                  <?php elseif ( $item['name'] == 'twitter' ) : ?>
                    <div class="homeHero__socialIcon homeHero__socialIcon--twitter"></div>
                  <?php elseif ( $item['name'] == 'youtube' ) : ?>
                    <div class="homeHero__socialIcon homeHero__socialIcon--youtube"></div>
                  <?php endif; ?>
                </a>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="homeHero__description">
            <p class="heomHero__descriptionContent">
              <?= $content['description'] ?>
            </p>
            <img class="homeHero__descriptionArrow" src="<?= THEME_URL . 'assets/images/huge_arrow_down.png' ?>" alt="Arrow">
          </div>
        </div>
      </div>
      <div class="homeHero__slider">
        <!-- Slider main container -->
          <div class="homeHero__sliderContainer swiper-container" data-slider-container>
            <!-- Additional required wrapper -->
            <div class="homeHero__sliderWrapper swiper-wrapper">
              <!-- Slides -->
              <?php foreach($slider as $item): ?>
              <div class="homeHero__slide swiper-slide" data-slide style="background-image:url('<?= $item['url'] ?>')"></div>
              <?php endforeach; ?>
            </div>
            <!-- If we need navigation buttons -->
            <div class="homeHero__buttonPrev swiper-button-prev" data-slider-prev></div>
            <div class="homeHero__buttonNext swiper-button-next" data-slider-next></div>

          </div>
      </div>
    </div>
  </div>
</div>