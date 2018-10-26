<?php include('server.php');
if(empty($_SESSION['username']))
{
    header('location:adminLogin.php');
}
?>
<html>
    <head><h6 >SERVER PAGE</h6>
        <link rel="stylesheet" href="style.css"></head>
<body align="center"id="background">
    
    <div><p align="right"><a href="admindash.php?logoutt='1'">logout</a></p>
 
    
    </div>
    <div>
    
        <?php if(isset($_SESSION['success'])): ?>
        
        <div>
        
            <h3>
            
                <?php 
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                
                
                ?>
            
            </h3>
        
        
        </div>
        <?php endif ?> 
        
        
             <?php if(isset($_SESSION['username'])): ?> 
        <p>Welcome <?php echo $_SESSION['username']; ?></p>
       
        
        <?php endif ?> 
        
    </div>
    <div>  
        
        
        <form action="admindash.php" method="post">
           <?php include('errors.php'); ?> 
        <label>PHONE NUMBER:</label>
        <input type="number"name="phone"><br>
            
            <button type="submit"name="edit">EDIT</button>
        <button type="submit"name="delete">DELETE</button>
        <button type="submit"name="table">SHOW account</button>
        <button type="submit"name="query">SHOW QUERY</button>
        <button type="submit"name="grant">Grant to Account</button>
         <button type="submit"name="nonGrant">non Grant to Account</button>   
        </form>
    </div>
    
     <style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>
    </body>


</html>
<?php include('table.php');?>