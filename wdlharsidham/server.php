
<?php
session_start();
$fullname="";
$email="";
$phone="";
$errors=array();

$con=new mysqli("localhost","root","","project");

//IF REGISTER BUTTON IS CLICKED
if(isset($_POST['register']))
{
     $fullname=$_POST['fullname']; 
     $email=$_POST['email'];
     $phone=$_POST['phone'];
     $password_1=$_POST['password_1'];
     $password_2=$_POST['password_2'];
 
    if(empty($fullname))
    {
        array_push($errors,"Username is required");
    }
   
     if(empty($email))
    {
        array_push($errors,"email number is required");
    }
    
    ?>


<script>  
function validateemail()  
{  
var x=document.myform.email.value;  
var atposition=x.indexOf("@");  
var dotposition=x.lastIndexOf(".");  
if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
  alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
  return false;  
  }  
}  
</script> 






<?php
    
        
     if(empty($phone))
    {
        array_push($errors,"phone number is required");
    }
    
    
    elseif(strlen($phone) !=10)
    {
        array_push($errors,"phone number must be of 10 digit ");
    }
     if(empty($password_1))
    {
        array_push($errors,"password is required");
    }
    elseif(strlen($password_1)<6)
    {
        array_push($errors,"Password must be more than 6 digits");
    }
     if($password_1 != $password_2)       
    {
        array_push($errors,"Password doesnt match");
    }    
    if(count($errors)==0)
     {
        
        
        
        
        $query="select * from student where phone='$phone'";
        $result=mysqli_query($con,$query);
       
        $count=mysqli_num_rows($result);
        if(($count)==0)
        
        {   
            $query="select * from login where phone='$phone'";
        $result=mysqli_query($con,$query);
       
        $count=mysqli_num_rows($result);
        if(($count)==0)
            {
        
        $password=md5($password_1);
    $sql=("insert into login(fullname,email,phone,password) values('$fullname','$email',$phone,'$password')");
    $con->query($sql);
    
                ?>

<script>window.alert(" Query has been sent to Admin.You will get an status of account on email.");</script>
<?php
   
    }
        
           else
        {?>
           <script>window.alert(" Already query has been been sent for this  number");</script>
<?php
        }
        
        
        }
        else
        {?>
           <script>window.alert(" Already have an account on this number");</script>
<?php
        }
}
    
}

//if login button is clicked
if(isset($_POST['studentLogin']))
{ 
    $fullname=$_POST['phone']; 
    $password=$_POST['password'];
 
     if(empty($fullname))
    {
        array_push($errors,"Username is required");
    }
    
     if(empty($password))
    {
        array_push($errors,"password is required");
    }
    
    
    if(count($errors)==0)
    {
        $password=md5($password);
        $query="select * from student where phone='$fullname' and password='$password'";
        $result=mysqli_query($con,$query);  
        $count=mysqli_num_rows($result);
        if(($count)==1)
        {
            
            
    $query="select fullname from student where phone='$fullname'";
    $result=mysqli_query($con,$query); 
    $count=mysqli_num_rows($result);    
    $row=mysqli_fetch_assoc($result); $_SESSION['fullname']=$row['fullname'];
    $_SESSION['success']="You are logged in";
    header('location:index.php');//redirect to home page
        }
        else
        {
            array_push($errors,"Wrong username/password combination");
             
        }
    }
    
    
    
    
    
    
    
}

//if logout button is clicked 
if(isset($_GET['logout']))
{
    session_destroy();
    unset($_SESSION['fullname']);
    header('location:studentLogin.php');
}

//if logoutt button is clicked 
if(isset($_GET['logoutt']))
{
    session_destroy();
    unset($_SESSION['username']);
    header('location:adminLogin.php');
}

//if edit button is clicked
if(isset($_POST['edit']))
{   $phone=$_POST['phone'];
   
    if(empty($phone))
    {
        array_push($errors,"phone number is required");
    }
    if(count($errors)==0)
    {
     $query="select fullname,email,phone,password from student where phone='$phone'";
    $result=mysqli_query($con,$query); 
    $count=mysqli_num_rows($result);    
    if(($count)==1)
    {
    $row=mysqli_fetch_assoc($result);
     $_SESSION['fullname']=$row['fullname'];
    $_SESSION['email']=$row['email'];
    $_SESSION['phone']=$row['phone'];
    $_SESSION['password']=$row['password'];
    header("location:edit.php");
    }
    else
    {?>


<script>window.alert("not result for these number");</script>
<?php
       
        
    }
    }
   
}

