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
data-ez-help="fareDemoHelp.html#destination|fareDemoHelp.html#endScreenHelp|
defaultEZHelp.html#keypad5">

<div id="wrap" style="margin: 0 auto -200px;">
    <div class="container-fluid">

        <div class="row-fluid">
            <div class="span12 well" style="text-align:center; margin-top:30px;">
                <div data-ez-chunking="group">
                <h3 data-ez-sayafter="...">This is Research Park Station</h3>
                <h1>Please Choose Your Ticket Destination</h1>
                    </div>
            </div>
        </div>
        <div class="row-fluid" style="margin-bottom:30px;margin-top:30px;">
            <form action="2.php" method="post">
                <div class="span3">
                    <input class="btn btn-large btn-block btn-primary" type="submit" name="destination" value="Airport Terminal">
                    <input class="btn btn-large btn-block btn-primary" type="submit" name="destination" value="Bloomfield Mall">
                    <input class="btn btn-large btn-block btn-primary" type="submit" name="destination" value="Castle Rock Park">
                    <input class="btn btn-large btn-block btn-primary" type="submit" name="destination" value="Central Beach">
                    <input class="btn btn-large btn-block btn-primary" type="submit" name="destination" value="Central Station">
                    <input class="btn btn-large btn-block btn-primary" type="submit" name="destination" value="Drummond Avenue">
                    <input class="btn btn-large btn-block btn-primary" type="submit" name="destination" value="Essex Square">
                </div>
                <div class="span3">
                    <input class="btn btn-large btn-block btn-primary" type="submit" name="destination" value="Football Stadium">
                    <input class="btn btn-large btn-block btn-primary" type="submit" name="destination" value="Forest Hills">
                    <input class="btn btn-large btn-block btn-primary" type="submit" name="destination" value="Garrick University">
                    <input class="btn btn-large btn-block btn-primary" type="submit" name="destination" value="Hartford Bus Station">
                    <input class="btn btn-large btn-block btn-primary" type="submit" name="destination" value="Kendall Avenue">
                    <input class="btn btn-large btn-block btn-primary" type="submit" name="destination" value="Lakeland Aquarium">
                    <input class="btn btn-large btn-block btn-primary" type="submit" name="destination" value="Lincoln Park Zoo">
                </div>
                <div class="span3">
                    <input class="btn btn-large btn-block btn-primary" type="submit" name="destination" value="Market Street">
                    <input class="btn btn-large btn-block btn-primary" type="submit" name="destination" value="Meadowbrook Mall">
                    <input class="btn btn-large btn-block btn-primary" type="submit" name="destination" value="North Business Park">
                    <input class="btn btn-large btn-block btn-primary" type="submit" name="destination" value="Oakwood College">
                    <input class="btn btn-large btn-block btn-primary" type="submit" name="destination" value="Port Stanley">
                    <input class="btn btn-large btn-block btn-primary" type="submit" name="destination" value="Riverside Park">
                    <input class="btn btn-large btn-block btn-primary" type="submit" name="destination" value="Science Museum">
                </div>
                <div class="span3">
                    <input class="btn btn-large btn-block btn-primary" type="submit" name="destination" value="Shasta Commons">
                    <input class="btn btn-large btn-block btn-primary" type="submit" name="destination" value="Suburban Station">
                    <input class="btn btn-large btn-block btn-primary" type="submit" name="destination" value="Thorndike Avenue">
                    <input class="btn btn-large btn-block btn-primary" type="submit" name="destination" value="Victoria Theater">
                    <input class="btn btn-large btn-block btn-primary" type="submit" name="destination" value="Wayne Junction">
                    <input class="btn btn-large btn-block btn-primary" type="submit" name="destination" value="West River Beach">
                    <input class="btn btn-large btn-block btn-primary" type="submit" name="destination" value="Westgrove Mall">
                </div>
            </form>
        </div>

    </div> <!-- /container -->

    <div id="push" style="height:200px"></div>

</div> <!-- /wrap -->
<div id="footer" style="height:100px">
    <div style="padding-top:30px;">
        <div class="pull-left" style="margin-left:20%">
            <button class="btn btn-large btn" style="width:200px" type="button" onclick="history.go(-1);" data-ez-keybinding="back"><i class="icon-chevron-left"></i>&nbsp;&nbsp;&nbsp;Go Back</button>
        </div>
        <div class="pull-right" style="margin-right:20%">
            <a href="reset.php" class="btn btn-large btn-danger" style="display:block;width:160px" aria-role="button"><i class="icon-minus-sign"></i>&nbsp;&nbsp;&nbsp;Cancel</a>
        </div>
    </div>
</div>

</body>
</html>
