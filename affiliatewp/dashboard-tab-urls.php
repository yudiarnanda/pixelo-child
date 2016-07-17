<div class="col-sm-12">

	<h3 class="aff-title"><?php _e( 'Referral URL Generator', 'affiliate-wp' ); ?></h3>

	<div id="affwp-affiliate-dashboard-url-generator" class="affwp-tab-content">
		
		<div class="row">
			<?php if ( 'id' == affwp_get_referral_format() ) : ?>
				<div class="col-sm-6"><?php printf( __( '<dt>Your affiliate ID</dt> <dd>%s</dd>', 'affiliate-wp' ), affwp_get_affiliate_id() ); ?></div>
			<?php elseif ( 'username' == affwp_get_referral_format() ) : ?>
				<div class="col-sm-6"><?php printf( __( '<dt>Your affiliate username<dt> <dd>%s</dd>', 'affiliate-wp' ), affwp_get_affiliate_username() ); ?></div>
			<?php endif; ?>

			<div class="col-sm-6"><?php printf( __( '<dt>Your referral URL is<dt> <dd>%s</dd>', 'affiliate-wp' ), esc_url( urldecode( affwp_get_affiliate_referral_url() ) ) ); ?></div>

			<div class="hr"></div>
			<div class="hr"></div>

			<div class="col-sm-12"><?php _e( 'Enter any URL from this website in the form below to generate a referral link!', 'affiliate-wp' ); ?></div>

			<div class="clear hr"></div>

			<div class="col-sm-12">
				<form id="affwp-generate-ref-url" class="affwp-form" method="get" action="#affwp-generate-ref-url">
					<div class="affwp-wrap affwp-base-url-wrap form-row-first">
						<label for="affwp-url"><?php _e( 'Page URL', 'affiliate-wp' ); ?></label>
						<input type="text" name="url" id="affwp-url" value="<?php echo esc_url( urldecode( affwp_get_affiliate_base_url() ) ); ?>" />
					</div>

					<div class="affwp-wrap affwp-campaign-wrap form-row-last">
						<label for="affwp-campaign"><?php _e( 'Campaign Name (optional)', 'affiliate-wp' ); ?></label>
						<input type="text" name="campaign" id="affwp-campaign" value="" />
					</div>

					<div class="clear"></div>

					<div class="affwp-wrap affwp-referral-url-wrap" <?php if ( ! isset( $_GET['url'] ) ) { echo 'style="display:none;"'; } ?>>
						<label for="affwp-referral-url"><?php _e( 'Referral URL', 'affiliate-wp' ); ?></label>
						<input type="text" id="affwp-referral-url" value="<?php echo esc_url( urldecode( affwp_get_affiliate_referral_url() ) ); ?>" />
						<div class="description"><?php _e( '(now copy this referral link and share it anywhere)', 'affiliate-wp' ); ?></div>
					</div>

					<div class="affwp-referral-url-submit-wrap">
						<input type="hidden" class="affwp-affiliate-id" value="<?php echo esc_attr( urldecode( affwp_get_referral_format_value() ) ); ?>" />
						<input type="hidden" class="affwp-referral-var" value="<?php echo esc_attr( affiliate_wp()->tracking->get_referral_var() ); ?>" />
						<input type="submit" class="button small" value="<?php _e( 'Generate URL', 'affiliate-wp' ); ?>" />
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
