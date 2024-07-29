<!-- Core Style -->
<style>
    /* Core Style */

    /* Page Title Section */
    .page-title {
        position: relative;
        padding: 60px 0;
        color: #fff;
        text-align: center;
        border-bottom: 3px solid #fff;
        /* Optional: Add a bottom border for extra style */
    }

    .page-title h2 {
        font-size: 2em;
        margin: 0;
        font-weight: bold;
        letter-spacing: 1px;
        color: #116530;
        /* Add some spacing between letters */
    }

    .page-title p {
        font-size: 1.2em;
        margin-top: 10px;
        font-weight: 300;
        letter-spacing: 0.5px;
        color: #212529;
        /* Add some spacing between letters */
    }

    #wrapper {
        position: relative;
        float: none;
        width: 100%;
        margin: 0 auto;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    @media (min-width: 1200px) {
        body:not(.stretched) #wrapper {
            max-width: 1200px;
        }
    }

    @media (min-width: 1400px) {
        body:not(.stretched) #wrapper {
            max-width: 1400px;
        }
    }

    .stretched #wrapper {
        width: 100%;
        margin: 0;
        box-shadow: none;
    }

    #content {
        position: relative;
    }

    .content-wrap {
        position: relative;
        padding: var(--cnvs-content-padding) 0;
        overflow: hidden;
    }

    .grid-container,
    .grid-inner {
        position: relative;
        overflow: hidden;
        will-change: transform;
    }

    .grid-inner {
        width: 100%;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
    }

    .grid-container {
        transition: height 0.4s ease;
    }

    @media (prefers-reduced-motion: reduce) {
        .grid-container {
            transition: none;
        }
    }

    /* Masonry Thumbs */
    .masonry-thumbs {
        position: relative;
        --bs-gutter-x: calc(20px);
        /* Adjust gutter for horizontal spacing */
        --bs-gutter-y: calc(20px);
        /* Adjust gutter for vertical spacing */
    }

    .masonry-thumbs>* {
        overflow: hidden;
    }

    .masonry-gap-lg {
        --bs-gutter-x: calc(30px);
        /* Adjusted gutter for larger spacing */
        --bs-gutter-y: calc(30px);
    }

    .masonry-gap-xl {
        --bs-gutter-x: calc(50px);
        /* Adjusted gutter for extra large spacing */
        --bs-gutter-y: calc(50px);
    }

    .masonry-thumbs>*>img,
    .masonry-thumbs .grid-inner>img {
        display: block;
        width: 100%;
        height: auto;
        border-radius: 0;
    }

    .mfp-counter {
        color: #fff;
        font-size: 14px;
        position: absolute;
        top: 10px;
        right: 10px;
    }

    .mfp-arrow {
        color: #fff;
        font-size: 18px;
    }
</style>

<section>
    <div id="wrapper">
        <!-- Page Title Section -->
        <section class="page-title">
            <div class="content-wrap">
                <h2>Merayakan Keunggulan dan Prestasi</h2>
                <p>Temukan penghargaan bergengsi yang diperoleh anggota kami, yang menunjukkan dedikasi dan keberhasilan
                    mereka.</p>
            </div>
        </section><!-- .page-title end -->
        <!-- Content
        ============================================= -->
        <section id="content">
            <div class="content-wrap p-0">
                <div class="masonry-thumbs grid-container row row-cols-4 gallery m-2">
                    <?php
                    foreach ($photo_gallery as $row) {
                        ?>
                        <a class="grid-item popup-link"
                            href="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo_name']; ?>">
                            <img class="op-ts h-op-09"
                                src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo_name']; ?>"
                                alt="Gallery Thumb"></a>
                        <?php
                    }
                    ?>
                </div>

                <div class="clear"></div>

            </div>
        </section><!-- #content end -->

    </div><!-- #wrapper end -->
</section>