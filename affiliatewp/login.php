<?php
global $affwp_login_redirect;
affiliate_wp()->login->print_errors();
?>		

	<form id="affwp-login-form" class="affwp-form" action="" method="post">
		<?php do_action( 'affwp_affiliate_login_form_top' ); ?>

		<fieldset>

			<?php do_action( 'affwp_login_fields_before' ); ?>

			<p class="form-row-first">
				<label for="affwp-login-user-login"><?php _e( 'Username', 'affiliate-wp' ); ?></label>
				<input id="affwp-login-user-login" class="required" type="text" name="affwp_user_login" title="<?php esc_attr_e( 'Username', 'affiliate-wp' ); ?>" />
			</p>

			<p class="form-row-last">
				<label for="affwp-login-user-pass"><?php _e( 'Password', 'affiliate-wp' ); ?></label>
				<input id="affwp-login-user-pass" class="password required" type="password" name="affwp_user_pass" />
			</p>

			<div class="clear"></div>

			<p class="form-row-wide">
				<label class="affwp-user-remember" for="affwp-user-remember">
					<input id="affwp-user-remember" type="checkbox" name="affwp_user_remember" value="1" /> <?php _e( 'Remember Me', 'affiliate-wp' ); ?>
				</label>
			</p>

			<p>
				<input type="hidden" name="affwp_redirect" value="<?php echo esc_url( $affwp_login_redirect ); ?>"/>
				<input type="hidden" name="affwp_login_nonce" value="<?php echo wp_create_nonce( 'affwp-login-nonce' ); ?>" />
				<input type="hidden" name="affwp_action" value="user_login" />
				<input type="submit" class="button small" value="<?php esc_attr_e( 'Login', 'affiliate-wp' ); ?>" />
			</p>

			<p class="affwp-lost-password">
				<a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php _e( 'Lost your password?', 'affiliate-wp' ); ?></a>
			</p>

			<?php do_action( 'affwp_login_fields_after' ); ?>
		</fieldset>

		<?php do_action( 'affwp_affiliate_login_form_bottom' ); ?>
	</form>

</div>
