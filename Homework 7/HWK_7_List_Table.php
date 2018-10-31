<!doctype html>
<html lang="en">
<head>
	<title>HKW 7 - List Sorter and Table Maker</title>
</head>
<header>
	<h1>HWK 7 - Sorter</h1>
</header>
<body>
	<link rel="stylesheet" href="HWK_7_List_Table.css">
	<a href="HWK_7_List_Table.html">Click to Return</a>

	<? 
	$list = stripslashes($_POST['rawlist']);
	$tablelist = explode(PHP_EOL, $list);
	sort($tablelist);
	?>
	<table>
		<tr>
			<th>Number</th>
			<th>Item</th>
		</tr>
		<?
		$startingnumber = 1;

		foreach($tablelist as $tableitem){
			print " <tr>
						<td> $startingnumber </td>
						<td> $tableitem </td>
						</tr>";
						$startingnumber += 1;
		}
		?>
	</table>
</body>
</html>

