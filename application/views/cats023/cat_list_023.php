<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!doctype html>
<head>
	<meta charset="UTF-8">
	<title>CATSHOP 023</title>
</head>
<body>
	<h1>CATSHOP 023</h1>
	<h3>CATS LIST</h3>
	<a href="<?=base_url()?>"><h4>HOME</H4></a>
	<hr>
	<?=$this->session->flashdata('msg')?>
	<a href="<?=site_url('cats023/add')?>">Add New Cat</a>
	<hr>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Type</th>
			<th>Gender</th>
			<th>Age (Month)</th>
			<th>Price($)</th>
			<th colspan="2">Action</th>
		</tr>
		
		<?php $i=1; foreach($cats as $cat) { ?>
		<tr>
		<td><?=$i++?></td>
		<td><?=$cat->name_023?></td>
		<td><?=$cat->type_023?></td>
		<td><?=$cat->gender_023?></td>
		<td><?=$cat->age_023?></td>
		<td><?=$cat->price_023?></td>
		<td><a href ="<?=site_url('cats023/edit/'.$cat->id_023)?>">Edit</a></td>
		<td><a href ="<?=site_url('cats023/delete/'.$cat->id_023)?>" onclick="return confirm('Are You Sure?')">Delete</a></td>
		</tr> <?php } ?>
	</table>
</body>
</html>