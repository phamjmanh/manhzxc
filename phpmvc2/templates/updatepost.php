<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
    	<div class="row">
    		<div class="col-md-12 mt-5">
    			<h1 class="text-center">UPLOAT </h1>
    			<hr style="height :1px;color: black;background-color: black">
    		</div>
    	</div>

    	<div class="col-md-5 mx-auto">
<?php foreach ($data as $a ) : ?>

    		<form action="?action=doUpdate&id=<?php echo	$a['id'] ?>" method="POST">
    			<div class="form-group">
    			 	<label for="">id:</label>
    				<p><?php echo $a['id'] ?></p>
    			</div>
    			<div class="form-group">
    			 	<label for="">tile</label>
    				<input type="text"name="image" value="<?php echo $a['title'] ?>">
    			</div>
    			<div class="form-group">
    			 	<label for="">image</label>
    				<input type="file" name="title" value="<?php echo $a['Imager']?>">
    			</div>
    			<div class="form-group">
    				<label for="">status</label>
    			 	<select name="status" class="form-control">
  						<option value="1">enable</option>
  						<option value="2">disable</option>
					</select>
    			</div>
    			<div class="form-group">
    			 	<button type="submit" name="submit" type="submit" name="asd" value="updatePost" class="btn btn-primary">UPDATE</button>
    			</div>
    		</form>
<?php endforeach ; ?>
    	</div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>