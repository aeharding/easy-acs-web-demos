<?php

	// Stop browser warning uder about resubmitted info when pressing 'back' button
	if($_SERVER['REQUEST_METHOD'] == "POST") header('Location: 4.php');
	
	session_start();
	
	if(isset($_POST['fare'])) $_SESSION['fare'] = $_POST['fare'];
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>EZ Access Train Demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.css">

    <link rel="stylesheet" href="css/fixed-footer.css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
</head>

<body data-ez>

<div id="wrap">
    <div class="container-fluid">

        <div class="row-fluid">
            <div class="span12 well" style="text-align:center; margin-top:30px;">
				<h1>Review and Purchase Ticket</h1>
            </div>
        </div>
        <div class="row-fluid" style="margin-top:20px;">
			<div class="span8 offset2">
				<div class="alert alert-info">
					<dl class="dl-horizontal" style="font-size: 1.25em;">
						<dt>Ticket type</dt>
						<dd><?php echo $_SESSION['type'] . ' ' . $_SESSION['fare']; ?></dd>
						<dt>From</dt>
						<dd>Research Park</dd>
						<dt>To</dt>
						<dd><?php echo $_SESSION['destination']; ?></dd>
						<dt>Price</dt>
						<dd>$3.00</dd>
					</dl>
				</div>
			</div>
        </div>
        <div class="row-fluid">
			<div class="span8 offset2">
				<div class="row-fluid">
					<div class="span4">
						<img src="img/insert-card.png" style="width:100%" alt="Insert card">
					</div>
					<div class="span8" style="text-align:center">
						<h4 style="margin-top:75px;">To purchase this ticket, pleast insert and remove your credit card from the slot on your right.</h4>
						<h6>(For this demo, use the space bar or wait 20 seconds.)</h6>
					</div>
				</div>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span4 offset4">
				<img src="img/payment.jpg" style="width:100%" alt="Pay with Visa, MasterCard, or Discover">
			</div>
		</div>

    </div> <!-- /container -->

    <div id="push" data-ez-focusable="false"></div>

</div> <!-- /wrap -->

<div id="footer">
    <div style="padding-top:30px;">
        <div class="pull-left" style="margin-left:20%">
            <button class="btn btn-large btn" style="width:200px" type="button" onclick="history.go(-1);"><i class="icon-chevron-left"></i>&nbsp;&nbsp;&nbsp;Go Back</button>
        </div>
        <div class="pull-right" style="margin-right:20%">
            <a href="reset.php" class="btn btn-large btn-danger" style="display:block;width:160px" aria-role="button"><i class="icon-minus-sign"></i>&nbsp;&nbsp;&nbsp;Cancel</a>
        </div>
    </div>
</div>

</body>
</html>
