<?php include('server.php');
if(empty($_SESSION['fullname']))
{
    header('location:studentLogin.php');
}


?>
<html>
    <head><title>Mission Impossible Series</title>
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
             <li><a href="studentLogin.php">Watch Now</a></li>
             <li class="active" style="background-color:cornsilk;"><a href="aboutus.php">Movie Series</a></li>
        </ul>
        </div>
    </div>
        </nav>
    <div>
            <iframe width="100%" height="600px" src="https://www.youtube.com/embed/SgMlTaiR8ZU?autoplay=1"></iframe>
        
        </div>   
    <div>
    
       
       <div align="right"> 
        <button ><p><a href="studentLogin.php?logout='1'">logout</a></p></button>
            
        </div>
    
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
        
        
             <?php if(isset($_SESSION['fullname'])): ?> 
        <p>Welcome <?php echo $_SESSION['fullname']; ?></p>
        
        
        <?php endif ?> 
        
    </div>
    <div>            
        <table>
            <tr>
                <td><label>MISSION IMPOSSIBLE 1:</label></td>
                <td><a href="https://drive.google.com/file/d/10OWMEl8ui_2HL-6IJ4IWI6G-wOUusDgf/view?usp=drivesdk"><img src="images/mi1.jpg"></a></td>
            
            
               <td><label>MISSION IMPOSSIBLE 2:</label></td>
                <td><a href="https://drive.google.com/file/d/13gcK0evenW2DriVuDtWkSKJhgGbvbfeQ/view?usp=drivesdk"><img src="images/mi2.jpg"></a></td>
            
            
            
            
            </tr>
            <tr>
                <td><label>MISSION IMPOSSIBLE 3:</label></td>
                <td><a href="https://drive.google.com/file/d/1LcJuXAPV-YXMpJctkLDtQ67r14BeETAB/view?usp=drivesdk"><img src="images/mi3.jpg"width="100%"/></a></td>
            
            
            
            
           
                <td><label>MISSION IMPOSSIBLE 4:</label></td>
                <td><a href="https://drive.google.com/file/d/1odsChjI9VJkoirOVDFztySl7OAQibtsj/view?usp=drivesdk"><img src="images/mi4.jpg"width="100%"/></a></td>
            
            
            
            
            </tr>
            <tr>
                <td><label>MISSION IMPOSSIBLE 5:</label></td>
                <td><a href="https://drive.google.com/file/d/1F7PkbkKCg3HjDAiQWs7ZaM0CZfc0JvUV/view?usp=drivesdk"><img src="images/mi5.jpg"></a></td>
            
            
            
            
            
           
                <td><label>MISSION IMPOSSIBLE 6:</label></td>
                <td><a href="https://drive.google.com/file/d/1pgzjtvFcWSFlHrlApI9Kk1gfGi412gO0/view?usp=drivesdk"><img src="images/mi6.jpg"></a></td>
            
            
            
            
            </tr>         
          </table>  
    </div>   
   
    </body> 
</html>