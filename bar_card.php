 <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i>
      <?php if(isset($result)){  echo $row['Bar_name']; }?>
      </div>
      <div class="collapsible-body">
		    <div class="row">
		      <div class="col s12 l6"><img src= <?php if(isset($result)) {echo '"'.$row['Bar_image'].'"'; }?> style = "width: 100%"></div>
		      <div class="col s12 l6">
		      <h2><?php if(isset($result)) {echo $row['Bar_name']; } ?></h2>
		      <p><?php if(isset($result)) {echo $row['Bar_description']; } ?></p>
		          <ul class="collection " style = "width: 100%">
				      <li class="collection-item"><?php if(isset($result)) {echo $row['Country']; }?></li>
				      <li class="collection-item"><?php if(isset($result)) {echo $row['City']; }?></li>
				      <li class="collection-item"><?php if(isset($result)) {echo $row['Address']; }?></li>
				      <li class="collection-item"><p>Number of likes</p>
                  <?php if(isset($result)) {echo $row['Likes']; }?>
                  <a class="btn-floating btn-large waves-effect waves-light red right" href=<?php echo '"php_files/likes_update.php?ID='.$row['ID'].'"'?>><i class="material-icons">add</i></a></li>

			    </ul>
		      </div>
		    </div>
      </div>
 </li>
