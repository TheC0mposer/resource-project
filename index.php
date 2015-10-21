<?php
	require('query.php');
?>

<!DOCTYPE html>
<html>
<head>

<title>Resources Table</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

</head>
<body>

<div class="container">

	<div class="panel panel-default">
	  <div class="panel-heading">Resources List</div>

	  <table class="table">
	    <thead>
	    	<th>Id</th>
	    	<th>Type</th>
	    	<th>Name</th>
	    	<th>Comments</th>
	    </thead>
	    <tbody>

	    	<?php foreach($resources as $src) { ?>
	    	<tr>
	    		<th scope="row"><?php echo $src['id']; ?></th>
	    		<td><?php echo $src['type']; ?></td>
	    		<td><a href="<?php echo $src['url']; ?>" target="_blank"><?php echo $src['name']; ?></a></td>
	    		<td><?php echo $src['comments']; ?></td>
	    	</tr>
	    	<?php } ?>

	    </tbody>
	  </table>
	</div>

</div>

</body>
</html>