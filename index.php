<?php include 'includes/header.php'; ?>

    <section data-anim-wrap class="hero -type-1 z-1">
      <div class="hero__bg">
        <div class="swiper heroSwiperss">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <img style="height:100vh; width:100%;" src="img/hero/1/bg.png" alt="Slide 1">
            </div>

            <div class="swiper-slide">
              <img style="height:100vh; width:100%;" src="img/general/1/2.png" alt="Slide 2">
            </div>

            <div class="swiper-slide">
              <img style="height:100vh; width:100%;" src="img/general/1/3.png" alt="Slide 3">
            </div>

            <div class="swiper-slide">
              <img style="height:100vh; width:100%;" src="img/general/1/4.png" alt="Slide 3">
            </div>

            <div class="swiper-slide">
              <img style="height:100vh; width:100%;" src="img/general/1/5.png" alt="Slide 3">
            </div>

            <div class="swiper-slide">
              <img style="height:100vh; width:100%;" src="img/general/1/6.png" alt="Slide 3">
            </div>

          </div>

          <!-- Pagination -->
          <!-- <div class="pag">
          <div class="swiper-pagination"></div>
          </div> -->

          <!-- Navigation Arrows -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>





      <div data-anim-wrap class="container">
        <div class="row justify-center text-center">
          <div class="col-xl-8 col-lg-10">
            <div data-split='lines' data-anim="split-lines delay-2" class="hero__content">
              <div class="hero__subtitle text-white">
                REDEFINED LUXURY
              </div>

              <h1 class="hero__title text-white">
                Experience Unparalleled<br class="md:d-none"> Comfort
              </h1>
            </div>
          </div>
        </div>
      </div>

      <div class="hero__arrow">
        <a href="#secondSection" class="size-70 flex-center rounded-full border-white-10 blur-1">
          <i class="icon-arrow-down text-24 text-white"></i>
        </a>
      </div>

      <div data-anim-child="slide-up delay-7" class="hero__filter">
        <div class="searchForm -type-1 -blur-1 rounded-200 -text-white">
          <div class="searchForm__form">
            <div class="searchFormItem js-select-control js-form-dd js-calendar">
              <div class="searchFormItem__button" data-x-click="calendar">
                <div>
                  <span class="js-first-date">Check In - Check Out</span>
                  <span class="js-last-date"></span>
                </div>
                <i class="icon-arrow-down ml-10"></i>
              </div>


              <div class="searchFormItemDropdown -calendar" data-x="calendar" data-x-toggle="is-active">
                <div class="searchFormItemDropdown__container">

                  <div class="searchMenu-date -searchForm js-form-dd js-calendar-el">
                    <div class="searchMenu-date__field shadow-2" data-x-dd="searchMenu-date" data-x-dd-toggle="-is-active">
                      <div class="rounded-4">
                        <div class="elCalendar js-calendar-el-calendar"></div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>

            <div class="searchFormItem js-select-control js-form-dd">
              <div class="searchFormItem__button" data-x-click="rooms">
                <div class="js-select-control-chosen">Rooms</div>
                <i class="icon-arrow-down ml-10"></i>
              </div>
              <div class="searchFormItemDropdown -counter" data-x="rooms" data-x-toggle="is-active">
                <div class="searchFormItemDropdown__container">
                  <div class="searchFormItemDropdown__list">

                    <div class="searchFormItemDropdown__item js-select-control-counter">
                      <div class="fw-500 js-search-title">Rooms</div>
                      <div class="d-flex fw-500 js-search-counter">
                        <div class="cursor-pointer size-40 flex-center js-remove">
                          <i class="custom-icon-minus">
                            <span></span>
                          </i>
                        </div>

                        <div class="size-40 flex-center js-number">0</div>

                        <div class="cursor-pointer size-40 flex-center js-add">
                          <i class="custom-icon-plus">
                            <span></span>
                            <span></span>
                          </i>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>

            </div>

            <div class="searchFormItem js-select-control js-form-dd">
              <div class="searchFormItem__button" data-x-click="guests">
                <div class="js-select-control-chosen">Guests</div>
                <i class="icon-arrow-down ml-10"></i>
              </div>
              <div class="searchFormItemDropdown -counter" data-x="guests" data-x-toggle="is-active">
                <div class="searchFormItemDropdown__container">
                  <div class="searchFormItemDropdown__list">

                    <div class="searchFormItemDropdown__item js-select-control-counter">
                      <div class="fw-500 js-search-title">Adults</div>
                      <div class="d-flex fw-500 js-search-counter">
                        <div class="cursor-pointer size-40 flex-center js-remove">
                          <i class="custom-icon-minus">
                            <span></span>
                          </i>
                        </div>

                        <div class="size-40 flex-center js-number">0</div>

                        <div class="cursor-pointer size-40 flex-center js-add">
                          <i class="custom-icon-plus">
                            <span></span>
                            <span></span>
                          </i>
                        </div>
                      </div>
                    </div>

                    <div class="searchFormItemDropdown__item js-select-control-counter">
                      <div class="fw-500 js-search-title">Children</div>
                      <div class="d-flex fw-500 js-search-counter">
                        <div class="cursor-pointer size-40 flex-center js-remove">
                          <i class="custom-icon-minus">
                            <span></span>
                          </i>
                        </div>

                        <div class="size-40 flex-center js-number">0</div>

                        <div class="cursor-pointer size-40 flex-center js-add">
                          <i class="custom-icon-plus">
                            <span></span>
                            <span></span>
                          </i>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="searchForm__button">
            <button class="button -accent-1 bg-accent-2 size-50 rounded-full">Go</button>
          </div>
        </div>
      </div>
    </section>

    <section id="secondSection" data-anim-wrap class="layout-pt-lg layout-pb-lg">
      <div class="container">
        <div class="row justify-center text-center">
          <div class="col-auto">
            <div data-anim-child="slide-up delay-1" class="text-15 uppercase mb-30 sm:mb-10">IRIS SUITES – BOUTIQUE LUXURY STAY</div>
            <h2 data-anim-child="slide-up delay-2" class="text-64 md:text-40">Experience Refined Comfort</h2>
          </div>
        </div>

        <div class="row y-gap-30 pt-100 sm:pt-50">
          <div class="col-lg-6">
            <div data-anim-child="slide-up delay-3" class="col-lg-8 px-0">
              <p>Step into the world of Iris Suites — where modern elegance meets thoughtful hospitality. Nestled in the heart of the city, our premium boutique stay offers a serene escape with well-appointed suites, lush surroundings, and curated amenities that cater to both business and leisure travelers.

