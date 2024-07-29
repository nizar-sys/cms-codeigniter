<!-- Core Style -->
<style>
    /* Core Style */
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
</style>

<div class="container">
    <section id="blog-detail">
        <div class="row">

            <div class="col-lg-8">

                <!-- Blog Details Section -->
                <section id="blog-details" class="blog-details section">
                    <div class="container">

                        <article class="article">

                            <div class="post-img">
                                <img src="<?php echo base_url(); ?>public/uploads/<?php echo $news_detail['photo']; ?>"
                                    alt="" class="img-fluid">
                            </div>

                            <h2 class="title"><?php echo $news_detail['news_title']; ?>
                            </h2>

                            <div class="meta-top">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i><?php
                                    $dt = explode('-', $news_detail['news_date']);
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
                                    ?></a>
                                    </li>
                                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                            href="blog-details.html">12 Comments</a></li>
                                </ul>
                            </div><!-- End meta top -->

                            <div class="content">
                                <?php echo $news_detail['news_content']; ?>
                            </div><!-- End post content -->

                            <div class="meta-bottom">
                                <i class="bi bi-folder"></i>
                                <ul class="cats">
                                    <li><a
                                            href="<?php echo base_url(); ?>category/<?php echo $news_detail['category_id']; ?>"><?php echo $news_detail['category_name']; ?></a>
                                    </li>
                                </ul>
                            </div><!-- End meta bottom -->

                        </article>

                    </div>
                </section><!-- /Blog Details Section -->

                <!-- Blog Comments Section -->
                <section id="blog-comments" class="blog-comments section">

                    <div class="container">
                        <?php if ($news_detail['comment'] == 'On'): ?>
                            <h4 class="comments-count"><?php echo COMMENT; ?></h4>

                            <div id="comment-1" class="comment">
                                <div class="d-flex">
                                    <?php
                                    $final_url = base_url() . 'news/view/' . $id;
                                    ?>
                                    <div class="fb-comments" data-href="<?php echo $final_url; ?>" data-numposts="5"></div>
                                </div>
                            </div><!-- End comment #1 -->
                        <?php endif; ?>
                    </div>
                </section><!-- /Blog Comments Section -->
            </div>

            <div class="col-lg-4 sidebar">

                <div class="widgets-container">

                    <!-- Search Widget -->
                    <div class="search-widget widget-item">

                        <h3 class="widget-title">CARI</h3>
                        <?php echo form_open(base_url() . 'search'); ?>
                        <input type="text">
                        <button type="submit" name="form1" title="Search"><i class="bi bi-search"></i></button>
                        </form>

                    </div><!--/Search Widget -->

                    <!-- Categories Widget -->
                    <div class="categories-widget widget-item">

                        <h3 class="widget-title"><?php echo $setting['sidebar_news_heading_category']; ?></h3>
                        <ul class="mt-3">
                            <?php
                            foreach ($all_categories as $row) {
                                ?>
                                <li><a
                                        href="<?php echo base_url(); ?>category/<?php echo $row['category_id']; ?>"><?php echo $row['category_name']; ?></a>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>

                    </div><!--/Categories Widget -->

                    <!-- Recent Posts Widget 2 -->
                    <div class="recent-posts-widget-2 widget-item">

                        <h3 class="widget-title"><?php echo $setting['sidebar_news_heading_recent_post']; ?></h3>

                        <?php
                        $i = 0;
                        foreach ($news as $row) {
                            $i++;
                            if ($i > $setting['sidebar_total_recent_post']) {
                                break;
                            }
                            ?>
                            <div class="post-item">
                                <h4><a href="<?php echo base_url(); ?>news/view/<?php echo $row['news_id']; ?>"><?php echo $row['news_title']; ?>
                                </h4>
                                <time datetime="<?php $row['news_date']; ?>"><?php
                                  $dt = explode('-', $row['news_date']);
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
                                  ?></time>
                            </div><!-- End recent post item-->
                        </div>
                        <?php
                        }
                        ?>
                </div><!--/Recent Posts Widget 2 -->
            </div>
        </div>

</div>