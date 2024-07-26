<?php
defined('BASEPATH') or exit('No direct script access allowed');
$error_message = '';
$success_message = '';
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

    <?php

    $CI = &get_instance();
    $CI->load->model('Model_common');

    $language = $CI->Model_common->get_language_data();

    foreach ($language as $lang) {
        define($lang['name'], $lang['value']);
    }

    $class_name = '';
    $segment_2 = 0;
    $segment_3 = 0;
    $class_name = $this->router->fetch_class();
    $segment_2 = $this->uri->segment('2');
    $segment_3 = $this->uri->segment('3');

    if ($class_name == 'home') {
        echo '<meta name="description" content="' . $page_home['meta_description'] . '">';
        echo '<meta name="keywords" content="' . $page_home['meta_keyword'] . '">';
        echo '<title>' . $page_home['title'] . '</title>';
    }
    if ($class_name == 'about') {
        echo '<meta name="description" content="' . $page_about['md_about'] . '">';
        echo '<meta name="keywords" content="' . $page_about['mk_about'] . '">';
        echo '<title>' . $page_about['mt_about'] . '</title>';
    }
    if ($class_name == 'faq') {
        echo '<meta name="description" content="' . $page_faq['md_faq'] . '">';
        echo '<meta name="keywords" content="' . $page_faq['mk_faq'] . '">';
        echo '<title>' . $page_faq['mt_faq'] . '</title>';
    }
    if ($class_name == 'team') {
        echo '<meta name="description" content="' . $page_team['md_team'] . '">';
        echo '<meta name="keywords" content="' . $page_team['mk_team'] . '">';
        echo '<title>' . $page_team['mt_team'] . '</title>';
    }
    if ($class_name == 'team_member') {
        $single_team_member = $this->Model_team_member->team_member_detail($segment_2);
        echo '<meta name="description" content="' . $single_team_member['meta_description'] . '">';
        echo '<meta name="keywords" content="' . $single_team_member['meta_keyword'] . '">';
        echo '<title>' . $single_team_member['meta_title'] . '</title>';
    }
    if ($class_name == 'portfolio') {
        echo '<meta name="description" content="' . $page_portfolio['md_portfolio'] . '">';
        echo '<meta name="keywords" content="' . $page_portfolio['mk_portfolio'] . '">';
        echo '<title>' . $page_portfolio['mt_portfolio'] . '</title>';
    }
    if ($class_name == 'testimonial') {
        echo '<meta name="description" content="' . $page_testimonial['md_testimonial'] . '">';
        echo '<meta name="keywords" content="' . $page_testimonial['mk_testimonial'] . '">';
        echo '<title>' . $page_testimonial['mt_testimonial'] . '</title>';
    }
    if ($class_name == 'contact') {
        echo '<meta name="description" content="' . $page_contact['md_contact'] . '">';
        echo '<meta name="keywords" content="' . $page_contact['mk_contact'] . '">';
        echo '<title>' . $page_contact['mt_contact'] . '</title>';
    }
    if ($class_name == 'search') {
        echo '<meta name="description" content="' . $page_search['md_search'] . '">';
        echo '<meta name="keywords" content="' . $page_search['mk_search'] . '">';
        echo '<title>' . $page_search['mt_search'] . '</title>';
    }
    if ($class_name == 'terms-and-conditions') {
        echo '<meta name="description" content="' . $page_term['md_term'] . '">';
        echo '<meta name="keywords" content="' . $page_term['mk_term'] . '">';
        echo '<title>' . $page_term['mt_term'] . '</title>';
    }
    if ($class_name == 'privacy-policy') {
        echo '<meta name="description" content="' . $page_privacy['md_privacy'] . '">';
        echo '<meta name="keywords" content="' . $page_privacy['mk_privacy'] . '">';
        echo '<title>' . $page_privacy['mt_privacy'] . '</title>';
    }
    if ($class_name == 'pricing') {
        echo '<meta name="description" content="' . $page_pricing['md_pricing'] . '">';
        echo '<meta name="keywords" content="' . $page_pricing['mk_pricing'] . '">';
        echo '<title>' . $page_pricing['mt_pricing'] . '</title>';
    }
    if ($class_name == 'photo_gallery') {
        echo '<meta name="description" content="' . $page_photo_gallery['md_photo_gallery'] . '">';
        echo '<meta name="keywords" content="' . $page_photo_gallery['mk_photo_gallery'] . '">';
        echo '<title>' . $page_photo_gallery['mt_photo_gallery'] . '</title>';
    }
    if ($class_name == 'service') {
        if ($segment_3 == 0) {
            echo '<meta name="description" content="' . $page_service['md_service'] . '">';
            echo '<meta name="keywords" content="' . $page_service['mk_service'] . '">';
            echo '<title>' . $page_service['mt_service'] . '</title>';
        } else {
            $single_service = $this->Model_service->service_detail($segment_3);
            echo '<meta name="description" content="' . $single_service['meta_description'] . '">';
            echo '<meta name="keywords" content="' . $single_service['meta_keyword'] . '">';
            echo '<title>' . $single_service['meta_title'] . '</title>';
        }
    }
    if ($class_name == 'category') {
        $single_category = $this->Model_category->category_by_id($segment_2);
        echo '<meta name="description" content="' . $single_category['meta_description'] . '">';
        echo '<meta name="keywords" content="' . $single_category['meta_keyword'] . '">';
        echo '<title>' . $single_category['meta_title'] . '</title>';
    }
    if ($class_name == 'news') {
        if ($segment_3 == 0) {
            echo '<meta name="description" content="' . $page_news['md_news'] . '">';
            echo '<meta name="keywords" content="' . $page_news['mk_news'] . '">';
            echo '<title>' . $page_news['mt_news'] . '</title>';
        } else {
            $news_single_item = $this->Model_news->news_detail($segment_3);
            echo '<meta name="description" content="' . $news_single_item['meta_description'] . '">';
            echo '<meta name="keywords" content="' . $news_single_item['meta_keyword'] . '">';
            echo '<title>' . $news_single_item['meta_title'] . '</title>';
            $og_id = $news_single_item['news_id'];
            $og_photo = $news_single_item['photo'];
            $og_title = $news_single_item['news_title'];
            $og_description = $news_single_item['news_content_short'];
            echo '<meta property="og:title" content="' . $og_title . '">';
            echo '<meta property="og:type" content="website">';
            echo '<meta property="og:url" content="' . base_url() . 'news/view/' . $og_id . '">';
            echo '<meta property="og:description" content="' . $og_description . '">';
            echo '<meta property="og:image" content="' . base_url() . 'public/uploads/' . $og_photo . '">';
        }
    }
    if ($class_name == 'event') {
        if ($segment_3 == 0) {
            echo '<meta name="description" content="' . $page_event['md_event'] . '">';
            echo '<meta name="keywords" content="' . $page_event['mk_event'] . '">';
            echo '<title>' . $page_event['mt_event'] . '</title>';
        } else {
            $event_single_item = $this->Model_event->event_detail($segment_3);
            echo '<meta name="description" content="' . $event_single_item['meta_description'] . '">';
            echo '<meta name="keywords" content="' . $event_single_item['meta_keyword'] . '">';
            echo '<title>' . $event_single_item['meta_title'] . '</title>';
            $og_id = $event_single_item['event_id'];
            $og_photo = $event_single_item['photo'];
            $og_title = $event_single_item['event_title'];
            $og_description = $event_single_item['event_content_short'];
            echo '<meta property="og:title" content="' . $og_title . '">';
            echo '<meta property="og:type" content="website">';
            echo '<meta property="og:url" content="' . base_url() . 'event/view/' . $og_id . '">';
            echo '<meta property="og:description" content="' . $og_description . '">';
            echo '<meta property="og:image" content="' . base_url() . 'public/uploads/' . $og_photo . '">';
        }
    }
    ?>

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>public/uploads/<?php echo $setting['favicon']; ?>">
    <link href="<?php echo base_url(); ?>public/ac/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Marcellus:wght@400&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url(); ?>public/ac/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/ac/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/ac/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/ac/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/ac/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="<?php echo base_url(); ?>public/ac/assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/font-awesome.min.css">

    <style>
        .searchbar {
            position: absolute;
            top: 50px;
            /* Adjust as necessary */
            right: 20px;
            /* Adjust as necessary */
            z-index: 1050;
            background-color: white;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
            transition: all 1s ease;
            /* Adjusted transition duration to 1s */
        }

        .searchbar.show {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .searchbar.d-none {
            opacity: 0;
            visibility: hidden;
            transform: translateY(-20px);
        }

        .input-search {
            display: flex;
        }

        .input-search input {
            flex: 1;
        }

        .input-group-btn {
            margin-left: 5px;
        }
    </style>
    <?php if ($setting['cta_background']) { ?>
        <style>
            .call-to-action {
                background-size: cover;
                background-position: center;
                padding: 60px 0;
                color: #fff;
                text-align: center;
                position: relative;
            }

            .call-to-action::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5);
                /* Adjust for darker overlay */
                z-index: 1;
            }

            .call-to-action .content {
                position: relative;
                z-index: 2;
            }

            .call-to-action h3 {
                font-size: 2rem;
                font-weight: 700;
                margin: 0 0 20px;
            }

            .call-to-action .btn {
                background-color: #28a745;
                /* Primary button color */
                border: none;
                color: #fff;
                transition: background-color 0.3s ease, color 0.3s ease;
                /* Added color transition */
                text-decoration: none;
                padding: 10px 20px;
                border-radius: 5px;
                display: inline-block;
            }

            .call-to-action .btn:hover {
                background-color: #218838;
                /* Darker shade on hover */
                color: #000;
                /* Text color on hover */
            }

            @media (max-width: 992px) {
                .call-to-action h3 {
                    font-size: 1.5rem;
                }

                .call-to-action .btn {
                    width: 100%;
                }
            }
        </style>
    <?php } ?>
