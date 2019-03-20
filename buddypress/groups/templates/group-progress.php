
<div id="progress-dashboard">

	<canvas id="overview-chart" width="1200" height="450"></canvas>

	<div class="progress-control-area">
	
		<input type="text" name="date-picker" id="date-range-picker">

		<div class="groups-members-search progress-member-search" style="max-width:250px;">
			<form id="search-members-form">
				<input type="text" id="members_search" class="search" placeholder="Search Members..." />
				<input type="submit" id="members_search_submit" name="members_search_submit" value="Search">
			</form>
		</div>

	</div>

	<?php if ( bp_group_has_members() ) : ?>

		<div id="group-members">
			 
			  <div id="member-count" class="pag-count">
			    <?php //bp_group_member_pagination_count() ?>
			  </div>
			  
				<!-- class="sort" automagically makes an element a sort buttons. The date-sort value decides what to sort by. -->
		<!-- 	  <button class="sort" data-sort="points">
			    Sort
			  </button> -->

		<?php //echo $from . ' to ' . $until; ?>

		<?php echo etbi_get_template_content( 'progress-table.php', array( 'members' => $members, 'from' => $from, 'until' => $until, 'csv_link' => $csv_link ) ); ?>

		</div>

	<?php else: ?>
		 
		  <div id="message" class="info">
		    <p>This group has no members.</p>
		  </div>

	<?php endif; ?>

<div class="cssload-container"><div class="cssload-loading"><i></i><i></i><i></i><i></i></div></div>

</div>

<?php do_action('etbi_after_group_progress');