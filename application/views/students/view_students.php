<h1>Students - View Students</h1>
<img src="<?php echo base_url('assets/images/koala.jpg');?>" alt="My favorite animal" height="200" />
<a href="<?php echo base_url('students/add_student'); ?>">Add Student</a>
<table border="1">
	<thead>
		<tr>
			<th>ID NO.</th>
			<th>LAST NAME</th>
			<th>FIRST NAME</th>
			<th>MIDDLE NAME</th>
			<th>SEX</th>
			<th>ACTION</th>
		</tr>
	</thead>
	<tbody>
	<?php
	foreach($students as $s){
		echo '	<tr>	
					<td>'.$s['idno'].'</td>
					<td>'.$s['lastname'].'</td>
					<td>'.$s['firstname'].'</td>
					<td>'.$s['middlename'].'</td>
					<td>'.$s['course'].'</td>
					<td>'.$s['sex'].'</td>
					<td>
						<a href="'.base_url('students/profile/'.$s['idno']).'">View</a> |
						<a href="">Edit</a> |
						<a href="">Delete</a>
					</td>
				</tr>
				';
	}
	?>
	</tbody>
</table>
