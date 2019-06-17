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
			<td>Monday</td>
			<td>Tuesday</td>
			<td>Wednesday</td>
			<td>Thursday</td>
			<td>Friday</td>
			<td>Saturday</td>
			<td>Sunday</td>
		</tr>
		
			<?php 
			for ($i=1; $i < 6; $i++) { ?>
			<tr>	
			<?php	for ($j=0; $j <= 6 ; $j++) { 
		if (!empty($week[$i][$j])){ ?>
				
			<td><?php echo $week[$i][$j] ?></td>
		<?php } else{
       if ($week[1][$j] == "") {?>
				<td></td>	
			<?php }	}
		}
	    }?>
		</tr>
	    </form>
	</table>


	
</div>		


</body>
</html>