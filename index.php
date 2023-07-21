	<?php include "script.php" ?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
	   <meta charset="UTF-8">
	   <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link rel="stylesheet" href="styles.css">
	   <title>php and mysql pagination</title>
	</head>
	<body>
	 
		<div class="content">

			<?php
				while($row = $result->fetch_assoc())
					?>
					<p>
							<?php echo $row["id"]; ?> . <?php echo $row["product_name"] ?>
						</p>
		
		</div>

	</body>
	</html>			
	</body>
	</html>	
