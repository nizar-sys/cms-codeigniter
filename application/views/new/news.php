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

    #blog-posts-2,
    #blog-pagination {
        position: relative;
        background-color: #f9f9f9;
    }

    .content-wrap {
        position: relative;
        padding: var(--cnvs-content-padding) 0;
        overflow: hidden;
    }
</style>

<section>
    <div id="wrapper">
        <!-- Page Title Section -->
        <section class="page-title">
            <div class="content-wrap">
                <h2><?php echo $page_news['news_heading']; ?></h2>
                <p>Temukan berita perusahaan terkini dan artikel yang bermanfaat.</p>
            </div>
        </section><!-- .page-title end -->

        <!-- Blog Posts 2 Section -->
        <section id="blog-posts-2" class="blog-posts-2 section">

            <div class="container">
                <div class="row gy-4">
                    <?php
                    foreach ($news_fetched as $row) {
                        ?>
                        <div class="col-lg-4">
                            <article class="position-relative h-100">

                                <div class="post-img position-relative overflow-hidden">
                                    <img src="<?php echo base_url(); ?>public/uploads/<?php echo $row->photo; ?>"
                                        class="img-fluid" alt="">
                                </div>

                                <div class="meta d-flex align-items-end">
                                    <span class="post-date"><?php
                                    $dt = explode('-', $row->news_date);
                                    if ($dt[1] == '01') {
                                        $month = 'January';
                                    }
                                    if ($dt[1] == '02') {
                                        $month = 'February';
                                    }
                                    if ($dt[1] == '03') {
                                        $month = 'March';
                                    }
                                    if ($dt[1] == '04') {
                                        $month = 'April';
                                    }
                                    if ($dt[1] == '05') {
                                        $month = 'May';
                                    }
                                    if ($dt[1] == '06') {
                                        $month = 'June';
                                    }
                                    if ($dt[1] == '07') {
                                        $month = 'July';
                                    }
                                    if ($dt[1] == '08') {
                                        $month = 'August';
                                    }
                                    if ($dt[1] == '09') {
                                        $month = 'September';
                                    }
                                    if ($dt[1] == '10') {
                                        $month = 'October';
                                    }
                                    if ($dt[1] == '11') {
                                        $month = 'November';
                                    }
                                    if ($dt[1] == '12') {
                                        $month = 'December';
                                    }
                                    echo $month . ' ' . $dt[2] . ', ' . $dt[0];
                                    ?></span>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-folder2"></i> <span
                                            class="ps-2"><?php echo $row->category_name; ?></span>
                                    </div>
                                </div>

                                <div class="post-content d-flex flex-column">

                                    <h3 class="post-title"><?php echo $row->news_title; ?></h3>
                                    <a href="<?php echo base_url(); ?>news/view/<?php echo $row->news_id; ?>"
                                        class="readmore stretched-link"><span><?php echo READ_MORE; ?></span><i
                                            class="bi bi-arrow-right"></i></a>

                                </div>

                            </article>
                        </div><!-- End post list item -->
                        <?php
                    }
                    ?>
                </div>
            </div>

        </section><!-- /Blog Posts 2 Section -->

        <!-- Blog Pagination Section -->
        <section id="blog-pagination" class="blog-pagination section">

            <div class="container">
                <div class="d-flex justify-content-center">
                    <?php echo $links; ?>
                </div>
            </div>

        </section><!-- /Blog Pagination Section -->

    </div><!-- #wrapper end -->
</section>