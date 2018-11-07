<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<?php
			$con=mysqli_connect('localhost: 3306','root','','table');
			if($con){
				$sql="SELECT * FROM media";
				$datab=mysqli_query($con,$sql);
				while ($row=mysqli_fetch_assoc($datab)) {
					$type=$row['type'];
					echo "<div>";
					if ($type=="video") {
						echo "<video controls width=600>
							<source src=".$row['name']." type='video/mp4'/>
						</video>";
					}else if ($type=="audio") {
						echo "<audio controls width=400>
							<source src=".$row['name']." type='audio/mpeg'/>
						</audio>";
					}
					else if ($type=="youtube") {
						echo "<iframe src='".$row['name']."'></iframe>";
					}
					echo "</div>";
				}
			}
		?>
	</div>
</body>
</html>