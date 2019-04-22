<?php
	
	session_start();
	$conn=mysqli_connect("localhost","root","","elections") or die(mysqli_error($conn));

	$Name=$_POST['Name'];
	$Password=$_POST['Password'];

	$sql1="SELECT * FROM voter_data WHERE Name='$Name' and Password='$Password'";
	$query1=mysqli_query($conn,$sql1);

	$count1=mysqli_num_rows($query1);
	echo $count1;

	$sql2="SELECT * FROM admin_data WHERE Name='$Name' and Password='$Password'";
	$query2=mysqli_query($conn,$sql2);

	$count2=mysqli_num_rows($query2);
	echo $count2;
	

	if($count1==1){
		$row_data1= mysqli_fetch_array($query1);
    	$_SESSION['Name']=$row_data1['Name'];
    	$_SESSION['Password']=$row_data1['Password'];
    	$_SESSION['Admin']=false;
    	header('location:index.php');
	}
	else if($count2==1){
		$row_data2= mysqli_fetch_array($query2);
    	$_SESSION['Name']=$row_data2['Name'];
    	$_SESSION['Password']=$row_data2['Password'];
    	$_SESSION['Admin']=true;
    	header('location:index.php');

	}
	
	else{
		header('location:voter_signup.php');
	}

?>