<?php include 'header.php'; ?>

<?php
include'conn.php';
if(isset($_GET["search_by"]) && $_GET["search_by"] != null){

switch ($_GET["search_by"]) {
	case '1':	$sql_input ="WHERE Country ='".$_GET['value']."'LIMIT 3" ;	break;
	case '2':	$sql_input = "WHERE City ='".$_GET['value']."'LIMIT 3";  break;
	case '3':	$sql_input = "ORDER BY Likes DESC LIMIT 3";	break;
	case '4':	$sql_input = "WHERE Bar_description LIKE'%".$_GET['value']."%' LIMIT 3";	break;
	case '5':	$sql_input = "ORDER BY RAND() LIMIT 3";	break;

	default:
		# code...
		break;
}
$sql ="SELECT * FROM Bars ".$sql_input;


$result = $conn -> query($sql);


}
?>








<!--  <div class="carousel carousel-slider">
    <a class="carousel-item" href="#one!"><img src="https://cdn.pixabay.com/photo/2015/09/24/20/36/beer-barrel-956322_960_720.jpg"></a>
    <a class="carousel-item" href="#two!"><img src="https://cdn.pixabay.com/photo/2014/08/26/15/35/beer-428121_960_720.jpg"></a>
    <a class="carousel-item" href="#three!"><img src="https://cdn.pixabay.com/photo/2015/07/10/17/53/cheers-839865_960_720.jpg"></a>
    <a class="carousel-item" href="#four!"><img src="https://cdn.pixabay.com/photo/2013/11/12/01/29/bar-209148_960_720.jpg"></a>
  </div>
 -->

 <div class="row">

    <div class="col s12 m8 l10">

  <ul class="collapsible popout" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i>
      <?php if(isset($result)){ $row = mysqli_fetch_assoc($result); echo $row['Bar_name']; }?>
      </div>
      <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">place</i>
      <?php if(isset($result)){ $row = mysqli_fetch_assoc($result); echo $row['Bar_name']; }?>
      </div>
      <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">whatshot</i>
      <?php if(isset($result)){ $row = mysqli_fetch_assoc($result); echo $row['Bar_name']; }?>
      </div>
      <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
    </li>
  </ul>

    </div>

    <div class="col s12 m4 l2 border" style = >

 			  			    <p>Search</p>
			<form>
			  <div class="input-field" action = "bars.php" method="GET">
			    <select name = "search_by">
			      <option value="" disabled selected>Search by</option>
			      <option value="1">country</option>
			      <option value="2">city</option>
			      <option value="3">popularity</option>
			      <option value="4">key word</option>
			      <option value="5">magic</option>
			    </select>
			    <label>Search by</label>
			  </div>
			  <div class="input-field ">
         		 <input placeholder="Please enter value" id="Select" type="text" class="validate" name = "value">
        		 <label for="val">value</label>
        	  </div>

        	  	<button class="btn waves-effect waves-light red "  type="submit" name="action">Start the magic
 			           <i class="material-icons right">offline_pin</i>
 			      	</button>


      </form>
 	</div>

</div>
</div>




















  <?php include 'footer.php'; ?>
