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
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="js/script.js"></script>
  <script src="js/classie.js"></script>
  <script src="js/clipboard.min.js"></script>

</head>
<body>



    <div id="navigation">
        <div class="container nopadding">
            <section class="section section--menu nopadding" id="Sebastian">
              <span class="link-copy"></span>
                <nav class="menu menu--sebastian navigationsebastian">
                  <ul class="menu__list valign-wrapper">
                    <li class="menu__item menu__item--current"><a href="index.php" class="menu__link">Home</a></li>
                    <li class="menu__item"><a href="news.php" class="menu__link">News</a></li>
                    <li class="menu__item"><a href="bars.php" class="menu__link">Bars</a></li>
                    <li class="menu__item"><a href="craft.php" class="menu__link">Craft beer</a></li>
                    <li class="menu__item"><a href="#" class="menu__link">About us</a></li>
                    <li class="menu__item"><a href="story.php" class="menu__link">Our Story</a></li>
                    <!-- Padaryti kazkoki dropdown -->
                    <li class="menu__item"><a href="login.php?log=1"><?php if(isset($sesion['id'])){echo "Log Out";}else{echo "Log in";} ?></a></li>
                    <li class="menu__item"><a href="login.php?log=2"><?php if(isset($sesion['id'])){echo "$id";}else{echo "Register";} ?></a></li>
                  </ul>
                </nav>
            </section>
        </div>
      </div>





    <script>

$(document).ready(
$('.menu__item').click('.menu__link',function(e){
$('.menu__item').removeClass('menu__item–current');
$(this).addClass('menu__item–current');
})
);
$('a').click(function (e) {
e.preventDefault(); // prevent default anchor behavior
var goTo = this.getAttribute('href'); // store anchor href
// do something while timeOut ticks …
setTimeout(function(){
window.location = goTo;
},200);
});

    (function() {
      [].slice.call(document.querySelectorAll('.menu')).forEach(function(menu) {
        var menuItems = menu.querySelectorAll('.menu__link'),
          setCurrent = function(ev) {
            ev.preventDefault();

            var item = ev.target.parentNode; // li

            // return if already current
            if (classie.has(item, 'menu__item--current')) {
              return false;
            }
            // remove current
            classie.remove(menu.querySelector('.menu__item--current'), 'menu__item--current');
            // set current
            classie.add(item, 'menu__item--current');
          };

        [].slice.call(menuItems).forEach(function(el) {
          el.addEventListener('click', setCurrent);
        });
      });

      [].slice.call(document.querySelectorAll('.link-copy')).forEach(function(link) {
        link.setAttribute('data-clipboard-text', location.protocol + '//' + location.host + location.pathname + '#' + link.parentNode.id);
        new Clipboard(link);
        link.addEventListener('click', function() {
          classie.add(link, 'link-copy--animate');
          setTimeout(function() {
            classie.remove(link, 'link-copy--animate');
          }, 500);
        });
      });
    })(window);

    </script>
