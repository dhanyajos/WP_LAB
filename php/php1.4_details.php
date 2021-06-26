


<?php
        $sname="117.232.108.36";
        $uname="mca2033";
        $pswd="password33";
        $dbname="dbmca2033";
        //connection
        $conn=new mysqli($sname,$uname,$pswd,$dbname);
        //check connection
        if($conn->connect_error){
                die("Connection failed: ">$conn->connect_error);
        }

        $bno=$_POST['bno'];
        $bname=$_POST['bname'];
        $edtn=$_POST['edtn'];
        $publ=$_POST['publ'];
        $sql=mysqli_query($conn,"insert into book_details values($bno,'$bname','$edtn','$publ')");
        $query=mysqli_query($conn,"select * from book_details");
?>
<html>
<body>
<h1>Book Details</h1>
<table border="2">
<tr>
        <th>Book No</th>
        <th>Book Name</th>
        <th>Edition</th>
        <th>Publisher</th>
</tr>
<?php
        while($row=mysqli_fetch_assoc($query))
        {
                echo "<tr>";
                echo "<td>".$row['book_no']."</td>";
                echo "<td>".$row['title']."</td>";
                echo "<td>".$row['edition']."</td>";
                echo "<td>".$row['publisher']."</td>";
                echo "</tr>";
        }
?>
</table>
</body>
</html>


