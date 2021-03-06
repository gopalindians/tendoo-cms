<body class="register-page">
    <div class="register-box">
      <div class="register-logo">
        <a href="<?php echo base_url();?>"><b><?php echo __( 'Tendoo CMS' );?></b> <?php echo get( 'core_version' );?></a>
      </div>

      <div class="register-box-body">
        <p class="login-box-msg"><?php _e( 'Sign up to' );?></p>
        <p><?php echo validation_errors();?></p>
        <p><?php echo $this->notice->output_notice();?></p>
        <form  method="post">
          <?php echo $this->events->apply_filters( 'displays_registration_fields' , '' );?>
        </form> 
        <?php
		// May checks whether recovery is enabled
		?>
        <a href="<?php echo site_url( array( 'sign-in' , 'recovery' ) ) ;?>"><?php _e( 'I Lost My Password' );?></a><br>
        <?php
		// may checks whether login if login is enabled
		?>
        <a href="<?php echo site_url( array( 'sign-in' ) );?>" class="text-center"><?php _e( 'I Already Have An Account' );?></a><br>
        
      </div><!-- /.form-box -->
    </div><!-- /.register-box -->
  
</body>
</html>