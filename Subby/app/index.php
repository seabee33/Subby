<?php 
require(__DIR__ . "/phpScripts/functions.php"); 
loginCheck(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<script src='../assets/jq.js'></script>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php name();?> / Dashboard</title>
	<link rel="stylesheet" href="assets/appstyles.css?v=1">
</head>
<body>
<div class="toastBox"></div>

	<div class="appPage">

	<?php echo $appMenu; ?>

		<div class="core">

			<div class="split">
				<div class="fontStyle1">Subscriptions Overview</div>
				<?php require(__DIR__ . '/phpScripts/addButton.php'); ?>
			</div>

			<div class="row toBlur" id='dashboard-row1'>

				<div class="overviewItem">
					Total subscriptions: <br> <?php countAllUserSubscriptions($conn); ?>
				</div>

				<div class="overviewItem">
					Total to pay for <?php echo date('F') . "<br>"; $coreFunctions->getTotalToPayThisMonth(); ?>

				</div>

				<div class="overviewItem">
				Total left to pay for <?php echo date('F') . "<br>"; $coreFunctions->getTotalLeftToPayThisMonth(); ?>
				</div>

				<div class="overviewItem">
					Total to pay this year <br> <?php $coreFunctions->getTotalToPayThisYear(); ?>
				</div>

				<div class="overviewItem">
					Total left to pay for <?php echo date('Y') . "<br>"; $coreFunctions->getTotalLeftToPayThisYear(); ?>
				</div>

			</div>



		</div>




	</div>
</body>
<script src='assets/appScripts.js?v=8'></script>
</html>
