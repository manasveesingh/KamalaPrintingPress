
<!DOCTYPE html>
<html >
<head>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<style type="text/css">


.navigation-bar {
  border-top: 5px solid #f67878;
  border-bottom: 5px solid #f67878;
  font-size: 14px;
  font-family: sans-serif;
}

.navbar-default {
  background-color: #f67878;
  border-bottom: 1px solid #fff;
  border-top: 1px solid #fff;
  color : #fff;
}
  .current {
    background-color: #f9a3a3;
  }
  
  .dropdown-menu>li>a {
    display: block;
    padding: 6px 20px;
    clear: both;
    font-weight: 400;
    line-height: 1.42857143;
    color: #fff;
    white-space: nowrap;
   } 
   .dropdown-menu>li>ul>li>a:hover {
    color: #fff;
    background-color: #f9a3a3;
   } 
  #navbar nav.navbar-static-top {
    margin-bottom: 0px;
}
  .dropdown-submenu {
      position:relative;
  }

  .dropdown-submenu>.dropdown-menu {
     top:0;left:100%;
     margin-top:-6px;margin-left:-1px;
     -webkit-border-radius:0 6px 6px 6px;-moz-border-radius:0 6px 6px 6px;border-radius:0 6px 6px 6px;
   }
   ul.nav li:hover > ul.dropdown-menu {
    display: block;
    background-color: #f67878;
  }
  .dropdown-menu > li > a:hover, .dropdown-menu > .active > a:hover {
    text-decoration: none;
    background-color: #f9a3a3;
    color: #fff;
  }

@media (min-width: 800px) {
  .navbar-default .navbar-collapse, .navbar-default .navbar-form {
    margin-left: 48px;
    margin-right: 48px;
  }
}   


.navbar-default .navbar-nav>li>a {
    color: #fff;
    font-size: 16px;
}   

.navbar-default .navbar-nav>li>a:hover {
    color: #fff;
    background-color: #f9a3a3;
}

  .dropdown-submenu > a:after {
    border-color: #f67878;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    content: " ";
    display: block;
    float: right;  
    height: 0;     
    margin-right: -10px;
    margin-top: 5px;
    width: 0;
    text-decoration: none;
  }
   
  .dropdown-submenu:hover>a:after {
      border-left-color:#555;
   }

  .dropdown-menu > li > a:hover, .dropdown-menu > .active > a:hover {
    text-decoration: none;
    background-color: #f9a3a3;
  }  
    
  @media (max-width: 767px) {
    .navbar-default .navbar-toggle:focus, .navbar-default .navbar-toggle:hover {
     background-color: #f67878;
}
    .navbar-nav  {
       display: inline;
    }
    .navbar-default .navbar-brand {
      display: inline;
    }
    .navbar-default .navbar-toggle .icon-bar {
      background-color: #fff;
    }
    .navbar-default .navbar-nav .dropdown-menu > li > a {
      color : #fff;
      margin-top: 2px; 
      margin-bottom: 2px;
      margin-left: -10px;  
    }
    .navbar-default .navbar-nav .dropdown-menu > li > a:hover {
      background-color: #f9a3a3;   
    }
     .navbar-default .navbar-nav .open .dropdown-menu > li > a {
       color: #333;
     }
     .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
     .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
       
     }

     .navbar-nav .open .dropdown-menu {
       
     }
     .navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus, .navbar-default .navbar-nav>.open>a {
      color: #fff;
      background-color: #f67878;
    }
    .navbar-default .navbar-nav .open .dropdown-menu > li > a {
    color: #fff;
    background-color: #f67878;
    }
     .navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus, .navbar-default .navbar-nav>.open>a:hover {
      color: #fff;
      background-color: #f67878;
    }

    .dropdown-menu {
        padding-left: 10px;
    }
    .dropdown-menu .dropdown-menu {
        padding-left: 20px;
     }
     .dropdown-menu .dropdown-menu .dropdown-menu {
        padding-left: 30px;
     }
     li.dropdown.open {
      border: 0px solid red;

     }
  }
   
  @media (min-width: 768px) {
    ul.nav li:hover > ul.dropdown-menu {
      display: block;
    }
    #navbar {
      text-align: center;
    }
  }  
</style>

</head>

<body>
  


<div id="navbar">    
  <nav class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>
    </div>
            
    <div class="collapse navbar-collapse" id="navbar-collapse-1">
      <ul class="nav navbar-nav">
          <li><a <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'class="current"' : '';?> href="index.php">Home</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle <?php echo (basename($_SERVER['PHP_SELF']) == '#') ? 'class="current"' : '';?>" data-toggle="dropdown">Press<b class="caret"></b></a> 
              <ul class="dropdown-menu">
                  <li><a href="autoprint-fine-coat.php">AutoPrint Fine Coat 80</a></li>
                  <li><a href="boxtech.php">Boxtech</a></li>
                  <li><a href="grafica-nanoprinting-screen-printing.php">Grafica Nano Printing</a></li>
                  <li><a href="heidelberg-speedmaster.php">Heidelberg Speedmaster (5 Color+UV+Coater)</a></li>
                  <li><a href="heidelberg-speedmaster-sm74.php">Heidelberg Speedmaster (4 Color)</a></li>
                  <li><a href="maxima-exa-35.php">Maxima Exb 35</a></li>
                  <li><a href="polar-n-92-paper-cutting.php">Polar N 92 Paper Cutting</a></li>
                  <li><a href="technova-viostar.php">Technova Viostar</a></li>                                      
              </ul>
          </li>
          <li><a <?php echo (basename($_SERVER['PHP_SELF']) == 'about.php') ? 'class="current"' : '';?> href="about.php">About Us</a></li>
          <li><a <?php echo (basename($_SERVER['PHP_SELF']) == 'contact.php') ? 'class="current"' : '';?> href="contact.php">Contact Us</a></li>
          <li><a <?php echo (basename($_SERVER['PHP_SELF']) == 'emocreation.php') ? 'class="current"' : '';?> href="emocreation.php">Emo Creation</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </nav>
</div>

    


  <!--scripts loaded here-->
  
  <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
  
  <script>
  
  </script>

</body>
</html>
