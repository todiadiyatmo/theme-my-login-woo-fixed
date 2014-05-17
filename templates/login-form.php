<?php
/*
If you would like to edit this file, copy it to your current theme's directory and edit it there.
Theme My Login will always look in your theme's directory first, before using this default template.
*/
?>

<div id="page-content" role="main">
		<div class="container" style="margin-top:-20px;">
			<div id="content">

				<div class="container-out container-light">
					<div class="col-md-5 center">
							<?php $template->the_action_template_message( 'login' ); ?>
							<?php $template->the_errors(); ?>
					</div>
					<div class="col-md-5 center registration-box">
						<form method="post" class="login" action="<?php echo l_base_url('user/do_login') ?>">
							<h4>Sign in</h4>
							<!-- <h2><?php //_e( 'Register', 'woocommerce' ); ?></h2> -->

							<p class="form-row form-row-wide">
								<label for="username"><?php _e( 'Username or email address', 'woocommerce' ); ?> <span class="required">*</span></label>
								<input type="text" name="log" id="user_login<?php $template->the_instance(); ?>" class="input-text" value="<?php $template->the_posted_value( 'log' ); ?>" />
							</p>

							<p class="form-row form-row-wide">
								<label for="password"><?php _e( 'Password', 'woocommerce' ); ?> <span class="required">*</span></label>
								<input type="password" name="pwd" id="user_pass<?php $template->the_instance(); ?>" class="input-text" value=""  />
							</p>		
							<p class="form-row form-row-wide">
								<label for="remember">Remember Me</label>
								<input name="rememberme" type="checkbox" id="rememberme<?php $template->the_instance(); ?>" value="forever" />
							</p>
							<p class="form-row">		
								<?php wp_nonce_field( 'woocommerce-login' ); ?>
								<input type="submit" class="btn btn-big btn-green" name="login" value="<?php _e( 'Login', 'woocommerce' ); ?>" />
								<a href="<?php bloginfo('url') ?>/register/" style="float:right;margin-top: 11px;" class="text-info">
									Dont have an account? <b>Register</b>
								</a>
							</p>						
							<p class="form-row">
								<?php echo do_shortcode('[facebookall_login]') 	?>
							</p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>