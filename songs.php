<!DOCTYPE html>
<html>
<head>
	<title>Songs</title>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
		 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
</head>
<body>

<div class="container">
	<div class="row">
		<hr>
	<blockquote> 
	Tracks by Artist / Contributor / Title
	</blockquote> 
		 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" required>
				<?php
				   include("config.php");
				   $value = $_POST['contrib'];
				   $sql = 'select  distinct karaoke.id, song.title,karaoke.name from karaoke  join song  on karaoke.song_id = song.id join contributer on karaoke.contrib_id  = contributer.id where contrib_id = '.$value;
				   					$stmt = $pdo->query($sql);
				   					$result = $stmt -> fetchAll();   
				   					foreach ( $result as $row) {
				   					    echo '<p>';
				   					    echo '<input name="list" type="radio" id="'.$row["id"].'" />';
				   					    echo '<label for="'.$row["id"].'">'.$row["title"].' - '.$row["name"].'</label>';
				   					    echo '</p>';
				   					}	
				?>

			<div class="row">
		        <div class="input-field col s6">
		          <i class="material-icons prefix">account_circle</i>
		          <input id="icon_prefix" name="fname" type="text" class="validate">
		          <label for="icon_prefix">First Name</label>
		        </div>
		        <div class="input-field col s6">
		          <i class="material-icons prefix">trending_down</i>
		          <input id="amoun" name="amount" type="number" class="validate" value="0">
		          <label for="amount">Amount</label>
		        </div>
      </div>

      <div class="row">
        <div class="input-field col s6">
    				 <a href="http://localhost/karayoke" class="waves-effect waves-light btn">back</a>
      
        </div>
        <div class="input-field col s6">
			 <button class="btn waves-effect waves-light" type="submit" name="queue">Submit
		    <i class="material-icons right">send</i>
		  </button>
        
        </div>
      </div>
		  </form>
	</div>

<?php
if ( isset( $_POST['queue'] ) ) {
			$karaoke_id = $_POST["amount"];
	        $amount = $_POST["fname"];
	        $id = $_POST["id"];
	        if ($amount) {
	        $insert = 'insert into accelarated_queue(karaoke_id,amount) values'.$id.$amount;
		}
        else{
			$insert = 'insert into queue(karaoke_id) values'.$id;
		}
	 	$username = "root";$password = "4451";
	 	$dsn = "mysql:host=localhost;dbname=z1803493";
	    $pdo = new PDO($dsn,$username, $password);
	    $stmt = $pdo->query($insert);"].')";

    }

?>

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