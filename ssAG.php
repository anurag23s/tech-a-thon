
<?php
session_start();
	// Database connection
	$con = mysqli_connect("localhost","root","","meeting stamp");
	if(isset($_POST['sub']))
  {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $note=$_POST['note'];
    $query="Insert into bitta(name,email,note) values ('$name','$email','$note')";
    $run=mysqli_query($con,$query);
    if($query_run)
    {
        $_SESSION['status'] = "Inserted Successfully";
        header("Location: indexAg.php");
    }
    else
    {
        $_SESSION['status'] = "Not Inserted";
        header("Location: indexAG.php");
    }

	}
?>