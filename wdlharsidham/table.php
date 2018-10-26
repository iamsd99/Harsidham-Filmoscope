<?php
if(isset($_POST['table']))
{
$sql = "SELECT ID,fullname,email,phone FROM student";
$result = $con->query($sql);
$count=mysqli_num_rows($result);

if ($count > 0) 
{
    
    echo "<table id='table'><tr><th>ID</th><th>Name</th><th>Email</th><th>Phone no</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
       
        echo "<tr><td>" . $row["ID"]. "</td><td>".$row["fullname"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td></tr>";

    }
   
    echo "</table>";
}
else  
{
   ?>
<script>window.alert("0 results");</script>
<?php
 
}
}
?> 
<?php
if(isset($_POST['query']))
{
$sql = "SELECT ID,fullname,email,phone FROM login";
$result = $con->query($sql);
$count=mysqli_num_rows($result);

if ($count > 0) 
{
    
    echo "<table id='table'><tr><th>ID</th><th>Name</th><th>Email</th><th>Phone no</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
       
        echo "<tr><td>" . $row["ID"]. "</td><td>".$row["fullname"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td></tr>";

    }
   
    echo "</table>";
}
else  
{
   ?>
<script>window.alert("0 results");</script>
<?php
 
}
}
?> 