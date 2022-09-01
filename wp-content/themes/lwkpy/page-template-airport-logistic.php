<?php
/**
 * Template Name: Airport logistic content page
 * Template Post Type: post, page
 **/

get_header();

?>

<div class="banner-div" style="background:<?php echo get_field('top_banner_bg_color');?>">
    <div class="bg-color-2" style="background:<?php echo get_field('top_banner_bg_color_2');?>"></div>
    <div class="container">

        <?php
    $img_url = wp_get_attachment_image_src(get_field('top_banner'), 'full')[0];

    ?>
        <img class="w-100 banner-img" src="<?php echo $img_url;?>" alt="">


    </div>
</div>

<div class="mobile banner-div" style="background:<?php echo get_field('top_banner_bg_color');?>">
    <div class="bg-color-2" style="background:<?php echo get_field('top_banner_bg_color_2');?>"></div>
    <div class="container">

        <?php
    $img_url = wp_get_attachment_image_src(get_field('mobile_top_banner'), 'full')[0];

    ?>
        <img class="w-100 banner-img" src="<?php echo $img_url;?>" alt="">


    </div>
</div>

<img class="w-100" src="https://lwkpy.com.hk/wp-content/uploads/2022/09/plane-banner-top-2.jpg" alt="">


<div class="container">

    <div class="row">

        <div class="col-lg-6 col-md-12 col-sm-12 col-12 ">
            <table class="plane-icon-table mt-4">
                <tr>
                    <td><img class="w-100" src="https://lwkpy.com.hk/wp-content/uploads/2022/09/plane-logo-1.png"
                            alt=""></td>
                    <td><img class="w-100" src="https://lwkpy.com.hk/wp-content/uploads/2022/09/plane-logo-2.png"
                            alt=""></td>
                    <td><img class="w-100" src="https://lwkpy.com.hk/wp-content/uploads/2022/09/plane-logo-3.png"
                            alt=""></td>
                    <td><img class="w-100" src="https://lwkpy.com.hk/wp-content/uploads/2022/09/plane-logo-4.png"
                            alt=""></td>
                    <td><img class="w-100" src="https://lwkpy.com.hk/wp-content/uploads/2022/09/plane-logo-5.png"
                            alt=""></td>
                </tr>
            </table>

        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-12 ">
            <table class="plane-icon-table mt-4">
                <tr>

                    <td><img class="w-100" src="https://lwkpy.com.hk/wp-content/uploads/2022/09/plane-logo-6.png"
                            alt=""></td>
                    <td><img class="w-100" src="https://lwkpy.com.hk/wp-content/uploads/2022/09/plane-logo-7.png"
                            alt=""></td>
                    <td><img class="w-100" src="https://lwkpy.com.hk/wp-content/uploads/2022/09/plane-logo-8.png"
                            alt=""></td>
                    <td><img class="w-100" src="https://lwkpy.com.hk/wp-content/uploads/2022/09/plane-logo-9.png"
                            alt=""></td>
                </tr>
            </table>

        </div>
    </div>


    <!-- <span class="breadcrumb mt-4">


        <?php //echo get_field('breadcrumb'); ?>


    </span> -->

    <!-- <div class="row mt-0">

        <div class="col-12"><?php echo get_field('text_content');?></div>
    </div> -->
    <div class="row justify-content-center">

        <?php

// /      echo get_the_content();


?>

        <?php
      ?>


    </div>
</div>






</div>
<?php
get_footer();