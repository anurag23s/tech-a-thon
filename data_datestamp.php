<?php
session_start();
$con = mysqli_connect("localhost","root","","meeting stamp");

if(isset($_POST['save_datetime']))
{
    $name = $_POST['name'];
    $sdt = $_POST['sdt'];
    $dst = $_POST['dst'];

    $query = "INSERT INTO demo1 (name,event_sdt,event_dst) VALUES ('$name','$sdt', '$dst')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Date Time Inserted Successfully";
        header("Location: index.php");
    }
    else
    {
        $_SESSION['status'] = "Date Time Not Inserted";
        header("Location: index.php");
    }
}
?>