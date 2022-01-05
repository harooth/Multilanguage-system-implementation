<?php 

	require "db.php";
	$data = $_POST;
	$user = R::findOne('users', 'id = ?', array(1));

	if(isset($data['submit']))
	{
		$user->language = $data['language'];
		R::store($user);
	}
 ?>



<form action="settings.php" method="post">
	<label for="">Select language:</label>
	<select name="language">
		<option value="hy">Armenian</option>
		<option value="en">English</option>
	</select><br>
	<button type="submit" name="submit">Submit</button>
</form>

<a href="/">Index</a>