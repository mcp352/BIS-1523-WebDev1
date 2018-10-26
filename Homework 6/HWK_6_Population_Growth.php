<!doctype html>
<html lang="en">
<head>
	<title>HWK 6 Population Growth</title>
</head>
<body>
	<link rel="stylesheet" href="HWK_6_Population_Growth.css">

	<h1>HWK 6 Population Growth</h1>



	<?
	//inputs
	/* Inputs are as follows:
		years
		current_pop
		growth_rate
		*/
	$years = stripslashes($_POST['years']);
	$current_pop = stripslashes($_POST['current_pop']);
	$growth_rate = stripslashes($_POST['growth_rate']);
	?>
	<div id="info">
		Starting Population: <? print "$current_pop" ?> <br />
		Growth Rate: <? print "$growth_rate " . "%" ?> <br /> <br />
		To perform another calculation <a href="HWK_6_Population_Growth.html">Click Here! </a>
	</div>

	<table>
		<tr>
			<th> Year</th>
			<th> Population</th>
			<th> Change</th>
		</tr>
		<?
		$starting_year = 2018; // to print 2018
		$temp_pop = 0;
	 	$change_pop = 0;
		 for ($i=1; $i <= $years; $i++){

			print " <tr>
						<td> $starting_year</td>
						<td> " . number_format($current_pop, 0) . "</td>
						<td> " . number_format($change_pop, 0) . " </td>

					</tr>
					";
					$change_pop = $current_pop * ($growth_rate / 100);
					$starting_year ++;
					$current_pop += $current_pop * ($growth_rate / 100);
		}
		?>


