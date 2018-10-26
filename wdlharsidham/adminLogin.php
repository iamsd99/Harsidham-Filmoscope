<?php include('server.php');?>
<html>
<head><title>ADMIN LOGIN</title>
        <script src="bs/jquery.js"> </script>
        <script src="bs/js/bootstrap.min.js"></script>
        <link rel="stylesheet"type="text/css"href="bs/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width initial-scale=1"/>
    <link rel="stylesheet" href="style.css"></head>
    
    
    <body id="background">
             <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
            </button>
            <a class="navbar-brand" href="#"><b style="font-family:timesnewroman;">Mission Impossible</b></a>
        </div>
        <div class="collapse navbar-collapse col-xs-8 col-sm-12" id="myNavbar">
        <ul class="nav navbar-nav">
            <li><a href="cindex.php">Home</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="contactus.php" target="_blank">Contact Us</a></li>
            
            </ul>  
        </div>
    </div>
        </nav>
        
        
        
        
        
    <form action="adminLogin.php" method="post">
       <table> 
       <tr> <h2 class="header">ADMIN LOGIN</h2><tr>
        
    
       <tr> 
           <td> <?php include('errors.php');?></td>
        
       
        </tr>
        
       
           <tr><td> <label class="input-group label">Username</label>
               </td><td><input  class="input-group input"type="text"name="username">
               </td></tr>
        
        
        
      <tr><td> <label class="input-group label" >Password</label>
               </td><td><input type="password"name="password"class="input-group input">           
               </td></tr>
      
         
          
                 
                
              
        </table>
   
      
                <p align="center"> <button type="submit"name="adminLogin"value="Login"class="btn">Login</button></p>
     
        <p align="center"> <a href="contactus.php">back to home</a></p>
                  </form>
    </body>

</html>


