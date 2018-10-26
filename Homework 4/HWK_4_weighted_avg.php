<!doctype html>
<html lang="en">
<head>
	<title>Homework 4</title>
</head>
<link rel="stylesheet" href="HWK_4_weighted_avg.css">
<header>
	<h1>Homework 4: Grading Program</h1>
</header>
	<div id="navlink">
		<a href="HWK_4_weighted_avg.html"> Back to Input Page</a>
	</div>
	<? 
	//inputs

	//left
	$name = $_POST['name'];
	$participation = $_POST['participation'];
	
	//center
	$exam1 = $_POST['exam1'];
	$exam2 = $_POST['exam2'];
	$exam3 = $_POST['exam3'];
	
	//right
	$homework1 = $_POST['homework1'];
	$homework2 = $_POST['homework2'];
	$homework3 = $_POST['homework3'];
	$homework4 = $_POST['homework4'];
	$homework5 = $_POST['homework5'];

	//calculations
	$examweight = .8;
	$homeworkweight = .15;
	$participationweight = .05;

	//testing a bug
	/*$examavg=90;
	$hwkavg=88;
	$finalavg=90;
	*/

	$examavg = (($exam1 + $exam2 + $exam3)/3);
	$hwkavg = (($homework1 + $homework2 + $homework3 + $homework4 + $homework5 ) / 5);
	$finalavg = (($examavg * $examweight) + ($hwkavg * ($homeworkweight) ) + ($participation *$participationweight));

	
	//test calc
	print "<h2>examavg: $examavg </h2><br />";
	print "hwkavg: $hwkavg <br />";
	print "finalavg: $finalavg <br />";
	




	//test vars
	/*print "Name: $name <br />";
	print "participation: $participation <br />";

	print "exam1: $exam1 <br />";
	print "exam2: $exam2 <br />";	
	print "exam3: $exam3 <br />";


	print "homework1: $homework1 <br />";
	print "homework2: $homework2 <br />";
	print "homework3: $homework3 <br />";
	print "homework4: $homework4 <br />";
	print "homework5: $homework5 <br />";
	*/
?>