From personalized service to elevated interiors, everything here is designed to make your stay effortless and unforgettable.</p>
            </div>

            <div data-anim-child="slide-up delay-4">
             
            </div>

            <div class="lg:d-none mt-60 md:mt-30" data-anim-child="slide-up delay-6">
              <img src="img/about/1/1.png" alt="image">
            </div>
          </div>

          <div class="col-lg-6 lg:d-none">
            <div data-anim-child="slide-up delay-7">
              <img src="img/about/1/2.png" alt="image">
            </div>
            <div class="mt-30" data-anim-child="slide-up delay-8">
              <img src="img/about/1/3.png" alt="image">
            </div>
          </div>
        </div>

        <div data-anim-child="slide-up delay-4" class="d-none lg:d-flex mt-40">
          <img src="img/about/1/mobile.png" alt="image" class="w-1/1">
        </div>
      </div>
    </section>

    <section class="layout-pt-lg layout-pb-lg bg-accent-1">
      <div class="container">
        <div class="row y-gap-30 justify-between items-end">
          <div class="col-auto">
            <div class="text-15 uppercase text-white mb-30 sm:mb-10">EXPLORE</div>
            <h2 class="text-64 md:text-40 lh-065 text-white">Rooms & Suites</h2>
          </div>

          <div class="col-auto">
            <button class="button -type-1 text-white">
              <i class="-icon">
                <svg width="50" height="30" viewBox="0 0 50 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M35.8 28.0924C43.3451 28.0924 49.4616 21.9759 49.4616 14.4308C49.4616 6.88577 43.3451 0.769287 35.8 0.769287C28.255 0.769287 22.1385 6.88577 22.1385 14.4308C22.1385 21.9759 28.255 28.0924 35.8 28.0924Z" stroke="#FFF" />
                  <path d="M33.4808 10.2039L32.9985 10.8031L37.2931 14.2623H0.341553V15.0315H37.28L33.0008 18.4262L33.4785 19.0285L39 14.6492L33.4808 10.2039Z" fill="#FFF" />
                </svg>
              </i>
              Book now
            </button>
          </div>
        </div>

        <div class="row y-gap-30 pt-100 sm:pt-50">
          <div class="col-xl-7">
            <div class="js-section-slider" data-gap="30" data-slider-cols="xl-1 lg-1 md-1 sm-1 base-1" data-nav-prev="js-slider1-prev" data-nav-next="js-slider1-next" data-pagination="js-slider1-pagination">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <a href="superior-room.php" data-anim-wrap class="roomCard -type-1 -hover-button-center -image-border">
                    <div data-anim-child="img-right cover-accent-1 delay-1">
                      <div class="roomCard__image ratio ratio-76:62 -hover-button-center__wrap">
                        <img src="img/rooms/Superior/6.png" alt="image" class="img-ratio">

                        <div class="-image-border__item"></div>

                        <div class="-hover-button-center__button flex-center size-130 rounded-full bg-accent-1-50 blur-1 border-white-10">
                          <span class="text-15 fw-500 text-white">BOOK NOW</span>
                        </div>
                      </div>
                    </div>

                    <div class="roomCard__content mt-30" data-anim-child="slide-up delay-5">
                      <div class="d-flex justify-between items-center">
                        <h3 class="roomCard__title text-40 md:text-30 text-white">Superior Room</h3>
                        <div class="roomCard__price text-white">₹3,000 PER NIGHT</div>
                      </div>

                      <div class="d-flex items-center x-gap-10 text-white pt-30 md:pt-20">
                        <div>180 SQ. FT.</div>
                        <div>
                          <div class="circle bg-white-10"></div>
                        </div>
                        <div>3 ADULTS</div>
                        <div>
                          <div class="circle bg-white-10"></div>
                        </div>
                        <div>1 CHILDREN</div>
                      </div>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="premier-room.php" data-anim-wrap class="roomCard -type-1 -hover-button-center -image-border">
                    <div data-anim-child="img-right cover-accent-1 delay-1">
                      <div class="roomCard__image ratio ratio-76:62 -hover-button-center__wrap">
                        <img src="img/rooms/Premier/2.jpg" alt="image" class="img-ratio">

                        <div class="-image-border__item"></div>

                        <div class="-hover-button-center__button flex-center size-130 rounded-full bg-accent-1-50 blur-1 border-white-10">
                          <span class="text-15 fw-500 text-white">BOOK NOW</span>
                        </div>
                      </div>
                    </div>

                    <div class="roomCard__content mt-30" data-anim-child="slide-up delay-5">
                      <div class="d-flex justify-between items-center">
                        <h3 class="roomCard__title text-40 md:text-30 text-white">Premier Room</h3>
                        <div class="roomCard__price text-white">₹4,000 PER NIGHT</div>
                      </div>

                             <div class="d-flex items-center x-gap-10 text-white pt-30 md:pt-20">
                        <div>220 SQ. FT.</div>
                        <div>
                          <div class="circle bg-white-10"></div>
                        </div>
                        <div>3 ADULTS</div>
                        <div>
                          <div class="circle bg-white-10"></div>
                        </div>
                        <div>1 CHILDREN</div>
                      </div>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="business-class-room.php" data-anim-wrap class="roomCard -type-1 -hover-button-center -image-border">
                    <div data-anim-child="img-right cover-accent-1 delay-1">
                      <div class="roomCard__image ratio ratio-76:62 -hover-button-center__wrap">
                        <img src="img/rooms/BUSINESS CLASS/6.jpg" alt="image" class="img-ratio">

                        <div class="-image-border__item"></div>

                        <div class="-hover-button-center__button flex-center size-130 rounded-full bg-accent-1-50 blur-1 border-white-10">
                          <span class="text-15 fw-500 text-white">BOOK NOW</span>
                        </div>
                      </div>
                    </div>

                    <div class="roomCard__content mt-30" data-anim-child="slide-up delay-5">
                      <div class="d-flex justify-between items-center">
                        <h3 class="roomCard__title text-40 md:text-30 text-white">Business Class Room</h3>
                        <div class="roomCard__price text-white">₹5,000 PER NIGHT</div>
                      </div>

                      <div class="d-flex items-center x-gap-10 text-white pt-30 md:pt-20">
                        <div>300 SQ. FT.</div>
                        <div>
                          <div class="circle bg-white-10"></div>
                        </div>
                        <div>3 ADULTS</div>
                        <div>
                          <div class="circle bg-white-10"></div>
                        </div>
                        <div>1 CHILDREN</div>
                      </div>
                    </div>
                  </a>
                </div>

              </div>
            </div>
          </div>
        </div>

        <div class="row justify-between items-center pt-100 sm:pt-50">
          <div class="col-auto">
            <button class="button -outline-white text-white size-80 md:size-60 flex-center rounded-full js-slider1-prev">
              <i class="icon-arrow-left text-24 md:text-19"></i>
            </button>
          </div>

          <div class="col-auto">
            <div class="pagination -type-1 -light js-slider1-pagination"></div>
          </div>

          <div class="col-auto">
            <button class="button -outline-white text-white size-80 md:size-60 flex-center rounded-full js-slider1-next">
              <i class="icon-arrow-right text-24 md:text-19"></i>
            </button>
          </div>
        </div>
      </div>
    </section>

    <section class="layout-pt-lg layout-pb-lg bg-accent-2">
      <div data-anim-wrap class="container">
        <div class="hoverTitleInteraction">
          <div class="row y-gap-30 justify-between items-center">
            <div class="col-lg-6 offset-lg-1 lg:order-2 lg:pt-50">
              <div class="hoverTitleInteraction__images d-flex justify-end">

                <div class="is-active">
                  <div class="imageGrid -type-1">
                    <div>
                      <div data-anim-child="img-right cover-accent-2 delay-1">
                        <img src="img/about/2/2.png" alt="image" class="">
                      </div>
                    </div>
                    <div>
                      <div data-anim-child="img-right cover-accent-2 delay-3">
                        <img src="img/about/2/1.png" alt="image" class="">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="">
                  <div class="imageGrid -type-1">
                    <div>
                      <div data-anim-child="img-right cover-accent-2 delay-1">
                        <img src="img/cards/rooms/3/1.png" alt="image" class="">
                      </div>
                    </div>
                    <div>
                      <div data-anim-child="img-right cover-accent-2 delay-3">
                        <img src="img/cards/rooms/4/1.png" alt="image" class="">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="">
                  <div class="imageGrid -type-1">
                    <div>
                      <div data-anim-child="img-right cover-accent-2 delay-1">
                        <img src="img/cards/rooms/3/3.png" alt="image" class="">
                      </div>
                    </div>
                    <div>
                      <div data-anim-child="img-right cover-accent-2 delay-3">
                        <img src="img/cards/rooms/4/2.png" alt="image" class="">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="">
                  <div class="imageGrid -type-1">
                    <div>
                      <div data-anim-child="img-right cover-accent-2 delay-1">
                        <img src="img/cards/rooms/3/5.png" alt="image" class="">
                      </div>
                    </div>
                    <div>
                      <div data-anim-child="img-right cover-accent-2 delay-3">
                        <img src="img/cards/rooms/4/3.png" alt="image" class="">
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <div class="col-xl-4 col-lg-5 lg:order-1">
              <div class="hoverTitleInteraction__links">
                <a href="lastella.php" class="hoverTitle text-sec text-52 md:text-40 fw-500">
                  La Stell Restaurant
                  <i class="icon-arrow-right text-40 ml-50"></i>
                </a>

                <a href="rooms.php" class="hoverTitle text-sec text-52 md:text-40 fw-500 pt-60 lg:pt-0">
                  Our Suites
                  <i class="icon-arrow-right text-40 ml-50"></i>
                </a>

                <a href="faq.php" class="hoverTitle text-sec text-52 md:text-40 fw-500 pt-60 lg:pt-0">
                  FAQ
                  <i class="icon-arrow-right text-40 ml-50"></i>
                </a>

                <a href="terms.php" class="hoverTitle text-sec text-52 md:text-40 fw-500 pt-60 lg:pt-0">
                  Terms & Conditions
                  <i class="icon-arrow-right text-40 ml-50"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php include 'includes/facilities.php'; ?>

    <section class="layout-pt-lg layout-pb-lg">
      <div data-anim-wrap class="container">
        <div class="row justify-center text-center">
          <div data-anim-child="slide-up delay-1" class="col-auto">
            <div class="text-15 uppercase mb-30 sm:mb-10">There's So Much to Discover</div>
            <h2 class="text-64 md:text-40">Unforgettable Experience</h2>
          </div>
        </div>

        <div class="overflow-hidden pt-100 sm:pt-50 js-section-slider" data-gap="30" data-slider-cols="xl-4 lg-4 md-3 sm-2 base-1" data-pagination="js-slider2-pagination">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <a href="#" class="baseCard -type-1 -hover-image-scale">
                <div class="-hover-image-scale__image">
                  <div data-anim-child="img-right cover-white delay-2" class="baseCard__image ratio ratio-33:45">
                    <img src="img/roomsSingle/1.png" alt="image" class="img-ratio">
                  </div>
                </div>

                <div class="baseCard__content d-flex flex-column justify-end text-center">
                  <h4 class="text-30 md:text-25 text-white">Lotus Temples</h4>
                  <div class="text-white mt-10">Architectural peace and silence</div>
                </div>
              </a>
            </div>

            <div class="swiper-slide">
              <a href="#" class="baseCard -type-1 -hover-image-scale">
                <div class="-hover-image-scale__image">
                  <div data-anim-child="img-right cover-white delay-4" class="baseCard__image ratio ratio-33:45">
                    <img src="img/roomsSingle/2.png" alt="image" class="img-ratio">
                  </div>
                </div>

                <div class="baseCard__content d-flex flex-column justify-end text-center">
                  <h4 class="text-30 md:text-25 text-white">Kalkaji Temple</h4>
                  <div class="text-white mt-10">Spiritual energy and tradition</div>
                </div>
              </a>
            </div>

            <div class="swiper-slide">
              <a href="#" class="baseCard -type-1 -hover-image-scale">
                <div class="-hover-image-scale__image">
                  <div data-anim-child="img-right cover-white delay-6" class="baseCard__image ratio ratio-33:45">
                    <img src="img/roomsSingle/3.png" alt="image" class="img-ratio">
                  </div>
                </div>

                <div class="baseCard__content d-flex flex-column justify-end text-center">
                  <h4 class="text-30 md:text-25 text-white">NSIC Exhibition Ground</h4>
                  <div class="text-white mt-10">Events, expos, and culture</div>
                </div>
              </a>
            </div>

            <div class="swiper-slide">
              <a href="#" class="baseCard -type-1 -hover-image-scale">
                <div class="-hover-image-scale__image">
                  <div data-anim-child="img-right cover-white delay-8" class="baseCard__image ratio ratio-33:45">
                    <img src="img/roomsSingle/4.png" alt="image" class="img-ratio">
                  </div>
                </div>

                <div class="baseCard__content d-flex flex-column justify-end text-center">
                  <h4 class="text-30 md:text-25 text-white">Nehru Place Market</h4>
                  <div class="text-white mt-10">Tech, street food, and buzz</div>
                </div>
              </a>
            </div>

            <div class="swiper-slide">
              <a href="#" class="baseCard -type-1 -hover-image-scale">
                <div class="-hover-image-scale__image">
                  <div data-anim-child="img/rooms/bottom images/5.png" class="baseCard__image ratio ratio-33:45">
                    <img src="img/roomsSingle/5.png" alt="image" class="img-ratio">
                  </div>
                </div>

                <div class="baseCard__content d-flex flex-column justify-end text-center">
                  <h4 class="text-30 md:text-25 text-white">Iskcon Temple</h4>
                  <div class="text-white mt-10">Chants, culture, and soul food</div>
                </div>
              </a>
            </div>

            <div class="swiper-slide">
              <a href="#" class="baseCard -type-1 -hover-image-scale">
                <div class="-hover-image-scale__image">
                  <div data-anim-child="img-right cover-white delay-12" class="baseCard__image ratio ratio-33:45">
                    <img src="img/roomsSingle/6.png" alt="image" class="img-ratio">
                  </div>
                </div>

                <div class="baseCard__content d-flex flex-column justify-end text-center">
                  <h4 class="text-30 md:text-25 text-white">Tughlaqabad Fort</h4>
                  <div class="text-white mt-10">Ruins, history, and views</div>
                </div>
              </a>
            </div>

            <div class="swiper-slide">
              <a href="#" class="baseCard -type-1 -hover-image-scale">
                <div class="-hover-image-scale__image">
                  <div data-anim-child="img-right cover-white delay-14" class="baseCard__image ratio ratio-33:45">
                    <img src="img/roomsSingle/7.png" alt="image" class="img-ratio">
                  </div>
                </div>

                <div class="baseCard__content d-flex flex-column justify-end text-center">
                  <h4 class="text-30 md:text-25 text-white">Kiran Nadar Museum of Art</h4>
                  <div class="text-white mt-10">Art, calm, and creativity</div>
                </div>
              </a>
            </div>

          </div>

          <div class="row justify-center pt-100 sm:pt-50 pb-20">
            <div class="col-auto">
              <div class="pagination -type-1 -accent-1 js-slider2-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="layout-pt-md layout-pb-lg bg-light-1">
      <div class="container">
        <div class="row justify-center text-center">
          <div class="col-auto">
            <div class="mb-40">
              <svg width="45" height="44" viewBox="0 0 45 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d_428_953)">
                  <path d="M9.67883 38C6.64234 38 4.27007 36.9524 2.56204 34.8571C0.854015 32.6667 0 29.4286 0 25.1429C0 20.6667 0.99635 16.381 2.98905 12.2857C5.07664 8.19048 8.01825 4.14286 11.8139 0.142864C11.9088 0.0476213 12.0511 0 12.2409 0C12.5255 0 12.7153 0.142858 12.8102 0.428574C13 0.619048 13.0474 0.857143 12.9526 1.14286C10.6752 4.19048 9.10949 7.14286 8.25548 10C7.49635 12.7619 7.11679 15.8571 7.11679 19.2857C7.11679 21.8571 7.44891 23.8571 8.11314 25.2857C8.77737 26.7143 9.67883 28 10.8175 29.1429L5.40876 30.1429C5.31387 28.5238 5.74088 27.2857 6.68978 26.4286C7.73358 25.5714 9.06205 25.1429 10.6752 25.1429C12.6679 25.1429 14.1861 25.7143 15.2299 26.8571C16.3686 28 16.938 29.5714 16.938 31.5714C16.938 33.6667 16.2737 35.2857 14.9453 36.4286C13.7117 37.4762 11.9562 38 9.67883 38ZM31.5985 38C28.562 38 26.1898 36.9524 24.4818 34.8571C22.8686 32.6667 22.062 29.4286 22.062 25.1429C22.062 20.5714 23.0584 16.2381 25.0511 12.1429C27.0438 8.04762 29.9854 4.04762 33.8759 0.142864C33.9708 0.0476213 34.1131 0 34.3029 0C34.5876 0 34.7774 0.142858 34.8723 0.428574C35.062 0.619048 35.1095 0.857143 35.0146 1.14286C32.7372 4.19048 31.1715 7.14286 30.3175 10C29.5584 12.7619 29.1788 15.8571 29.1788 19.2857C29.1788 21.8571 29.4635 23.9048 30.0328 25.4286C30.6971 26.8571 31.5985 28.0952 32.7372 29.1429L27.4708 30.1429C27.3759 28.5238 27.8029 27.2857 28.7518 26.4286C29.7007 25.5714 31.0292 25.1429 32.7372 25.1429C34.7299 25.1429 36.2482 25.7143 37.292 26.8571C38.4307 28 39 29.5714 39 31.5714C39 33.6667 38.3358 35.2857 37.0073 36.4286C35.7737 37.4762 33.9708 38 31.5985 38Z" fill="#122223" />
                </g>
                <defs>
                  <filter id="filter0_d_428_953" x="0" y="0" width="45" height="44" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                    <feOffset dx="6" dy="6" />
                    <feComposite in2="hardAlpha" operator="out" />
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" />
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_428_953" />
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_428_953" result="shape" />
                  </filter>
                </defs>
              </svg>
            </div>
            <div class="text-15 uppercase mb-30 sm:mb-15">VOICE FROM OUR GUESTS</div>
            <h2 class="text-64 md:text-40 lh-065">Testimonials</h2>
          </div>
        </div>
      </div>

      <div class="relative container">
        <div class="row justify-center pt-100 sm:pt-50">
          <div class="col-xl-8 col-lg-10 col-9">
            <div class="overflow-hidden js-section-slider" data-gap="30" data-slider-cols="xl-1 lg-1 md-1 sm-1 base-1" data-nav-prev="js-slider3-prev" data-nav-next="js-slider3-next">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="text-center">
                    <div class="text-sec text-40 md:text-24">
                      “Some places are so good to stay in, you don&#39;t want to generate a rush on them. The Iris Suites lodge hotel in London is one of them.”
                    </div>
                    <div class="mt-50">Ali Tufan - Trip Advisor</div>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="text-center">
                    <div class="text-sec text-40 md:text-24">
                      “Some places are so good to stay in, you don&#39;t want to generate a rush on them. The Iris Suites lodge hotel in London is one of them.”
                    </div>
                    <div class="mt-50">Ali Tufan - Trip Advisor</div>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="text-center">
                    <div class="text-sec text-40 md:text-24">
                      “Some places are so good to stay in, you don&#39;t want to generate a rush on them. The Iris Suites lodge hotel in London is one of them.”
                    </div>
                    <div class="mt-50">Ali Tufan - Trip Advisor</div>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="text-center">
                    <div class="text-sec text-40 md:text-24">
                      “Some places are so good to stay in, you don&#39;t want to generate a rush on them. The Iris Suites lodge hotel in London is one of them.”
                    </div>
                    <div class="mt-50">Ali Tufan - Trip Advisor</div>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="text-center">
                    <div class="text-sec text-40 md:text-24">
                      “Some places are so good to stay in, you don&#39;t want to generate a rush on them. The Iris Suites lodge hotel in London is one of them.”
                    </div>
                    <div class="mt-50">Ali Tufan - Trip Advisor</div>
                  </div>
                </div>

              </div>

              <div class="navAbsolute">
                <button class="size-80 flex-center rounded-full js-slider3-prev">
                  <i class="icon-arrow-left text-24"></i>
                </button>

                <button class="size-80 flex-center rounded-full js-slider3-next">
                  <i class="icon-arrow-right text-24"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <section data-anim-wrap class="layout-pt-lg layout-pb-lg">
      <div class="container">
        <div class="row y-gap-30 justify-center text-center">
          <div data-anim-child="slide-up delay-1" class="col-xl-4 col-lg-6">
            <div class="text-15 uppercase mb-30 sm:mb-10">@irissuiteskalkaji</div>
            <h2 class="text-64 md:text-40">Follow us on Instagram</h2>
          </div>
        </div>
      </div>

      <div class="imageGrid -type-2">

        <div class="imageGrid__item">
          <div data-anim-child="img-right cover-white delay-2">
            <a href="#" class="ratio ratio-1:1">
              <img src="img/inst/1/1.png" alt="image" class="img-ratio">
            </a>
          </div>
        </div>

        <div class="imageGrid__item">
          <div data-anim-child="img-right cover-white delay-4">
            <a href="#" class="ratio ratio-1:1">
              <img src="img/inst/1/2.png" alt="image" class="img-ratio">
            </a>
          </div>
        </div>

        <div class="imageGrid__item">
          <div data-anim-child="img-right cover-white delay-6">
            <a href="#" class="ratio ratio-1:1">
              <img src="img/inst/1/3.png" alt="image" class="img-ratio">
            </a>
          </div>
        </div>

        <div class="imageGrid__item">
          <div data-anim-child="img-right cover-white delay-8">
            <a href="#" class="ratio ratio-1:1">
              <img src="img/inst/1/4.png" alt="image" class="img-ratio">
            </a>
          </div>
        </div>

        <div class="imageGrid__item">
          <div data-anim-child="img-right cover-white delay-10">
            <a href="#" class="ratio ratio-1:1">
              <img src="img/inst/1/5.png" alt="image" class="img-ratio">
            </a>
          </div>
        </div>

      </div>
    </section>
<?php include 'includes/footer.php'; ?>