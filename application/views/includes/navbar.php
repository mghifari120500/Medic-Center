<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
    <div class="row">            
        <div class="col-md-2 col-sm-2 col-xs-2">
            <a href="home" class="logo-text">
                <img src="<?php echo asset_url(); ?>images/favicon.png">
            </a>		
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12" style="display:none " id="navbar_hide" >
            <nav  role="navigation" class="navbar navbar-inverse">
                <a href="home.html" style="float: left" class="logo-text"></a>
                <div id="nav">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="background: #8EBE08; border: none; margin-right: 0">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav site_nav_menu1"  >
                            <li class="first " ><a href="home">Home</a></li>
                            <li><a href="#">Tentang Kami</a></li>
                            <li><a href="#">Pembayaran</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="col-md-6 col-md-offset-4 col-sm-offset-2 col-sm-8 col-xs-10" >
            <div id="top_right">
                <div id="cart">
                    <div class="text">
                        <div class="img" style="padding-right:8px;">
                            <a href="cart.html"> <img class="img-responsive" src="<?php echo asset_url(); ?>images/cart.png" alt="" title="" width="26" height="27" /></a>
                        </div>
                        <span>Isi Keranjang:</span><span class="cart_total">Rp 0.00</span><span class="cart_items">(0 barang)</span>
                    </div> 
                </div>
                <div id="bottom_right">
                    <div class="row">
                        <div class="col-md-12 col-xs-12 wd_auto">
                            <div class="left">
                                <div class="login">
                                    <a class="btn btn-default reg_button" href="login">Login</a> 
                                    <a class="btn btn-default reg_button" href="register">Daftar</a>
                                </div>			
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div> 
<div class="container-fluid bg-color">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <nav  role="navigation" class="navbar navbar-inverse" id="nav_show">
                        <div id="nav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>

                            </div>
                            <div class="collapse navbar-collapse" id="myNavbar">
                                <ul class="nav navbar-nav site_nav_menu1"  >
                                    <li class="first "><a href="home">Home</a></li>
                                    <li><a href="#">Tentang Kami</a></li>
                                    <li><a href="#">Pembayaran</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div> 
        </div>
    </div>
</div>