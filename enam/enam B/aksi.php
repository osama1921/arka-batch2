<?php
include 'config.php';
if (isset($_POST['add'])) {
	$name=$_POST['name'];
	$work = $_POST['work'];
	$salary = $_POST['salary'];
		if ($work == 0 || $salary == 0) {
			echo '<script type="text/javascript">'; 
			echo 'alert("Please Entered Work and Salary");'; 
			echo 'window.location.href = "index.php";';
			echo '</script>'; 
		}else{
			$query=mysqli_query($kon, "INSERT INTO nama VALUES (null, '$name', '$work' ,'$salary')");
			if ($query) {
			echo '<script type="text/javascript">'; 
			echo 'alert("Success");'; 
			echo 'window.location.href = "index.php";';
			echo '</script>'; 
			}
		}
}
if (isset($_POST['Save'])) {
	$id=$_GET['id'];
	$name=$_POST['name'];
	$work = $_POST['work'];
	$salary = $_POST['salary'];
		
			$query=mysqli_query($kon, "UPDATE nama SET name='$name', id_work='$work', id_salary='$salary' WHERE id='$id'") or die(mysqli_error($kon));
			if ($query) {
			echo '<script type="text/javascript">'; 
			echo 'alert("Success");'; 
			echo 'window.location.href = "index.php";';
			echo '</script>'; 
			}
	
}
if (isset($_GET['del'])) {
			$id=$_GET['id'];
			$name=$_GET['name'];
			$query=mysqli_query($kon, "DELETE FROM nama WHERE id='$id'");
			echo '<script type="text/javascript">'; 
			echo 'alert("Success");'; 
			echo 'window.location.href = "index.php?msg=success&name='.$name.'&del=true";';
			echo '</script>'; 
}