<!-- Page Title Section -->
<section class="page-title">
    <div class="content-wrap">
        <h2><?php echo $page_contact['contact_heading']; ?></h2>
        <p>Kami siap membantu pertanyaan dan masukan anda.</p>
    </div>
</section><!-- .page-title end -->

<!-- Contact Section -->
<section id="contact" class="contact section">

    <div class="mb-5">
        <?php echo $page_contact['contact_map']; ?>
    </div><!-- End Google Maps -->

    <div class="container" data-aos="fade">

        <div class="row gy-5 gx-lg-5">

            <div class="col-lg-12">

                <div class="info">
                    <h3>Hubungi Kami</h3>
                    <p>Hubungi kami untuk pertanyaan, komentar, atau kebutuhan dukungan apa pun.</p>

                    <div class="info-item d-flex">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h4><?php echo ADDRESS; ?>:</h4>
                            <p><?php echo nl2br($page_contact['contact_address']); ?></p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h4><?php echo EMAIL_ADDRESS; ?>:</h4>
                            <p><?php echo nl2br($page_contact['contact_email']); ?></p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

            </div>

            <!-- <div class="col-lg-8">
                <?php echo form_open(base_url() . 'contact/send_email', array('class' => 'php-email-form', 'role' => 'form')); ?>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="<?php echo NAME; ?>"
                            required="">
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                            required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="text" name="phone" class="form-control" id="phone"
                            placeholder="<?php echo PHONE_NUMBER; ?>" required="">
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="text" class="form-control" name="subject" id="subject"
                            placeholder="<?php echo SUBJECT; ?>" required="">
                    </div>
                </div>
                <div class="form-group mt-3">
                    <textarea class="form-control" name="message" placeholder="<?php echo MESSAGE; ?>"
                        required=""></textarea>
                </div>
                <div class="my-3">
                    <div class="loading">Loading</div>
                    <?php
                    if ($this->session->flashdata('error')) {
                        echo '<div class="error-message">' . $this->session->flashdata('error') . '</div>';
                    }
                    if ($this->session->flashdata('success')) {
                        echo '<div class="sent-message">' . $this->session->flashdata('success') . '</div>';
                    }
                    ?>
                </div>
            </div>
            <div class="text-center"><button type="submit" name="form_contact"
                    name="form_contact"><?php echo SEND_MESSAGE; ?></button></div>
            <?php echo form_close(); ?>
        </div>--> <!-- End Contact Form -->

        </div>

    </div>

</section><!-- /Contact Section -->