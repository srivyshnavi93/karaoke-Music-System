<!DOCTYPE html>
<html>
<head>
	<title>DJ</title>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
		 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
</head>
<body>

<div class="container">
	<div class="row">   
	<hr>
	<blockquote> 
DJ List
	</blockquote> 
		
	<form action="" method="POST" required>
		
		<div class="col s6">
		  <div class="input-field col s12">
			 <form action="#">
			

			<?php	
					include("config.php");
					

					$sql2 = "select contributer.type ,queue.id, song.title,contributer.name from queue join karaoke on queue.karaoke_id = karaoke.id join song on song.id = karaoke.song_id join contributer on contrib_id = contributer.id";
					$stmt2 = $pdo->query($sql2);
					$result2 = $stmt2 -> fetchAll(); 
					
					foreach ( $result2 as $row2) {
						echo '<p>';
						echo '<input type="checkbox" id="'.$row2["id"].'" />';
					    echo '<label for="'.$row2["id"].'">'.$row2["title"].' - '.$row2["name"].' - '.$row2["type"].'</label> ';
					    echo '</p>';
					}
			?>
		
		  </div>
		</div>

	</form>
	</div>

</div>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script type="text/javascript">
		 $(document).ready(function() {


  });

	</script>
</body>
</html>