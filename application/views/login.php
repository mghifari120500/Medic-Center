<!--Template Name: Medistore
File Name: login.html
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
                            <a href="index.php"><i class="fa fa-home"></i></a>
                            <a href="#">Login</a>
                        </div>
                        <div class="contentText">
                            <h1>Login</h1>
                            <div class="row">
                                <div class="col-sm-6">
                            
                                    <form method="post" id="loginForm" action="<?= site_url('login') ?>" role="form" class="form-horizontal add_margin">
                                    
                                        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>"
                                            value="<?= $this->security->get_csrf_hash(); ?>">
                                        
                                        <?= isset($failed) && !empty($failed) ? "<p class='err'>{$failed}</p>" : ""; ?>
                                        <?= $this->session->flashdata('success'); ?>

                                        <div class="form-group">
                                            <label for="inputEmail" class="control-label col-sm-4">Alamat E-mail</label>
                                            <?= form_error('email', '<div class="err">', '</div>'); ?>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="inputEmail" placeholder="example@gmail.com" value="<?= set_value('username'); ?>" name="email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword" class="control-label col-sm-4">Kata Sandi</label>
                                            <?= form_error('password', '<div class="err">', '</div>'); ?>
                                            <div class="col-sm-8">
                                                <input type="password" class="form-control" id="inputPassword" placeholder="Password" value="<?= set_value('password'); ?>" name="password">
                                            </div>

                                        </div>
                                        
                                        <button class="btn btn-primary reg_button" value="Login" type="submit">
                                            <i class="fa fa-key"></i>&nbsp;
                                            Login                            
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php $this->load->view('includes/footer'); ?>
    </body>
</html> 