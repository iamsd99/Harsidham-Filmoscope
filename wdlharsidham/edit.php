
<?php include('server.php'); ?> 
<html>
    <head>
    <title >EDITER</title>
    
    <link rel="stylesheet" href="style.css">
    </head>
<body id="background">
    <form action="edit.php"method="POST">
       <table>
        <h2 class="header">UPDATE oR EDIT</h2>
    
           <tr><td><?php include('errors.php'); ?></td></tr>
                <div class="input-group">
                
               <tr><td> <label class="input-group label">NAME:</label>
                   </td><td><input type="text"name="fullname"placeholder="username"class="input-group input"value="<?php echo $_SESSION['fullname']; unset($_SESSION['fullname']);?>">
                   </td></tr>
                    
            </div>  
            <div class="input-group">
                <tr><td><label class="input-group label">EMAIL</label>
                    </td><td><input class="input-group input"type="text"name="email"class="input-group"placeholder="Email"value="<?php echo $_SESSION['email'];unset($_SESSION['email']); ?>">
                    </td></tr></div>
            <div class="input-group">
                <tr><td><label class="input-group label">PHONE NUMBER</label></td><td>
               <input class="input-group input"type="text"name="phone"class="input-group"placeholder="Phone Number"  value="<?php echo $_SESSION['phone']; unset($_SESSION['phone']);?>">
                    </td></tr></div>            
            <div class="input-group">
                <tr><td> <label>PASSWORD</label></td>
                    <td>
                        <input type="password"name="password"class="input-group"placeholder="password"value="<?php echo $_SESSION['password']; unset($_SESSION['password']);?>"></td>
                </tr>
                    
            </div>          
            <div class="input-group">
            
                <td> <button type="submit"name="update"color=" blue"class="btn">UPDATE</button></td>
            
            </div>
        </table>
            
       
    </form> 
    </body>
</html>