<!doctype html>
<html lang="en">
<head>
	<title>Homework 5 - Surface Area</title>
</head>
<header>
	<h1>Results:</h1>
</header>
	<div id="navlink">
		<a href="HWK_5_surface_area.html"> Back to Input Page</a>
	</div>
	<? 
		/*
			Cylinder: 2πrh + 2πr2

			Cone: πr2 + πr

			Capsule: 2πr2h + 2πrh
		*/

		//inputs
		$shape = $_POST['shape'];
		/*$cone = $_POST['Cone'];
		$cylinder = $_POST['Cylinder'];
		$capsule = $_POST['Capsule'];
		*/
		$radius = stripslashes($_POST['radius']);
		$height = stripslashes($_POST['height']);

		//sanitization flag and if statements
		$okay = TRUE; //starts out ok

		if (!is_numeric($radius)){
			print "Radius must be a number! <br />";
			//Data validation failed
			$okay = false;
		}
		if (!is_numeric($height)){
			print "Height must be a number! <br />";
			//Data validation failed
			$okay = false;
		}
		if (!isset($shape)){
			print "You must select either Cone, Cylinder, or Capsule <br />";
			//Data validation failed
			$okay = false;
		}
		if ($okay = TRUE){

		//calculations
			if ($shape == "Cone" && is_numeric($radius) && is_numeric($height)){
				$coneresult = pi()*$radius*$radius + pi()*$radius*sqrt($height*$height+$radius*$radius);
				print "The surface area of a cone with a radius of $radius and height $height is " . number_format($coneresult, 2) . ".<br /> ";
			}
			if ($shape == "Cylinder" && is_numeric($radius) && is_numeric($height)){
				$cylinderresult = (2 * pi() * $radius * $height) + (2 * pi() * ($radius * $radius));
				print "The surface area of a cylinder with a radius of $radius and height $height is " . number_format($cylinderresult, 2) . ". <br />";
			}
			if ($shape == "Capsule" && is_numeric($radius) && is_numeric($height)){
				$capsuleresult = (2 * pi() * ($radius * $radius) * $height) + (2 * pi() * $radius * $height);
				print "The surface area of a capsule with a radius $radius and height $height is " . number_format($capsuleresult, 2) . ". <br />";
			}
		}
		else {
			print "Error";
		}
		?>
