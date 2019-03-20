<div id="progress-table" class="wrap-table100">

<!-- 	<div class="table-info">
		<h5><?php //echo date( 'F d, Y', strtotime( $from ) ) . ' to ' . date( 'F d, Y', strtotime( $until ) ); ?></h5>
		<p>The data for this table is only for the current week</p>
	</div> -->

	<div id="members-progress-table-data" class="table100">

		<div class="action-container top">
			<div id='member-pagination' class='pagination-links progress-members-table-pagination'>
				 <ul class="pagination"></ul>
				<?php //bp_group_member_pagination() ?>
			</div>

			<div class="progress-csv-download-btn">
				<a href="<?php echo esc_url( $csv_link ) ?>" target="_blank" class="button"><i class="fa fa-download"></i> <?php _e( 'Download CSV', 'etbi' ); ?></a>
			</div>
		</div>

		<table class="members-progress-table">
			<thead>
				<!-- <tr class="table100-head"> -->
				<th class="column1"><button class="sort" data-sort="name">Name</button></th>
				<th class="column2"><button class="sort" data-sort="edu-points">Education</button></th>
				<th class="column3"><button class="sort" data-sort="server-points">Server</button></th>
				<!-- <th class="column2">Order ID</th> -->
				<th class="column4"><button class="sort" data-sort="period-total">Total</button></th>
				<th class="column5"><button><i class="fa fa-info-circle"></i></button></th>
				<th class="column6"><input type="checkbox" name="Select All"></th>
				<!-- </tr> -->
			</thead>
			<tbody class="list">

				<?php foreach ( $members as $member ) { ?>

				    <tr>
						<td class="name column1"><?php echo bp_core_get_userlink( $member, false ); ?></td>
						<td class="edu-points column2"><?php echo get_user_education_points( $member, array( 'from' => $from, 'until' => $until ) ); ?></td>
						<td class="server-points column3"><?php echo get_user_server_points( $member, array( 'from' => $from, 'until' => $until ) ); ?></td>
						<?php if( function_exists('mycred_is_installed') && mycred_is_installed() ) : ?>
							<td class="period-total column4"><?php echo mycred_get_total_by_time( $from . " 00:00:01", $until . " 23:59:59", null, $member ); //mycred_get_users_cred ?></td>
						<?php endif; ?>
						<td class="column5"><a href="<?php echo esc_url( bp_core_get_userlink( $member, false, true ) ); ?>" class="user-progress-btn" data-user-id="<?php echo esc_attr($member); ?>"><span class="btn btn-primary"><i class="fa fa-info-circle"></i></span></a></td>
						<td class="column6"><input type="checkbox" name="Select"></td>
					</tr>

				<?php } ?>
					
			</tbody>
		</table>

	</div>
</div>