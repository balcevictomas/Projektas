<?php include 'header.php'; ?>

<?php
include'conn.php';

header('Content-Type: text/html; charset=utf-8');
mysqli_set_charset($conn, "utf8");

if(isset($_GET['ID'])){$sql_input = "WHERE ID =".$_GET['ID'];
$sql ="SELECT * FROM Bars ".$sql_input;
$result = $conn -> query($sql);}

if(isset($_GET['name'])){$sql_input = "WHERE Bar_name LIKE'%".$_GET['name']."%' ORDER BY Likes DESC LIMIT 10";
$sql ="SELECT * FROM Bars ".$sql_input;
$result = $conn -> query($sql);}

if(isset($_GET["search_by"]) && $_GET["search_by"] != null){

switch ($_GET["search_by"]) {
	case '1':	$sql_input ="WHERE Country ='".$_GET['value']."' ORDER BY Likes DESC LIMIT 10" ;	break;
	case '2':	$sql_input = "WHERE City ='".$_GET['value']."' ORDER BY Likes DESC LIMIT 10";  break;
	case '3':	$sql_input = "ORDER BY Likes DESC LIMIT 10";	break;
	case '4':	$sql_input = "WHERE Bar_description LIKE'%".$_GET['value']."%' ORDER BY Likes DESC LIMIT 10";	break;
	case '5':	$sql_input = "ORDER BY RAND() LIMIT 10";	break;

}
$sql ="SELECT * FROM Bars ".$sql_input;
$result = $conn -> query($sql);


}
?>



 <div class="row">

    <div class="col s12 m8 l10">

  <ul class="collapsible popout" data-collapsible="accordion">
<?php if (isset($result)) {
while($row = mysqli_fetch_assoc($result)){	include 'bar_card.php';}
}else {echo "<br><br><br><br> <h2>Sorry nothing was found</h2>";} ?>
  </ul>

    </div>

    <div class="col s12 m4 l2 border" style = >

 			  			   <br><br><br><br>
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
