<html>
    <body>
        <table>
         <tr>
            <th>User Name</th>
            <th>Email id</th>
            <th>Note</th>
</tr>
<?php
$conn= mysqli_connect("localhost","root","","meeting stamp");
$sql ="select * from bitta";
$result= $conn->query($sql);

if($result->num_rows >0){
while($row=$result->fetch_assoc()){

    echo "<tr><td>" .$row["name"] ."</td><td>"   .$row["email"] ."</td><td>"   .$row["note"] ."</td><td>" ;

}


}
else{

    echo "NO results";
}

$conn->close();
?>
</table>
</body>
</html>