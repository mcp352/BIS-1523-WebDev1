<!doctype HTML>
<html lang="en">
<head>
	<title>Homework 3: Display Page</title>
</head>
<body>
	<h1>Results Page</h1>
	<p>
		<a href="HWK_3_Index.html">Back to Input Page</a>
	</p>
	<?
		$name = $_POST['name'];
		$lastname = $_POST['lastname']
		$class = $_POST['Classification'];
		$textarea = $_POST['textarea'];
		$drink = $_POST['caring'];
		print "Your name is: $name $lastname <br />";
		print "Your class is: $class <br />";
		print "Your comment is: $textarea <br />";
		print "Did you think we care: $caring <br />";
		?>
</body>
</html>