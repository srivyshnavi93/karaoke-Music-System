<!DOCTYPE html>
<html>
<head>
	<title>Karayoke</title>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
		 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
</head>
<body>


<div class="container">
	<div class="row">   
	<hr>
	<blockquote> 
	Select Artist/ Contributor
	</blockquote> 
		
	<form action="songs.php" method="POST" required>
		
		<div class="col s6">
		  <div class="input-field col s12">

		    <select name = "contrib">
		      <option value="" disabled selected>Artist / Contributer</option>
		      	<?php
				   include("config.php");
					$sql = "select * from contributer";
					$stmt = $pdo->query($sql);
					$result = $stmt -> fetchAll();   
					foreach ( $result as $row) {
						$value = $row['id'];
					  echo '<option value="',$value,'">',$row['name'],'</option>'; 
					}	
				?>    
			</select>
		  </div>
		</div>
		<div class="col s6">
			<div class="input-field col s12">

				 <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
				</div>
		</div>

	</form>
	</div>



</div>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script type="text/javascript">
		 $(document).ready(function() {
    $('select').material_select();
  });

	</script>
</body>
</html>