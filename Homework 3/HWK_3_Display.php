<!doctype HTML>
<html lang="en">
<head>
	<title>Homework 3: Display Page</title>
</head>
<link rel="stylesheet" href="HWK_3_Stylesheet.css">
<body>
	<h1>Results Page</h1>
	<p>
		<a href="HWK_3_Index.html">Back to Input Page</a>
	</p>

	<div id="thanks">
		<h2>Thanks!</h2>
		<p>Thank you for your feedback! It means nothing to us. If you have any more questions please don't ask! Don't even think about contacting us!</p>

	</div>
	<div id="rightimg">
		<img src="Walmart_Spark.svg.png" width="100px" height="100px" alt="Wal-Mart Spark">
	</div>
	<div id="therest"><?
		$name = $_POST['name'];
		$lastname = $_POST['lastname'];
		$class = $_POST['Classification'];
		$textarea = $_POST['textarea'];
		$caring = $_POST['caring'];
		print "Your name is: <span style=\"color:red\">$name $lastname </span><br />";
		print "Your class is: <span style=\"color:red\">$class </span><br /><br />";
		print "<div id=\"textarea\">Your comment is: $textarea </div><br />";
		print "Did you think we care: <span style=\"color:red\">$caring </span><br />";
		?>
	</div>
</body>
</html>