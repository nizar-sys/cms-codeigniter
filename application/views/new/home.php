<!-- Hero Section -->
<section id="hero" class="hero section dark-background">

    <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <?php
        foreach ($sliders as $key => $slider) {
            ?>
            <div class="carousel-item <?php if ($key === 0) { ?>active<?php } ?>">
                <img src="<?php echo base_url(); ?>public/uploads/<?php echo $slider['photo']; ?>" alt="">
                <div class="carousel-container">
                    <?php if ($slider['heading'] != ''): ?>
                        <h2><?php echo $slider['heading']; ?></h2>
                    <?php endif; ?>

                    <?php if ($slider['content'] != ''): ?>
                        <p>
                            <?php echo nl2br($slider['content']); ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div><!-- End Carousel Item -->
            <?php
        }
        ?>

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>

    </div>

</section><!-- /Hero Section -->

<!--About Start-->
<?php if ($page_home['home_welcome_status'] == 'Show'): ?>
    <!-- About 3 Section -->
    <section id="about-3" class="about-3 section">

        <div class="container">
            <div class="row gy-4 justify-content-between align-items-center">
                <div class="col-lg-6 order-lg-2 position-relative" data-aos="zoom-out">
                    <img src="<?php echo base_url(); ?>public/uploads/<?php echo $page_home['home_welcome_video_bg']; ?>"
                        alt="Image" class="img-fluid">
                    <a href="<?php echo $page_home['home_welcome_video']; ?>" class="glightbox pulsating-play-btn">
                        <span class="play"><i class="bi bi-play-fill"></i></span>
                    </a>
                </div>
                <div class="col-lg-5 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="content-title mb-4"><?php echo $page_home['home_welcome_title']; ?>
                        <?php echo $page_home['home_welcome_subtitle']; ?>
                    </h2>
                    <p class="mb-4">
                        <?php echo $page_home['home_welcome_text']; ?>
                    </p>
                    <ul class="list-unstyled list-check">
                        <?php if ($page_home['home_welcome_pbar1_text'] != ''): ?>
                            <li><?php echo $page_home['home_welcome_pbar1_text']; ?></li>
                        <?php endif; ?>
                        <?php if ($page_home['home_welcome_pbar2_text'] != ''): ?>
                            <li><?php echo $page_home['home_welcome_pbar2_text']; ?></li>
                        <?php endif; ?>
                        <?php if ($page_home['home_welcome_pbar3_text'] != ''): ?>
                            <li><?php echo $page_home['home_welcome_pbar3_text']; ?></li>
                        <?php endif; ?>
                        <?php if ($page_home['home_welcome_pbar4_text'] != ''): ?>
                            <li><?php echo $page_home['home_welcome_pbar4_text']; ?></li>
                        <?php endif; ?>
                        <?php if ($page_home['home_welcome_pbar5_text'] != ''): ?>
                            <li><?php echo $page_home['home_welcome_pbar5_text']; ?></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section><!-- /About 3 Section -->
<?php endif; ?>
<!--About End-->

