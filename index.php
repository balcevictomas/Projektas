
<<<<<<< HEAD

<?php
 include 'header.php';
 include 'conn.php';

 $sql ="SELECT Bar_name , Bar_description , Bar_image FROM Bars ORDER BY RAND() LIMIT 4" ;

$result = $conn -> query($sql);

?>

<!--   INDEX PRADZIA   -->
<!--   INDEX PRADZIA   -->
<!--   INDEX PRADZIA   -->

  <!--   MAIN IMAGE PRADZIA   -->
=======
<?php
 include 'header.php';
 include 'conn.php';

 $sql ="SELECT Bar_name , Bar_description , Bar_image FROM Bars ORDER BY RAND() LIMIT 4" ;

$result = $conn -> query($sql);
>>>>>>> refs/remotes/Dempix/master

?>

<!--   INDEX PRADZIA   -->
<!--   INDEX PRADZIA   -->
<!--   INDEX PRADZIA   -->
<script> 
 $("input.autocomplete").autocomplete({
    data: {
      "Apple": null,
      "Microsoft": null,
      "Google": 'http://placehold.it/250x250'
    }
  });
</script>

<<<<<<< HEAD
  <img class="mainimg" src="images/main_picture.png">

  <!--   MAIN IMAGE PABAIGA   -->

<!--   SEARCH'as - PRADZIA   -->
    <form onsubmit="submitFn(this, event);">
      <div class="search-wrapper">
        <div class="input-holder">
          <input type="text" class="search-input" placeholder="Type to search" />
          <button class="search-icon" onclick="searchToggle(this, event);"><span></span></button>
            </div>
              <span class="close" onclick="searchToggle(this, event);"></span>
            <div class="result-container">
        </div>
      </div>
    </form>
<!--   SEARCH'as - PABAIGA   -->

=======
<!--   MAIN IMAGE PRADZIA   -->    
<div id="mainimangecenter">
  <img class="mainimg" src="images/main_picture.png"> 
      <div id="searchas">
          <form>
              <div class="input-field">
                <input type="text" id="autocomplete-input" class="autocomplete">
                <label for="autocomplete-input">Search</label>
              </div>
            </form>
      </div>
    </div>
</div>
<!--   SEARCH'as - PABAIGA   -->
>>>>>>> refs/remotes/Dempix/master


        <!--   TOP 4 barai - keturi langai - PRADZIA  -->
        <div class="row">
          <!--   pirmas langas   -->
      <div class="col s12 m6 l3 ">
        <div class="card z-depth-1 grey lighten-2">
          <div class="card-image">
            <img src=<?php $row = mysqli_fetch_assoc($result); echo '"'.$row['Bar_image'].'"'; ?>>
            <span class="card-title"><?php echo $row['Bar_name'];  ?></span>
          </div>
          <div class="card-content">
            <p class="truncate"><?php echo $row['Bar_description'];  ?></p>
          </div>
          <div class="card-action right-align">
            <a id="graylink" href="#">Skaityti daugiau...</a>
          </div>
        </div>
      </div>
    <!--   pirmo lango pabaiga   -->
    <!--   antras langas   -->
      <div class="col s12 m6 l3 ">
        <div class="card z-depth-1 grey lighten-2">
          <div class="card-image">
            <img src=<?php $row = mysqli_fetch_assoc($result); echo '"'.$row['Bar_image'].'"'; ?>>
            <span class="card-title"><?php echo $row['Bar_name'];  ?></span>
          </div>
          <div class="card-content">
            <p class="truncate"><?php echo $row['Bar_description'];  ?></p>
          </div>
          <div class="card-action right-align">
            <a id="graylink" href="#">Skaityti daugiau...</a>
<<<<<<< HEAD
          </div>
        </div>
      </div>
    <!--   antro lango pabaiga   -->
    <!--   trecias langas   -->
      <div class="col s12 m6 l3 ">
        <div class="card z-depth-1 grey lighten-2">
          <div class="card-image">
            <img src=<?php $row = mysqli_fetch_assoc($result); echo '"'.$row['Bar_image'].'"'; ?>>
            <span class="card-title"><?php echo $row['Bar_name'];  ?></span>
          </div>
          <div class="card-content">
            <p class="truncate"><?php echo $row['Bar_description'];  ?></p>
          </div>
          <div class="card-action right-align">
            <a id="graylink" href="#">Skaityti daugiau...</a>
          </div>
        </div>
      </div>
=======
          </div>
        </div>
      </div>
    <!--   antro lango pabaiga   -->
    <!--   trecias langas   -->
      <div class="col s12 m6 l3 ">
        <div class="card z-depth-1 grey lighten-2">
          <div class="card-image">
            <img src=<?php $row = mysqli_fetch_assoc($result); echo '"'.$row['Bar_image'].'"'; ?>>
            <span class="card-title"><?php echo $row['Bar_name'];  ?></span>
          </div>
          <div class="card-content">
            <p class="truncate"><?php echo $row['Bar_description'];  ?></p>
          </div>
          <div class="card-action right-align">
            <a id="graylink" href="#">Skaityti daugiau...</a>
          </div>
        </div>
      </div>
>>>>>>> refs/remotes/Dempix/master
    <!--   trecio lango pabaiga   -->
    <!--   ketvirtas langas   -->
      <div class="col s12 m6 l3 ">
        <div class="card z-depth-1 grey lighten-2">
          <div class="card-image">
            <img src=<?php $row = mysqli_fetch_assoc($result); echo '"'.$row['Bar_image'].'"'; ?>>
            <span class="card-title"><?php echo $row['Bar_name'];  ?></span>
          </div>
          <div class="card-content">
            <p class="truncate"><?php echo $row['Bar_description'];  ?></p>
          </div>
          <div class="card-action right-align">
            <a id="graylink" href="#">Skaityti daugiau...</a>
          </div>
        </div>
      </div>

      </div>
      <!--   TOP 4 barai - keturi langai - PABAIGA   -->
<<<<<<< HEAD

<!--   INDEX PABAIGA   -->
<!--   INDEX PABAIGA   -->
<!--   INDEX PABAIGA   -->
=======
>>>>>>> refs/remotes/Dempix/master

<!--   INDEX PABAIGA   -->
<!--   INDEX PABAIGA   -->
<!--   INDEX PABAIGA   -->


<?php include 'footer.php'; ?>

<<<<<<< HEAD
<?php include 'footer.php'; ?>
=======
>>>>>>> refs/remotes/Dempix/master
