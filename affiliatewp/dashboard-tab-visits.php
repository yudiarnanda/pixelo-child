<div class="col-sm-12">

	<div id="affwp-affiliate-dashboard-visits" class="affwp-tab-content">

		<h3 class="aff-title"><?php _e( 'Referral URL Visits', 'affiliate-wp' ); ?></h3>

		<?php
		$per_page = 30;
		$page     = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
		$pages    = absint( ceil( affwp_get_affiliate_visit_count( affwp_get_affiliate_id() ) / $per_page ) );
		$visits   = affiliate_wp()->visits->get_visits(
			array(
				'number'       => $per_page,
				'offset'       => $per_page * ( $page - 1 ),
				'affiliate_id' => affwp_get_affiliate_id(),
			)
		);
		?>

		<div class="table-responsive">
			<table id="affwp-affiliate-dashboard-visits" class="table affwp-table">
				<thead>
					<tr>
						<th class="visit-url"><?php _e( 'URL', 'affiliate-wp' ); ?></th>
						<th class="referring-url"><?php _e( 'Referring URL', 'affiliate-wp' ); ?></th>
						<th class="referral-status"><?php _e( 'Converted', 'affiliate-wp' ); ?></th>
					</tr>
				</thead>

				<tbody>
					<?php if ( $visits ) : ?>

						<?php foreach ( $visits as $visit ) : ?>
							<tr>
								<td><?php echo $visit->url; ?></td>
								<td><?php echo ! empty( $visit->referrer ) ? $visit->referrer : __( 'Direct traffic', 'affiliate-wp' ); ?></td>
								<td>
									<?php $converted = ! empty( $visit->referral_id ) ? 'yes' : 'no'; ?>
									<span class="visit-converted <?php echo esc_attr( $converted ); ?>"><i></i></span>
								</td>
							</tr>
						<?php endforeach; ?>

					<?php else : ?>

						<tr>
							<td colspan="3"><?php _e( 'You have not received any visits yet.', 'affiliate-wp' ); ?></td>
						</tr>

					<?php endif; ?>
				</tbody>
			</table>
		</div>

		<?php if ( $pages > 1 ) : ?>

			<p class="affwp-pagination">
				<?php
				echo paginate_links(
					array(
						'current'      => $page,
						'total'        => $pages,
						'add_fragment' => '#affwp-affiliate-dashboard-visits',
						'add_args'     => array(
							'tab' => 'visits',
						),
					)
				);
				?>
			</p>

		<?php endif; ?>

	</div>

</div>