</head>

<body class="index-page">

    <?php echo $comment['code_body']; ?>


    <header id="header" class="header d-flex align-items-center position-relative">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="<?php echo base_url(); ?>" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo']; ?>" alt="Logo">
                <!-- <h1 class="sitename">AgriCulture</h1>  -->
            </a>

            <!-- Navigation Menu -->
            <nav id="navmenu" class="navmenu">
                <ul class="nav">
                    <li class="nav-item"><a href="<?php echo base_url(); ?>"
                            class="nav-link active"><?php echo HOME; ?></a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo PAGE; ?> <i class="bi bi-chevron-down toggle-dropdown"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a href="<?php echo base_url(); ?>photo-gallery"
                                    class="dropdown-item"><?php echo PHOTO_GALLERY; ?></a></li>
                            <li><a href="<?php echo base_url(); ?>video-gallery"
                                    class="dropdown-item"><?php echo VIDEO_GALERY; ?></a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="https://abcsukses.com/app/" class="nav-link">OMSET RO</a></li>
                    <li class="nav-item"><a href="https://abcsukses.com/app/main/promo" class="nav-link">PROMO TOUR</a>
                    </li>
                    <li class="nav-item"><a href="<?php echo base_url(); ?>news"
                            class="nav-link"><?php echo NEWS; ?></a></li>
                    <li class="nav-item"><a href="<?php echo base_url(); ?>contact"
                            class="nav-link"><?php echo CONTACT; ?></a></li>
                    <li class="nav-item"><a href="#" class="nav-link" data-bs-toggle="modal"
                            data-bs-target="#login">Login</a></li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" id="search-icon"><i class="bi bi-search"></i></a>
                    </li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <!-- Searchbar -->
            <div class="searchbar d-none" id="searchbar">
                <div class="search-button"><i class="fa fa-search"></i></div>
                <?php echo form_open(base_url() . 'search'); ?>
                <div class="input-group input-search">
                    <input type="text" class="form-control" placeholder="<?php echo SEARCH_FOR; ?>"
                        name="search_string">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="submit" name="form1"><i class="fa fa-search"></i></button>
                    </span>
                </div>
                <?php echo form_close(); ?>
            </div>

            <script>
                document.getElementById('search-icon').addEventListener('click', function () {
                    var searchbar = document.getElementById('searchbar');
                    searchbar.classList.toggle('d-none');
                    searchbar.classList.toggle('show');
                });
            </script>

        </div>
    </header>

    <main class="main">

        <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
                        <h5 class="modal-title" id="myModalLabel">Form Login</h5>
                    </div>
                    <center>
                        <div class="modal-body">
                            <?php
                            $attributes2 = array('id' => 'formku', 'class' => 'form-horizontal', 'role' => 'form');

                            ?>
                            <form enctype='multipart/form-data' action='https://abcsukses.com/app/auth/login' <?php $attributes2 ?> method='post'>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Username</label>
                                    <div class='col-sm-9'>
                                        <div style='background:#fff;' class="input-group col-sm-10">
                                            <input type="text" class="required form-control" name="a" minlength='5'
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Password</label>
                                    <div class='col-sm-9'>
                                        <div style='background:#fff;' class="input-group col-sm-10">
                                            <input type="password" class="required form-control" minlength='5' name="b"
                                                required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-3">
                                        <button type="submit" name='login' class="btn btn-primary">Login</button>
                                        &nbsp; &nbsp; &nbsp;<a data-bs-dismiss="modal" aria-hidden="true"
                                            data-bs-toggle='modal' href='#lupass' data-bs-target='#lupass'
                                            title="Lupa Password!!!">Lupa Password?</a>
                                    </div>
                                </div>
                            </form>
                            <div style='clear:both'></div>
                        </div>
                    </center>
                </div>
            </div>
        </div>

        <div class="modal fade" id="lupass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
                        <h5 class="modal-title" id="myModalLabel">Lupa Password?</h5>
                    </div>
                    <center>
                        <div class="modal-body">
                            <?php
                            $attributes3 = array('id' => 'formku', 'class' => 'form-horizontal', 'role' => 'form');
                            echo form_open_multipart('https://app.abcsukses.com/auth/lupass', $attributes3);
                            ?>
                            <div class="form-group">
                                <center style='color:red'>Masukkan username</center><br>
                                <label for="inputEmail3" class="col-sm-2 control-label">username</label>
                                <div class='col-sm-9'>
                                    <div style='background:#fff;' class="input-group col-sm-10">
                                        <input style='text-transform:lowercase;' type="text"
                                            class="required form-control" name="a" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-3">
                                    <button type="submit" name='lupa' class="btn btn-primary">Kirim</button>
                                    &nbsp; &nbsp; &nbsp;<a data-bs-dismiss="modal" aria-hidden="true"
                                        data-bs-toggle='modal' href='#login' data-bs-target='#login'
                                        title="Lupa Password Members">Kembali Login?</a>
                                </div>
                            </div>
                            </form>
                            <div style='clear:both'></div>
                        </div>
                    </center>
                </div>
            </div>
        </div>

        <div class="modal fade" id="orderkode" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
                        <h5 class="modal-title" id="myModalLabel">Order Kode Aktivasi</h5>
                    </div>
                    <div class="modal-body">
                        <?php
                        $attributes3 = array('id' => 'formku', 'class' => 'form-horizontal', 'role' => 'form');
                        echo form_open_multipart('auth/order', $attributes3);
                        ?>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Jumah Pin</label>
                            <div class='col-sm-9'>
                                <div style='background:#fff;' class="input-group col-sm-10">
                                    <select class='required form-control' name='jml' required>
                                        <?php
                                        for ($i = 1; $i <= 50; $i++) {
                                            echo "<option value='$i'>$i</option>";
                                        }
                                        ?>
                                    </select>
                                    <button style='margin-top:5px' type="submit" name='order'
                                        class="btn btn-sm btn-primary">Selanjutnya <span
                                            class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></button>
                                </div>
                            </div>
                        </div>

                        </form>
                        <div style='clear:both'></div>
                    </div>
                </div>
            </div>
        </div>