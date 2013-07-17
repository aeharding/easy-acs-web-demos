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
				<h1>Confirm Credit Card Purchase</h1>
            </div>
        </div>
        <div class="row-fluid" style="margin-bottom:30px;">
			<div class="span6 offset3" style="text-align:center;">
				<h2>Your MasterCard account number <br><span data-ez-sayalt="ending in 7777">XXXX_XXXX_XXXX_7777</span> <br>will be charged $3.00 <br>for your ticket.</h2>
				<h2>Do you agree to this charge?</h2>
			</div>
        </div>
        <div class="row-fluid" style="text-align:center;">
        <a href="6.php" class="btn btn-large btn-success" style="margin-right:20px" aria-role="button"><i class="icon-ok"></i> Yes, I agree.</a>
        <a href="reset.php" class="btn btn-large btn-danger" style="margin-left:20px" aria-role="button"><i class="icon-remove"></i> No, cancel purchase.</a>
		</div>

    </div> <!-- /container -->

    <div id="push" data-ez-focusable="false"></div>

</div> <!-- /wrap -->

<div id="footer">
    <div style="padding-top:30px;">
        <div class="pull-left" style="margin-left:20%">
            <button class="btn btn-large" style="width:200px" type="button" onclick="history.go(-1);"><i class="icon-chevron-left"></i>&nbsp;&nbsp;&nbsp;Go Back</button>
        </div>
        <div class="pull-right" style="margin-right:20%">
            <a href="reset.php" class="btn btn-large btn-danger" style="display:block;width:160px" aria-role="button"><i class="icon-minus-sign"></i>&nbsp;&nbsp;&nbsp;Cancel</a>
        </div>
    </div>
</div>

</body>
</html>
