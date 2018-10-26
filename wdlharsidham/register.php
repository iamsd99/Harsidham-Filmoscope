
<?php include('server.php'); ?> 
<html>
    <head>
    <title >register</title>
        
    <title>Mission Impossible Series</title>
        <script src="bs/jquery.js"> </script>
        <script src="bs/js/bootstrap.min.js"></script>
        <link rel="stylesheet"type="text/css"href="bs/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width initial-scale=1"/>
        
        
    <link rel="stylesheet" href="style.css">
    </head>
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
    <form name="myform"action="register.php"method="POST"onclick=" return validateemail();">      
        <h2 class="header">SIGN UP</h2>
    <table>
            <tr><td><?php include('errors.php'); ?></td></tr>
            <div class="input-group">
                
                <tr><td><label class="input-group label">NAME</label></td>
                    <td><input type="text"name="fullname"placeholder="username"class="input-group input"value="<?php echo $fullname; ?>"></td>
                </tr>
                    
                    
            </div>  
            <div class="input-group">
                <tr><td><label class="input-group label">EMAIL</label></td>
                    <td><input class="input-group input"type="text"name="email"class="input-group"placeholder="Email"value="<?php echo $email; ?>"required></td></tr>
            </div>
            <div class="input-group">
                <tr><td><label class="input-group label">PHONE NUMBER</label></td>
                    <td> <input class="input-group input"type="number" min="0"name="phone"class="input-group"placeholder="Phone Number"value="<?php echo $phone; ?>"></td></tr>
            </div>            
            <div class="input-group">
                <tr><td><label class="input-group label" >PASSWORD</label></td>
                    <td><input type="password"name="password_1"class="input-group"placeholder="password"></td></tr>
                    
            </div>   
            <div class="input-group">
                <tr><td><label  class="input-group label">CONFIRM PASSWORD</label></td>
                    <td> <input type="password"name="password_2"class="input-group"placeholder="confirm password"></td></tr>
                    
            </div> 
            <div class="input-group">
            
                <td> <button type="submit"name="register"color=" blue"class="btn">REGISTER</button></td>
            
            </div>
            <div class="input-group">
                <tr><td> Existing account?<a href="studentLogin.php">sign in</a></td></tr>
            </div>
        </table>       
    </form>        
    <div align="center">
    
      <iframe width="80%" height="500px"src="https://www.youtube.com/embed/SgMlTaiR8ZU?autoplay=1"margin="auto"></iframe>

        
    </div>
    </body>
</html>