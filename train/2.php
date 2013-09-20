<?php
	
	// Stop browser warning uder about resubmitted info when pressing 'back' button
	if($_SERVER['REQUEST_METHOD'] == "POST") header('Location: 2.php');
	
	session_start();
	
	if(isset($_POST['destination'])) $_SESSION['destination'] = $_POST['destination'];
	
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

<body data-ez
data-ez-help="fareDemoHelp.html#fareType|fareDemoHelp.html#endScreenHelp|
defaultEZHelp.html#keypad5">

<div id="wrap">
    <div class="container-fluid">

        <div class="row-fluid">
            <div class="span12 well" style="text-align:center; margin-top:30px;">
                <div data-ez-chunking="group">
                    <h3 data-ez-sayafter="...">Destination: <?php echo $_SESSION['destination']; ?></h3>
                    <h1>Now Choose Ticket Type</h1>
                </div>
            </div>
        </div>
        <div class="row-fluid" style="margin-bottom:30px;margin-top:30px;">
			<div class="span6 offset3">
				<form action="3.php" method="post">
					<input class="btn btn-large btn-block btn-primary" style="margin-bottom:50px;height:75px;font-size:2em;" type="submit" name="type" value="One Way Fare">
					<input class="btn btn-large btn-block btn-primary" style="height:75px;font-size:2em;" type="submit" name="type" value="Round Trip Fare">
				</form>
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
