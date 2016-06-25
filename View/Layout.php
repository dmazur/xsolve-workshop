<!doctype html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>MicroMVC</title>

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<link rel="stylesheet" media="all" href="/CSS/reset.css"/>
	<link rel="stylesheet" media="all" href="/CSS/style.css"/>

	<?php
	//Print all CSS files
	if( ! empty($css)) foreach($css as $file) print '<link rel="stylesheet" media="all" href="'. $file. '" />';

	//Print all JS files
	if( ! empty($javascript)) foreach($javascript as $file) print '<script type="text/javascript" src="'. $file. '"></script>';

	//Print any other header data
	if( ! empty($head_data)) print $head_data;
	?>

	<meta name="viewport" content="width=device-width, initial-scale=1"/>

</head>
<body lang="en">

	<div id="page">
		<?php print_template(@$content, $this) ?>
	</div>

	<?php if(isset($pagination)) print $pagination;?>

	<?php if(isset($debug)) print '<div id="debug">'. $debug. '</div>';?>

</body>
</html>
