<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login | Album Kenangan Online</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url(); ?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url(); ?>assets/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>assets/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <?php echo form_open('login/validation', ''); ?>
              
              <div>
                <h3>Album Kenangan</h3>
                <h1><strong>SMP Negeri 1 Welahan</strong></h1>
              </div>
              <?php echo $this->session->flashdata('message');?>
              <div>
                <?php
                  $username = array(
                    'name'        => 'username',
                    'type'        => 'text',
                    'class'       => 'form-control',
                    'placeholder' => 'Masukkan Username',
                    'required'    => ''
                    ); 
                  echo form_input($username);
                ?>
              </div>
              <div>
                <?php
                  $password = array(
                    'name'        => 'password',
                    'type'        => 'password',
                    'class'       => 'form-control',
                    'placeholder' => 'Masukkan Password',
                    'required'    => ''
                  );
                  echo form_input($password);
                ?>
              </div>
              <div>
                <?php 
                  $submit = array(
                    'name'  => 'submit',
                    'type'  => 'submit',
                    'class' => 'btn btn-default submit',
                    'value' => 'Log In'
                    );
                  echo form_submit($submit);
                ?>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>
            <?php echo form_close(); ?>


              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New member?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <p>©2017 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
