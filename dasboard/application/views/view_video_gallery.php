<!--Banner Start-->
<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_video_gallery']; ?>)">
    <div class="bg"></div>
    <div class="bannder-table">
        <div class="banner-text">
            <h1><?php echo $page_video_gallery['video_gallery_heading']; ?></h1>
        </div>
    </div>
</div>
<!--Banner End-->

<!--Gallery Start-->
<div class="gallery-page pt_60 pb_90">
    <div class="container">
        <div class="row">
            <?php
            foreach ($video_gallery as $row) {
                ?>
                <div class="col-lg-4 col-sm-6">
                    
                    <div class="gallery-group">
                        
                        
                                
                                 <iframe width="350" height="180" src="<?php echo $row['url']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                
                                
                    </div>
                    <center><h4><?php echo $row['video_name']; ?></h4></center>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>
<!--Gallery End-->