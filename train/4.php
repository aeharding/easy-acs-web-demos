<?php

	// Stop browser warning uder about resubmitted info when pressing 'back' button
	if($_SERVER['REQUEST_METHOD'] == "POST") header('Location: 4.php');
	
	session_start();
	
	if(isset($_POST['fare'])) {
		$fare = $_POST['fare'];
		
		if($fare == 'Adult Fare') $fare = 'Adult';
		else if($fare == 'Child\'s Fare (under 16)') $fare = 'Child';
		else if($fare == 'Senior Fare (85 and up)') $fare = 'Senior';
		
		$_SESSION['fare'] = $fare;
	}
	
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
    
    <script>
		// Forward user after 20 seconds
		setTimeout(function(){
			document.location.href = '5.php';
		},60000);
		
		// Countdown stuff
		
		setInterval(function(){		
			var countdown = document.getElementById('countdown');
			if(parseFloat(countdown.innerHTML) !== 0)
				countdown.innerHTML = parseFloat(countdown.innerHTML) - 1;
		},1000);
		
		// Spacebar forward
		document.onkeydown = function(evt) {
			evt = evt || window.event;
			if (evt.keyCode == 32) {
				document.location.href = '5.php';
			}
		};
	</script>
	
</head>

<body data-ez
data-ez-help="fareDemoHelp.html#review|fareDemoHelp.html#endScreenHelp|
defaultEZHelp.html#keypad5">

<div id="wrap">
    <div class="container-fluid">

        <div class="row-fluid">
            <div class="span12 well" style="text-align:center; margin-top:30px;">
                 <h1>Review and Purchase Ticket</h1>
            </div>
        </div>
        <div class="row-fluid">
			<div class="span8 offset2" style="margin-bottom:-20px;">
				<div class="alert alert-info">
					<dl class="dl-horizontal" style="font-size: 1.25em;" data-ez-chunking="group">
						<dt data-ez-sayafter="is a">Ticket type</dt>
						<dd><?php echo $_SESSION['type'] . ' ' . $_SESSION['fare']; ?> Fare</dd>
						<dt data-ez-saybefore="departing">From</dt>
						<dd>Research Park</dd>
						<dt data-ez-sayalt="and arriving at">To</dt>
						<dd><?php echo $_SESSION['destination']; ?></dd>
						<dt data-ez-saybefore="the final" data-ez-sayafter="is">Price</dt>
						<dd>$3.00</dd>
					</dl>
				</div>
			</div>
        </div>
        <div class="row-fluid">
			<div class="span8 offset2">
				<div class="row-fluid">
					<div class="span4" data-ez-focusable="false">
						<img src="img/insert-card.png" style="width:100%" alt="Insert card">
					</div>
					<div class="span8" style="text-align:center;margin-top:75px;" data-ez-chunking="group">
						<h4>To purchase this ticket, please insert and remove your credit card from the slot on your right.</h4>
						<h6>(For this demo, use the space bar or wait <span id="countdown">60</span> seconds.)</h6>
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

    <div id="push"></div>

</div> <!-- /wrap -->

<div id="footer">
    <div style="padding-top:30px;">
        <div class="pull-left" style="margin-left:20%">
            <button class="btn btn-large" style="width:200px" type="button" onclick="history.go(-1);" data-ez-keybinding="back"><i class="icon-chevron-left"></i>&nbsp;&nbsp;&nbsp;Go Back</button>
        </div>
        <div class="pull-right" style="margin-right:20%">
            <a href="reset.php" class="btn btn-large btn-danger" style="display:block;width:160px" aria-role="button"><i class="icon-minus-sign"></i>&nbsp;&nbsp;&nbsp;Cancel</a>
        </div>
    </div>
</div>

</body>
</html>
