<html>
<head>
	<title>Name</title>
</head>

<body>
	<form method="get" action="#">
		<fieldset>
			<legend>NAME</legend>
			<input type="text" name="myname" value="">
			<hr>
			<input type="submit" name="submit" value="Submit">
			<p>

				<?php
				    if (isset($_REQUEST['submit'])) {
					    $name = $_REQUEST['myname'];
					    if ($name == "") {
						    echo "Name can not be empty";
					    }
						echo $name;
					}
				?>
			</p>
		</fieldset>
	</form>
</body>

</html>