<div>
	<div class="student-picture">
		<img src="<?php echo base_url('assets/images/koala.jpg'); ?>" alt="Picture" height="100" />
	</div>
	<div class="student-profile">
        <?php echo form_open('', array('id'=>'add_student')); ?>

		<h1>Add Student</h1>

		<?php
		if( isset($errors) )
			echo '<div class="errors">'.$errors.'</div>';
	
		?>
		
		<p><b>ID No: </b><input type="text" name="idno" /></p>
		<p><b>Last Name: </b><input type="text" name="lastname" /></p>
		<p><b>First Name: </b><input type="text" name="firstname" /></p>
		<p><b>Middle Name: </b><input type="text" name="middlename" /></p>
		<p><b>Course: </b><input type="text" name="course" /></p>
		<p><b>Sex: </b>
			<input type="radio" name="sex" value="M" />Male
			&nbsp;<input type="radio" name="sex" value="F" />Female
		</p>
		<p>
			<input type="submit" value="Save" />
			<input type="reset" value="Clear" />
		</p>
        <?php echo form_close(); ?>
	</div>
</div>

<?php
if( isset($saved) && $saved==TRUE ){
?>
<script type="text/javascript">
	alert("The new student record was successfully saved!");
	location.href = "<?php echo base_url('students'); ?>";
</script>
<?php
}
?>