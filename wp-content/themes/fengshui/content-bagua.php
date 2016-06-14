<div class="bagua-container">
	<?php 
	$blocks = array('bagua-top-left'=>'Wealth, Prosperity, and Self-worth',
					'bagua-top-middle'=>'Fame, Reputation, and Social Life',
					'bagua-top-right'=>'Marriage, Relationship and Partnership',
					'bagua-center-left'=>'Health Family and Community',
					'bagua-center-middle'=>'Other',
					'bagua-center-right'=>'Other',
					'bagua-bottom-left'=>'Other',
					'bagua-bottom-middle'=>'Other',
					'bagua-bottom-right'=>'Other');
	foreach($blocks as $key=>$row): ?>

	<div class="bagua <?php echo $key; ?>">
		<div class="side front"><?php echo $row; ?></div>
		<div class="side left"></div>
		<div class="side right"></div>
		<div class="side back"></div>
		<div class="side top"></div>
		<div class="side bottom"></div>
	</div>

	<?php endforeach; ?>
</div>