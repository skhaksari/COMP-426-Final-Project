<?php include('includes/calendar.php'); ?>
<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Easy Ski</title>
    <link rel="stylesheet" type="text/css" href="frontend.css">
	<style type="text/css" media="screen">
		#calendar-events{ display: none; }
	</style>
	<script src="jquery.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="scripts/calendar.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
	<h1>Easy Ski</h1>
    <h2>December 2017</h2>
	<p></p>
	<?php echo draw_calendar(12,2017); ?>
	<div id="calendar-events">
    </div>	
</body>
</html>