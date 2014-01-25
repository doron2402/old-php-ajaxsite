<?php
$Site = array(
	"Title" => 'Site title',
	"Headline" => 'site headline',
);


?>
<!DOCTYPE HTML>
<html>
<head>
<title><?php echo $Site['Title'];?></title>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  // Handler for .ready() called.
});
function getPage(Id)
{
	var Id = parseInt(Id);
	var sentData = "PageId=" + Id;
	
}
</script>
</head>
<body>
<div id="Wrap">
	<div id="Content">
		<div id="header">
			<div id="headLine">
				<h1><?php echo $Site['Headline'];?></h1>
			</div>
			<div id="headNavigator">
				<ul>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</div>
		</div>
		<div id="mainbody">
			<div id="leftCol"></div>
			<div id="rightCol"></div>
		</div>
		<div id="footer"></div>
	</div>
</div>
</body>
</html>