<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>iBar - find your bar</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
</head>
<body>

  <ul id="dropdown1" class="dropdown-content">
    <li><a href="story.html">Our Story</a></li>
       <li class="divider"></li>
    <li><a href="#!">Daniel</a></li>
    <li class="divider"></li>
    <li><a href="#!">Tomas</a></li>
        <li class="divider"></li>
    <li><a href="#!">Ernest</a></li>
  </ul>

  <ul id="dropdown2" class="dropdown-content">
    <li><a href="story.html">Our Story</a></li>
       <li class="divider"></li>
    <li><a href="#!">Daniel</a></li>
    <li class="divider"></li>
    <li><a href="#!">Tomas</a></li>
        <li class="divider"></li>
    <li><a href="#!">Ernest</a></li>
  </ul>


  <nav class = "">
    <div class="nav-wrapper grey">
      <a href="index.php" class="brand-logo" ><img class="LOGO" src="https://s28.postimg.org/6msmhc8cd/logo.png"></a>

       <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
       
      <ul class="right hide-on-med-and-down">

        <li><a href="index.php">Home</a></li>
        <li><a href="news.php">News</a></li>
        <li><a href="bars.php">Bars</a></li>
        <li><a href="craft.php">Craft beer</a></li>
        
        <!-- Dropdown Trigger -->
        <li><a class="dropdown-button" href="#!" data-activates="dropdown2">About Us<i class="material-icons right">arrow_drop_down</i></a></li>



      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="index.php">Home</a></li>
        <li><a href="news.php">News</a></li>
        <li><a href="bars.php">Bars</a></li>
        <li><a href="craft.php">Craft beer</a></li>
        
        <!-- Dropdown Trigger -->
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">About Us<i class="material-icons right">arrow_drop_down</i></a></li
      </ul>

    </div>
  </nav>