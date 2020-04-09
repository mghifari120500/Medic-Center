<!--Template Name: Medistore
File Name: home.html
Author Name: ThemeVault
Author URI: http://www.themevault.net/
License URI: http://www.themevault.net/license/-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <?php $this->load->view('includes/header', $headerData); ?>
    <body>
        <?php $this->load->view('includes/navbar'); ?>

        <div id="site_content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 right_sidebar1">
                        <div id="right_part">
                            <div class="contentContainer">
                                <div class="contentText">
                                    <div class="breadcrumbs">
                                        <a href="home.html" class="headerNavigation"><i class="fa fa-home"></i></a>			
                                    </div>
                                </div>

                                <!----slider start-!-->
                                <div class="contentText">
                                    <div class="infoBoxHeading">Paling Banyak Dibeli</div>

                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12"  >
                                            <!--                                        <div class="bg_best">-->
                                            <div class="bg_best">
                                                <div class="owl-carousel">
                                                    <?php 
                                                        foreach ($viewData['showcase'] as $data) { 
                                                    ?>
                                                    <div class="item">
                                                        <span>    
                                                        <img class="carasoul_image" src="<?= asset_url(); ?>images/product/<?=$data['nama'];?>.jpg">
                                                        <a class="btn btn-default"  href="cart.html" role="button" >
                                                            Tambahkan ke Keranjang
                                                        </a>
                                                    </div>
                                                    <?php
                                                        }
                                                    ?>
                                                </div>

                                                <script>
                                                    $(document).ready(function () {
                                                        $('.owl-carousel').owlCarousel({
                                                            loop: true,
                                                            margin: 10,
                                                            responsiveClass: true,
                                                            responsive: {
                                                                0: {
                                                                    items: 2,
                                                                    nav: true
                                                                },
                                                                600: {
                                                                    items: 3,
                                                                    nav: false
                                                                },
                                                                1000: {
                                                                    items: 5,
                                                                    nav: true,
                                                                    loop: false,
                                                                    margin: 20
                                                                }

                                                            }
                                                        })
                                                    })
                                                </script>
                                            </div>
                                            <!--                                    </div>-->
                                        </div>
                                    </div>
                                </div>
                                <!----slider End-!-->
                                <!----content_2 For New Products--!-->
                                <div class="contentText">
                                    <h1>Daftar Katalog</h1>
                                    <div class="row margin-top product-layout_width">
                                        <?php 
                                            foreach ($viewData['medicine'] as $data) { 
                                        ?>
                                        <div class="product-layout  col-md-4 col-sm-6 col-xs-12">
                                            <div class="product-thumb-height text-center">
                                                <div class="product-thumb transition">
                                                    <ul>
                                                        <li class="li_product_title">
                                                            <div class="product_title">
                                                                <?=$data['nama'];?>
                                                            </div>
                                                        </li>
                                                        <li class="li_product_image">
                                                            <div class="image">
                                                                <img src="<?= asset_url(); ?>images/product/<?=$data['nama'];?>.jpg" class="img-responsive" width="200" height="200" />
                                                            </div>
                                                        </li>
                                                        <li class="li_product_price">
                                                            <span class="old_price1"></span>
                                                            <span class="new_price1"><?=showPrice($data['harga']);?></span>
                                                            <span class="saving1"></span><li>
                                                        <li class="li_product_buy_button">
                                                            <a class="btn btn-default" id="but" href="cart.html" role="button" >
                                                                Tambahkan ke Keranjang
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <?php 
                                        }
                                        ?>
                                    </div>
                                </div>
                                <!----content_2 End--!-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php $this->load->view('includes/footer'); ?>
    </body>
</html> 