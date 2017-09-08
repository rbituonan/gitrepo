<div>
	<?php
	// $idno = "12-037-001";
	// $name = "MAGALPOK, GORGONIA RESTITUTO";
	// $course = "BSIT";
	// $sex = "F";
	// print_r($student);
	?>
	<div class="student-picture">
		<img src="<?php echo base_url('assets/images/koala.jpg'); ?>" alt="Picture" height="100" />
	</div>
	<div class="student-profile">
		<p><b>ID No: </b><?php echo $student[0]['idno']; ?></p>
		<p><b>Name: </b><?php echo $student[0]['lname'].', '.$student[0]['fname'].' '.$student[0]['mname']; ?></p>
		<p><b>Course: </b><?php echo $student[0]['course']; ?></p>
		<p><b>Sex: </b><?php echo $student[0]['sex']; ?></p>
	</div>
</div>