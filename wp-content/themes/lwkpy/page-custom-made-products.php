<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

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



<div class="container mt-5 about-middle mb-5">

    <span class="breadcrumb mt-4">


        <?php echo get_field('breadcrumb'); ?>


    </span>


    <div class="row mt-0">

        <div class="col-12 text-center"><?php echo get_field('text_content');?></div>
    </div>


    <div class="grey-container p-4">
        <div class="row">


            <div class="col-12 text-center">


                <?php echo get_field('text_content_2');?>



            </div>
            <div class="col-6">

                <?php 
            echo do_shortcode('[wpforms id="1390"]'); 
            // $content    = get_the_content();
	// $newcontent = add_anchors($content);
	// echo wpautop($newcontent);
    

    ?>

                <!-- <form action="" class="custom-made-form">
                    <table class="w-100">
                        <tr>
                            <td class="pe-2">?????????
                                <input type="text" class="form-control">
                            </td>
                            <td>
                                <input type="text" class="form-control">


                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="pt-2">
                                ??????
                                <input type="text" class="form-control">

                            </td>
                        </tr>

                        <tr>
                            <td colspan="2" class="pt-2">
                                ??????
                                <input type="text" class="form-control">

                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="pt-2">
                                ??????(?????????)
                                <input type="text" class="form-control">

                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="pt-2">
                                ????????????(?????????)
                                <input type="text" class="form-control">

                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="pt-2">
                                ??????????????????
                                <input type="text" class="form-control">
                <select name="wpforms[fields][7]" id="wpforms-5729-field_7"
                    class="wpforms-field-medium wpforms-valid form-select" aria-invalid="false">
                    <option value="????????????">????????????</option>
                    <option value="???????????????">???????????????</option>
                    <option value="??????">??????</option>
                    <option value="?????????">?????????</option>
                    <option value="?????????????????????">?????????????????????</option>
                    <option value="??????">??????</option>
                    <option value="??????">??????</option>
                </select>
                </td>
                </tr>
                <tr>
                    <td colspan="2" class="pt-2">
                        ??????
                        <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                    </td>
                </tr>

                </table>
                </form> -->
            </div>
            <div class="col-6">

                <img class="w-100 mt-4" src="/wp-content/uploads/2021/06/custom-form-img.png" alt="">
            </div>

        </div>
    </div>



</div>







</div>

<script type="text/javascript">
$(function() {

    var h = $('.map iframe').width();

    $('.map iframe').height(h);
})
</script>
<?php
get_footer();