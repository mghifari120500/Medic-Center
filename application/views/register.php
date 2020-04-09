<!--Template Name: Medistore
File Name: register.html
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
                    <div class="col-sm-9" id="content">            
                        <div class="breadcrumbs">
                            <a href="home"><i class="fa fa-home"></i></a>
                            <a href="#">Daftar</a>
                        </div>
                        <h1>Daftar Akun</h1>
                        <p> <small><strong class="define_note"></strong></small>Jika anda sudah memiliki akun, silahkan login
                            <a href="login">di sini</a>.</p>
                            <form method="post" id="registerForm" action="<?= site_url('register') ?>" role="form" class="form-horizontal add_margin">
                            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>"
                                                value="<?= $this->security->get_csrf_hash(); ?>">
                            <div class="contentText">  
                                <fieldset id="account">
                                    <h1>Identitas</h1>                                    
                                    <div class="form-group required">
                                        <label for="inputName" class="col-sm-2 control-label">Nama</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputName" placeholder="Medic-Store" value="<?= $viewData['name'] ?>" name="name" required>
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="inputEmail" class="col-sm-2 control-label">E-mail</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputEmail" placeholder="example@gmail.com" value="<?= $viewData['email'] ?>" name="email" required>
                                        </div>
                                    </div>                                    
                                </fieldset>                            
                                <fieldset>
                                    <h1>Kata Sandi</h1>
                                    <div class="form-group required">
                                        <label for="inputPassword" class="col-sm-2 control-label">Kata Sandi</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="inputPassword" placeholder="Kata Sandi" value="" name="password" required>
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="inputConfirm" class="col-sm-2 control-label">Konfirmasi Kata Sandi</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="inputConfirm" placeholder="Konfirmasi Kata Sandi" value="" name="confirm" required>
                                        </div>
                                    </div>
                                </fieldset>
                                
                                <div class="buttons">
                                    <div class="pull-right">
                                        <input type="submit" class="btn btn-primary reg_button" value="Daftar" >
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php $this->load->view('includes/footer'); ?>
    </body>
</html> 