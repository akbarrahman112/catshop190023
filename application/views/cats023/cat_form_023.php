<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!doctype html>
<head>
	<meta charset="UTF-8">
	<title>CATSHOP 023</title>
</head>
<body>
	<h1>CATSHOP 023</h1>
	<h3>CAT FORM</h3>
	<hr>
	
	<?php
	$name='';
	$type='';
	$gender='';
	$age='';
	$price='';
	
	if(isset($cat)) {
		$name=$cat->name_023;
		$type=$cat->type_023;
		$gender=$cat->gender_023;
		$age=$cat->age_023;
		$price=$cat->price_023;
	}
	?>
	<form action="" method="post">
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name_023" value="<?=$name?>" required></td>
			</tr>
			<tr>
				<td>Type</td>
				<td><select name="type_023" required>
				<option value="">Choose type</option>
				<option value="Domestic" <?=$type=='Domestic'?'selected':''?>>Domestic</option>
				<option value="Angora" <?=$type=='Angora'?'selected':''?>>Angora</option>
				<option value="Persia" <?=$type=='Persia'?'selected':''?>>Persia</option>
				</select></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
				<input type="radio" name="gender_023" value="Male" <?=$gender=='Male'?'checked':''?> required>Male 
				<input type="radio" name="gender_023" value="Female" <?=$gender=='Female'?'checked':''?> required> Female 
				</td>
			</tr>
			<tr>
				<td>Age (Month)</td>
				<td><input type="number" name="age_023" value="<?=$age?>" required></td>
			</tr>
			<tr>
				<td>Price ($)</td>
				<td><input type="number" name="price_023" value="<?=$price?>"required></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SAVE" name="submit">
				<a href="<?=site_url('cats023')?>"><input type="button" value="CANCEL"></a>
				</td>
			</tr>
		</table>
	</form>
	<hr>
</body>
</html>