<!--Choose-Area Start-->
<?php if ($page_home['home_why_choose_status'] == 'Show'): ?>
    <!-- About Section -->
    <section id="about" class="about section">

        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <img src="assets/img/img_long_5.jpg" alt="Image " class="img-fluid img-overlap" data-aos="zoom-out">
                    </div>
                    <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="content-subtitle text-white opacity-50">
                            <?php echo $page_home['home_why_choose_title']; ?>
                        </h3>
                        <h2 class="content-title mb-4">
                            <?php echo $page_home['home_why_choose_subtitle']; ?>
                        </h2>

                        <div class="row my-5">
                            <?php
                            foreach ($why_choose as $row) {
                                ?>
                                <div class="col-lg-12 d-flex align-items-start mb-4">
                                    <i class="<?php echo $row['icon']; ?> me-4 display-6"></i>
                                    <div>
                                        <h4 class="m-0 h5 text-white"><?php echo $row['name']; ?></h4>
                                        <p class="text-white opacity-50"><?php echo nl2br($row['content']); ?></p>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /About Section -->
<?php endif; ?>
<!--Choose-Area End-->


<!--Feature-Area Start-->
<?php if ($page_home['home_feature_status'] == 'Show'): ?>
    <!-- Services Section -->
    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2><?php echo $page_home['home_feature_title']; ?></h2>
            <p><?php echo $page_home['home_feature_subtitle']; ?></p>
        </div><!-- End Section Title -->
        <div class="content">
            <div class="container">
                <div class="row g-0">
                    <?php
                    foreach ($features as $row) {
                        ?>
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <span class="number">01</span>
                                <div class="service-item-icon">
                                    <i class="<?php echo $row['icon']; ?>" aria-hidden="true"></i>
                                </div>
                                <div class="service-item-content">
                                    <h3 class="service-heading"><?php echo $row['name']; ?></h3>
                                    <p>
                                        <?php echo nl2br($row['content']); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section><!-- /Services Section -->
<?php endif; ?>
<!--Feature-Area End-->


<!--Services Start-->
<?php if ($page_home['home_service_status'] == 'Show'): ?>
    <!-- Recent Posts Section -->
    <section id="recent-posts" class="recent-posts section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2><?php echo $page_home['home_service_title']; ?></h2>
            <p><?php echo $page_home['home_service_subtitle']; ?></p>
        </div><!-- End Section Title -->
        <div class="container">
            <div class="row gy-5">
                <?php
                foreach ($services as $row) {
                    ?>
                    <div class="col-xl-4 col-md-6">
                        <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">

                            <div class="post-img position-relative overflow-hidden">
                                <img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>"
                                    class="img-fluid" alt="">
                            </div>

                            <div class="post-content d-flex flex-column">

                                <h3 class="post-title"><?php echo $row['name']; ?></h3>
                                <p>
                                    <?php echo nl2br($row['short_description']); ?>
                                </p>

                                <hr>

                                <a href="<?php echo base_url(); ?>service/view/<?php echo $row['id']; ?>"
                                    class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

                            </div>

                        </div>
                    </div><!-- End post item -->
                    <?php
                }
                ?>
            </div>
        </div>
    </section><!-- /Recent Posts Section -->
<?php endif; ?>
<!--Services End-->


<!--Counter-Area Start-->
<?php if ($page_home['counter_status'] == 'Show'): ?>
    <div class="counterup-area pt_60 pb_90"
        style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $page_home['counter_photo']; ?>)">
        <div class="bg-counterup"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="counter-item flex">
                        <i class="<?php echo $page_home['counter_1_icon']; ?>" aria-hidden="true"></i>
                        <h2 class="counter"><?php echo $page_home['counter_1_value']; ?></h2>
                        <h4><?php echo $page_home['counter_1_title']; ?></h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="counter-item flex">
                        <i class="<?php echo $page_home['counter_2_icon']; ?>" aria-hidden="true"></i>
                        <h2 class="counter"><?php echo $page_home['counter_2_value']; ?></h2>
                        <h4><?php echo $page_home['counter_2_title']; ?></h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="counter-item flex">
                        <i class="<?php echo $page_home['counter_3_icon']; ?>" aria-hidden="true"></i>
                        <h2 class="counter"><?php echo $page_home['counter_3_value']; ?></h2>
                        <h4><?php echo $page_home['counter_3_title']; ?></h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="counter-item flex">
                        <i class="<?php echo $page_home['counter_4_icon']; ?>" aria-hidden="true"></i>
                        <h2 class="counter"><?php echo $page_home['counter_4_value']; ?></h2>
                        <h4><?php echo $page_home['counter_4_title']; ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<!--Counter-Area End-->


<!--Portfolio Start-->
<?php if ($page_home['home_portfolio_status'] == 'Show'): ?>
    <div class="portfolio-area pt_90 pb_90">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="headline">
                        <h2><?php echo $page_home['home_portfolio_title']; ?></h2>
                        <h3><?php echo $page_home['home_portfolio_subtitle']; ?></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="portfolio-menu">
                        <ul id="filtrnav">
                            <li class="filtr filtr-active" data-filter="all">All</li>
                            <?php
                            foreach ($portfolio_category as $row) {
                                ?>
                                <li class="filtr" data-filter="<?php echo $row['category_id']; ?>">
                                    <?php echo $row['category_name']; ?>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row filtr-container">
                <?php
                foreach ($portfolio as $row) {
                    ?>
                    <div class="col-lg-4 col-md-6 filtr-item" data-category="<?php echo $row['category_id']; ?>"
                        data-sort="Menu">
                        <div class="portfolio-group">
                            <div class="portfolio-photo"
                                style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>)">
                                <div class="portfolio-bg"></div>
                                <div class="portfolio-table">
                                    <div class="portfolio-icon">
                                        <a href="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>"
                                            class="magnific"><i class="fa fa-search-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-text">
                                <h3><a
                                        href="<?php echo base_url(); ?>portfolio/view/<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
<?php endif; ?>
<!--Portfolio End-->


<!--Booking-Area Start-->
<?php if ($page_home['home_booking_status'] == 'Show'): ?>
    <!-- Contact Section -->
    <section id="contact" class="contact section">
        <div class="container" data-aos="fade">
            <div class="row gy-5 gx-lg-5">
                <div class="col-lg-12">
                    <h2><?php echo $page_home['home_booking_form_title']; ?></h2>
                    <form action="" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="first_name" class="form-control" id="first_name"
                                    placeholder="<?php echo FIRST_NAME; ?>" required="">
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="text" name="last_name" class="form-control" id="last_name"
                                    placeholder="<?php echo LAST_NAME; ?>" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="phone" class="form-control" id="phone"
                                    placeholder="<?php echo PHONE_NUMBER; ?>" required="">
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" name="email" class="form-control" id="email"
                                    placeholder="<?php echo EMAIL_ADDRESS; ?>" required="">
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="address" id="address"
                                placeholder="<?php echo ADDRESS; ?>" required="">
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" placeholder="<?php echo MESSAGE; ?>"
                                required=""></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit"><?php echo SUBMIT; ?></button></div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>

    </section><!-- /Contact Section -->
<?php endif; ?>
<!--Booking-Area End-->


<!--Team-Area Start-->
<?php if ($page_home['home_team_status'] == 'Show'): ?>
    <!-- Team Section -->
    <section class="team-15 team section" id="team">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2><?php echo $page_home['home_team_title']; ?></h2>
            <p><?php echo $page_home['home_team_subtitle']; ?></p>
        </div><!-- End Section Title -->

        <div class="content">
            <div class="container">

                <div class="row">
                    <?php
                    foreach ($team_members as $row) {
                        ?>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="person">
                                <figure>
                                    <img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt="Image"
                                        class="img-fluid">
                                    <div class="social">
                                        <?php if ($row['facebook'] != ''): ?>
                                            <a href="<?php echo $row['facebook']; ?>" target="_blank"><span
                                                    class="bi bi-facebook"></span></a>
                                        <?php endif; ?>
                                        <?php if ($row['twitter'] != ''): ?>
                                            <a href="<?php echo $row['twitter']; ?>" target="_blank"><span
                                                    class="bi bi-twitter-x"></span></a>
                                        <?php endif; ?>
                                        <?php if ($row['linkedin'] != ''): ?>
                                            <a href="<?php echo $row['linkedin']; ?>" target="_blank"><span
                                                    class="bi bi-linkedin"></span></a>
                                        <?php endif; ?>
                                    </div>
                                </figure>
                                <div class="person-contents">
                                    <h3><?php echo $row['name']; ?></h3>
                                    <span class="position"><?php echo $row['designation']; ?></span>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>

    </section><!-- /Team Section -->
<?php endif; ?>
<!--Team-Area End-->

<!-- Services 2 Section -->
<section id="services-2" class="services-2 section dark-background">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Peraih Bonus & Bintang</h2>
        <p>Member Terbaik Peraih Bonus & Bintang</p>
    </div><!-- End Section Title -->

    <div class="services-carousel-wrap">
        <div class="container">
            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                },
                "navigation": {
                  "nextEl": ".js-custom-next",
                  "prevEl": ".js-custom-prev"
                },
                "breakpoints": {
                  "320": {
                    "slidesPerView": 1,
                    "spaceBetween": 40
                  },
                  "1200": {
                    "slidesPerView": 3,
                    "spaceBetween": 40
                  }
                }
              }
            </script>
                <button class="navigation-prev js-custom-prev">
                    <i class="bi bi-arrow-left-short"></i>
                </button>
                <button class="navigation-next js-custom-next">
                    <i class="bi bi-arrow-right-short"></i>
                </button>
                <div class="swiper-wrapper">
                    <?php
                    foreach ($photo_gallery as $row) {
                        ?>
                        <div class="swiper-slide">
                            <div class="service-item">
                                <img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo_name']; ?>"
                                    alt="Image" class="img-fluid">
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section><!-- /Services 2 Section -->

<!--Price-Table Start-->
<?php if ($page_home['home_ptable_status'] == 'Show'): ?>
    <div class="price-area bg-area pt_90 pb_90">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="headline">
                        <h2><?php echo $page_home['home_ptable_title']; ?></h2>
                        <h3><?php echo $page_home['home_ptable_subtitle']; ?></h3>
                    </div>
                </div>
            </div>
            <div class="row">

                <?php
                foreach ($pricing_table as $row) {
                    ?>
                    <div class="offset-md-2 col-md-8 offset-md-2 offset-lg-0 col-lg-4">
                        <div class="price-item">
                            <div class="price-header">
                                <i class="<?php echo $row['icon']; ?>" aria-hidden="true"></i>
                                <h3><?php echo $row['title']; ?></h3>
                                <h2><?php echo $row['price']; ?></h2>
                                <p><?php echo $row['subtitle']; ?></p>
                            </div>
                            <div class="price-body">
                                <?php echo $row['text']; ?>
                            </div>
                            <div class="price-footer">
                                <div class="button-df">
                                    <a href="<?php echo $row['button_url']; ?>"><?php echo $row['button_text']; ?> <i
                                            class="fa fa-chevron-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
<?php endif; ?>
<!--Price-Table End-->

<!--Testomonial-Area Start-->
<?php if ($page_home['home_testimonial_status'] == 'Show'): ?>
    <!-- Services 2 Section -->
    <section id="services-2" class="services-2 section dark-background">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2><?php echo $page_home['home_testimonial_title']; ?></h2>
            <p><?php echo $page_home['home_testimonial_subtitle']; ?></p>
        </div><!-- End Section Title -->

        <div class="services-carousel-wrap">
            <div class="container">
                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
                                                                                                                                              {
                                                                                                                                                "loop": true,
                                                                                                                                                "speed": 600,
                                                                                                                                                "autoplay": {
                                                                                                                                                  "delay": 5000
                                                                                                                                                },
                                                                                                                                                "slidesPerView": "auto",
                                                                                                                                                "pagination": {
                                                                                                                                                  "el": ".swiper-pagination",
                                                                                                                                                  "type": "bullets",
                                                                                                                                                  "clickable": true
                                                                                                                                                },
                                                                                                                                                "navigation": {
                                                                                                                                                  "nextEl": ".js-custom-next",
                                                                                                                                                  "prevEl": ".js-custom-prev"
                                                                                                                                                },
                                                                                                                                                "breakpoints": {
                                                                                                                                                  "320": {
                                                                                                                                                    "slidesPerView": 1,
                                                                                                                                                    "spaceBetween": 40
                                                                                                                                                  },
                                                                                                                                                  "1200": {
                                                                                                                                                    "slidesPerView": 3,
                                                                                                                                                    "spaceBetween": 40
                                                                                                                                                  }
                                                                                                                                                }
                                                                                                                                              }
                                                                                                                                            </script>
                    <button class="navigation-prev js-custom-prev">
                        <i class="bi bi-arrow-left-short"></i>
                    </button>
                    <button class="navigation-next js-custom-next">
                        <i class="bi bi-arrow-right-short"></i>
                    </button>
                    <div class="swiper-wrapper">
                        <?php
                        foreach ($testimonials as $row) {
                            ?>
                            <div class="swiper-slide">
                                <div class="service-item">
                                    <img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt="Image"
                                        class="img-fluid">
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section><!-- /Services 2 Section -->
<?php endif; ?>
<!--Testomonial-Area End-->

<!--Blog-Area Start-->
<?php if ($page_home['home_blog_status'] == 'Show'): ?>
    <!-- Recent Posts Section -->
    <section id="recent-posts" class="recent-posts section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2><?php echo $page_home['home_blog_title']; ?></h2>
            <p><?php echo $page_home['home_blog_subtitle']; ?></p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-5">
                <?php
                foreach ($all_news_category as $news) {
                    $dt = explode('-', $news['news_date']);
                    if ($dt[1] == '01') {
                        $month = 'Jan';
                    }
                    if ($dt[1] == '02') {
                        $month = 'Feb';
                    }
                    if ($dt[1] == '03') {
                        $month = 'Mar';
                    }
                    if ($dt[1] == '04') {
                        $month = 'Apr';
                    }
                    if ($dt[1] == '05') {
                        $month = 'May';
                    }
                    if ($dt[1] == '06') {
                        $month = 'Jun';
                    }
                    if ($dt[1] == '07') {
                        $month = 'Jul';
                    }
                    if ($dt[1] == '08') {
                        $month = 'Aug';
                    }
                    if ($dt[1] == '09') {
                        $month = 'Sep';
                    }
                    if ($dt[1] == '10') {
                        $month = 'Oct';
                    }
                    if ($dt[1] == '11') {
                        $month = 'Nov';
                    }
                    if ($dt[1] == '12') {
                        $month = 'Dec';
                    }
                    $year = $dt[0];
                    $day = $dt[2];
                    ?>
                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="post-item position-relative h-100">

                            <div class="post-img position-relative overflow-hidden">
                                <img src="<?php echo base_url(); ?>public/uploads/<?php echo $news['photo']; ?>"
                                    class="img-fluid" alt="">
                                <span class="post-date">
                                    <?php echo $month . ' ' . $day . ', ' . $year; ?></span>
                            </div>

                            <div class="post-content d-flex flex-column">

                                <h3 class="post-title"><?php echo $news['news_title']; ?></h3>

                                <div class="meta d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-folder2"></i> <span
                                            class="ps-2"><?php echo $news['category_name']; ?></span>
                                    </div>
                                </div>

                                <hr>

                                <a href="<?php echo base_url(); ?>news/view/<?php echo $news['news_id']; ?>"
                                    class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

                            </div>

                        </div>
                    </div><!-- End post item -->
                    <?php
                }
                ?>
            </div>

        </div>

    </section><!-- /Recent Posts Section -->
<?php endif; ?>
<!--Blog-Area End-->

<!--Brand-Area Start-->
<div class="brand-area bg-area pt_90 pb_90">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="brand-carousel owl-carousel">
                    <?php
                    foreach ($clients as $row) {
                        ?>
                        <?php if ($row['url'] != ''): ?>
                            <div class="brand-item"><a href="<?php echo $row['url']; ?>"><img
                                        src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>"
                                        alt="<?php echo $row['name']; ?>"></a></div>
                        <?php else: ?>
                            <div class="brand-item"><img
                                    src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>"
                                    alt="<?php echo $row['name']; ?>"></div>
                        <?php endif; ?>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Brand-Area End-->