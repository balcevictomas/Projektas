<?php
 include 'header.php';
 include 'conn.php';
 
 header('Content-Type: text/html; charset=utf-8');
 mysqli_set_charset($conn, "utf8");

 $sql ="SELECT ID, Bar_name , Bar_description , Bar_image FROM Bars ORDER BY RAND() LIMIT 4" ;

$result = $conn -> query($sql);

?>

<!--   INDEX PRADZIA   -->
<!--   INDEX PRADZIA   -->
<!--   INDEX PRADZIA   -->

<!--   MAIN IMAGE IR SEARCH PRADZIA   -->    
<div id="mainimangecenter">
  <img class="mainimg hoverable" src="images/main_picture.png">
      <div id="searchas">
          <div class="input-field" >
                 <input type="text" id="autocomplete-input" class="autocomplete" name="name">
                  <label for="autocomplete-input">Search</label>
                 <ul class="autocomplete-content dropdown-content"></ul>
                </div>
              </form>
        </div>
      </div>
  </div>
<!--   MAIN IMAGE IR SEARCH PABAIGA   -->

        <!--   TOP 4 barai - keturi langai - PRADZIA  -->
  <div class="row">
          <!--   pirmas langas   -->
      <div class="col s12 m6 l3 ">
        <div class="card z-depth-1 grey lighten-2 hoverable">
          <div class="card-image ">
            <img id="center-cropped" src=<?php $row = mysqli_fetch_assoc($result); echo '"'.$row['Bar_image'].'"'; ?>>
            <span class="card-title"><?php echo $row['Bar_name'];  ?></span>
          </div>
          <div class="card-content">
            <p class="truncate"><?php echo $row['Bar_description'];  ?></p>
          </div>
          <div class="card-action right-align">
            <a id="graylink" href=<?php echo'"bars.php?ID='.$row['ID'].'"' ?>>Skaityti daugiau...</a>
          </div>
        </div>
      </div>
    <!--   pirmo lango pabaiga   -->
    <!--   antras langas   -->
      <div class="col s12 m6 l3 ">
        <div class="card z-depth-1 grey lighten-2 hoverable">
          <div class="card-image">
            <img src=<?php $row = mysqli_fetch_assoc($result); echo '"'.$row['Bar_image'].'"'; ?>>
            <span class="card-title"><?php echo $row['Bar_name'];  ?></span>
          </div>
          <div class="card-content">
            <p class="truncate"><?php echo $row['Bar_description'];  ?></p>
          </div>
          <div class="card-action right-align">
            <a id="graylink" href=<?php echo'"bars.php?ID='.$row['ID'].'"' ?>>Skaityti daugiau...</a>

          </div>
        </div>
      </div>
    <!--   antro lango pabaiga   -->
    <!--   trecias langas   -->
      <div class="col s12 m6 l3 ">
        <div class="card z-depth-1 grey lighten-2 hoverable">
          <div class="card-image">
            <img src=<?php $row = mysqli_fetch_assoc($result); echo '"'.$row['Bar_image'].'"'; ?>>
            <span class="card-title"><?php echo $row['Bar_name'];  ?></span>
          </div>
          <div class="card-content">
            <p class="truncate"><?php echo $row['Bar_description'];  ?></p>
          </div>
          <div class="card-action right-align">
            <a id="graylink" href=<?php echo'"bars.php?ID='.$row['ID'].'"' ?>>Skaityti daugiau...</a>
          </div>
        </div>
      </div>

    <!--   trecio lango pabaiga   -->
    <!--   ketvirtas langas   -->
      <div class="col s12 m6 l3 ">
        <div class="card z-depth-1 grey lighten-2 hoverable">
          <div class="card-image">
            <img src=<?php $row = mysqli_fetch_assoc($result); echo '"'.$row['Bar_image'].'"'; ?>>
            <span class="card-title"><?php echo $row['Bar_name'];  ?></span>
          </div>
          <div class="card-content">
            <p class="truncate"><?php echo $row['Bar_description'];  ?></p>
          </div>
          <div class="card-action right-align">
            <a id="graylink" href=<?php echo'"bars.php?ID='.$row['ID'].'"' ?>>Skaityti daugiau...</a>
          </div>
        </div>
      </div>
  </div>
      <!--   TOP 4 barai - keturi langai - PABAIGA   -->

<!--   INDEX PABAIGA   -->

<?php include 'footer.php'; ?>