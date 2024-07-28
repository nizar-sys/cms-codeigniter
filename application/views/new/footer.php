<section id="call-to-action"
    class="call-to-action section <?php if (!$setting['cta_background']) { ?> light-background <?php } ?>" <?php if ($setting['cta_background']) { ?>
        style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['cta_background']; ?> )"
    <?php } ?>>
    <div class="content">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-10">
                    <h3 <?php if ($setting['cta_background']) { ?> class="text-white" <?php } ?>>
                        <?php echo $setting['cta_text']; ?>
                    </h3>
                </div>
                <div class="col-lg-2">
                    <a href="<?php echo base_url(); ?>"
                        class="btn btn-secondary px-4 text-white"><?php echo $setting['cta_button_text']; ?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- /Call To Action Section -->

</main>

<footer id="footer" class="footer dark-background">

    <div class="footer-top">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename"><?php echo $setting['footer_col4_title']; ?></span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p><?php echo nl2br($setting['footer_address']); ?></p>
                        <p class="mt-3"><strong>Phone:</strong>
                            <span><?php echo nl2br($setting['footer_phone']); ?></span>
                        </p>
                        <p><strong>Email:</strong> <span><?php echo nl2br($setting['footer_email']); ?></span></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-3 footer-links">
                    <h4><?php echo $setting['footer_col1_title']; ?></h4>
                    <ul>
                        <li><?php echo nl2br($setting['newsletter_text']); ?></li>
                        <li>
                            <?php
                            if ($this->session->flashdata('error')) {
                                echo '<div class="error-class">' . $this->session->flashdata('error') . '</div>';
                            }
                            if ($this->session->flashdata('success')) {
                                echo '<div class="success-class">' . $this->session->flashdata('success') . '</div>';
                            }
                            ?>
                            <?php echo form_open(base_url() . 'newsletter/send', array('class' => '')); ?>
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="<?php echo EMAIL_ADDRESS; ?>"
                                    name="email_subscribe" required>
                                <span class="input-group-btn">
                                    <button class="btn btn-dark" type="submit" name="form_subscribe"><i
                                            class="fa fa-location-arrow"></i></button>
                                </span>
                            </div>
                            <?php echo form_close(); ?>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-3 footer-links">
                    <h4><?php echo $setting['footer_col2_title']; ?></h4>
                    <ul>
                        <?php
                        $i = 0;
                        foreach ($all_news as $news) {
                            $i++;
                            if ($i > $setting['footer_recent_news_item']) {
                                break;
                            }
                            ?>
                            <li><a
                                    href="<?php echo base_url(); ?>news/view/<?php echo $news['news_id']; ?>"><?php echo $news['news_title']; ?></a>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="copyright text-center">
        <div
            class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

            <div class="d-flex flex-column align-items-center align-items-lg-start">
                <div>
                    <?php echo $setting['footer_copyright']; ?>
                </div>
            </div>

            <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
                <?php
                foreach ($social as $row) {
                    if ($row['social_url'] != '') {
                        echo '<a href="' . $row['social_url'] . '"><i class="' . $row['social_icon'] . '"></i></a>';
                    }
                }
                ?>
            </div>

        </div>
    </div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="<?php echo base_url(); ?>public/ac/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>public/ac/assets/vendor/php-email-form/validate.js"></script>
<script src="<?php echo base_url(); ?>public/ac/assets/vendor/aos/aos.js"></script>
<script src="<?php echo base_url(); ?>public/ac/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo base_url(); ?>public/ac/assets/vendor/glightbox/js/glightbox.min.js"></script>

<!-- Main JS File -->
<script src="<?php echo base_url(); ?>public/ac/assets/js/main.js"></script>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Magnific Popup JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<script>
    $(document).ready(function () {
        // Initialize Magnific Popup for a gallery
        $('.gallery').magnificPopup({
            delegate: 'a', // child items selector, by clicking on it popup will open
            type: 'image',
            gallery: {
                enabled: true, // set to true to enable gallery mode
                navigateByImgClick: true,
                arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>', // markup of an arrow button
                tPrev: 'Previous (Left arrow key)', // title for left button
                tNext: 'Next (Right arrow key)', // title for right button
                tCounter: '<span class="mfp-counter">%curr% of %total%</span>' // markup of counter
            },
            image: {
                titleSrc: function (item) {
                    return item.el.attr('alt');
                }
            }
        });
    });
</script>

<!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            //   facebook: "#", // Facebook page ID
            whatsapp: " 6281362116978&text=Hallo abcsukses", // WhatsApp number
            text: "abcsukses.com",
            call_to_action: "Hubungi Kami", // Call to action
            button_color: "#FF6550", // Color of button
            position: "left", // Position may be 'right' or 'left'
            //    order: "facebook,whatsapp", // Order of buttons
        };
        var proto = document.location.protocol,
            host = "getbutton.io",
            url = proto + "//static." + host;
        var s = document.createElement("script");
        s.type = "text/javascript";
        s.async = true;
        s.src = url + "/widget-send-button/js/init.js";
        s.onload = function () {
            WhWidgetSendButton.init(host, proto, options);
        };
        var x = document.getElementsByTagName("script")[0];
        x.parentNode.insertBefore(s, x);
    })();
</script>

</body>

</html>