<html>
	<head>
		<title>Multiplication Table</title>
	</head>
	<body>
		<?php
		echo '<table cellspacing = "6" >';
		for($i=0; $i<=100; $i++){
			echo '<tr>';
			if($i=="0"){
				for($j=0; $j<=100; $j++){	
					if($j=="0"){
						echo '<td></td>';
					}
					else{
						echo '<td>'.$j.'</td>';
					}
				}
			}
			else{
				for($j=0; $j<=100; $j++){		
					if($j=="0"){
						echo '<td>'.$i.'</td>';
					}
					else{
						$k = $j*$i;
						echo '<td>'.$k.'</td>';
					}
				}
			}
			echo '</tr>';
		}
		echo '</table>';
		?> 
	</body>
</html>