//if delete button is clicked
if(isset($_POST['delete']))
{
    $phone=$_POST['phone'];
    $sql="delete from student where phone='$phone'";
    
    
    $query="select * from student where phone='$phone'";
        $result=mysqli_query($con,$query);
       
        $count=mysqli_num_rows($result);
        if(($count)==1)
        {
    ?>
<script>window.alert("Account has been deleted");</script>



<?php   $con->query($sql);
    
        }
    else
    {
        ?>
<script>window.alert("DO NOT HAVE AN ACCOUNT ON THIS NUMBER");</script>

<?php 
        
        
    }
    
    
}

//if admin is going to login
if(isset($_POST['adminLogin']))
{
    
    
    $username=$_POST['username']; 
    $password=$_POST['password'];
     if(empty($username))
    {
        array_push($errors,"Username is required");
    }
     
     if(empty($password))
    {
        array_push($errors,"password is required");
    }
    if(count($errors)==0)
    {
        $password=($password);
        $sql="select * from adminlogin where username='$username' and password='$password'";
        $result=mysqli_query($con,$sql);
       
        $count1=mysqli_num_rows($result);
        if(($count1)==1)
        {
            echo"welcome ";
            $_SESSION['username']=$username;
            $_SESSION['success']="You are logged in";
        
    
            header('location:admindash.php');//redirect to home page
        }
        else
        {
            array_push($errors,"Wrong username/password combination");
             
        }
    }
    
    
}

//IF update BUTTON IS CLICKED
if(isset($_POST['update']))
{
     $fullname=$_POST['fullname']; 
     $email=$_POST['email'];
     $phone=$_POST['phone'];
     $password=$_POST['password'];
 
    if(empty($fullname))
    {
        array_push($errors,"Username is required");
    }
     if(empty($email))
    {
        array_push($errors,"Email is required");
    }
     if(empty($phone))
    {
        array_push($errors,"phone number is required");
    }
     if(empty($password))
    {
        array_push($errors,"password is required");
    }
    if(count($errors)==0)
     {
        
        
        
        
        $query="select * from student where phone='$phone'";
        $result=mysqli_query($con,$query);
       
        $count=mysqli_num_rows($result);
        if(($count)==1)
        
        {         
        
        $password=md5($password);
    $sql=("update student set fullname='$fullname',email='$email',password='$password' where phone='$phone'");
    $con->query($sql);
        
    
    header('location:admindash.php');//redirect to home page
    }
        else
        {?>
           <script>window.alert(" Already have an account on this number");</script>
<?php
        }
}
    
}


//if grant buton button is clicked by admin
if(isset($_POST['grant']))
{
    $phone=$_POST['phone'];
   
    if(empty($phone))
    {
        array_push($errors,"phone number is required");
    }
    if(count($errors)==0)
    {
     $query="select fullname,email,phone,password from login where phone='$phone'";
    $result=mysqli_query($con,$query); 
    $count=mysqli_num_rows($result);    
    if(($count)==1)
    {
    $row=mysqli_fetch_assoc($result);
     $fullname=$row['fullname'];
    $email=$row['email'];
    $phone=$row['phone'];
    $password=($row['password']);
        
    //insert data into student
    $insert="insert into student(fullname,email,phone,password)values('$fullname','$email','$phone','$password')";
    
 if($con->query($insert)==true)
        {?>
           <script>window.alert(" ACCOUNT GRANED FOR COMERCIAL PURPOSE");</script>
<?php
        }
        
      //  delete the account from login
    $sql="delete from login where phone='$phone'";
    $con->query($sql);
    }
    else
    {?>


<script>window.alert("not result for these number");</script>
<?php
       
        
    }
    }
    
}

//if non grant buton is clicked for particular account
if(isset($_POST['nonGrant']))
{
    $phone=$_POST['phone'];
    if(empty($phone))
    {
        array_push($errors,"phone number is required");
    }
    if(count($errors)==0)
    {        
      //  delete the account from login
    $sql="delete from login where phone='$phone'";
    if($con->query($sql)==true)
    {
        ?><script>window.alert(" ACCOUNT NON-GRANED FOR COMERCIAL PURPOSE");</script><?php
    }     
    }
    else
    {?>


<script>window.alert("not result for these number");</script>
<?php
       
        
    }
    }
    



?>