<?php include('server.php');?>

<html>
    <head><title>USER LOGIN</title>
        <script src="bs/jquery.js"> </script>
        <script src="bs/js/bootstrap.min.js"></script>
        <link rel="stylesheet"type="text/css"href="bs/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width initial-scale=1"/>
    <link rel="stylesheet" href="style.css"></head>
<body align="center" id="background"style="aqua">
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
        
   
    <form action="studentLogin.php" method="post"> 
          
    <table >
        <tr><h2 class="header">Login Page</h2></tr>
        <tr>
            <td><?php include('errors.php');?></td>
        </tr>
        <tr>
            <td ><label class="input-group label">USERNAME</label></td>
            <td>
                <input type="number"name="phone"placeholder="phone number"class="input-group">
            </td>
        
        
        
        </tr>
        <tr>
            <td ><label class="input-group label">PASSWORD</label></td>
        <td><input
        type="password"name="password"placeholder="password"class="input-group"></td>
            
        </tr>      
        <tr>
            <td><button type="submit"name="studentLogin"value="Login"class="btn">Login</button></td>
        </tr>
        <tr>
            <td><p> not yet a member? <a href="register.php">signup here</a></p></td>
        </tr>
        <tr>
            <td></td><td><p> <a href="contactus.php">back to home</a></p></td>
        </tr>
        
    </table>
    </form>
    
    <div>
    
      <iframe width="80%" height="500px" src="https://www.youtube.com/embed/SgMlTaiR8ZU?autoplay=1"></iframe>
        
    
    </div>
    
   </body> 
</html>