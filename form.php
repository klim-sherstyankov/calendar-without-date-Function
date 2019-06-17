<!DOCTYPE html>
<html>
<head>
	<title>Calendar</title>
</head>
<body>
	<table>
		<form method="get" action="" >
			<tr>
				<td><input type="submit" name="change" value="<"><input type="hidden" name="year" value="<?php echo $year; ?>"></td>
				<td><?php echo $year; ?></td>
				<td><input type="submit" name="change" value=">"></td>  
			</tr>
			<tr>
				<td><input type="submit" name="change" value="<|"><input type="hidden" name="month" value="<?php echo $month; ?>"></td>
				<td><?php echo $month; ?></td>
				<td><input type="submit" name="change" value="|>"></td>  
			</tr>			
	
		<tr>
			<td>Пн</td>
			<td>Вт</td>
			<td>Ср</td>
			<td>Чт</td>
			<td>Пт</td>
			<td>Сб</td>
			<td>Вс</td>
		</tr>
		<?php for ($i=1; $i < 5; $i++) { ?>
			<tr>
				<?php for ($j=0; $j <7 ; $j++) { ?>
					<td>$i</td>
			<?php	} ?>
			</tr>
		<?php } ?>
	

	    </form>
	</table>


	
</div>		


</body>
</html>