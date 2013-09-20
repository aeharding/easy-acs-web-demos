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
		setTimeout(function(){
			document.location.href = 'reset.php';
		},5000);
    </script>
</head>

<body data-ez
data-ez-help="fareDemoHelp.html#done">

<div id="wrap">
    <div class="container-fluid">

        <div class="row-fluid" style="margin-bottom:30px;">
            <div class="span12 well" style="text-align:center; margin-top:30px;">
				<div data-ez-chunking="group">
					<h1>Thank you.</h1>
					<h1>Please take your ticket.</h1>
				</div>
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
