<section id="hero" class="hero section dark-background">

    <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <?php
        foreach ($sliders as $slider) {
        ?>
            <div class="carousel-item activee">
                <img src="<?php echo base_url(); ?>public/uploads/<?php echo $slider['photo']; ?>" alt="">
                <div class="carousel-container">
                    <?php if ($slider['heading'] != '') : ?>
                        <h2><?php echo $slider['heading']; ?></h2>
                    <?php endif; ?>

                    <?php if ($slider['content'] != '') : ?>
                        <p>
                            <?php echo nl2br($slider['content']); ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
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

</section>