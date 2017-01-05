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
  <link rel="stylesheet" type="text/css" href="css/normalize.css" />
  <link rel="stylesheet" type="text/css" href="css/component.css" />

  <!-- JS  -->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="js/script.js"></script>

</head>
<body>

  <nav class="naujasnav posabsolute">
    <div class="navbar-wrapper">
    <a href="index.php" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="left hide-on-med-and-down">
        <li><a class="white-text waves-effect btn-flat myslqbuttons" href="index.php">Pradžia</a></li>
        <li><a class="white-text waves-effect btn-flat myslqbuttons" href="news.php">Naujienos</a></li>
        <li><a class="white-text waves-effect btn-flat myslqbuttons" href="bars.php">Barai</a></li>
        <li><a class="white-text waves-effect btn-flat myslqbuttons" href="craft.php">Craft Alus</a></li>
        <li><a class="white-text waves-effect btn-flat myslqbuttons" href="#">Apie mus</a></li>
        <li><a class="white-text waves-effect btn-flat myslqbuttons" href="story.php">Our Story</a></li>
      </ul>
      <ul class="right hide-on-med-and-down">  
        <li><a class="black-text waves-effect btn grey lighten-4 opacity myslqbuttons" href="login.php?log=1"><?php if(isset($sesion['id'])){echo "Log Out";}else{echo "Log in";} ?></a></li>
        <li><a class="black-text waves-effect btn grey lighten-4 opacity myslqbuttons" href="login.php?log=2"><?php if(isset($sesion['id'])){echo "$id";}else{echo "Register";} ?></a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="index.php">Pradžia</a></li>
        <li><a href="news.php">Naujienos</a></li>
        <li><a href="bars.php">Barai</a></li>
        <li><a href="craft.php">Craft Alus</a></li>
        <li><a href="#">Apie mus</a></li>
        <li><a href="story.php">Our Story</a></li>
        <li><a href="login.php?log=1"><?php if(isset($sesion['id'])){echo "Log Out";}else{echo "Log in";} ?></a></li>
        <li><a href="login.php?log=2"><?php if(isset($sesion['id'])){echo "$id";}else{echo "Register";} ?></a></li>
      </ul>
    </div>
  </nav>




    <script>

$('.button-collapse').sideNav();

    </script>
